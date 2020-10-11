<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $trigger=$_POST["trigger"]==='true'?true:false;

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

        $sql=mysqli_query($link,"SELECT hash FROM me WHERE name='".$me["partner"]."'");
        $bot=mysqli_fetch_assoc($sql);
        $_POST["name"]=$me["partner"];
        $_POST["hash"]=$bot["hash"];
        $_POST["text"]="";

        $sql=mysqli_query($link,"SELECT question,ischeck FROM decision WHERE sun='".$sun."'");
        if(mysqli_num_rows($sql)>0){
            $decision=mysqli_fetch_assoc($sql);

            if($me["gender"]==0){
                if($decision["question"]===NULL){ //means 100
                    include "sendDecision.php";
                }
                else if($decision["question"]==0 || $decision["question"]==1){
                    $_POST["text"]="Budu.";
                }
                else if($decision["question"]==4 && $decision["ischeck"]==1){
                    $sql=mysqli_query($link,"SELECT who FROM connection WHERE sun='".$sun."' ORDER BY time DESC, id DESC LIMIT 1");
                    if(mysqli_num_rows($sql)>0){
                        $connection=mysqli_fetch_assoc($sql);
                        if($connection["who"]==0){
                            $_POST["text"]="Hurá!";
                        }
                    }
                }
                else if(($decision["question"]==5 || $decision["question"]==7) && $decision["ischeck"]==1){
                    include "planetBank.php";
                    for($i=0;$i<count($planetbank);$i++){
                        $sql=mysqli_query($link,"SELECT name FROM planet WHERE name='".$planetbank[$i]."'");
                        if(!$sql || mysqli_num_rows($sql)==0){
                            $_POST["text"]=$planetbank[$i];
                            break;
                        }
                    }
                }
                else if($decision["question"]==9 && $decision["ischeck"]==1){
                    $_POST["text"]="Souhlasím.";
                }
            }
            else{
                if($decision["question"]==101){
                    include "sendDecision.php";
                }
                else if($decision["question"]==2 || $decision["question"]==3){
                    $_POST["text"]="Budu.";
                }
                else if($decision["question"]==4 && $decision["ischeck"]==1){
                    $sql=mysqli_query($link,"SELECT who FROM connection WHERE sun='".$sun."' ORDER BY time DESC, id DESC LIMIT 1");
                    if(mysqli_num_rows($sql)>0){
                        $connection=mysqli_fetch_assoc($sql);
                        if($connection["who"]==2){
                            $_POST["text"]="Hurá!";
                        }
                    }
                }
                else if(($decision["question"]==8 || $decision["question"]==10) && $decision["ischeck"]==1){
                    include "colorBank.php";
                    $pick=(rand(0,floor(count($colorbank)/3)-1)*3)+1;
                    if($decision["question"]==8){
                        $_POST["text"]="Mám ráda ".$colorbank[$pick].".";
                    }
                    else{
                        $_POST["text"]="Tak tedy ".$colorbank[$pick].".";
                    }
                }
                else if($decision["question"]==6 && $decision["ischeck"]==1){
                    if($trigger){
                        $_POST["text"]="Líbí.";
                    }
                    else{
                        $_POST["text"]="Nelíbí.";
                    }
                }
            }
        }

        if(strlen($_POST["text"])>0){
            sleep(2);
        }

        include "sendMessage.php";
        include "getDecision.php";
    }
?>