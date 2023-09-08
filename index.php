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

<div class="container">

  <h1>Strong Passwords Generator </h1>
  <!-- Mileston1: codice per index.php -->
  <form action="index.php" method="GET">

    <label for="passwordLength"> Password Length: </label>
    <input type="number" name="passwordLength" min="5" max="10">
    <input type="submit" value="Generate password">
    

  </form>

</div>


</body>
</html>