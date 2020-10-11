<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    function ceilpercentage($tmp){
        if($tmp>1000){
            return 1000;
        }
        return $tmp;
    }

    $sql=mysqli_query($link,"SELECT planet,gender FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL AND planet IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);

        $sql=mysqli_query($link,"SELECT beat,difference,ischeck,energy FROM planet WHERE name='".$me["planet"]."'");
        if(mysqli_num_rows($sql)>0){
            $planet=mysqli_fetch_assoc($sql);
            
            if($me["gender"]==$planet["beat"] && $planet["ischeck"]==0 && $planet["energy"]<1000){
                mysqli_query($link,"UPDATE planet SET ischeck=1 WHERE name='".$me["planet"]."'");
                echo '[';
                    echo $planet["beat"];
                    echo ',';
                    echo $planet["difference"];
                echo ']';
            }
            else{
                echo ceilpercentage($planet["energy"]);
            }
        }
    }
?>