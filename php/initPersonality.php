<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $ispartner=$_POST["ispartner"]==='true'?true:false;

    include 'returnPersonality.php';

    if($ispartner){
        $sql=mysqli_query($link,"SELECT gender,partner FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    }
    else{
        $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    }
    
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($ispartner){
            $sql=mysqli_query($link,"SELECT hashtag,essence1,essence2,essence3,time FROM personality WHERE name='".$me["partner"]."' ORDER BY time ASC");
            if($me["gender"]==1){
                $me["gender"]=0;
            }
            else{
                $me["gender"]=1;
            }
        }
        else{
            $sql=mysqli_query($link,"SELECT hashtag,essence1,essence2,essence3,time FROM personality WHERE name='".$name."' ORDER BY time ASC");
        }
        
        if(mysqli_num_rows($sql)>0){
            $maintrigger=true;
            echo '[';
            while($personality=mysqli_fetch_assoc($sql)){
                if($maintrigger){
                    $maintrigger=false;
                }
                else{
                    echo ',';
                }

                $essence=array($personality["essence1"],$personality["essence2"],$personality["essence3"]);
                $time=$personality["time"];
                $hashtag=$personality["hashtag"];

                $myself=returnPersonality($hashtag,$me["gender"]);
                $title=$myself[0];
                $quote=$myself[1];
                $autor=$myself[2];
                $description=$myself[3];
                $color=$myself[4];
                $colorname=$myself[5];
                $rarity=$myself[6];
                $artist=$myself[7];

                echo '{';
                    echo '"hashtag":'.$hashtag.',';
                    echo '"artist":"'.$artist.'",';
                    echo '"title":"'.$title.'",';
                    echo '"description":"'.$description.'",';
                    echo '"color":"'.$color.'",';
                    echo '"colorname":"'.$colorname.'",';
                    echo '"rarity":'.$rarity.',';
                    echo '"time":'.$time.',';

                    $trigger=true;
                    echo '"essence":[';
                    for($i=0;$i<3;$i++){
                        if($trigger){
                            $trigger=false;
                        }
                        else{
                            echo ',';
                        }
                        echo $essence[$i];
                    }
                    echo '],';

                    $trigger=true;
                    echo '"quote":[';
                    for($i=0;$i<count($quote);$i++){
                        if($trigger){
                            $trigger=false;
                        }
                        else{
                            echo ',';
                        }
                        echo '"'.$quote[$i].'"';
                    }
                    echo '],';

                    $trigger=true;
                    echo '"autor":[';
                    for($i=0;$i<count($autor);$i++){
                        if($trigger){
                            $trigger=false;
                        }
                        else{
                            echo ',';
                        }
                        echo '"'.$autor[$i].'"';
                    }
                    echo ']';
                echo '}';
            }
            echo ']';
        }
    }
?>