<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();

    //old galaxy restart
    $sql=mysqli_query($link,"SELECT cycle FROM global");
    $global=mysqli_fetch_assoc($sql);
    
    if(($time-(60*60*24*90))>$global["cycle"]){ //3 months
        include "wipe.php";
    }

    $sql=mysqli_query($link,"SELECT time FROM online");
    $online=mysqli_fetch_assoc($sql);

    //old planets clean
    $sql=mysqli_query($link,"SELECT name,grim FROM planet WHERE energy=0 AND grim IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        while($planet=mysqli_fetch_assoc($sql)){
            if(($time-(60*60*24*7*2))>$planet["grim"]){ //2 weeks
                $sql2=mysqli_query($link,"SELECT name,gender,partner FROM me WHERE planet='".$planet["name"]."'");
                if(mysqli_num_rows($sql2)>0){
                    while($me=mysqli_fetch_assoc($sql2)){
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$me["name"]."',".$time.",'Planeta ".$planet["name"]." zanikla. [Měla 2 týdny 0% energie.]','greenyellow')");
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$me["name"]."',".$time.",'Pouto mezi mnou a ".$me["partner"]." bylo přerušeno.','greenyellow')");
                        mysqli_query($link,"UPDATE me SET wantbreak=0,isbreak=0,shade=127,partner=NULL,planet=NULL,wait=NULL WHERE name='".$me["name"]."'"); //clear me
                        if($me["gender"]==1){
                            mysqli_query($link,"DELETE FROM connection WHERE sun='".$me["name"]."'"); //clear connection
                            mysqli_query($link,"DELETE FROM planet WHERE name='".$planet["name"]."'");
                        }
                    }
                }
            }
        }
    }

    if(($time-5)>$online["time"]){
        include "cleanTrees.php";
    }
?>