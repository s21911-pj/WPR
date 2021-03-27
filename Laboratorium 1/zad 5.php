<?php
if(isset($_POST["show"])){
    $double=$_POST["double"];
    $napis = explode(",",$double);
    
    echo "<br>";
    echo "%$napis[1],&nbsp,$napis[0]%\$#";
    
    
    
    }
?>