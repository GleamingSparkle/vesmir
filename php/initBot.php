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

    sleep(5);

    $sql=mysqli_query($link,"SELECT gender,partner,shade FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["gender"]==1){
            $sun=$name;
            $moon=$me["partner"];
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$sun."','".$moon."',".$time.",'Ahoj! Mám radost. Našel jsi mne.')");
            mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
            sleep(3);
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$sun."','".$moon."',".$time.",'Nejsem opravdová. Odpusť.')");
            mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
            sleep(5);
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (0,'".$sun."','".$moon."',".$time.",'Sázím stromy. Hraji. Stejně jako vy, lidé.')");
            mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
        }
        else{
            $sun=$me["partner"];
            $moon=$name;
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$sun."','".$moon."',".$time.",'Ahoj! Mám radost. Našel jsem tě.')");
            mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
            sleep(3);
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$sun."','".$moon."',".$time.",'Nejsem opravdový. Odpusť.')");
            mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
            sleep(5);
            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (1,'".$sun."','".$moon."',".$time.",'Sázím stromy. Hraji. Stejně jako vy, lidé.')");
            mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
        }
    }
?>