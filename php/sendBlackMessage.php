<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();

    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $in=true;
    }
    else{
        $name="?";
        $in=false;
    }

    $text=addslashes(str_replace("\\","",str_replace("'","\"",$_POST["text"])));
    
    if(strlen($text)<500){
        $color="white";
        if($in){
            $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."'");

            if(mysqli_num_rows($sql)>0){
                $me=mysqli_fetch_assoc($sql);
                if($me["gender"]==1){
                    $color="skyblue";
                }
                else{
                    $color="pink";
                }
            }
        }

        mysqli_query($link,"INSERT INTO question(name,time,text,color) VALUES ('".$name."',".$time.",'".$text."','".$color."')");
    }
?>