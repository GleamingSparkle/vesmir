<?php
    include("../sql/mysql_connect.php");
    date_default_timezone_set("UTC");
    $time=time();

    if(!function_exists('isInside')){
        function isInside($ax,$ay,$mx,$my,$nx,$ny){
            if(($ax>=$mx && $ax<=$nx) && ($ay>=$my && $ay<=$ny)){
                return true;
            }
            return false;
        }
    }

    if(!function_exists('getxy')){
        function getxy($link,$freestar,$galaxy,$left,$right,$top,$bottom,$blackhole,$bx,$by,$xmin,$xmax,$ymin,$ymax,$isradius){            
            if($blackhole){
                $mx=array($bx-$left);
                $my=array($by-$top);
                $nx=array($bx+$right+50);
                $ny=array($by+$bottom);
            }
            else{
                $mx=array();
                $my=array();
                $nx=array();
                $ny=array();
            }
        
            $sql=mysqli_query($link,"SELECT x,y,name FROM star WHERE galaxy=".$galaxy);
            while($star=mysqli_fetch_assoc($sql)){
                array_push($mx,$star["x"]-$left);
                array_push($my,$star["y"]-$top);
                array_push($nx,$star["x"]+$right+(strlen($star["name"])*5));
                array_push($ny,$star["y"]+$bottom);
            }
        
            $can=false;
            $try=0;
            $maxtry=33;
            $radius=22;
        
            while(!$can){
                while(!$can && $try<$maxtry){
                    $x=rand($xmin,$xmax);
                    $y=rand($ymin,$ymax);
        
                    if($isradius){
                        while(($x<($xmin+$radius) && $y>($ymax-$radius)) || ($x>($xmax-floor($radius/2)) && $y<($ymin+floor($radius/2)))){
                            $x=rand($xmin,$xmax);
                            $y=rand($ymin,$ymax);
                        }
                    }
        
                    $ax=$x-$left;
                    $ay=$y-$top;
                    $bx=$x+$right+(strlen($freestar)*5);
                    $by=$y-$top;
                    $cx=$x+$right+(strlen($freestar)*5);
                    $cy=$y+$bottom;
                    $dx=$x-$left;
                    $dy=$y+$bottom;
        
                    $can=true;
                    for($i=0;$i<count($mx);$i++){
                        if(isInside($x+(strlen($freestar)*3),$y,$mx[$i],$my[$i],$nx[$i],$ny[$i]) ||isInside($x+(strlen($freestar)*3),$y-$top,$mx[$i],$my[$i],$nx[$i],$ny[$i]) || isInside($x+(strlen($freestar)*3),$y+$bottom,$mx[$i],$my[$i],$nx[$i],$ny[$i]) || isInside($ax,$ay,$mx[$i],$my[$i],$nx[$i],$ny[$i]) || isInside($bx,$by,$mx[$i],$my[$i],$nx[$i],$ny[$i]) || isInside($cx,$cy,$mx[$i],$my[$i],$nx[$i],$ny[$i]) || isInside($dx,$dy,$mx[$i],$my[$i],$nx[$i],$ny[$i])){
                            $can=false;
                            break;
                        }
                    }
                    $try++;
                }
        
                $left-=1;
                $right-=1;
                $top-=3;
                $bottom-=4;
                $xmin-=27;
                $xmax+=27;
                $ymin-=27;
                $ymax+=27;
                $radius+=22;
        
                for($i=0;$i<count($mx);$i++){
                    $mx[$i]+=1;
                    $my[$i]+=3;
                    $nx[$i]-=1;
                    $ny[$i]-=4;
                }
        
                $maxtry+=$maxtry;
                $try=0;
            }
            return array($x,$y);
        }
    }

    if(!function_exists('getcolor')){
        function getcolor(){
            if(rand(0,1)==1){
                return "rgb(".rand(100,255).",".rand(0,255).",".rand(150,255).")";
            }
            else{
                return "rgb(".rand(150,255).",".rand(0,255).",".rand(100,255).")";
            }
        }
    }

    if(!function_exists('getrotation')){
        function getrotation(){
            $x=rand(0,70);

            if($x<23){
                $y=rand(-35,35);
            }
            else{
                $y=rand(-35,0);
            }
            return array($x,$y);
        }
    }

    if(!function_exists('createStar')){
        function createStar($link,$colorbank,$time,$x,$y,$galaxy,$constellation,$letter,$number,$color){
            $positions=range(0,7);
            shuffle($positions);

            $rxy=getrotation();
            $rotationx=$rxy[0];
            $rotationy=$rxy[1];
            $max=rand(1,3);
            mysqli_query($link,"INSERT INTO star(galaxy,name,constellation,color,size,x,y,rotationx,rotationy,max) VALUES (".$galaxy.",'".($letter.$number)."','".$constellation."','".$color."',80,$x,$y,$rotationx,$rotationy,8)");

            while($max>0){
                $max--;
                $myposition=array_pop($positions);
                $pick=(rand(0,floor(count($colorbank)/3)-1)*3)+1;
                $mycolor=$colorbank[$pick+1];
                $mycolorname=$colorbank[$pick];

                if($myposition<4){
                    $mysize=rand(3,10);
                    $mymax=rand(3,6);
                }
                else{
                    $mysize=rand(6,20);
                    $mymax=rand(6,9);
                }

                mysqli_query($link,"INSERT INTO planet(galaxy,star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES (".$galaxy.",'".($letter.$number)."','".($letter.($number+($myposition+1)))."','".$mycolor."','".$mycolorname."',".$mysize.",".$myposition.",".$mymax.",".($time-rand(0,(60*60*24*365))).",1000,1)");
            }
        }
    }

    $sql=mysqli_query($link,"SELECT cycle FROM global");
    if(mysqli_num_rows($sql)>0){
        $global=mysqli_fetch_assoc($sql);
        $cycle=(60*60*24*90);
        if(($global["cycle"]+$cycle)<$time){ //every 3 month wipe 
            mysqli_query($link,"UPDATE global SET cycle=".$time);

            mysqli_query($link,"DELETE FROM connection");
            mysqli_query($link,"DELETE FROM console");
            mysqli_query($link,"DELETE FROM decision");
            mysqli_query($link,"DELETE FROM me");
            mysqli_query($link,"DELETE FROM planet");
            mysqli_query($link,"DELETE FROM star");
            mysqli_query($link,"DELETE FROM tree");
            mysqli_query($link,"DELETE FROM inventory");
            mysqli_query($link,"DELETE FROM personality");
            mysqli_query($link,"DELETE FROM recipebook");
            //mysqli_query($link,"DELETE FROM quiz");

            mysqli_query($link,"DELETE FROM question");
            mysqli_query($link,"INSERT INTO question(name,time,text,color) VALUES ('?',".$time.",'Mám chybu? Víš, jak mne vylepšit?','greenyellow')");
            mysqli_query($link,"INSERT INTO question(name,time,text,color) VALUES ('?',".$time.",'Napiš, co tě napadá.','greenyellow')");

            $moonnames=array("Diva","Shura","Cherry","Sonmi","Queen","Pocahontas","Kate","Kiki","Arabela","Mirabel","Spiral","Panda","Caroline","April","Willow","Linden","Beatrice","Eva","Lilith","Flora","Sonya","Matylda","Genny","Silque","Celica","Soraka","Poppy","Lux","Evelynn","Fiora","Elise","Caitlyn","Annie","Kayle","Ahri","Morgana","Shae","Sněženka","Kopretina","Pomněnka","Elza","Amálka","Marceline","Emily","Effy","Sandy","Marissa","Nayru","Blossom","Etna","Armen","Lorelai","Dove","Andrea","Crystal","Alice","Emma","Jessica","Tyrande","Lucy","Sára","Clover","Tiffany","Aliss","Agnes","Ysabell","Hinata","Tsunade","Gleamia","Natasha","Kassandra","Helena","Meow","Valhalla","Lyrae","Andromeda","Omnia","Candy","Monica","Ruby","Clair","Luna","Persea","Naomi","Sophia","Cassie","Ariel","Aurora","Pixie","Mortred","Padme","Summer","Cornelia","Selene","Sharyn","Annor","Orianna","Violet","Amélie","Abigail","Daisy","Leia","Clay","Tris","Ivy","Sakura","Amy","Ellie","Perenne","Aira","Ferore","Gloria","Dorothy","Alex","Holly","Marianne","Scarlet","Mia","Miki","Nicol","Sally","Swan","Tess","Yin","Lilly","Annabel","Angel","Hannah","Dorothy","Hermione","Helen","San","Eleanor","Rose");
            $sunnames=array("Sage","Fík","Solar","Hiatus","Constantine","Dante","Animus","Prince","Aladdin","Arcane","Ori","Unicorn","Sphere","Alder","Maple","Dandelion","Kain","Eden","Nephilim","Marth","Percy","Niles","Odin","Yasuo","Pantheon","Hans","Jake","Varus","Teemo","Shen","Rengar","Nocturne","Nasus","Kindred","Galio","Garen","Gnar","Ezreal","Darius","Aurelion","Seth","Ryan","Link","Horn","Elpy","Rhino","Emerald","Rick","Nall","Dyne","Shiver","Daniel","Balu","Mickey","Dean","Nettle","Rufus","Sapphire","Bounty","Oak","Cris","Neji","Itachi","Haku","Coffee","Emanuel","Paris","Achilles","Tyrael","Harry","Tallum","Crow","Thunder","Gerald","Maru","Phoenix","Eagle","Dot","Elmo","Light","Haze","Heaven","Raven","Ash","Seraph","Azrael","Theo","Shine","Ember","Ryze","Sky","Mono","Lief","Brock","Finn","Echo","Winter","Snow","Will","Hiruko","Amatsu","Tenjin","Nero","Azure","Dust","Grace","Mao","Mei","Page","Rain","Ray","Samael","Sione","Tobald","Terry","Triff","Yang","Zen","Ken","Luke","Linn","Rex","Dawn","Drake","Leo","Saovine","Sun","Scorpio");

            mysqli_query($link,"DELETE FROM mebank");
            while(count($moonnames)>0){
                mysqli_query($link,"INSERT INTO mebank(name,gender) VALUES ('".array_pop($moonnames)."',0)");
            }
            while(count($sunnames)>0){
                mysqli_query($link,"INSERT INTO mebank(name,gender) VALUES ('".array_pop($sunnames)."',1)");
            }

            $max=8;
            $rotationx=rand(50,65);
            $rotationy=rand(-20,-30);
            mysqli_query($link,"INSERT INTO star(name,constellation,color,size,x,y,rotationx,rotationy,max) VALUES ('Helios','?','gold',80,333,444,".$rotationx.",".$rotationy.",".$max.")");

            $position=0;
            $size=3;
            $max=rand(3,6);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Hermes','#808080','šedou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");
            
            $position=1;
            $size=6;
            $max=rand(3,6);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd,beatcount) VALUES ('Helios','Aphrodite','#FFF5EE','lasturovou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1,1)");

            $position=2;
            $size=6;
            $max=rand(3,6);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Gaia','#00755E','kapradinovou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");
            
            $position=3;
            $size=4;
            $max=rand(6,9);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Ares','#964B00','hnědou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");

            $position=4;
            $size=18;
            $max=rand(6,9);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Zeus','#CD9575','béžovou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");

            $position=5;
            $size=14;
            $max=rand(6,9);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Kronos','#FFEBCD','mandlovou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");

            $position=6;
            $size=8;
            $max=rand(6,9);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Ouranos','#7CB9E8','nebeskou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");

            $position=7;
            $size=8;
            $max=rand(6,9);
            mysqli_query($link,"INSERT INTO planet(star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES ('Helios','Poseidon','#0077be','oceánovou',".$size.",".$position.",".$max.",".($time-rand(0,(60*60*24*365))).",1000,1)");
        
            $anomalies=array("Eskymák","Kočičí oko","Prstenec","Tečky","Motýl","Plejády","Orion","Krab","Monocerotis");
            $colors=array("#D49763","pink","#6BBEE7","#D4F7EC","#C0ACC9","#3E78B8","#E0365D","#62979B","tomato");
            $constellations=array("Blíženců","Draka","Lyry","Herkula","Štíra","Býka","Orionu","Býka","Jednorožce");
            $types=array(8,5,6,9,2,4,10,3,7);
            $order=range(1,count($anomalies));
            shuffle($order);
            array_multisort($order,$anomalies,$colors,$constellations,$types);

            while(count($anomalies)>0){
                $myanomaly=array_pop($anomalies);
                $mycolor=array_pop($colors);
                $myconstellation=array_pop($constellations);
                $mytype=array_pop($types);

                $left=7+21;
                $right=7+21;
                $top=14+35;
                $bottom=21+42;
                $xy=getxy($link,$myanomaly,0,$left,$right,$top,$bottom,true,400,400,300,500,300,500,true);
                $x=$xy[0];
                $y=$xy[1];

                mysqli_query($link,"INSERT INTO star(name,constellation,color,size,x,y,rotationx,rotationy,max,type) VALUES ('".$myanomaly."','".$myconstellation."','".$mycolor."',80,$x,$y,0,0,0,".$mytype.")");
            }

            include "planetBank.php";
            include "colorBank.php";

            $stars=array("Atlas","Alcyone","Merope","Electra","Maia","Alnitak","Monocerotis");
            $colors=array("white","white","white","white","white","white","tomato");
            $constellations=array("Býka","Býka","Býka","Býka","Býka","Orionu","Jednorožce");

            while(count($stars)>0){
                $mystar=array_pop($stars);
                $mycolor=array_pop($colors);
                $myconstellation=array_pop($constellations);

                $positions=range(0,7);
                shuffle($positions);

                $rxy=getrotation();
                $rotationx=$rxy[0];
                $rotationy=$rxy[1];
                $max=rand(1,3);
                mysqli_query($link,"INSERT INTO star(galaxy,name,constellation,color,size,x,y,rotationx,rotationy,max) VALUES (111,'".$mystar."','".$myconstellation."','".$mycolor."',80,0,0,$rotationx,$rotationy,$max)");

                while($max>0){
                    $max--;
                    $myposition=array_pop($positions);
                    $myname=array_pop($planetbank);
                    $pick=(rand(0,floor(count($colorbank)/3)-1)*3)+1;
                    $mycolor=$colorbank[$pick+1];
                    $mycolorname=$colorbank[$pick];

                    if($myposition<4){
                        $mysize=rand(3,10);
                        $mymax=rand(3,6);
                    }
                    else{
                        $mysize=rand(6,20);
                        $mymax=rand(6,9);
                    }

                    mysqli_query($link,"INSERT INTO planet(galaxy,star,name,color,colorname,size,orbit,max,age,energy,iddqd) VALUES (111,'".$mystar."','".$myname."','".$mycolor."','".$mycolorname."',".$mysize.",".$myposition.",".$mymax.",".($time-rand(0,(60*60*24*365))).",1000,1)");
                }
            }

            $stars=array("Sirius","Vega","Polárka","Rigel","Betelgeuze","Naos","Saiph","Meissa","Thuban","Shaula","Antares","Lesath","Pollux","Capella","Bellatrix","Canopus","Alnair","Centauri","Diadem","Adhara","Cariane","Deneb","Enif","Mira","Aldebaran","Cephei","Cygni","Sirrah");
            $colors=array("#F0F3F7","skyblue","wheat","white","#C54E22","#8CA5F7","white","#EAEBF0","#69D2E8","#F4CC56","#F7C16F","#A0C0D7","#5FBBE6","#CDD0B1","#B6A5F3","#EDACF7","#9794E1","#FFF5F1","#B7B7B7","#A1A8C7","#0F7BCA","#97DBF2","#F8D673","#FCAD2D","orange","pink","#ED5E1C","#0EBDFC");
            $constellations=array("Psa","Lyry","Malé medvědice","Orionu","Orionu","Lodě","Orionu","Orionu","Draka","Štíra","Štíra","Štíra","Blíženců","Vozky","Orionu","Lodě","Jeřába","Kentaura","Bereniky","Psa","Lodě","Labutě","Pegase","Velryby","Býka","Cepheuse","Labutě","Andromedy");
            $order=range(1,count($stars));
            shuffle($order);
            array_multisort($order,$stars,$colors,$constellations);

            while(count($stars)>0){
                $mystar=array_pop($stars);
                $mycolor=array_pop($colors);
                $myconstellation=array_pop($constellations);

                $left=7+7;
                $right=7+7;
                $top=14+21;
                $bottom=21+28;
                $xy=getxy($link,$mystar,0,$left,$right,$top,$bottom,true,400,400,300,500,300,500,true);
                $x=$xy[0];
                $y=$xy[1];

                $max=8;
                $rxy=getrotation();
                $rotationx=$rxy[0];
                $rotationy=$rxy[1];
                mysqli_query($link,"INSERT INTO star(name,constellation,color,size,x,y,rotationx,rotationy,max) VALUES ('".$mystar."','".$myconstellation."','".$mycolor."',0,".$x.",".$y.",".$rotationx.",".$rotationy.",".$max.")");
            }

            createStar($link,$colorbank,$time,360,284,1,"Mečouna","M",1,"violet");
            createStar($link,$colorbank,$time,281,366,1,"Mečouna","M",10,getcolor());
            createStar($link,$colorbank,$time,443,408,1,"Mečouna","M",19,getcolor());

            $left=7+28;
            $right=7+28;
            $top=14+42;
            $bottom=21+49;
            $galaxy=2;
            for($i=0;$i<19;$i++){
                $xy=getxy($link,"A".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,400,400,200,600,200,600,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Andromedy","A",(($i*9)+1),getcolor());
            }

            createStar($link,$colorbank,$time,547+46,408+29,3,"Panny","S",1,getcolor());
            createStar($link,$colorbank,$time,355+46,417+29,3,"Panny","S",10,getcolor());
            createStar($link,$colorbank,$time,235+46,382+29,3,"Panny","S",19,getcolor());

            createStar($link,$colorbank,$time,453,521,5,"Andromedy","O",1,"yellow");
            createStar($link,$colorbank,$time,127,441,5,"Andromedy","O",10,"white");
            createStar($link,$colorbank,$time,215,277,5,"Andromedy","O",19,"white");
            createStar($link,$colorbank,$time,494,245,5,"Andromedy","O",28,"gold");
            createStar($link,$colorbank,$time,653,470,5,"Andromedy","O",37,"white");

            $left=7+7;
            $right=7+7;
            $top=14+21;
            $bottom=21+28;
            $galaxy=4;
            createStar($link,$colorbank,$time,658,315,4,"Trojúhelníku","T",1,"white");
            for($i=1;$i<11;$i++){
                $xy=getxy($link,"T".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,400,400,300,500,300,500,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Trojúhelníku","T",(($i*9)+1),getcolor());
            }

            $left=7+7;
            $right=7+7;
            $top=14+14;
            $bottom=21+21;
            $galaxy=7;
            for($i=0;$i<13;$i++){
                $xy=getxy($link,"V".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,400,400,200,500,200,500,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Velké Medvědice","V",(($i*9)+1),getcolor());
            }

            createStar($link,$colorbank,$time,273,353,6,"Létajících ryb","R",1,getcolor());
            createStar($link,$colorbank,$time,539,524,6,"Létajících ryb","R",10,getcolor());
            createStar($link,$colorbank,$time,204,461,6,"Létajících ryb","R",19,getcolor());

            createStar($link,$colorbank,$time,743,285,16,"Sochaře","K",1,"gold");
            createStar($link,$colorbank,$time,155,424,16,"Sochaře","K",10,"skyblue");
            createStar($link,$colorbank,$time,28,628,16,"Sochaře","K",19,"yellow");

            $left=7+7;
            $right=7+7;
            $top=14+14;
            $bottom=21+21;
            $galaxy=16;
            for($i=3;$i<11;$i++){
                $xy=getxy($link,"K".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,463,450,300,700,150,650,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Sochaře","K",(($i*9)+1),getcolor());
            }

            $galaxy=8;
            createStar($link,$colorbank,$time,161,443,$galaxy,"Hada","H",((0*9)+1),getcolor());
            createStar($link,$colorbank,$time,329,631,$galaxy,"Hada","H",((1*9)+1),getcolor());
            createStar($link,$colorbank,$time,221,247,$galaxy,"Hada","H",((2*9)+1),getcolor());
            createStar($link,$colorbank,$time,530,195,$galaxy,"Hada","H",((3*9)+1),getcolor());
            createStar($link,$colorbank,$time,661,404,$galaxy,"Hada","H",((4*9)+1),getcolor());
            createStar($link,$colorbank,$time,565,557,$galaxy,"Hada","H",((5*9)+1),getcolor());
            createStar($link,$colorbank,$time,448,575,$galaxy,"Hada","H",((6*9)+1),getcolor());

            $left=7+14;
            $right=7+14;
            $top=14+21;
            $bottom=21+35;
            $galaxy=11;
            for($i=0;$i<7;$i++){
                $xy=getxy($link,"B".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,400,400,300,500,300,500,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Bereniky","B",(($i*9)+1),getcolor());
            }

            createStar($link,$colorbank,$time,486,447,14,"Draka","P",1,getcolor());
            createStar($link,$colorbank,$time,549,538,14,"Draka","P",10,getcolor());
            createStar($link,$colorbank,$time,237,118,14,"Draka","P",19,getcolor());

            $galaxy=13;
            createStar($link,$colorbank,$time,337,203,$galaxy,"Havrana","X",((0*9)+1),getcolor());
            createStar($link,$colorbank,$time,351,319,$galaxy,"Havrana","X",((1*9)+1),getcolor());
            createStar($link,$colorbank,$time,176,469,$galaxy,"Havrana","X",((2*9)+1),getcolor());
            createStar($link,$colorbank,$time,246,554,$galaxy,"Havrana","X",((3*9)+1),getcolor());
            createStar($link,$colorbank,$time,390,520,$galaxy,"Havrana","X",((4*9)+1),getcolor());
            createStar($link,$colorbank,$time,214,183,$galaxy,"Havrana","X",((5*9)+1),getcolor());
            createStar($link,$colorbank,$time,115,281,$galaxy,"Havrana","X",((6*9)+1),getcolor());
            createStar($link,$colorbank,$time,309,532,$galaxy,"Havrana","X",((7*9)+1),getcolor());
            createStar($link,$colorbank,$time,558,467,$galaxy,"Havrana","X",((8*9)+1),getcolor());

            $left=7+7;
            $right=7+7;
            $top=14+14;
            $bottom=21+21;
            $galaxy=10;
            for($i=0;$i<13;$i++){
                $xy=getxy($link,"F".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,396,394,300,500,300,500,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Velké medvědice","F",(($i*9)+1),getcolor());
            }

            $left=7+7;
            $right=7+7;
            $top=14+14;
            $bottom=21+21;
            $galaxy=15;
            createStar($link,$colorbank,$time,540,333,$galaxy,"Psů","C",((0*9)+1),"white");
            createStar($link,$colorbank,$time,707,409,$galaxy,"Psů","C",((1*9)+1),"white");
            createStar($link,$colorbank,$time,111,434,$galaxy,"Psů","C",((2*9)+1),"white");
            for($i=3;$i<13;$i++){
                $xy=getxy($link,"C".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,396,397,300,500,375,425,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Psů","C",(($i*9)+1),getcolor());
            }

            $left=7+7;
            $right=7+7;
            $top=14+7;
            $bottom=21+14;
            $galaxy=12;
            for($i=0;$i<7;$i++){
                $xy=getxy($link,"W".(($i*9)+1),$galaxy,$left,$right,$top,$bottom,true,356,392,250,450,300,500,true);
                $x=$xy[0];
                $y=$xy[1];
                createStar($link,$colorbank,$time,$x,$y,$galaxy,"Psů","W",(($i*9)+1),getcolor());
            }
            mysqli_query($link,"UPDATE star SET canrename=1 WHERE galaxy>0 AND galaxy<100");
        }
    }
?>