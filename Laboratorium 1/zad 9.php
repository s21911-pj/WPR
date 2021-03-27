<?php
if(isset($_POST["result"])){


    $Tablica1 = explode(",",$_POST["Tablica1"]);
    $Tablica2 = explode(",",$_POST["Tablica2"]);
    $wykonaj = 0;

    
    for($x=0; $x<count($Tablica1);$x++){
        if(!is_numeric($Tablica1[$x]) 
            || !is_numeric($Tablica2[$x]) 
            || count($Tablica1) != count($Tablica2)){
            echo "Błąd";
            exit();
        }
        $numberA =  (int)$Tablica1[$x];
        $numberB =  (int)$Tablica2[$x];
        
        $wykonaj += $numberA *$numberB;

    }
    echo "$wykonaj";
}
?>   
    
    