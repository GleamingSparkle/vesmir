<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT seeds FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["seeds"]>=10){
            echo "1";
        }
    }
?>