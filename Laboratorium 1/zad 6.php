<?php
if(isset($_POST["result"])){
    $first=$_POST["first"];
    $second=$_POST["second"];
    $third=$_POST["third"];

    if($first+$second>$third && $first+$third>$second && $second+$third>$first){
     
        echo "poprawne wartosci";

    } else {
        echo "BŁĄD";
    }
    
    
    
    
    
    }
?>