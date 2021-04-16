<?php
if(isset($_POST["mnóż"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
     echo ($a * $b)."\n";
}
if(isset($_POST["dziel"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    echo ($a / $b)."\n";
}
if(isset($_POST["dodaj"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
    echo ($a + $b)."\n";
}
if(isset($_POST["odejmij"])){
    $a=$_POST["a"];
    $b=$_POST["b"];
echo ($a - $b)."\n";
}

?>