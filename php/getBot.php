<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    
    $sql=mysqli_query($link,"SELECT gender,seeds FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        
        if($me["gender"]==1){
            $opposite=0;
        }
        else{
            $opposite=1;
        }
        
        $sql=mysqli_query($link,"SELECT COUNT(name) as result FROM me WHERE seeds>9 AND time>".($time-5)." AND gender=".$opposite." AND partner IS NULL"); //check if someone isnt available
        $them=mysqli_fetch_assoc($sql);
        if($them["result"]==0 && $me["seeds"]>9){
            if($me["gender"]==1){ // im sun
                $sql=mysqli_query($link,"SELECT name FROM me WHERE isbot=1 AND gender=0 AND partner IS NULL");
                if(mysqli_num_rows($sql)>0){
                    $her=mysqli_fetch_assoc($sql);

                    mysqli_query($link,"DELETE FROM connection WHERE sun='".$name."'");
                    mysqli_query($link,"DELETE FROM decision WHERE sun='".$name."'");
                    mysqli_query($link,"INSERT INTO decision(sun) VALUES ('".$name."')");

                    mysqli_query($link,"UPDATE me SET partner='".$her["name"]."' WHERE name='".$name."'");
                    mysqli_query($link,"UPDATE me SET partner='".$name."' WHERE name='".$her["name"]."'");
                    mysqli_query($link,"UPDATE me SET time=1 WHERE name='".$her["name"]."'");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$name."','".$her["name"]."',".$time.",'Jsi tam?')");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$name."','".$her["name"]."',".$time.",'Jsem.')");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$name."','".$her["name"]."',".$time.",'Poznejte se. [Napište oba tři věty.]')");

                    //service cost
                    mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-10)." WHERE name='".$name."'");
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našel jsem ".$her["name"].". [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");

                    echo $her["name"];
                }
            }
            else{ //im moon
                $sql=mysqli_query($link,"SELECT name FROM me WHERE isbot=1 AND gender=1 AND partner IS NULL");
                if(mysqli_num_rows($sql)>0){
                    $his=mysqli_fetch_assoc($sql);

                    mysqli_query($link,"DELETE FROM connection WHERE sun='".$his["name"]."'");
                    mysqli_query($link,"DELETE FROM decision WHERE sun='".$his["name"]."'");
                    mysqli_query($link,"INSERT INTO decision(sun) VALUES ('".$his["name"]."')");

                    mysqli_query($link,"UPDATE me SET partner='".$his["name"]."' WHERE name='".$name."'");
                    mysqli_query($link,"UPDATE me SET partner='".$name."' WHERE name='".$his["name"]."'");
                    mysqli_query($link,"UPDATE me SET time=1 WHERE name='".$his["name"]."'");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$his["name"]."','".$name."',".$time.",'Jsi tam?')");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$his["name"]."','".$name."',".$time.",'Jsem.')");
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$his["name"]."','".$name."',".$time.",'Poznejte se. [Napište oba tři věty.]')");

                    //service cost
                    mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-10)." WHERE name='".$name."'");
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našel mne ".$his["name"].". [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");

                    echo $his["name"];
                }
            }
        }
    }
?>