<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    function simplify($tmp){
        $letters=Array('ä'=>'a','Ä'=>'A','á'=>'a','Á'=>'A','à'=>'a','À'=>'A','ã'=>'a','Ã'=>'A','â'=>'a','Â'=>'A','č'=>'c','Č'=>'C','ć'=>'c','Ć'=>'C','ď'=>'d','Ď'=>'D','ě'=>'e','Ě'=>'E','é'=>'e','É'=>'E','ë'=>'e','Ë'=>'E','è'=>'e','È'=>'E','ê'=>'e','Ê'=>'E','í'=>'i','Í'=>'I','ï'=>'i','Ï'=>'I','ì'=>'i','Ì'=>'I','î'=>'i','Î'=>'I','ľ'=>'l','Ľ'=>'L','ĺ'=>'l','Ĺ'=>'L','ń'=>'n','Ń'=>'N','ň'=>'n','Ň'=>'N','ñ'=>'n','Ñ'=>'N','ó'=>'o','Ó'=>'O','ö'=>'o','Ö'=>'O','ô'=>'o','Ô'=>'O','ò'=>'o','Ò'=>'O','õ'=>'o','Õ'=>'O','ő'=>'o','Ő'=>'O','ř'=>'r','Ř'=>'R','ŕ'=>'r','Ŕ'=>'R','š'=>'s','Š'=>'S','ś'=>'s','Ś'=>'S','ť'=>'t','Ť'=>'T','ú'=>'u','Ú'=>'U','ů'=>'u','Ů'=>'U','ü'=>'u','Ü'=>'U','ù'=>'u','Ù'=>'U','ũ'=>'u','Ũ'=>'U','û'=>'u','Û'=>'U','ý'=>'y','Ý'=>'Y','ž'=>'z','Ž'=>'Z','ź'=>'z','Ź'=>'Z');
        return strtolower(strtr($tmp,$letters));
    }

    $name=$_POST["name"];
    $password=$_POST["password"];
    $gender=$_POST["gender"];

    if(ctype_alnum(simplify($name)) && ctype_alnum(simplify($password)) && strlen($name)>2 && strlen($password)>2 && strlen($name)<20 && strlen($password)<20 && $gender<2 && $gender>=0){
        $sql=mysqli_query($link,"SELECT name FROM me WHERE name='".$name."'");
        if(mysqli_num_rows($sql)>0){
            echo "2";
        }
        else{
            $hash=bin2hex(random_bytes(7));
            $time=time();
            $ip=$_SERVER['REMOTE_ADDR'];
            mysqli_query($link,"INSERT INTO me(name,password,gender,hash,time,ip,age) VALUES ('".mb_convert_case($name,MB_CASE_TITLE,'UTF-8')."','".$password."',".$gender.",'".$hash."',".$time.",'".$ip."',".$time.")");
            mysqli_query($link,"INSERT INTO console(name,time,text,color) VALUES ('".$name."',".$time.",'Mohu zasadit svůj první strom. [+1<img class=\"plant-icon-small\" src=\"img/plant.svg\">]','gold')");

            echo $hash;
        }
    }
    else{
        echo "1";
    }
?>