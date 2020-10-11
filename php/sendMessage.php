<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");

    function simplify($tmp){
        $letters=Array('ä'=>'a','Ä'=>'A','á'=>'a','Á'=>'A','à'=>'a','À'=>'A','ã'=>'a','Ã'=>'A','â'=>'a','Â'=>'A','č'=>'c','Č'=>'C','ć'=>'c','Ć'=>'C','ď'=>'d','Ď'=>'D','ě'=>'e','Ě'=>'E','é'=>'e','É'=>'E','ë'=>'e','Ë'=>'E','è'=>'e','È'=>'E','ê'=>'e','Ê'=>'E','í'=>'i','Í'=>'I','ï'=>'i','Ï'=>'I','ì'=>'i','Ì'=>'I','î'=>'i','Î'=>'I','ľ'=>'l','Ľ'=>'L','ĺ'=>'l','Ĺ'=>'L','ń'=>'n','Ń'=>'N','ň'=>'n','Ň'=>'N','ñ'=>'n','Ñ'=>'N','ó'=>'o','Ó'=>'O','ö'=>'o','Ö'=>'O','ô'=>'o','Ô'=>'O','ò'=>'o','Ò'=>'O','õ'=>'o','Õ'=>'O','ő'=>'o','Ő'=>'O','ř'=>'r','Ř'=>'R','ŕ'=>'r','Ŕ'=>'R','š'=>'s','Š'=>'S','ś'=>'s','Ś'=>'S','ť'=>'t','Ť'=>'T','ú'=>'u','Ú'=>'U','ů'=>'u','Ů'=>'U','ü'=>'u','Ü'=>'U','ù'=>'u','Ù'=>'U','ũ'=>'u','Ũ'=>'U','û'=>'u','Û'=>'U','ý'=>'y','Ý'=>'Y','ž'=>'z','Ž'=>'Z','ź'=>'z','Ź'=>'Z');
        return strtolower(strtr($tmp,$letters));
    }

    $time=time();
    $name=$_POST["name"];
    $hash=$_POST["hash"];
    $text=addslashes(str_replace("\\","",str_replace("'","\"",$_POST["text"])));

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
    
    if(strlen($text)<500 && strlen($text)>0){
        $sql=mysqli_query($link,"SELECT gender,partner,planet,shade,wantbreak FROM me WHERE name='".$name."' AND hash='".$hash."' AND partner IS NOT NULL");
        if(mysqli_num_rows($sql)>0){
            $me=mysqli_fetch_assoc($sql);
            if($me["gender"]==1){
                $sun=$name;
                $moon=$me["partner"];
                if($me["shade"]<255){
                    mysqli_query($link,"UPDATE me SET shade=".addfour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
                }
            }
            else{
                $sun=$me["partner"];
                $moon=$name;
                if($me["shade"]>0){
                    mysqli_query($link,"UPDATE me SET shade=".removefour($me["shade"])." WHERE name='".$sun."' OR name='".$moon."'");
                }
            }

            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (".$me["gender"].",'".$sun."','".$moon."',".$time.",'".$text."')");

            //detect answer
            sleep(1);

            $sql=mysqli_query($link,"SELECT isbot,gender FROM me WHERE name='".$me["partner"]."'");
            $bot=mysqli_fetch_assoc($sql);
            if($bot["isbot"]==1){
                if(strpos(mb_strtolower($text,'UTF-8'),"?")!==false){
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (".$bot["gender"].",'".$sun."','".$moon."',".$time.",'Neumím odpovídat.')");
                }
            }

            $wantbreak=false;
            $break=array("rozchod","rozejdu","rozejít","rozejit","kopačky","kopacky");
            for($i=0;$i<count($break);$i++){
                if(strpos(mb_strtolower($text,'UTF-8'),$break[$i])!==false){
                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Chcete se rozejít?')");
                    mysqli_query($link,"UPDATE me SET wantbreak=1 WHERE name='".$name."' OR name='".$me["partner"]."'");
                    $wantbreak=true;
                }
            }

            if($me["wantbreak"]>0){
                $sql=mysqli_query($link,"SELECT wantbreak FROM me WHERE name='".$me["partner"]."' AND partner IS NOT NULL");
                $partner=mysqli_fetch_assoc($sql);

                if($me["wantbreak"]==3){
                    mysqli_query($link,"UPDATE me SET isbreak=1,wantbreak=0 WHERE name='".$name."'");
                }
                else if($partner["wantbreak"]==3){
                    mysqli_query($link,"UPDATE me SET isbreak=1,wantbreak=0 WHERE name='".$me["partner"]."'");
                }
                else if($me["wantbreak"]==1 || $me["wantbreak"]==2){
                    $yesbreak=array("ano","jj","chci","jo");
                    $nobreak=array("ne","nechci","nikdy","nn");

                    for($i=0;$i<count($yesbreak);$i++){
                        if(strpos(mb_strtolower($text,'UTF-8'),$yesbreak[$i])!==false){
                            if($me["wantbreak"]==1){
                                if($me["gender"]==1){
                                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$sun.", opravdu?')");
                                }
                                else{
                                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$moon.", opravdu?')");
                                }
                                mysqli_query($link,"UPDATE me SET wantbreak=2 WHERE name='".$name."'");
                            }
                            else{
                                if($me["gender"]==1){
                                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$name." se rozchází s ".$me["partner"].". [Napiš cokoliv.]')");
                                }
                                else{
                                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'".$name." se rozchází s ".$me["partner"].". [Napiš cokoliv.]')");
                                }
                                mysqli_query($link,"UPDATE me SET wantbreak=3 WHERE name='".$name."'");
                            }
                        }
                    }
                    for($i=0;$i<count($nobreak);$i++){
                        if(strpos(mb_strtolower($text,'UTF-8'),$nobreak[$i])!==false){
                            mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Nechcete.')");
                            mysqli_query($link,"UPDATE me SET wantbreak=0 WHERE name='".$name."' OR name='".$me["partner"]."'");

                            if($me["planet"]==NULL){
                                mysqli_query($link,"UPDATE decision SET ischeck=0 WHERE sun='".$sun."'"); //zopakuju otázku
                            }
                        }
                    }
                }
            }
            else if($me["planet"]==NULL && !$wantbreak){
                $sql=mysqli_query($link,"SELECT question FROM decision WHERE sun='".$sun."' AND ischeck=1 AND answer IS NULL");
                if(mysqli_num_rows($sql)>0){
                    $decision=mysqli_fetch_assoc($sql);

                    $yes=array("ano","jo","budu","ok","jj","kk","jist","samosebou","jasn");
                    $no=array("ne","nebudu","nikdy","nn");
                    $sunagree=array("ano","jo","souhlas","jj","jist","jasn");
                    $sundisagree=array("ne","ani náhodou","ani nahodou","nn","ani napad","ani nápad");
                    $moonagree=array("ano","jo","líbí","libi","jj","jist","jasn");
                    $moondisagree=array("ne","ani náhodou","ani nahodou","nn","ani napad","ani nápad");

                    $isno=false;

                    if($me["gender"]==1){ //im sun
                        if($decision["question"]==0 || $decision["question"]==1){
                            for($i=0;$i<count($no);$i++){
                                if(strpos(mb_strtolower($text,'UTF-8'),$no[$i])!==false){
                                    $isno=true;
                                    break;
                                }
                            }

                            if(!$isno){
                                for($i=0;$i<count($yes);$i++){
                                    if(strpos(mb_strtolower($text,'UTF-8'),$yes[$i])!==false){
                                        mysqli_query($link,"UPDATE decision SET answer='1' WHERE sun='".$sun."'");
                                        break;
                                    }
                                }
                            }
                            else{
                                mysqli_query($link,"UPDATE decision SET answer='0' WHERE sun='".$sun."'");
                            }
                        }
                        else if($decision["question"]==4){
                            mysqli_query($link,"UPDATE decision SET answer='1' WHERE sun='".$sun."'");
                        }
                        else if($decision["question"]==5 || $decision["question"]==7){
                            $planetname=explode(' ',trim($text))[0];
                            if(strlen($planetname)<20 && strlen($planetname)>2 && ctype_alnum(simplify($planetname))){
                                $planetname=mb_convert_case($planetname,MB_CASE_TITLE,'UTF-8');
                                $sql=mysqli_query($link,"SELECT name FROM star WHERE name='".$planetname."'");
                                if(mysqli_num_rows($sql)>0){
                                    mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Jméno \"".$planetname."\" už má hvězda. Vyber jiné.')");
                                }
                                else{
                                    $sql=mysqli_query($link,"SELECT name FROM planet WHERE name='".$planetname."'");
                                    if(mysqli_num_rows($sql)>0){
                                        mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Planeta \"".$planetname."\" už existuje. Vyber jiné jméno.')");
                                    }
                                    else{
                                        mysqli_query($link,"UPDATE decision SET answer='".$planetname."', planet='".$planetname."' WHERE sun='".$sun."'");
                                    }
                                }
                            }
                            else{
                                mysqli_query($link,"INSERT INTO connection(who,sun,moon,time,text) VALUES (2,'".$sun."','".$moon."',".$time.",'Umím jen číslice a písmena od 3 do 20ti znaků.')");
                            }
                        }
                        else if($decision["question"]==9){
                            for($i=0;$i<count($sundisagree);$i++){
                                if(strpos(mb_strtolower($text,'UTF-8'),$sundisagree[$i])!==false){
                                    $isno=true;
                                    break;
                                }
                            }

                            if(!$isno){
                                for($i=0;$i<count($sunagree);$i++){
                                    if(strpos(mb_strtolower($text,'UTF-8'),$sunagree[$i])!==false){
                                        mysqli_query($link,"UPDATE decision SET answer='1' WHERE sun='".$sun."'");
                                        break;
                                    }
                                }
                            }
                            else{
                                mysqli_query($link,"UPDATE decision SET answer='0' WHERE sun='".$sun."'");
                            }
                        }
                    }
                    else{ //im moon
                        if($decision["question"]==2 || $decision["question"]==3){
                            for($i=0;$i<count($no);$i++){
                                if(strpos(mb_strtolower($text,'UTF-8'),$no[$i])!==false){
                                    $isno=true;
                                    break;
                                }
                            }

                            if(!$isno){
                                for($i=0;$i<count($yes);$i++){
                                    if(strpos(mb_strtolower($text,'UTF-8'),$yes[$i])!==false){
                                        mysqli_query($link,"UPDATE decision SET answer='1' WHERE sun='".$sun."'");
                                        break;
                                    }
                                }
                            }
                            else{
                                mysqli_query($link,"UPDATE decision SET answer='0' WHERE sun='".$sun."'");
                            }
                        }
                        else if($decision["question"]==6){
                            for($i=0;$i<count($moondisagree);$i++){
                                if(strpos(mb_strtolower($text,'UTF-8'),$moondisagree[$i])!==false){
                                    $isno=true;
                                    break;
                                }
                            }

                            if(!$isno){
                                for($i=0;$i<count($moonagree);$i++){
                                    if(strpos(mb_strtolower($text,'UTF-8'),$moonagree[$i])!==false){
                                        mysqli_query($link,"UPDATE decision SET answer='1' WHERE sun='".$sun."'");
                                        break;
                                    }
                                }
                            }
                            else{
                                mysqli_query($link,"UPDATE decision SET answer='0' WHERE sun='".$sun."'");
                            }
                        }
                        else if($decision["question"]==8 || $decision["question"]==10){
                            include "colorBank.php";

                            $trigger=false;
                            for($i=1;$i<count($colorbank);$i+=3){
                                if(strpos(simplify($text),simplify($colorbank[$i]))!==false || strpos(simplify($text),simplify($colorbank[$i-1]))!==false){
                                    $colorhex=$colorbank[$i+1];
                                    $colorname=$colorbank[$i];
                                    $colorname2=mb_convert_case($colorbank[$i-1],MB_CASE_TITLE,'UTF-8');
                                    $trigger=true;
                                }
                            }                         

                            if($trigger){
                                mysqli_query($link,"UPDATE decision SET answer='".$colorname."',color='".$colorhex."',colorname='".$colorname."',colorname2='".$colorname2."' WHERE sun='".$sun."'");
                            }
                        }
                    }
                }
            }
        }
    }
?>