<?php
  // PHP Snack 1:
  // Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
  // Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
  // Stampiamo a schermo tutte le partite con questo schema:
  // Olimpia Milano - Cantù | 55-60

  $matches = [
    [
      "homeTeem" => "Roma",
      "hostTeem" => "Milano",
      "scoreHome" => 45,
      "scoreHost" => 55
    ],
    [
      "homeTeem" => "Roma",
      "hostTeem" => "Verona",
      "scoreHome" => 75,
      "scoreHost" => 55
    ],
    [
      "homeTeem" => "Verona",
      "hostTeem" => "Palermo",
      "scoreHome" => 35,
      "scoreHost" => 23
    ],
    [
      "homeTeem" => "Bologna",
      "hostTeem" => "Roma",
      "scoreHome" => 45,
      "scoreHost" => 77
    ],


  ];


  for ($i = 0; $i < count($matches); $i++) {
    var_dump($matches[$i]["homeTeem"]" - "$matches[$i]["hostTeem"]" | "$matches[$i]["scoreHome"]" - "$matches[$i]["scoreHost"] );
  }
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
