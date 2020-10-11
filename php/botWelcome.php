<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];

    function addfour($number){
        if($number<252){
            return $number+4;
        }
        return 255;
    }

    function removefour($number){
        if($number>3){
            return $number-4;
        }
        return 0;
    }

    sleep(3);

    $hour=date("H",$time)+2;
    $welcome="";
    if($hour>19 && $hour<25){
        $welcome="Hezký večer.";
    }
    else if($hour<5 || $hour>=25){
        $welcome="Dnes je krásná noc. Většina lidí už spí.";
    }
    else if($hour<10){
        $welcome="Dobré ráno.";
    }
    else if(rand(0,2)==1){
        $welcome="Vítej zpátky.";
    }
    else{
        $welcome="Ahoj.";
    }

    $sql=mysqli_query($link,"SELECT gender,partner,shade FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL AND planet IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        $sql=mysqli_query($link,"SELECT wait,isbot FROM me WHERE name='".$me["partner"]."'");
        if(mysqli_num_rows($sql)>0){
            $bot=mysqli_fetch_assoc($sql);
            if($bot["isbot"]==1 && $bot["wait"]%11==0){
                $wait=floor($bot["wait"]/10);
                $max=50; //4 times
                if($me["gender"]==1){
                    $sun=$name;
                    $moon=$me["partner"];

                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$sun."','".$moon."',".$time.",'".$welcome."')");
                    mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");

                    if($bot["wait"]<$max){
                        sleep(3);
                        $first=array("Těší mne,","Jsem ráda,","Mám radost,","Vážím si,");
                        $second=array(" že ses ukázal."," že sis udělal chvíli."," že tě vidím."," že tady jsi.");

                        $welcome=$first[$wait-1].$second[$wait-1];
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$sun."','".$moon."',".$time.",'".$welcome."')");
                        mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
                    }
                }
                else{
                    $sun=$me["partner"];
                    $moon=$name;

                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$sun."','".$moon."',".$time.",'".$welcome."')");
                    mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");

                    if($bot["wait"]<$max){
                        sleep(3);
                        $first=array("Těší mne,","Jsem rád,","Mám radost,","Vážím si,");
                        $second=array(" že ses ukázala."," že sis udělala chvíli."," že tě vidím."," že tady jsi.");
                        
                        $welcome=$first[$wait-1].$second[$wait-1];
                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$sun."','".$moon."',".$time.",'".$welcome."')");
                        mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
                    }
                }
                
                if($bot["wait"]<$max){
                    mysqli_query($link,"UPDATE me SET wait=".($bot["wait"]+$wait)." WHERE name='".$me["partner"]."'");
                }
                else{
                    mysqli_query($link,"UPDATE me SET wait=60 WHERE name='".$me["partner"]."'");
                }
            }
        }
    }
?>