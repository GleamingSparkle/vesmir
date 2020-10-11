<?php
    include("../sql/mysql_connect.php");

    if(!function_exists('getProgress')){
        function getProgress($planted){
            $progress=0;
            while($planted>$progress){
                $progress++;
                $planted-=($progress+1);
            }
            return $progress;
        }
    }

    $galaxy=$_POST["galaxy"];    

    echo '[{';
    $progress=0;
    if(isset($_POST["name"])){
        $name=$_POST["name"];
        $hash=$_POST["hash"];

        $sql=mysqli_query($link,"SELECT planted FROM me WHERE name='".$name."' AND hash='".$hash."'");
        if(mysqli_num_rows($sql)>0){
            $me=mysqli_fetch_assoc($sql);
            $progress=getProgress($me["planted"]);
        }

        $string="";
        $ban=array();
        $pleiades=array("Alcyone","Atlas","Electra","Maia","Merope");
        if($progress>2 && $galaxy==0){
            $string=" OR galaxy=111";

            if($progress<6){
                $ban=array("Alnitak","Monocerotis");
            }
            else if($progress<9){
                $ban=array("Alnitak");
            }
        }
    
        $sql=mysqli_query($link,"SELECT star,max,name,energy FROM planet WHERE galaxy=".$galaxy.$string);
        $max=0;
        $current=0;
        $freestar=array();

        while($planet=mysqli_fetch_assoc($sql)){
            $sql2=mysqli_query($link,"SELECT COUNT(id) as result FROM tree WHERE planet='".$planet["name"]."'");
            $tree=mysqli_fetch_assoc($sql2);

            if(!in_array($planet["star"],$ban)){
                if($planet["energy"]>0){
                    $max+=$planet["max"];
                    $current+=$tree["result"];
                    
                    if($tree["result"]<$planet["max"]){
                        if($planet["star"]=="Alnitak"){
                            array_push($freestar,"Orion");
                        }
                        else if(in_array($planet["star"],$pleiades)){
                            array_push($freestar,"Plejády");
                        }
                        else{
                            array_push($freestar,$planet["star"]);
                        }
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

        $sql=mysqli_query($link,"SELECT cycle FROM global");
        $global=mysqli_fetch_assoc($sql);

        echo '"request":"'.$freestar.'",';
        echo '"current":'.$current.',';
        echo '"capacity":'.$capacity.',';
        echo '"cycle":'.$global["cycle"].',';
    }
    echo '"progress":'.$progress;
    echo '},[';

    $sql=mysqli_query($link,"SELECT * FROM star WHERE galaxy=".$galaxy);
    $trigger=true;
    while($star=mysqli_fetch_assoc($sql)){
        if($star["type"]<($progress+2) && $star["size"]>0){
            if($trigger){
                $trigger=false;
            }
            else{
                echo ',';
            }

            echo '{';
            echo '"name":"'.$star["name"].'",';
            echo '"color":"'.$star["color"].'",';
            echo '"type":'.$star["type"].',';
            echo '"size":'.$star["size"].',';
            echo '"x":'.$star["x"].',';
            echo '"y":'.$star["y"];
            echo '}';
        }
    }
    echo ']]';
?>