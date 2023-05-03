<?php
  $paragrafo = $_POST["paragrafo"];
  $parola = $_POST["parola"];
  
  echo "Paragrafo originale: " . $paragrafo . "<br>";
  echo "Lunghezza del paragrafo: " . strlen($paragrafo) . "<br>";

  $paragrafo_censurato = str_replace($parola, '***', $paragrafo);
  echo "Paragrafo censurato: " . $paragrafo_censurato . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>