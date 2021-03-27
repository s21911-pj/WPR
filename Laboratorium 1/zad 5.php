<?php
if(isset($_POST["show"])){
    $double=$_POST["double"];
    $double = "napis1 napis2";
    $napis = explode(" ",$double,2);
    echo "<br>";
    echo "$napis[1],&nbsp,$napis[0]";
    
    
    
    }
?>