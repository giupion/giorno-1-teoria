<?php //ha salvato il contenuto in sessione da gestione?
//vedo cosa ce in session
session_start();
//print_r($_SESSION); //prendo da tutte le richieste dal client

//$contacts=$_SESSION['contacts'];
//vai a leggere in sessione una variabile contacts
//per non far romepre quando array vuoto
$contacts = [];
    if(isset($_SESSION['contacts'])){
        $contacts = $_SESSION['contacts'];
    }

session_write_close();




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">  <!--enctype serve a caricare immagine-->
        <form method="post" action="controller.php" enctype="multipart/form-data">
           
            <div class="mb-3">
                <label  class="form-label">email</label>
                <input type="email" class="form-control" placeholder="...email" name="email">
            </div>

            <div class="mb-3">
                <label  for="exampleInputPassword1" class="form-label">password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="...password" name="password">
            </div>
          
            <button type="submit" class="btn btn-primary">login</button>
        </form>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
