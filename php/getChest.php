<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT chest FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["chest"]==NULL){
            $sql=mysqli_query($link,"SELECT COUNT(chest) as result FROM me WHERE chest IS NOT NULL");
            $chest=mysqli_fetch_assoc($sql);
            $sql=mysqli_query($link,"SELECT COUNT(hashtag) as result FROM personality WHERE name='".$name."'");
            $personality=mysqli_fetch_assoc($sql);
            if($personality["result"]>32){
                mysqli_query($link,"UPDATE me SET chest=".($chest["result"]+1)." WHERE name='".$name."'");
                echo "[".($chest["result"]+1).',"carcassonne"]';
            }
        }
        else{
            echo "[".$me["chest"].',"carcassonne"]';
        }
    }
?>