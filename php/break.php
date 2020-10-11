<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT isbreak FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        mysqli_query($link,"UPDATE me SET isbreak=1 WHERE name='".$name."'");
    }
?>