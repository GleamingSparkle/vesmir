<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $id=$_POST["id"];

    $sql=mysqli_query($link,"SELECT time,timediff FROM tree WHERE id=".$id);
    if(mysqli_num_rows($sql)>0){
        $tree=mysqli_fetch_assoc($sql);
        $current=$time-($tree["time"]+$tree["timediff"]);
        echo $current;
    }
?>