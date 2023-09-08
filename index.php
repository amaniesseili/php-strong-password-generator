<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="style.css">
  
  <title>Strong Passwords Generator </title>
</head>
<body>


<div class="container">

<header class="mb-5">
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Navbar</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
  </header>

  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
    <h1>Strong Passwords Generator </h1>
  <!-- Mileston1: codice per index.php -->
    <form action="index.php" method="GET">

        <label for="passwordLength"> Password Length </label>
          <div class="mb-4 mt-2">
            <input type="number" name="passwordLength" min="5" max="10">
          </div>
          
          <div class="mb-2 ">
          <button class="btn btn-outline-success" type="submit">Generate password</button>
            <!-- <input class="bg-success" type="submit" value="Generate password"> -->
          </div>

  
    </form>

    
  <?php

session_start();

    if(isset($_GET["passwordLength"])) {
      include ("functions.php");
      $passwordLength =(int) $_GET["passwordLength"];
      
      $password=generateStrongPassword($passwordLength);

      /*//salvo la pass in una dedicata variabile di sessione 
      $_SESSION["generatePassword"] = $password;

      //redirect alla pagina dedicata per mostrare la pass
      header("location:show_password.php");
      exit;*/

      echo '<p>Your Password :'. $password . '</p>';
}

?>

    </div>
  </div>
  




</div>


</body>
</html>