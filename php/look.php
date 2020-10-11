<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();

    $sql=mysqli_query($link,"SELECT result,time FROM online");
    $online=mysqli_fetch_assoc($sql);

    if($online["time"]<($time-5)){
        echo "0";
    }
    else{
        echo $online["result"];
    }
?>