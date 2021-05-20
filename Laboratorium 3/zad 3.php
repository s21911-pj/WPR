<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Hotel</title>
    <style type="text/css">
        body {
            box-sizing: border-box;
        }

        form {
            display: flex;
            justify-content: left;
            align-items: center;
            border-radius: 10px;
            padding: 10px;
        }

        

       

        
       
    </style>
</head>
<body>
<img src="hotel.jpg" alt="hotel">

<form action="zad 3.php" method="post">
    <p>Liczba ludzi  </p>
    <select name="Liczba_ludzi" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    
    
    <input type="text" required name="Imie" placeholder="Imie">
    <br>
    <input type="text" required name="Nazwisko" placeholder="Nazwisko">
    <br>
    <input type="text" required name="Adres" placeholder="Adres">
    <br>
    <input type="number" required name="Karta_kredytowa" placeholder="Karta kredytowa">
    <br>
    <input type="Email" required name="Email" placeholder="Adres email">
    <br>
    <input type="date" required name="Data_przyjazdu" placeholder="Data przyjazdu">
    <input type="date" required name="Data_wyjazdu" placeholder="Data wyjazdu">
    <br><br><br><br><br><br>
    <input type="submit" value="Wyślij">
    
</form>
<?php
if(isset($_POST["Liczba_ludzi"]) && isset($_POST["Imie"]) && isset($_POST["Nazwisko"]) &&
   isset($_POST["Adres"]) && isset($_POST["Karta_kredytowa"]) && isset($_POST["Email"]) &&
   isset($_POST["Data_przyjazdu"]) && isset($_POST["Data_wyjazdu"])){
    $Liczba_ludzi = $_POST["Liczba_ludzi"];
    $Imie = $_POST["Imie"];
    $Nazwisko = $_POST["Nazwisko"];
    $Adres = $_POST["Adres"];
    $Karta_kredytowa = $_POST["Karta_kredytowa"];
    $Email = $_POST["Email"];
    $Data_przyjazdu = $_POST["Data_przyjazdu"];
    $Data_wyjazdu = $_POST["Data_wyjazdu"];

    $informacje = array($number_of_persons, $Imie, $Nazwisko, $Adres, $Karta_kredytowa, $Email, $Data_przyjazdu, $Data_wyjazdu);

    if(!$fp = fopen('lista_rezerwacji.csv', 'a')){
        echo "File cannot be opened";
    }else{
        fputcsv($fp, $informacje);
        fclose($fp);
    }
}
?>
<form action="zad 3.php" method="post">
    <label>
        <tr>
            <td><input type="submit" value="Pokaż Listę gości" name="pokaż_liste_gości"/></td>
        </tr>
    </label>
</form>

<?php
if (isset($_POST["pokaż_liste_gości"])) {
    if (($handle = fopen("lista_rezerwacji.csv", "r")) !== FALSE) {
        while (($informacje = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($informacje);
            echo "<br />";
            for ($i = 0; $i < $num; $i++) {
                echo $informacje[$i] . "<br />\n";
            }
        }
        fclose($handle);
    }
}
?>


</body>
</html>