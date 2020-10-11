<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];
    
    $sql=mysqli_query($link,"SELECT gender,partner FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);

        if($me["gender"]==1){
            $sun=$name;
        }
        else{
            $sun=$me["partner"];
        }

        $sql=mysqli_query($link,"SELECT question FROM decision WHERE sun='".$sun."'");
        if(mysqli_num_rows($sql)>0){
            $decision=mysqli_fetch_assoc($sql);

            if($me["gender"]==1 && $decision["question"]==NULL){
                mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=0 WHERE sun='".$sun."'");
            }
            else if($me["gender"]==0 && $decision["question"]==101){
                mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=2 WHERE sun='".$sun."'");
            }
        }
    }
?>