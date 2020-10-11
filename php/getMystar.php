<?php
    include("../sql/mysql_connect.php");

    $name=$_POST["name"];
    $hash=$_POST["hash"];

    $sql=mysqli_query($link,"SELECT things FROM me WHERE name='".$name."' AND hash='".$hash."'");
    if(mysqli_num_rows($sql)>0){
        $me=mysqli_fetch_assoc($sql);
        if($me["things"]>6){
            $sql=mysqli_query($link,"SELECT galaxy,color FROM star WHERE name='".$name."'");
            if(mysqli_num_rows($sql)>0){
                $star=mysqli_fetch_assoc($sql);
                echo "{";
                echo '"galaxy":'.$star["galaxy"].',';
                echo '"color":"'.$star["color"].'"';
                echo "}";
            }
            else{
                $sql=mysqli_query($link,"SELECT galaxy,color,name FROM star WHERE canrename=1 ORDER BY name ASC LIMIT 1");
                if(mysqli_num_rows($sql)>0){
                    $star=mysqli_fetch_assoc($sql);
                    mysqli_query($link,"UPDATE star SET name='".$name."',canrename=0 WHERE name='".$star["name"]."'");
                    mysqli_query($link,"UPDATE planet SET star='".$name."' WHERE star='".$star["name"]."'");
                    echo "{";
                    echo '"galaxy":'.$star["galaxy"].',';
                    echo '"color":"'.$star["color"].'"';
                    echo "}";
                }
            }
        }
    }
?>