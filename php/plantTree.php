<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $save=$_POST["save"];
    $planetname=$_POST["planet"];
    $pick=$_POST["pick"];
    $timediff=$_POST["timediff"];

    if(!isset($iambot)){
        $iambot=false;
    }

    if(!function_exists('myfloor')){
        function myfloor($tmp){
            if($tmp>0){
                return $tmp;
            }
            return 0;
        }
    }

    if(!function_exists('getProgress')){
        function getProgress($planted){
            $progress=0;
            while($planted>$progress){
                $progress++;
                $planted-=($progress+1);
            }
            return $progress;
        }
        $anomalybank=array(
            "mlhovinu Motýl",
            "mlhovinu Krab",
            "hvězdokupu Plejády",
            "mlhovinu Kočičí oko",
            "mlhovinu Prstenec",
            "mlhovinu Monocerotis",
            "mlhovinu Eskymák",
            "hvězdokupu Tečky",
            "mlhovinu Orion",
            "Laniakeu",
            "galaxii Andromeda",
            "galaxii Mrak",
            "galaxii Sombrero",
            "galaxii Oceán",
            "galaxii Trojúhelník",
            "galaxii Větrník",
            "galaxii Ryby",
            "galaxii Kolo",
            "galaxii Vejce",
            "galaxii Berenika",
            "galaxii Fialka",
            "galaxii Pulec",
            "galaxii Vír",
            "galaxii Tykadla",
            "galaxii Slunečnice",
            "Jiskru"
        );
    }

    $sql=mysqli_query($link,"SELECT max,orbit,energy,star FROM planet WHERE name='".$planetname."'");
    $planet=mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql)>0){
        $year=pow(2,$planet["orbit"])*9.375;        
        if($timediff<$year){
            $sql=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$planetname."'");
            $tree=mysqli_fetch_assoc($sql);

            if($planet["max"]>$tree["result"]){ //planet isnt full
                $sql=mysqli_query($link,"SELECT seeds,planted,gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
                if(mysqli_num_rows($sql)>0){
                    $me=mysqli_fetch_assoc($sql);

                    $sql=mysqli_query($link,"SELECT id FROM tree WHERE pick=".$pick." AND planet='".$planetname."'");
                    if((!$sql || mysqli_num_rows($sql)==0) && $me["seeds"]>0 && $planet["energy"]>0){ //pick is free && i have seeds && planet have energy
                        $feat=myfloor($planet["energy"]-($planet["orbit"]+1));
                        if($feat==0){
                            mysqli_query($link,"UPDATE planet SET energy=".$feat.",grim=".$time." WHERE name='".$planetname."'");
                        }
                        else{
                            mysqli_query($link,"UPDATE planet SET energy=".$feat." WHERE name='".$planetname."'");
                        }

                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Strom se zakořenil do planety ".$planetname.". [-1<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");
                        
                        $end=rand(50,200);
                        if($me["planted"]==0){
                            $destiny=$year*$end;
                            if($destiny>=(60*60)){
                                $hour=round($destiny/(60*60));
                                if($hour==1){
                                    $string="hodinu";
                                }
                                else if($hour>1 && $hour<5){
                                    $string=$hour." hodiny";
                                }
                                else{
                                    $string=$hour." hodin";
                                }
                            }
                            else{
                                $minute=round($destiny/60);
                                if($minute==1){
                                    $string="minutu";
                                }
                                else if($minute>1 && $minute<5){
                                    $string=$minute." minuty";
                                }
                                else{
                                    $string=$minute." minut";
                                }
                            }
                            mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Doroste za ".$string." a vynese mi další sazenice. <img class=\"plant-icon-small\" src=\"img/heart.png\">','greenyellow')");
                        }
                        
                        $sql=mysqli_query($link,"SELECT name FROM me WHERE planet='".$planetname."'");
                        if(mysqli_num_rows($sql)>0){
                            while($owner=mysqli_fetch_assoc($sql)){
                                if($owner["name"]==$name){
                                    if($me["gender"]==1){
                                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$owner["name"]."',".$time.",'Zasadil jsem strom do vlastní planety. [-".(($planet["orbit"]+1)/10)."%]','skyblue')");
                                    }
                                    else{
                                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$owner["name"]."',".$time.",'Zasadila jsem strom do vlastní planety. [-".(($planet["orbit"]+1)/10)."%]','pink')");
                                    }
                                }
                                else{
                                    if($me["gender"]==1){
                                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$owner["name"]."',".$time.",'".$name." zasadil strom do naší planety. [-".(($planet["orbit"]+1)/10)."%]','skyblue')");
                                    }
                                    else{
                                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$owner["name"]."',".$time.",'".$name." zasadila strom do naší planety. [-".(($planet["orbit"]+1)/10)."%]','pink')");
                                    }
                                }
                            }
                        }

                        if(!$iambot){
                            $sql=mysqli_query($link,"SELECT COUNT(id) as result FROM treebank");
                            $treebank=mysqli_fetch_assoc($sql);
                            if($treebank["result"]<1000){
                                mysqli_query($link,"INSERT INTO treebank(save) VALUES ('".$save."')");
                            }
                        }

                        $bonus=0;
                        if($planet["star"]=="Monocerotis"){
                            $bonus=ceil((($end/200)*(pow(2,$planet["orbit"])+1))/2);
                        }

                        mysqli_query($link,"INSERT INTO tree(owner,planet,time,timediff,pick,save,end,bonus) VALUES ('".$name."','".$planetname."',".($time-$timediff).",".$timediff.",".$pick.",'".$save."',".$end.",".$bonus.")");
                        mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-1).",planted=".($me["planted"]+1)." WHERE name='".$name."'");

                        $old=getProgress($me["planted"]);
                        $new=getProgress($me["planted"]+1);
                        if($old!==$new && $old<count($anomalybank)){
                            if($me["gender"]==1){
                                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevil jsem ".$anomalybank[$old]."!','greenyellow')");
                            }
                            else{
                                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevila jsem ".$anomalybank[$old]."!','greenyellow')");
                            }
                        }
                        echo $end;
                    }
                }
            }
        }
    }
?>