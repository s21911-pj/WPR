<?php
if(isset($_POST["result"])){
    $Number[0]=$_POST["i"];
    $Number[1]=$_POST["j"];
    $Number[2]=$_POST["k"];

    
    
    for ($x=0; $x<count($Number); $x++){
        for($y=0; $y<count($Number)-1; $y++){
            if($Number[$y]>$Number[$y+1]){
                $temp = $Number[$y+1];
                $Number[$y+1]=$Number[$y];
                $Number[$y]=$temp;
            }
        }
    }

    for($x=0;$x<count($Number);$x++){
        echo"$Number[$x]";
    }

    echo "<br>";

    for($x=count($Number)-1;$x>=0;$x--){
        echo"$Number[$x]";
    }
}
?>