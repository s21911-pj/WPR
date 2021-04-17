<?php

        if(isset($Post["potwierdz"])){
            $Lista_osób=$POST["Lista_osób"];
            echo"<form method=\"post\" action=\"zad 3.php\">";
            echo"<input name=\"LiczbaLudzi\" value=\"$Lista_osób\"hidden>";
            for($i=0;$i<$Lista_osób;$i++){
                  echo"<div>";
                  echo"<label for=\"Imie\">Imię</label>";
                  echo"<input type=\"text\" id=\"Imie\" name=\"Imie$i\" placeholder=\"Podaj Imię\">";
                  echo"<label for=\"nazwisko\">Nazwisko</label>";
                  echo"<input type=\"text\" id=\"nazwisko\" name=\"nazwisko$i\" placeholder=\"Podaj Nazwisko\">";
                  echo"<label for=\"adres\">Adres</label>";
                  echo"<input type=\"text\" id=\"adres\" name=\"adres$i\" placeholder=\"Podaj Adres\">";
                  echo"</div>";
        }
        echo"</div>";
        echo"<div class=\"date\">";
        
        echo"<label for=\"numer_karty\">numer_karty</label>";
        echo"<input type=\"text\" id=\"numer_karty\" name=\"numer_karty\" placeholder=\"podaj nr karty\">";
        echo"<label for=\"email\">e-Mail</label>";
        echo"<input type=\"email\" id=\"email\" name=\"email\" placeholder=\"podaj email\">";
        echo"<label for=\"data_przybycia\">data_przybycia</label>";
        echo"<input type=\"date\" id=\"data_przybycia\" name=\"data_przybycia\">";
        echo"<label for=\"data_wyjazdu\">data_wyjazdu</label>";
        echo"<input type=\"date\" id=\"data_wyjazdu\" name=\"leave\"><br>";
        echo"<input type=\"submit\" name=\"prześlij\" value=\"prześlij\">";
        echo"</div>";
        

            }

        

        
        

    ?>