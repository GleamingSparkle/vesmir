<?php
    include("../sql/mysql_connect.php");

    $limitless=$_POST["limitless"]==='true'?"":" LIMIT 22";

    $sql=mysqli_query($link,"SELECT name,age,planet,gender,planted,personas FROM me ORDER BY personas DESC,planted DESC,name DESC".$limitless);
    $sql2=mysqli_query($link,"SELECT COUNT(name) as result FROM me");
    $count=mysqli_fetch_assoc($sql2);
    echo '[{"count":'.$count["result"].'},[';
    if(mysqli_num_rows($sql)>0){       
        $trigger=true;
        
        while($result=mysqli_fetch_assoc($sql)){
            if($trigger){
                $trigger=false;
            }
            else{
                echo ',';
            }
    
            echo '{';
            echo '"name":"'.$result["name"].'",';
            echo '"age":'.$result["age"].',';
            echo '"planet":"'.$result["planet"].'",';
            echo '"gender":'.$result["gender"].',';
            echo '"planted":'.$result["planted"].',';
            echo '"personas":'.$result["personas"];
            echo '}';
        }
    }
    echo "]]";
?>