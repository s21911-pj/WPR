<?php
if(isset($_POST["result"])){
    $b=$_POST["b"];
    for($a = 0; $a <=$b;$a++){
        for($s = 0; $s < $a; $s++)
        {
            echo "*";
        }
        echo "<br>";
    }
    for ($d = 0; $d < $b; $d++)
    {
        for($f = $b-$d; $f > 0; $f--)
        {
            echo "*";
        }
        echo "<br>";
    }
    for ($d = 0; $d < $b; $d++)
    {
        for($i = 0; $i<$d;$i++){
            echo '&nbsp;';
        }
        for($f = $b-$d; $f > 0; $f--)
        {
            echo "*";
        }
        echo "<br>";
    }

    for ($d = 0; $d < $b; $d++)
    {
        
        for($f = $b-$d; $f > 0; $f--)
        {
            echo '&nbsp;';
        }
        for($i = 0; $i<$d+1;$i++){
            echo "*";
        }
        echo "<br>";
    }

}
?>

