<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $sql=mysqli_query($link,"SELECT essence FROM recipebook WHERE name='".$name."' ORDER BY essence ASC");
    $sql2=mysqli_query($link,"SELECT essence FROM inventory WHERE name='".$name."' ORDER BY essence ASC");

    $trigger=true;
    echo '[[';
    while($recipebook=mysqli_fetch_assoc($sql)){
        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo $recipebook["essence"];
    }
    echo '],';

    $trigger=true;
    echo '[';
    while($inventory=mysqli_fetch_assoc($sql2)){
        if($trigger){
            $trigger=false;
        }
        else{
            echo ',';
        }

        echo $inventory["essence"];
    }
    echo ']]';
?>