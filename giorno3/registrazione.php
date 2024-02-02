<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Valida e elabora i dati di registrazione
    // Il tuo codice per la validazione e il salvataggio dei dati va qui

    // Reindirizza a gestione.php per ulteriore elaborazione
    header('Location: gestione.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <!-- Includi il tuo CSS e il link a Bootstrap qui -->
</head>
<body>
    <!-- Modulo di registrazione -->
    <div class="container mt-5">
        <h2>Registrazione</h2>
        <form method="post" action="register.php">
            <!-- I tuoi campi del modulo di registrazione vanno qui -->
            <button type="submit" class="btn btn-primary">Registra</button>
        </form>
    </div>
    <!-- Includi il tuo JavaScript e il link a Bootstrap JS qui -->
</body>
</html>