<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
    $name = 'Krystyna';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    echo 'tekst<br>';

    //typy danych
    //zmienne bez polskich znakow w jezyku angielskim
    //boolean
    $true = true;
    $false = false;
    echo "$true<br>"; //zwraca jeden
    echo "$false"; //nic nie zwraca

    //integer
    $bin = 0b1010; //10
    $dec = 10; //10
    $oct = 010; //8
    $hex = 0x10; //16
    echo " $bin<br>";
    echo " $dec<br>";
    echo " $oct<br>";
    echo " $hex<br>";

    //skladnia heredoc
    $name = "Anna";
    $surname = "Nowak";
    $text = <<<LABEL
    Heredoc<br>
    Imię: $name, Nazwisko: $surname
    <hr>
    LABEL;

    echo "$text";
    echo <<<etykieta
    Heredoc 2<br>
    Imię: $name<br>
    etykieta;

    $city = "Poznań";
    echo "Nazwa zmiennej: \$city, wartość $city";
     ?>
  </body>
</html>
