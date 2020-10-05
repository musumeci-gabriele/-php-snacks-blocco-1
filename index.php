<?php
  // PHP Snack 1:
  // Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
  // Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo schema:
  // Olimpia Milano - Cantù | 55-60

  $matches = [
    "Gennaio" => [
      "homeTeem" => "Roma",
      "hostTeem" => "Milano",
      "scoreHome" => 45,
      "scoreHost" => 55
    ],
    "Febbraio" => [
      "homeTeem" => "Roma",
      "hostTeem" => "Verona",
      "scoreHome" => 75,
      "scoreHost" => 55
    ],
    "Marzo" => [
      "homeTeem" => "Verona",
      "hostTeem" => "Palermo",
      "scoreHome" => 35,
      "scoreHost" => 23
    ],
    "Aprile" => [
      "homeTeem" => "Bologna",
      "hostTeem" => "Roma",
      "scoreHome" => 45,
      "scoreHost" => 77
    ],


  ];

  var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
  </head>

  <body>

  </body>
</html>
