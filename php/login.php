<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    function simplify($tmp){
        $letters=Array('ä'=>'a','Ä'=>'A','á'=>'a','Á'=>'A','à'=>'a','À'=>'A','ã'=>'a','Ã'=>'A','â'=>'a','Â'=>'A','č'=>'c','Č'=>'C','ć'=>'c','Ć'=>'C','ď'=>'d','Ď'=>'D','ě'=>'e','Ě'=>'E','é'=>'e','É'=>'E','ë'=>'e','Ë'=>'E','è'=>'e','È'=>'E','ê'=>'e','Ê'=>'E','í'=>'i','Í'=>'I','ï'=>'i','Ï'=>'I','ì'=>'i','Ì'=>'I','î'=>'i','Î'=>'I','ľ'=>'l','Ľ'=>'L','ĺ'=>'l','Ĺ'=>'L','ń'=>'n','Ń'=>'N','ň'=>'n','Ň'=>'N','ñ'=>'n','Ñ'=>'N','ó'=>'o','Ó'=>'O','ö'=>'o','Ö'=>'O','ô'=>'o','Ô'=>'O','ò'=>'o','Ò'=>'O','õ'=>'o','Õ'=>'O','ő'=>'o','Ő'=>'O','ř'=>'r','Ř'=>'R','ŕ'=>'r','Ŕ'=>'R','š'=>'s','Š'=>'S','ś'=>'s','Ś'=>'S','ť'=>'t','Ť'=>'T','ú'=>'u','Ú'=>'U','ů'=>'u','Ů'=>'U','ü'=>'u','Ü'=>'U','ù'=>'u','Ù'=>'U','ũ'=>'u','Ũ'=>'U','û'=>'u','Û'=>'U','ý'=>'y','Ý'=>'Y','ž'=>'z','Ž'=>'Z','ź'=>'z','Ź'=>'Z');
        return strtolower(strtr($tmp,$letters));
    }

    $name=$_POST["name"];
    $password=$_POST["password"];
    $time=time();
    $hash=bin2hex(random_bytes(7));

    if(ctype_alnum(simplify($name)) && ctype_alnum(simplify($password)) && strlen($name)>2 && strlen($password)>2 && strlen($name)<20 && strlen($password)<20){
        $sql=mysqli_query($link,"SELECT * FROM me WHERE name='".$name."'");
        if(mysqli_num_rows($sql)>0){
            $me=mysqli_fetch_assoc($sql);
            if($me["password"]==$password){
               //if($me["time"]<($time-5)){ //dev skip
                    mysqli_query($link,"UPDATE me SET hash='".$hash."', time=".$time." WHERE name='".$name."'");
                    
                    echo '{';
                    echo '"name":"'.$me["name"].'",';
                    echo '"password":"'.$me["password"].'",';
                    echo '"gender":'.$me["gender"].',';

                    echo '"partner":"'.$me["partner"].'",';
                    if($me["partner"]!==NULL){
                        $sql=mysqli_query($link,"SELECT isbot FROM me WHERE name='".$me["partner"]."'");
                        $partner=mysqli_fetch_assoc($sql);

                        if($partner["isbot"]==1){
                            echo '"isbot":true,';
                        }
                        else{
                            echo '"isbot":false,';
                        }
                    }
                    else{
                        echo '"isbot":false,';
                    }

                    echo '"planet":"'.$me["planet"].'",';
                    if($me["planet"]!==NULL){
                        $sql=mysqli_query($link,"SELECT color,energy,beat FROM planet WHERE name='".$me["planet"]."'");
                        $planet=mysqli_fetch_assoc($sql);

                        echo '"color":"'.$planet["color"].'",';
                        echo '"energy":'.$planet["energy"].',';
                        echo '"beat":'.$planet["beat"].',';
                    }
                    else{
                        echo '"color":"",';
                        echo '"energy":330,';
                        echo '"beat":1,';
                    }
                    echo '"seeds":'.$me["seeds"].',';
                    if($me["iswinterstory"]==0){
                        echo '"iswinterstory":false,';
                    }
                    else{
                        echo '"iswinterstory":true,';
                    }
                    echo '"hash":"'.$hash.'"';
                    echo '}';
                /*}
                else{
                    echo "4";
                }*/
            }
            else{
                echo "3";
            }
        }
        else{
            echo "2";
        }
    }
    else{
        echo "1";
    }
?>