<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT gender,partner FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);     

        if($me["gender"]==0){
            $sun=$me["partner"];
            $moon=$name;
        }
        else{
            $sun=$name;
            $moon=$me["partner"];
        }

        $sql=mysqli_query($link,"SELECT question,answer,ischeck,planet,color,colorname,colorname2,star,holdon FROM decision WHERE sun='".$sun."'");
        $decision=mysqli_fetch_assoc($sql);
        
        if($decision["question"]==NULL){ //init
            $decision["question"]=100;
        }
        else if($me["gender"]==0){
            if(($decision["question"]==0 || $decision["question"]==1) && $decision["answer"]=="0"){
                sleep(3);
                $sql=mysqli_query($link,"SELECT answer FROM decision WHERE sun='".$sun."'");
                $finaldecision=mysqli_fetch_assoc($sql);
                if($finaldecision["answer"]=="0"){
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Chcete se rozejít?')");
                    mysqli_query($link,"UPDATE me SET wantbreak=1 WHERE name='".$name."' OR name='".$me["partner"]."'");
                    mysqli_query($link,"UPDATE decision SET question=1,answer=NULL,ischeck=1 WHERE sun='".$sun."'");
                }
            }
            else if(($decision["question"]==2 || $decision["question"]==3) && $decision["answer"]=="0"){
                if($decision["answer"]=="0"){
                    sleep(3);
                    $sql=mysqli_query($link,"SELECT answer FROM decision WHERE sun='".$sun."'");
                    $finaldecision=mysqli_fetch_assoc($sql);
                    if($finaldecision["answer"]=="0"){
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Chcete se rozejít?')");
                        mysqli_query($link,"UPDATE me SET wantbreak=1 WHERE name='".$name."' OR name='".$me["partner"]."'");
                        mysqli_query($link,"UPDATE decision SET question=3,answer=NULL,ischeck=1 WHERE sun='".$sun."'");
                    }
                }
            }
        }
        else if($decision["holdon"]==0 && $me["gender"]==1){
            $question=array(
                "Slunce ".$sun.", budeš světlem lásky ".$moon."?",
                "Budeš jejím světlem nebo ne?",
                "Měsíci ".$moon.", budeš smyslem života ".$sun."?",
                "Budeš jeho smyslem nebo ne?",
                "Spojuji vás. [Napište větu.]",
                $sun.", jak planetu pojmenuješ? [Napiš slovem.]",
                $moon.", líbí se ti jméno \"".mb_convert_case($decision["planet"],MB_CASE_TITLE,'UTF-8')."\"?",
                $sun.", zvol jiné jméno.",
                $moon.", jakou vybereš planetě barvu?",
                $sun.", souhlasíš s \"".$decision["colorname"]."\" barvou?",
                $moon.", vyber jinou barvu.");
            
            if($decision["answer"]===NULL){
                if($decision["ischeck"]==0){
                    mysqli_query($link,"UPDATE decision SET ischeck=1 WHERE sun='".$sun."'"); //checked
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$question[$decision["question"]]."')");
                    if($decision["question"]==8){
                        $suggestion=array("máslovou","kaktusovou","ledovou","sýrovou","azurovou","cyanovou","čokoládovou","kávovou","indigovou","jadeovou","jantarovou","korálovou","kobaltovou","krémovou","lasturovou","lesní","levandulovou","nachovou","nebeskou","námořní","pleťovou","rajčatovou","meruňkovou","dřevěnou","pískovou","citrónovou","vínovou","karmínovou","jahodovou","malinovou","borůvkovou","ostružinovou","pastelovou","safírovou","olivovou","mátovou","mechovou","měděnou","sněhovou","oříškovou","sépiovou","hliníkovou","oceánovou","mořskou","medovou","pampeliškovou","banánovou","perlovou","rákosovou","rumělkovou","kapradinovou","broskvovou","břidlicovou","ocelovou","achátovou","kaštanovou","mandlovou","kouřovou","cihlovou","svěstkovou","bodlákovou","pudrovou","pšeničnou","akvamarínovou","slonovinovou","rudou","duhovou","tyrkisovou","kofolovou","lososovou","purpurovou","rubínovou","smaragdovou","rezavou","vltavínovou");
                        $key=array_rand($suggestion,2);
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Znám třeba ".$suggestion[$key[0]]." nebo ".$suggestion[$key[1]].".')");
                    }
                }
            }
            else{ //make changes, NULL answer, set check to 0, set question               
                if($decision["question"]==0 || $decision["question"]==1){
                    if($decision["answer"]=="1"){
                        mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=1,question=101 WHERE sun='".$sun."'"); //moon will change question=2 and ischeck=0
                    }
                    else if($decision["answer"]=="0"){
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Chcete se rozejít?')");
                        mysqli_query($link,"UPDATE me SET wantbreak=1 WHERE name='".$name."' OR name='".$me["partner"]."'");
                        mysqli_query($link,"UPDATE decision SET question=1,answer=NULL,ischeck=1 WHERE sun='".$sun."'");
                    }
                }
                else if($decision["question"]==2 || $decision["question"]==3){
                    if($decision["answer"]=="1"){
                        mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=4 WHERE sun='".$sun."'");
                    }
                    else if($decision["answer"]=="0"){
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Chcete se rozejít?')");
                        mysqli_query($link,"UPDATE me SET wantbreak=1 WHERE name='".$name."' OR name='".$me["partner"]."'");
                        mysqli_query($link,"UPDATE decision SET question=3,answer=NULL,ischeck=1 WHERE sun='".$sun."'");
                    }
                }
                else if($decision["question"]==4){
                    mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=5 WHERE sun='".$sun."'");
                }
                else if($decision["question"]==5 || $decision["question"]==7){
                    mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=6 WHERE sun='".$sun."'");
                }
                else if($decision["question"]==6){
                    if($decision["answer"]=="1"){
                        mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=8 WHERE sun='".$sun."'");
                    }
                    else if($decision["answer"]=="0"){
                        mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=7 WHERE sun='".$sun."'");
                    }
                }
                else if($decision["question"]==8 || $decision["question"]==10){
                    mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=9 WHERE sun='".$sun."'");
                }
                else if($decision["question"]==9){
                    $sql=mysqli_query($link,"SELECT holdon FROM decision WHERE sun='".$sun."'");
                    $holdon=mysqli_fetch_assoc($sql);
                    if($decision["answer"]=="1" && $holdon["holdon"]==0){
                        mysqli_query($link,"UPDATE decision SET holdon=1 WHERE sun='".$sun."'");
                        $iddqd=0;
                        include "createPlanet.php";
                        mysqli_query($link,"UPDATE decision SET holdon=0 WHERE sun='".$sun."'");
                    }
                    else if($decision["answer"]=="0"){
                        mysqli_query($link,"UPDATE decision SET answer=NULL,ischeck=0,question=10 WHERE sun='".$sun."'");
                    }
                }
            }        
        }
        echo '[';
            echo $decision["question"];
            echo ',"';
            echo $decision["planet"];
            echo '","';
            echo $decision["color"];
            echo '","';
            echo $decision["star"];
        echo '"]';
    }
?>