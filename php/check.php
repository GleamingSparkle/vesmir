<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    mysqli_query($link,"UPDATE me SET time=".$time." WHERE name='".$name."' AND hash='".$hash."'");

    $sql=mysqli_query($link,"SELECT name,result,time FROM online");
    $online=mysqli_fetch_assoc($sql);

    if($online["name"]==$name){
        $sql=mysqli_query($link,"SELECT COUNT(name) as result FROM me WHERE time>".($time-5));
        $result=mysqli_fetch_assoc($sql);
        mysqli_query($link,"UPDATE online SET time=".$time.", result=".$result["result"]);
        echo $result["result"];

        include "cleanTrees.php";
    }
    else if($online["time"]<($time-5)){
        $sql=mysqli_query($link,"SELECT COUNT(name) as result FROM me WHERE time>".($time-5));
        $result=mysqli_fetch_assoc($sql);
        mysqli_query($link,"UPDATE online SET time=".$time.", result=".$result["result"].", name='".$name."'");
        echo $result["result"];
    }
    else{
        echo $online["result"];
    }
?>