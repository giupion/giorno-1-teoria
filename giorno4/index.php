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
    
<div class="container">
<h1 class="text-center">rubrica app</h1>
<div class="my-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">city</th>
      <th scope="col">cell</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    <!--itero contacts key e value target blocco di codice che acetta iterazione e stampa del for each-->
    <?php 
    foreach($contacts as $key =>$contact) {
        
        ?>
    <tr>
      <th scope="row">-</th>
      <td><?=$contact['Firstname']?></td>
      
      <td><?=$contact['Lastname']?></td>
      <td><?=$contact['città']?></td>
      <td><?=$contact['cell']?></td>
      <td><?=$contact['email']?></td>
      <td><img src=<?= $contact['image'] ?> width="50" ></td>
    </tr>
  <?php }?>


  
  
  </tbody>
</table>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

