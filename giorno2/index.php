<?php
session_start();

// Recupera l'array dalla variabile di sessione
$utente = isset($_SESSION['utente']) ? $_SESSION['utente'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>
    <h1>Dati Utente Registrato</h1>

    <?php if ($utente): ?>
        <p><strong>Username:</strong> <?php echo $utente['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $utente['email']; ?></p>
        <p><strong>Password:</strong> <?php echo $utente['password']; ?></p>
    <?php else: ?>
        <p>Nessun utente registrato.</p>
    <?php endif; ?>

</body>
</html>