<?php
session_start();

// Controlla se l'utente è loggato
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Il tuo codice di verifica del login va qui

// Se l'utente non è loggato, mostra il modulo di login
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Includi il tuo CSS e il link a Bootstrap qui -->
</head>
<body>
    <!-- Modulo di login -->
    <div class="container mt-5">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <!-- I tuoi campi del modulo di login vanno qui -->
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <!-- Includi il tuo JavaScript e il link a Bootstrap JS qui -->
</body>
</html>