<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];

    $sql=mysqli_query($link,"SELECT id FROM tree WHERE owner='".$name."' ORDER BY time DESC, timediff DESC");
    echo '[';
    $trigger=true;
    while($tree=mysqli_fetch_assoc($sql)){
        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo $tree["id"];
    }
    echo ']';
?>