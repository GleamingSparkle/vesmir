<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $wish=false;
    $string="";
    if(isset($_POST["wish"])){
        $wish=true;
        $string=$_POST["wish"];
    }
    
    $sql=mysqli_query($link,"SELECT wish FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if(is_null($me["wish"])){
            if($wish && strlen($string)<=50 && strlen($string)>7){
                mysqli_query($link,"UPDATE me SET wish='".$string."' WHERE name='".$name."'");
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Plní se mi přání. <img style='width: 30px; margin-bottom: -4px;' src=\"img/small-lamp.png\">','aqua')");
                echo "1";
            }
        }
        else{
            echo "1";
        }
    }
?>