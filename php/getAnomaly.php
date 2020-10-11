<?php
    include("../sql/mysql_connect.php");  

    $name=$_POST["name"];

    if($name=="Orion"){
        $stars=array("Alnitak");
    }
    else if($name=="Plejády"){
        $stars=array("Alcyone","Atlas","Electra","Maia","Merope");
    }
    else{
        $stars=array("Monocerotis");
    }

    echo '{';
    $sql=mysqli_query($link,"SELECT star,max,name,energy FROM planet WHERE galaxy=111");
    $max=0;
    $current=0;
    $freestar=array();

    while($planet=mysqli_fetch_assoc($sql)){
        $sql2=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$planet["name"]."'");
        $tree=mysqli_fetch_assoc($sql2);

        if(in_array($planet["star"],$stars)){
            if($planet["energy"]>0){
                $max+=$planet["max"];
                $current+=$tree["result"];
                
                if($tree["result"]<$planet["max"]){
                    array_push($freestar,$planet["star"]);
                }
            }
            else{
                $max+=$tree["result"];
                $current+=$tree["result"];
            }
        }
    }

    if(count($freestar)>0){
        $key=array_rand($freestar,1);
        $freestar=$freestar[$key];
    }
    else{
        $freestar="?";
    }
    
    $capacity=$max-$current;

    echo '"request":"'.$freestar.'",';
    echo '"current":'.$current.',';
    echo '"capacity":'.$capacity;
    echo '}';
?>