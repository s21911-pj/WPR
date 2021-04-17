<?php

if(isset($_POST["sprawdź"])){
    $a=$_POST["a"];
    $czypierwsza = true;
    $i=2;

    while($i<$a){
        if($a % $i ==0){
            $czypierwsza = false;
        }
        $i++;
    }
    
    
    if($czypierwsza){
        echo "<br>liczba $a jest pierwsza";
        echo "<br>wykonano $i sprawdzen";
    }else{
        echo "<br>liczba $a nie jest pierwsza";
        echo "<br>wykonano $i sprawdzen";
    }
    
    echo "<br>sprawdzenie 2";
    $czy = true;
    $j=2;

    while($j < $a)
    {
      if($a % $j == 0 || $a %2==0 || $a %3==0)
      {
        $czy = false;
      }
      $j++;
    }
    if($czy){
        echo "<br>liczba $a jest pierwsza";
        echo "<br>wykonano $j sprawdzen";
    }else{
        echo "<br>liczba $a nie jest pierwsza";
        echo "<br>wykonano $j sprawdzen";
    }


    }
    

        
       
       

?>