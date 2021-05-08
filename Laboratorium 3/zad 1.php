<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
    <form action="zad 1.php" method="post">

        <input type="number" name="liczba1" placeholder="podaj liczbe ">
        <input type="number" name="liczba2" placeholder="podaj liczbe ">


        <label> <input type="radio" id="pomnóż" name="pomnóż" value="pomnóż">pomnóż</label>
        <label><input type="radio" id="podziel" value="podziel" name="podziel">podziel</label>
        <label> <input type="radio" id="dodaj" value="dodaj" name="dodaj">dodaj</label>
        <label><input type="radio" id="odejmij" value="odejmij" name="odejmij">odejmij</label>
        <label><input type="submit" value="wybierz" name="wybierz">
    </form>


    <?php
if(isset($_POST["liczba1"]) && isset($_POST["liczba2"]) && isset($_POST["dzialanie"])){
    $a = $_POST["liczba1"];
    $b = $_POST["liczba2"];
    $dzialanie = $_POST["dzialanie"];

    include("wykonanie.php");

        switch ($dzialanie) {
                case "mnoz":
                    echo pomnóż($a,$b);
                    break;
                case "dziel":
                    echo podziel($a,$b);
                    break;
                case "dodaj":
                    echo dodaj($a,$b);
                    break;
                case "odejmij":
                    echo odejmij($a,$b);
                    break;
            }
        }


    


    ?>
    </p>
</body>
</html>