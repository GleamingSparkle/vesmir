<?php
    include("../sql/mysql_connect.php");
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        mysqli_query($link,"UPDATE me SET iswinterstory=0 WHERE name='".$name."'");
    }
?>