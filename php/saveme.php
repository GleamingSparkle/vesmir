<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT seeds FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);

        $sql=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE owner='".$name."'");
        if(mysqli_num_rows($sql)>0){
            $tree=mysqli_fetch_assoc($sql);
            
            if($me["seeds"]==0 && $tree["result"]==0){
                mysqli_query($link,"UPDATE me SET seeds=1 WHERE name='".$name."'");
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Dostávám zadarmo květináč, na účet podniku. [+1<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");
            }
        }
    }
?>