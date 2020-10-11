<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT things FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["things"]>1){
            $sql=mysqli_query($link,"SELECT * FROM quiz");
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
                echo '"question":"'.addslashes($result["question"]).'",';
                echo '"ans0":"'.addslashes($result["ans0"]).'",';
                echo '"ans1":"'.addslashes($result["ans1"]).'",';
                echo '"ans2":"'.addslashes($result["ans2"]).'",';
                echo '"ans3":"'.addslashes($result["ans3"]).'"';
                echo '}';
            }
            echo ']';
        }
    }
?>