<?php //ha salvato il contenuto in sessione da gestione?
//vedo cosa ce in session
session_start();
print_r($_SESSION); //prendo da tutte le richieste dal client

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
    <div class="container">  <!--enctype serve a caricare immagine-->
        <form method="post" action="gestione.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label  class="form-label">name</label>
                <input type="text" class="form-control" placeholder="...firstname" name="firstname">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">lastname</label>
                <input type="text" class="form-control" placeholder="...lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label class="form-label">città</label>
                <input type="text" class="form-control" placeholder="...Città" name="città">
            </div>
            <div class="mb-3">
                <label  class="form-label">cell</label>
                <input type="text" class="form-control" placeholder="...Telefono" name="telefono">
            </div>

            <div class="mb-3">
                <label  class="form-label">Immagine</label>
                <input type="file" class="form-control" placeholder="...immagine" name="immagine">
            </div>
          
            <button type="submit" class="btn btn-primary">add contact</button>
        </form>


    </div>
</hr>
<div class="my-3">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">city</th>
      <th scope="col">cell</th>
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
    </tr>
  <?php }?>
  
  </tbody>
</table>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>