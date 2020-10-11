<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $ischeck=$_POST["ischeck"];

    $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $sql=mysqli_query($link,"SELECT id,time,text,color FROM console WHERE name='".$name."' AND ischeck=".$ischeck." ORDER BY time DESC, id DESC LIMIT 100"); //default limit 100
             
        if(mysqli_num_rows($sql)>0){
            $trigger=true;
            echo '[';
            while($information=mysqli_fetch_assoc($sql)){
                if($ischeck==0){
                    mysqli_query($link,"UPDATE console SET ischeck=1 WHERE id=".$information["id"]);
                }
                
                if($trigger){
                    $trigger=false;
                }
                else{
                    echo ',';
                }

                echo '{';
                echo '"time":'.$information["time"].',';
                echo '"text":"'.addslashes($information["text"]).'",';
                echo '"color":"'.$information["color"].'"';
                echo '}';
            }
            echo ']';
        }
    }
?>