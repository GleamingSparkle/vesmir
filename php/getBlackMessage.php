<?php
    include("../sql/mysql_connect.php");

    $sql=mysqli_query($link,"SELECT id,name,time,text,color FROM question ORDER BY time DESC, id DESC LIMIT 22");
    if(mysqli_num_rows($sql)>0){
        $trigger=true;
        echo '[';
        while($message=mysqli_fetch_assoc($sql)){            
            if($trigger){
                $trigger=false;
            }
            else{
                echo ',';
            }

            echo '{';
            echo '"id":'.$message["id"].',';
            echo '"name":"'.$message["name"].'",';
            echo '"time":'.$message["time"].',';
            echo '"text":"'.addslashes($message["text"]).'",';
            echo '"color":"'.$message["color"].'"';
            echo '}';
        }
        echo ']';
    }
?>