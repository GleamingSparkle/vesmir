<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    function dropPlanet($link,$time,$breakup,$me){
        $sql=mysqli_query($link,"SELECT name FROM me WHERE planet='".$me["planet"]."'");
        if(mysqli_num_rows($sql)>0){ //print it to console
            $owner=mysqli_fetch_assoc($sql);

            $sql=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$me["planet"]."' AND owner='".$owner["name"]."'");
            $treecount=mysqli_fetch_assoc($sql);
            if($treecount["result"]>0){                
                if($treecount["result"]==1){
                    $treestring="tvůj strom";
                }
                else if($treecount["result"]>1 && $treecount["result"]<5){
                    $treestring="tvé stromy";
                }
                else{
                    $treestring="tvých stromů";
                }

                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$owner["name"]."',".$time.",'Planeta ".$me["planet"]." zanikla, s ní i ".$treecount["result"]." ".$treestring.".','greenyellow')");
            }
        }

        mysqli_query($link,"DELETE FROM tree WHERE planet='".$me["planet"]."'"); //delete all trees with planet
        mysqli_query($link,"UPDATE me SET planet=NULL WHERE planet='".$me["planet"]."'"); //delete planets from me
        mysqli_query($link,"DELETE FROM planet WHERE name='".$me["planet"]."'");
    }

    $sql=mysqli_query($link,"SELECT gender,partner,planet FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["gender"]==1){
            $sun=$name;
            $moon=$me["partner"];
            $breakup=$sun." se rozešel s ".$moon.".";
        }
        else{
            $sun=$me["partner"];
            $moon=$name;
            $breakup=$moon." se rozešla s ".$sun.".";
        }

        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$sun."',".$time.",'".$breakup."','greenyellow')");
        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$moon."',".$time.",'".$breakup."','greenyellow')");
        
        if($me["planet"]!==NULL){
            dropPlanet($link,$time,$breakup,$me);
        }

        mysqli_query($link,"UPDATE me SET wantbreak=0,isbreak=0,shade=127,partner=NULL,planet=NULL,wait=NULL WHERE name='".$sun."' OR name='".$moon."'"); //clear us
        mysqli_query($link,"DELETE FROM connection WHERE sun='".$sun."' AND moon='".$moon."'"); //clear connection
        echo "1";
    }
?>