<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT isbreak,partner FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["partner"]==NULL){
            echo 2;
        }
        else{
            echo $me["isbreak"];
        }
    }
?>