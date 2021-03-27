<?php
if(isset($_POST["result"])){

$pangram =strtoupper($_POST["pangram"]);
$alphabet = range('A','Z');

for($i=0; $i<count($alphabet);$i++){
    if(strstr($pangram,$alphabet[$i])==FALSE){
        echo "Blad";
        exit();
    }
}

echo "zdanie jest pangramem";


}
?>