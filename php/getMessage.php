<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $ischeck=$_POST["ischeck"];

    $sql=mysqli_query($link,"SELECT gender,partner,shade FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);

        if($me["gender"]==1){
            $sql=mysqli_query($link,"SELECT id,who,time,text FROM connection WHERE sun='".$name."' AND moon='".$me["partner"]."' AND suncheck=".$ischeck." ORDER BY time DESC, id DESC LIMIT 200"); //default limit 200
        }
        else{
            $sql=mysqli_query($link,"SELECT id,who,time,text FROM connection WHERE moon='".$name."' AND sun='".$me["partner"]."' AND mooncheck=".$ischeck." ORDER BY time DESC, id DESC LIMIT 200");
        }

        echo '[[';
        if(mysqli_num_rows($sql)>0){
            $trigger=true;
            echo '{"shade":'.$me["shade"].'},';
            while($message=mysqli_fetch_assoc($sql)){
                if($ischeck==0){
                    if($me["gender"]==1){
                        mysqli_query($link,"UPDATE connection SET suncheck=1 WHERE id=".$message["id"]);
                    }
                    else{
                        mysqli_query($link,"UPDATE connection SET mooncheck=1 WHERE id=".$message["id"]);
                    }
                }
                
                if($trigger){
                    $trigger=false;
                }
                else{
                    echo ',';
                }

                echo '{';                
                echo '"who":'.$message["who"].',';
                echo '"time":'.$message["time"].',';
                echo '"text":"'.addslashes($message["text"]).'"';
                echo '}';
            }
        }
        echo '],';
        
        $online=0;
        $sql=mysqli_query($link,"SELECT name FROM me WHERE name='".$me["partner"]."' AND time>".($time-5));
        if(mysqli_num_rows($sql)>0){
            $online=1;
        }
        echo '{"online":'.$online.'}';
        echo ']';
    }
?>