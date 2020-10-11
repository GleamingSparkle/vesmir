<?php
    include("../sql/mysql_connect.php");
    $sql=mysqli_query($link,"SELECT name,constellation,color,size,rotationx,rotationy FROM star WHERE name='".$_POST["name"]."'");
    $sql2=mysqli_query($link,"SELECT name,color,size,energy,orbit,max FROM planet WHERE star='".$_POST["name"]."' ORDER BY orbit ASC");

    $max=0;
    $current=0;
    $freeplanet=array();

    $trigger=true;
    echo '[[';
    while($star=mysqli_fetch_assoc($sql)){
        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo '{';
        echo '"name":"'.$star["name"].'",';
        echo '"constellation":"'.$star["constellation"].'",';
        echo '"color":"'.$star["color"].'",';
        echo '"size":'.$star["size"].',';
        echo '"rotationx":'.$star["rotationx"].',';
        echo '"rotationy":'.$star["rotationy"];
        echo '}';
    }
    echo '],';

    $trigger=true;
    echo '[';
    while($planet=mysqli_fetch_assoc($sql2)){

        $sql3=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$planet["name"]."'");
        $tree=mysqli_fetch_assoc($sql3);

        if($planet["energy"]>0){
            $max+=$planet["max"];
            $current+=$tree["result"];
            
            if($tree["result"]<$planet["max"]){
                array_push($freeplanet,$planet["name"]);
            }
        }
        else{
            $max+=$tree["result"];
            $current+=$tree["result"];
        }

        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo '{';
        echo '"name":"'.$planet["name"].'",';
        echo '"color":"'.$planet["color"].'",';
        echo '"size":'.$planet["size"].',';
        echo '"energy":'.$planet["energy"].',';
        echo '"orbit":'.$planet["orbit"];
        echo '}';
    }
    echo '],{';

    if(count($freeplanet)>0){
        $key=array_rand($freeplanet,1);
        $freeplanet=$freeplanet[$key];
    }
    else{
        $freeplanet="?";
    }
    $capacity=$max-$current;

    echo '"request":"'.$freeplanet.'",';
    echo '"current":'.$current.',';
    echo '"capacity":'.$capacity;

    echo '}]';
?>