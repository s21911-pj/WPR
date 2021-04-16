<?php
echo date('y-m-d');
echo(" ");
echo date('H:i:s');
echo("<br>");

if(isset($_POST['imie'])){
    echo $_POST['imie'];
    echo("<br>"); 
}
if(isset($_POST['nazwisko'])){
    echo $_POST['nazwisko'];
    echo("<br>"); 
}
if(isset($_POST['numer_karty'])){
    echo $_POST['numer_karty'];
    echo("<br>"); 
}
if(isset($_POST['email'])){
    echo $_POST['email'];
    echo("<br>"); 
}
if(isset($_POST['data_przybycia'])){
    echo $_POST['data_przybycia'];
    echo("<br>"); 
}
if(isset($_POST['data_wyjazdu'])){
    echo $_POST['data_wyjazdu'];
    echo("<br>");
}
if(isset($_POST['pokoj_palacych'])){
    echo $_POST['pokoj_palacych'];
    echo("<br>");
}
if(isset($_POST['łóżko_dla_dziecka'])){
    echo $_POST['łóżko_dla_dziecka'];
    echo("<br>");
}
if(isset($_POST['balkon'])){
    echo $_POST['balkon'];
    echo("<br>");
}


?>