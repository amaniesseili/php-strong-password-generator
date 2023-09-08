<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
  
  <title>Strong Passwords Generator </title>

</head>
<body>

<!-- creo una funzione per generare una strong passward -->
<>
  

<$php

function generateStrongPassword ($length) {
  <!-- 1- definizione dei caratteri possibilinella pw  in una variabile-->
  $caracters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@$&%#()*^?'-+";

  <!-- 2- stringa vuota per la pw -->
  $password="";

  <!-- 4-  ciclo  for per generare ogni carattere nella stringa -->
  for ($i = 0; $i < $length; $i+++) {

    <!-- 5- genero un numero casuale tra 0 e la lunghezza della stringa $caracters -->
    $randomCharacterIndex = rand(0,strlen($characters) - 1);
    <!-- 5- estrae un carattere casuale dalla stringa $characters usando l'indice casuale generato -->
    $randomChar = $characters[$randomCharacterIndex];
    <!-- 6- aggiungo il carattere casuale alla password in costruzione -->
    $password .= $randomChar; 

  }

  <!-- 7- Restituisco la pass generata  -->
  return $password;

  
}



?>

  
</body>
</html>
