<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $essence=array((int)$_POST["essence1"],(int)$_POST["essence2"],(int)$_POST["essence3"]);
    $essenceid=array();
    $points=array(0,0,0,0,0,0);

    include 'returnPersonality.php';

    $sql=mysqli_query($link,"SELECT gender,personas FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        for($i=0;$i<3;$i++){
            $sql=mysqli_query($link,"SELECT id FROM inventory WHERE name='".$name."' AND essence=".$essence[$i]);
            if(mysqli_num_rows($sql)>0){
                $result=mysqli_fetch_assoc($sql);
                array_push($essenceid,$result["id"]);
            }
        }
        if(count($essenceid)==3){
            $points[$essence[0]-1]=3; //basic

            $first=(10*floor($essence[1]/10)); //advanced
            $points[floor($essence[1]/10)-1]+=2;
            $points[$essence[1]-$first-1]+=2;

            $first=(100*floor($essence[2]/100)); //high
            $second=(10*floor($essence[2]/10));
            $points[floor($essence[2]/100)-1]+=1;
            $points[floor(($essence[2]-$first)/10)-1]+=1;
            $points[$essence[2]-$second-1]+=1;          

            for($i=0;$i<3;$i++){
                mysqli_query($link,"DELETE FROM inventory WHERE id=".$essenceid[$i]);
            }

            if($points[0]==6){ //basic personalities
                $hashtag=1;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[1]==6){
                $hashtag=2;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[2]==6){
                $hashtag=3;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[3]==6){
                $hashtag=4;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[4]==6){
                $hashtag=5;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[5]==6){
                $hashtag=6;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>2 && $points[1]>0 && $points[2]>0 && $points[3]>0 && $points[4]>0 && $points[5]>0){ //high personalities
                $hashtag=7;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>0 && $points[1]>2 && $points[2]>0 && $points[3]>0 && $points[4]>0 && $points[5]>0){
                $hashtag=8;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>0 && $points[1]>0 && $points[2]>2 && $points[3]>0 && $points[4]>0 && $points[5]>0){
                $hashtag=9;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>0 && $points[1]>0 && $points[2]>0 && $points[3]>2 && $points[4]>0 && $points[5]>0){
                $hashtag=10;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>0 && $points[1]>0 && $points[2]>0 && $points[3]>0 && $points[4]>2 && $points[5]>0){
                $hashtag=11;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if($points[0]>0 && $points[1]>0 && $points[2]>0 && $points[3]>0 && $points[4]>0 && $points[5]>2){
                $hashtag=12;
                $myself=returnPersonality($hashtag,$me["gender"]);
            }
            else if(count(array_keys($points,3))==3){ //if contains 3x 3 points
                if($essence[0]==1){ //rare personalities
                    $hashtag=13;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if($essence[0]==2){
                    $hashtag=14;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if($essence[0]==3){
                    $hashtag=15;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if($essence[0]==4){
                    $hashtag=16;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if($essence[0]==5){
                    $hashtag=17;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if($essence[0]==6){
                    $hashtag=18;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
            }
            else{
                $ceil=0;
                for($i=0;$i<6;$i++){
                    if($points[$i]>$ceil){
                        $ceil=$points[$i];
                        $first=$i;
                    }
                }
                $ceil=0;
                for($i=0;$i<6;$i++){
                    if($i!==$first && $points[$i]>$ceil){
                        $ceil=$points[$i];
                        $second=$i;
                    }
                }
                $first++;
                $second++;
                $top=array($first,$second);

                if(in_array(1,$top) && in_array(2,$top)){
                    $hashtag=19;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(1,$top) && in_array(3,$top)){
                    $hashtag=20;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(1,$top) && in_array(4,$top)){
                    $hashtag=21;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(1,$top) && in_array(5,$top)){
                    $hashtag=22;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(1,$top) && in_array(6,$top)){
                    $hashtag=23;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(2,$top) && in_array(3,$top)){
                    $hashtag=24;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(2,$top) && in_array(4,$top)){
                    $hashtag=25;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(2,$top) && in_array(5,$top)){
                    $hashtag=26;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(2,$top) && in_array(6,$top)){
                    $hashtag=27;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(3,$top) && in_array(4,$top)){
                    $hashtag=28;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(3,$top) && in_array(5,$top)){
                    $hashtag=29;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(3,$top) && in_array(6,$top)){
                    $hashtag=30;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(4,$top) && in_array(5,$top)){
                    $hashtag=31;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(4,$top) && in_array(6,$top)){
                    $hashtag=32;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
                else if(in_array(5,$top) && in_array(6,$top)){
                    $hashtag=33;
                    $myself=returnPersonality($hashtag,$me["gender"]);
                }
            }

            $title=$myself[0];
            $quote=$myself[1];
            $autor=$myself[2];
            $description=$myself[3];
            $color=$myself[4];
            $colorname=$myself[5];
            $rarity=$myself[6];
            $artist=$myself[7];

            $sql=mysqli_query($link,"SELECT hashtag FROM personality WHERE name='".$name."' AND hashtag='".$hashtag."'");
            if(!$sql || mysqli_num_rows($sql)==0){
                $isnew="true";
                mysqli_query($link,"UPDATE me SET personas=".($me["personas"]+1)." WHERE name='".$name."'");
                mysqli_query($link,"INSERT INTO personality(name,hashtag,essence1,essence2,essence3,time) VALUES ('".$name."','".$hashtag."',".$essence[0].",".$essence[1].",".$essence[2].",".$time.")");
                if($me["gender"]==1){
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevil jsem novou osobnost jménem ".$title.".','purple')");
                }
                else{
                    mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevila jsem novou osobnost jménem ".$title.".','purple')");
                }

                if($me["personas"]==2){
                    if($me["gender"]==1){
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevil jsem sklep!','greenyellow')");
                    }
                    else{
                        mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Objevila jsem sklep!','greenyellow')");
                    }
                }
            }
            else{
                $isnew="false";
                mysqli_query($link,"UPDATE personality SET essence1=".$essence[0].",essence2=".$essence[1].",essence3=".$essence[2]." WHERE name='".$name."' AND hashtag='".$hashtag."'");
            }
    
            echo '{';
                echo '"isnew":'.$isnew.',';
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
    }
?>