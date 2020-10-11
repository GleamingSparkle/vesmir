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

    function getdifference($energy,$power){
        if(($energy+$power)>1000){
            return $power-($energy+$power-1000);
        }
        return $power;
    }

    $sql=mysqli_query($link,"SELECT planet,gender,partner FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL AND planet IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);

        if($me["gender"]==1){
            $sun=$name;
            $moon=$me["partner"];
        }
        else{
            $sun=$me["partner"];
            $moon=$name;
        }

        $sql=mysqli_query($link,"SELECT beat,beatcount,energy FROM planet WHERE name='".$me["planet"]."'");
        if(mysqli_num_rows($sql)>0){
            $planet=mysqli_fetch_assoc($sql);
            if(($me["gender"]==$planet["beat"]) && $planet["energy"]<1000){
                $power=rand(3,15)*10;
                $difference=getdifference($planet["energy"],$power);
                if($me["gender"]==1){
                    mysqli_query($link,"UPDATE planet SET ischeck=0,difference=".$difference.",energy=".ceilpercentage($planet["energy"]+$power).",beat=0, beatcount=".($planet["beatcount"]+1)." WHERE name='".$me["planet"]."'");
                    $beat=0;
                }
                else{
                    mysqli_query($link,"UPDATE planet SET ischeck=0,difference=".$difference.",energy=".ceilpercentage($planet["energy"]+$power).",beat=1, beatcount=".($planet["beatcount"]+1)." WHERE name='".$me["planet"]."'");
                    $beat=1;
                }
                mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (".($planet["beat"]+3).",'".$sun."','".$moon."',".$time.",'Srdce poskočilo. [+".($difference/10)."%]')");

                echo '[';
                    echo $beat;
                    echo ',';
                    echo $difference;
                echo ']';
            }
        }
    }
?>