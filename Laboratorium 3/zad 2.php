<!-- Formularz zapisujący dane do pliku:
ma posiadać pola tekstowe i przycisk zapisu
stwórz plik tekstowy, do którego będą zapisywane dane (przez skrypt)
skrypt, przyjmujący dane z formularza, ma zapisać tekst do pliku, dopisując go na
końcu ( jako nowa linia) -->


<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
            <text>Document</text>
            <form action="zad 2.php" method="post">
                <textarea name="pole1">Tu wpisz tekst</textarea>
                <br>
                <textarea name="pole2">Tu wpisz tekst</textarea>
                <br>
                <input type="submit" value="Zatwierdź">
            </form>
            <?php
            if (isset($_POST["pole1"]) && isset($_POST["pole2"])) {
                $pierwsze_pole = $_POST["pole1"];
                $drugie_pole = $_POST["pole2"];

                if (file_put_contents("./zad 2.txt", $pierwsze_pole."\r\n".$drugie_pole."\r\n", FILE_APPEND) === false) {
                    echo "Coś nie pykło";
                } else {
                    echo "Majorze melduje wykonanie zadania";
                }
            }
            ?>
        </p>
    </body>
</html>