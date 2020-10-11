<?php
    //loop every hour
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();

    if(date("H",$time)==1){ //warm welcome every day
        $sql=mysqli_query($link,"SELECT wait,name FROM me WHERE isbot=1 AND partner IS NOT NULL");
        while($bot=mysqli_fetch_assoc($sql)){
            if(is_null($bot["wait"])){
                mysqli_query($link,"UPDATE me SET wait=11 WHERE name='".$bot["name"]."'");
            }
            else if($bot["wait"]%12==0){
                $wait=(($bot["wait"]+11)-($bot["wait"]/12));
                mysqli_query($link,"UPDATE me SET wait=".$wait." WHERE name='".$bot["name"]."'");
            }
        }
    }

    $sql=mysqli_query($link,"SELECT act FROM global");
    if(mysqli_num_rows($sql)>0){
        $global=mysqli_fetch_assoc($sql);
        $hour=(60*50);
        if(($global["act"]+$hour)<$time){ //every hour act
            mysqli_query($link,"UPDATE global SET act=".$time);

            if(rand(0,99)<3){ //3% chance
                $hash=bin2hex(random_bytes(7));
                $sql=mysqli_query($link,"SELECT name FROM mebank WHERE gender=0 ORDER BY RAND() LIMIT 1");
                if(mysqli_num_rows($sql)>0){
                    $me=mysqli_fetch_assoc($sql);
                    $sql=mysqli_query($link,"SELECT name FROM me WHERE name='".$me["name"]."'");
                    if(!$sql || mysqli_num_rows($sql)==0){
                        mysqli_query($link,"INSERT INTO me(name,password,gender,hash,time,ip,age,isbot) VALUES ('".$me["name"]."','".$hash."',0,'".$hash."',1,'1.1.1.1',".$time.",1)");
                    }
                    mysqli_query($link,"DELETE FROM mebank WHERE name='".$me["name"]."'");
                }
            }

            if(rand(0,99)<3){ //3% chance
                $hash=bin2hex(random_bytes(7));
                $sql=mysqli_query($link,"SELECT name FROM mebank WHERE gender=1 ORDER BY RAND() LIMIT 1");
                if(mysqli_num_rows($sql)>0){
                    $me=mysqli_fetch_assoc($sql);
                    $sql=mysqli_query($link,"SELECT name FROM me WHERE name='".$me["name"]."'");
                    if(!$sql || mysqli_num_rows($sql)==0){
                        mysqli_query($link,"INSERT INTO me(name,password,gender,hash,time,ip,age,isbot) VALUES ('".$me["name"]."','".$hash."',1,'".$hash."',1,'1.1.1.1',".$time.",1)");
                    }
                    mysqli_query($link,"DELETE FROM mebank WHERE name='".$me["name"]."'");
                }
            }

            //clean old trees
            include "init.php";

            //get current planets
            $planets=array();
            $orbits=array();
            $sql=mysqli_query($link,"SELECT name,orbit FROM planet WHERE galaxy=0");
            while($planet=mysqli_fetch_assoc($sql)){
                array_push($planets,$planet["name"]);
                array_push($orbits,$planet["orbit"]);
            }

            //tree and personas for every bot
            include_once "returnEssences.php";
            $sql11=mysqli_query($link,"SELECT name,hash,seeds,personas FROM me WHERE isbot=1");
            while($me=mysqli_fetch_assoc($sql11)){
                if($me["seeds"]>(($me["personas"]+1)*50) && $me["personas"]<33){ //add personas
                    $current=array();
                    $sql33=mysqli_query($link,"SELECT hashtag FROM personality WHERE name='".$me["name"]."'");
                    while($personality=mysqli_fetch_assoc($sql33)){
                        array_push($current,$personality["hashtag"]);
                    }

                    $possibility=[];
                    for($i=1;$i<34;$i++){
                        if(!in_array($i,$current)){
                            array_push($possibility,$i);
                        }
                    }
                    shuffle($possibility);

                    $essence=returnEssence($possibility[0]);

                    mysqli_query($link,"INSERT INTO personality(name,hashtag,essence1,essence2,essence3,time) VALUES ('".$me["name"]."','".$possibility[0]."',".$essence[0].",".$essence[1].",".$essence[2].",".$time.")");
                    mysqli_query($link,"UPDATE me SET personas=".($me["personas"]+1).",seeds=11 WHERE name='".$me["name"]."'");
                }

                $_POST["name"]=$me["name"]; //add tree
                $_POST["hash"]=$me["hash"];

                $sql33=mysqli_query($link,"SELECT save FROM treebank ORDER BY RAND() LIMIT 1");
                $mytree=mysqli_fetch_assoc($sql33);
                $_POST["save"]=$mytree["save"];

                $key=array_rand($planets,1);
                $myplanet=$planets[$key];
                $myorbit=$orbits[$key];
                $_POST["planet"]=$myplanet;

                $_POST["pick"]=rand(0,19);

                $sql33=mysqli_query($link,"SELECT time,timediff FROM tree WHERE planet='".$myplanet."' LIMIT 1");
                if(mysqli_num_rows($sql33)>0){
                    $tree=mysqli_fetch_assoc($sql33);
                    $year=pow(2,$myorbit)*9.375;
                    $timediff=$time-($tree["time"]+$tree["timediff"]);
                    while($timediff>$year){
                        $timediff-=$year;
                    }
                    $_POST["timediff"]=floor($timediff);
                }
                else{
                    $_POST["timediff"]=0;
                }            

                $iambot=true;
                include "plantTree.php";

                mysqli_query($link,"DELETE FROM console WHERE name='".$_POST["name"]."'");
            }

            //marry bots
            $bride=array();        
            $groom=array();
            $skip=array(true,true);
            include "planetBank.php";
            include "colorBank.php";

            $sql=mysqli_query($link,"SELECT name,gender FROM me WHERE isbot=1 AND seeds>9 AND planet IS NULL AND partner IS NULL ORDER BY planted ASC");
            while($me=mysqli_fetch_assoc($sql)){
                if($me["gender"]==1){
                    if($skip[1]){
                        $skip[1]=false;
                    }
                    else{
                        array_push($groom,$me["name"]);
                    }
                }
                else{
                    if($skip[0]){
                        $skip[0]=false;
                    }
                    else{
                        array_push($bride,$me["name"]);
                    }
                }
            }

            while(count($groom)>0 && count($bride)>0){
                $sun=array_pop($groom);
                $moon=array_pop($bride);

                mysqli_query($link,"UPDATE me SET partner='".$sun."' WHERE name='".$moon."'");
                mysqli_query($link,"UPDATE me SET partner='".$moon."' WHERE name='".$sun."'");

                for($i=0;$i<count($planetbank);$i++){
                    $sql=mysqli_query($link,"SELECT name FROM planet WHERE name='".$planetbank[$i]."'");
                    if(!$sql || mysqli_num_rows($sql)==0){
                        $decision=array();
                        $decision["planet"]=$planetbank[$i];

                        $pick=(rand(0,floor(count($colorbank)/3)-1)*3)+1;
                        $decision["color"]=$colorbank[$pick+1];
                        $decision["colorname"]=$colorbank[$pick];
                        $decision["colorname2"]=mb_convert_case($colorbank[$pick-1],MB_CASE_TITLE,'UTF-8');
                        $iddqd=1;
                        include "createPlanet.php";
                        break;
                    }
                }
            }

            //refresh planets
            $sql=mysqli_query($link,"SELECT name,beatcount FROM planet WHERE energy<1000 AND iddqd=1 ORDER BY energy ASC LIMIT 1");
            if(mysqli_num_rows($sql)>0){
                $planet=mysqli_fetch_assoc($sql);
                mysqli_query($link,"UPDATE planet SET energy=1000,beatcount=".($planet["beatcount"]+1)." WHERE name='".$planet["name"]."'");
            }

            $sql=mysqli_query($link,"SELECT name,beatcount FROM planet WHERE energy<330 AND iddqd=1");
            if(mysqli_num_rows($sql)>0){
                while($planet=mysqli_fetch_assoc($sql)){
                    mysqli_query($link,"UPDATE planet SET energy=1000,beatcount=".($planet["beatcount"]+1)." WHERE name='".$planet["name"]."'");
                }
            }
        }
    }
?>
