<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];

    $sql=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$name."'");
    $current=mysqli_fetch_assoc($sql);

    $sql=mysqli_query($link,"SELECT name,colorname,max,age,color,orbit,energy,grim FROM planet WHERE name='".$name."'");
    if(mysqli_num_rows($sql)>0){
        $planet=mysqli_fetch_assoc($sql);

        echo '{';
        echo '"name":"'.$planet["name"].'",';
        echo '"colorname":"'.$planet["colorname"].'",';
        echo '"color":"'.$planet["color"].'",';
        echo '"orbit":'.$planet["orbit"].',';
        echo '"current":'.$current["result"].',';
        echo '"max":'.$planet["max"].',';
        echo '"energy":'.$planet["energy"].',';
        if($planet["energy"]==0){
            echo '"grim":'.$planet["grim"].',';
        }
        echo '"age":'.$planet["age"];
        echo '}';
    }
?>