

<!-- creo una funzione per generare una strong passward -->

  

<?php

function generateStrongPassword($length) {
 // <!-- 1- definizione dei caratteri possibilinella pw  in una variabile-->
  $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@$&%#()*^?'-+";

  //<!-- 2- stringa vuota per la pw -->
  $password = "";

  //<!-- 4-  ciclo  for per generare ogni carattere nella stringa -->
  for ($i = 0; $i < $length; $i++) {
    $randomChar = $characters[rand(0, strlen($characters) - 1)];
    $password .= $randomChar;
}

  //<!-- 7- Restituisco la pass generata  -->
  return $password;

  
}





?>

