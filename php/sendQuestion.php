<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $question=$_POST["question"];
    $first=mb_convert_case($question,MB_CASE_TITLE,'UTF-8');
    $question[0]=mb_substr($first,0,1,'UTF-8');
    $ans=array($_POST["ans0"],$_POST["ans1"],$_POST["ans2"],$_POST["ans3"]);
    
    $sql=mysqli_query($link,"SELECT gender FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if(strlen($ans[0])>0 && strlen($ans[1])>0 && strlen($ans[2])>0 && strlen($ans[3])>0 && strlen($ans[0])<21 && strlen($ans[1])<21 && strlen($ans[2])<21 && strlen($ans[3])<21 && strlen($question)<31 && strlen($question)>6){
            $question=addslashes(str_replace("\\","",str_replace("'","\"",$question)));
            $ans[0]=addslashes(str_replace("\\","",str_replace("'","\"",$ans[0])));
            $ans[1]=addslashes(str_replace("\\","",str_replace("'","\"",$ans[1])));
            $ans[2]=addslashes(str_replace("\\","",str_replace("'","\"",$ans[2])));
            $ans[3]=addslashes(str_replace("\\","",str_replace("'","\"",$ans[3])));
            mysqli_query($link,"INSERT INTO quiz(question,ans0,ans1,ans2,ans3) VALUES ('".$question."','".$ans[0]."','".$ans[1]."','".$ans[2]."','".$ans[3]."')");
            if($me["gender"]==1){
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Napsal jsem otázku. ".$question." <img class=\"plant-icon-small\" src=\"img/star.svg\">','aqua')");
            }
            else{
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Napsala jsem otázku. ".$question." <img class=\"plant-icon-small\" src=\"img/star.svg\">','aqua')");
            }
        }
    }
?>