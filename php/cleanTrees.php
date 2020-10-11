<?php
    $sql=mysqli_query($link,"SELECT name,orbit FROM planet ORDER BY orbit DESC");
    while($planet=mysqli_fetch_assoc($sql)){
        $sql2=mysqli_query($link,"SELECT time,id,owner,end,bonus FROM tree WHERE planet='".$planet["name"]."' ORDER BY end DESC");
        while($tree=mysqli_fetch_assoc($sql2)){
            $year=pow(2,$planet["orbit"])*9.375;
            $current=$time-$tree["time"];
            if(floor($current/$year)>=($tree["end"]-5)){ //get reward
                $sql3=mysqli_query($link,"SELECT seeds FROM me WHERE name='".$tree["owner"]."'");
                if(mysqli_num_rows($sql3)>0){
                    $owner=mysqli_fetch_assoc($sql3);
                    $reward=ceil(($tree["end"]/200)*(pow(2,$planet["orbit"])+1));
                    mysqli_query($link,"UPDATE me SET seeds=".($reward+$owner["seeds"]+$tree["bonus"])." WHERE name='".$tree["owner"]."'");
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$tree["owner"]."',".$time.",'Strom z planety ".$planet["name"]." dožil ".($tree["end"]-5)." let. [+".$reward."<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");
                    if($tree["bonus"]>0){
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$tree["owner"]."',".$time.",'Získávám bonus za mlhovinu. [+".$tree["bonus"]."<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");
                    }
                    mysqli_query($link,"DELETE FROM tree WHERE id=".$tree["id"]); 
                }
            }
        }
    }
?>