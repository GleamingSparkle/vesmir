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

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT planted FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        $sql=mysqli_query($link,"SELECT cycle FROM global");
        $global=mysqli_fetch_assoc($sql);

        echo '{"cycle":'.$global["cycle"].',"progress":'.getProgress($me["planted"]).'}';
    }
?>