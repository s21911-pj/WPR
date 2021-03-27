<?php
if(isset($_POST["result"])){
    $i=$_POST["i"];
    }


switch($i){
    case 0:
        echo "BLAD";
        break;
    case 1:
        echo "styczen 31 dni";
         break;
    case 2:
         echo "luty 29 dni";
         break;
    case 3:
         echo "marzec 31 dni";
         break;
    case 4:
         echo "kwiecien 30 dni";
         break;
    case 5:
         echo "maj 31 dni";
         break;
    case 6:
         echo "czerwiec 30 dni";
         break;
    case 7:
         echo "lipiec 31 dni";
         break;
    case 8:
         echo "sierpien 31 dni";
         break;
    case 9:
         echo "wrzesien 30 dni";
         break;
    case 10:
         echo "pazdzierdnik 31 dni";
         break;
    case 11:
         echo "listopad 30 dni";
         break;
    case 12:
         echo "grudzien 31 dni";
         break;
     default:
          echo"BŁĄD";
          break;
}

?>