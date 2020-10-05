<?php
  // PHP Snack 2:
  // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
  // 1. name sia più lungo di 3 caratteri,
  // 2. che mail contenga un punto e una chiocciola
  // 3. e che age sia un numero.
  // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

  $contactName = $_GET["name"];
  $contactEmail = $_GET["email"];
  $contactAge = $_GET["age"];

  // Stampa del nome inserito e della sua lunghezza.
  echo "Il nome inserito e'"." $contactName "."e la sua lunghezza e' ".strlen($contactName)."."."<br/>";

  // controllo della lunghezza se e' > < = a 3
  if (strlen($contactName) > 3) {
    echo "La lunghezza del nome e superiore a 3 caratteri."."<br/>";
  }
  elseif (strlen($contactName) == 3) {
    echo "La lunghezza del nome e' uguale a 3 caratteri."."<br/>";
  }
  else {
    echo "La lunghezza del nome e' minore di 3 caratteri."."<br/>";
  }

  // controllo se l'email contiene un . o una @
  if (strpos($contactEmail, ".") !== false && strpos($contactEmail, "@") !== false) {
    echo "L'email inserita e': ".$contactEmail."<br/>";
  }else {
    echo "L'email inserita non e' corretta. "."<br/>";
  }

  // controllo se l'eta' e' un numero
  if (is_numeric($contactAge) && $contactAge > 0) {
   echo "L'eta' inserita e': ".$contactAge."<br/>";
 } else {
   echo "L'eta' inserita non e' corretta. "."<br/>";
 }


?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PHP Snack 2</title>
   </head>
   <body>

   </body>
 </html>
