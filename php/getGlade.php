<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();

    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $id=$_POST["id"];

    $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $sql=mysqli_query($link,"SELECT time,timediff,save,planet,end FROM tree WHERE owner='".$name."' AND id=".$id);
        if(mysqli_num_rows($sql)>0){
            $result=mysqli_fetch_assoc($sql);

            $sql=mysqli_query($link,"SELECT galaxy,star,orbit,color,energy FROM planet WHERE name='".$result["planet"]."'");
            $planet=mysqli_fetch_assoc($sql);

            echo '{';
            echo '"color":"'.$planet["color"].'",';
            echo '"energy":'.$planet["energy"].',';
            echo '"galaxy":"'.$planet["galaxy"].'",';
            echo '"star":"'.$planet["star"].'",';
            echo '"orbit":'.$planet["orbit"].',';
            echo '"planet":"'.$result["planet"].'",';
            echo '"time":'.$result["time"].',';
            echo '"timediff":'.$result["timediff"].',';
            echo '"end":'.$result["end"].',';
            echo '"servertime":'.$time.',';
            echo '"save":'.$result["save"];
            echo '}';
        }
    }
?>