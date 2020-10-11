<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $essence=(int)$_POST["essence"];

    function addEssence($link,$name,$essence){
        $sql=mysqli_query($link,"SELECT name,essence FROM recipebook WHERE name='".$name."' AND essence=".$essence);
        if(!$sql || mysqli_num_rows($sql)==0){
            mysqli_query($link,"INSERT INTO recipebook(name,essence) VALUES ('".$name."',".$essence.")");
        }
        mysqli_query($link,"INSERT INTO inventory(name,essence) VALUES ('".$name."',".$essence.")");
    }

    $sql=mysqli_query($link,"SELECT seeds,gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        $pass=false;
        if($essence>0 && $essence<=6 && $me["seeds"]>=10){
            $pass=true;
            mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-10)." WHERE name='".$name."'");
            if($me["gender"]==1){
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získal jsem základní esenci. [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
            else{
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získala jsem základní esenci. [-10<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
        }
        else if((($essence>=12 && $essence<=16) || ($essence>=23 && $essence<=26) || ($essence>=34 && $essence<=36) || ($essence>=45 && $essence<=46) || $essence==56) && $me["seeds"]>=20){
            $pass=true;
            mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-20)." WHERE name='".$name."'");
            if($me["gender"]==1){
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získal jsem pokročilou esenci. [-20<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
            else{
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získala jsem pokročilou esenci. [-20<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
        }
        else if((($essence>=123 && $essence<=126) || ($essence>=134 && $essence<=136) || ($essence>=145 && $essence<=146) || $essence==156 || ($essence>=234 && $essence<=236) || ($essence>=245 && $essence<=246) || $essence==256 || $essence==345 ||$essence==346 ||$essence==356 || $essence==456) && $me["seeds"]>=30){
            $pass=true;
            mysqli_query($link,"UPDATE me SET seeds=".($me["seeds"]-30)." WHERE name='".$name."'");
            if($me["gender"]==1){
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získal jsem vysokou esenci. [-30<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
            else{
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Získala jsem vysokou esenci. [-30<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','purple')");
            }
        }

        if($pass){
            addEssence($link,$name,$essence);
            echo $essence;
        }
    }
?>