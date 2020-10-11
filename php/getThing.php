<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $init=$_POST["init"]==='true'?true:false;

    $sql=mysqli_query($link,"SELECT gender,seeds,things FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["seeds"]>=(10*pow(2,$me["things"])) || $init){
            $thingname=array("staré pexeso","kvíz","kouzelnou lampu","sníh","odpočet","omalovánku","svou hvězdu");
            $max=count($thingname);
            $seeds=$me["seeds"];
            echo "{";
            if($me["things"]<$max && !$init){
                echo '"name":"'.$thingname[$me["things"]].'",';
                $seeds=($me["seeds"]-(10*pow(2,$me["things"])));
                $me["things"]++;
                mysqli_query($link,"UPDATE me SET seeds=".$seeds.",things=".($me["things"])." WHERE name='".$name."'");
                if($me["gender"]==1){
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našel jsem ".$thingname[$me["things"]-1].". [-".(10*pow(2,$me["things"]-1))."<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','aqua')");
                }
                else{
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Našla jsem ".$thingname[$me["things"]-1].". [-".(10*pow(2,$me["things"]-1))."<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','aqua')");
                }
            }
            echo '"cost":'.(10*pow(2,$me["things"])).',';
            echo '"seeds":'.$seeds.',';
            echo '"max":'.$max.',';
            echo '"current":'.($me["things"]);
            echo "}";
        }
    }
?>