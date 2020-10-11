<?php
    if(!function_exists('isInside')){
        function isInside($ax,$ay,$mx,$my,$nx,$ny){
            if(($ax>=$mx && $ax<=$nx) && ($ay>=$my && $ay<=$ny)){
                return true;
            }
            return false;
        }
    }

    //choose star
    $freestar=array();
    $sql=mysqli_query($link,"SELECT name,max FROM star WHERE type=1 AND galaxy=0");
    while($star=mysqli_fetch_assoc($sql)){
        $sql2=mysqli_query($link,"SELECT COUNT(name) as result FROM planet WHERE star='".$star["name"]."'");
        $planetcount=mysqli_fetch_assoc($sql2);
        if($planetcount["result"]<$star["max"]){
            array_push($freestar,$star["name"]);
        }
    }

    if(count($freestar)>0){
        //find star
        $key=array_rand($freestar,1);
        $freestar=$freestar[$key];
        //find free position
        $sql=mysqli_query($link,"SELECT max FROM star WHERE name='".$freestar."'");
        $star=mysqli_fetch_assoc($sql);

        $freeposition=array();
        for($i=0;$i<$star["max"];$i++){
            array_push($freeposition,$i);
        }

        $sql=mysqli_query($link,"SELECT orbit FROM planet WHERE star='".$freestar."'");
        while($planet=mysqli_fetch_assoc($sql)){
            if(($key=array_search($planet["orbit"],$freeposition))!==false){
                unset($freeposition[$key]);
            }
        }

        if(count($freeposition)==8){
            $sql=mysqli_query($link,"SELECT name FROM me"); //inform everyone about it
            while($someone=mysqli_fetch_assoc($sql)){
                mysqli_query($link,"UPDATE star SET size=80 WHERE name='".$freestar."'");
                mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$someone["name"]."',".$time.",'Mléčná dráha má novou hvězdu ".$freestar.".','greenyellow')");
            } 
        }

        $key=array_rand($freeposition,1);
        $freeposition=$freeposition[$key];

        //set size and max
        if($freeposition<4){
            $size=rand(3,10);
            $max=rand(3,6);
        }
        else{
            $size=rand(6,20);
            $max=rand(6,9);
        }     

        mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,iddqd) VALUES ('".$freestar."','".$decision["planet"]."','".$decision["color"]."','".$decision["colorname"]."',".$size.",".$freeposition.",".$max.",".$time.",".$iddqd.")");
        mysqli_query($link,"UPDATE decision SET star='".$freestar."',answer=NULL,ischeck=1,question=11 WHERE sun='".$sun."'");
        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$decision["colorname2"]." planeta ".$decision["planet"]." je na světě. Krouží kolem hvězdy ".$freestar.".')");
        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Potřebuje vás. Střídejte se v klikání na její ikonu dole.')");
        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Za každý odchovaný strom ztrácí ".(($freeposition+1)/10)."% energie.')");
        mysqli_query($link,"UPDATE me SET planet='".$decision["planet"]."' WHERE name='".$sun."' OR name='".$moon."'");

        $sql=mysqli_query($link,"SELECT name FROM me"); //inform everyone about it
        while($someone=mysqli_fetch_assoc($sql)){
            mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$someone["name"]."',".$time.",'Mléčná dráha má novou planetu ".$decision["planet"].", kroužící kolem hvězdy ".$freestar.".','greenyellow')");
        }
    }
    else{
        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Mléčná dráha je plná. Nemá pro další planetu místo. Promiňte.')");
    }
?>