<?php
    include("../sql/mysql_connect.php");

    $planet=$_POST["planet"];

    $sql=mysqli_query($link,"SELECT * FROM tree WHERE planet='".$planet."' ORDER BY time ASC, id ASC");

    $trigger=true;
    echo '[';
    while($result=mysqli_fetch_assoc($sql)){
        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo '{';
        echo '"time":'.$result["time"].',';
        echo '"end":'.$result["end"].',';
        echo '"pick":'.$result["pick"].',';
        echo '"save":'.$result["save"];
        echo '}';
    }
    echo ']';
?>