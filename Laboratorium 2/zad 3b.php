<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $czas_rezerwacji=date("d.m.Y H:i:s");
        $Lista_osób=$_POST["Lista_osób"];
        
        $email=$_POST["email"];
        $numer_karty=$_POST["numer_karty"];
        $data_przybycia=$_POST["data_przybycia"];
        $data_wyjazdu=$_POST["data_wyjazdu"];

        echo"<p>zamówiono: $czas_rezerwacji</p><br>";
        echo"<p>Liczba osób: $Lista_osób</p>";
        for($i=0;$i<$Lista_osób;$i++){
        $Imie=$_POST["firstName$i"];
        echo"<p>Imię: $firstName</p>";
        $nazwisko=$_POST["nazwisko$i"];
        echo"<p>nazwisko: $nazwisko</p>";
        $adres=$_POST["adres$i"];
        echo"<p>adres: $adres</p>";
        }
        
        
        echo"<p>Data Przybycia: $data_przybycia";
        echo"<p>Data wyjazdu: $data_wyjazdu</p>";
        echo"<p>Numer Karty: $numer_karty";
        echo"<p>adres e-mail: $email";
    ?>
</body>
</html>