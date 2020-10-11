<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT gender,wait,partner,seeds FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["seeds"]>=10){
            if($me["gender"]==1){ // im sun
                if($me["partner"]==NULL){ //im free
                    $sql=mysqli_query($link,"SELECT name FROM me WHERE wait>".($time-5)." AND partner IS NULL");
                    $her=mysqli_fetch_assoc($sql);

                    if(mysqli_num_rows($sql)>0){ //she is there
                        mysqli_query($link,"UPDATE me SET partner='".$her["name"]."' WHERE name='".$name."'"); // found you
                        mysqli_query($link,"UPDATE me SET wait=1,partner='".$name."' WHERE name='".$her["name"]."'"); // im here
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$name."','".$her["name"]."',".$time.",'Jsi tam?')"); // are you there?

                        //service cost
                        mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-10)." WHERE name='".$name."'");
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našel jsem ".$her["name"].". [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");

                        echo $her["name"];
                    }
                }
                else{ //im taken
                    echo $me["partner"];
                }
            }
            else{ //im moon
                if($me["wait"]==1){ //im taken, he found me
                    $sql=mysqli_query($link,"SELECT partner FROM me WHERE name='".$me["partner"]."'");
                    $his=mysqli_fetch_assoc($sql);
                    if($his["partner"]==NULL || strcmp($name,$his["partner"])==0){ // he is free || his partner is me
                        mysqli_query($link,"DELETE FROM decision WHERE sun='".$me["partner"]."'");
                        mysqli_query($link,"INSERT INTO decision(sun) VALUES ('".$me["partner"]."')"); // kiss you
                        
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$me["partner"]."','".$name."',".$time.",'Jsem.')"); //im here
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$me["partner"]."','".$name."',".$time.",'Poznejte se. [Napište oba tři věty.]')"); //im here

                        //service cost
                        mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-10)." WHERE name='".$name."'");
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našel mne ".$me["partner"].". [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");

                        echo $me["partner"];
                    }
                    else{
                        mysqli_query($link,"UPDATE me SET wait=".$time.", partner=NULL WHERE name='".$name."'"); //he is taken
                    }
                }
                else{ //im free, im giving sign
                    mysqli_query($link,"UPDATE me SET wait=".$time.", partner=NULL WHERE name='".$name."'"); 
                }
            }
        }
    }
?>