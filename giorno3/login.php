<?php
session_start();

// Controlla se l'utente è già loggato
if (isset($_SESSION['user'])) {
    // Se l'utente è già loggato, reindirizza alla pagina principale
    header('Location: index.php');
    exit();
}

// Processa il form di login quando viene inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // In questa sezione dovresti implementare la logica per verificare le credenziali dell'utente
    // Puoi fare una query al tuo database o utilizzare un sistema di autenticazione esterno

    // Esempio: verifica se l'utente è "admin" con password "password"
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'password') {
        // Autenticazione riuscita, imposta la variabile di sessione per l'utente
        $_SESSION['user'] = $username;

        // Reindirizza alla pagina principale
        header('Location: index.php');
        exit();
    } else {
        // Se l'autenticazione fallisce, mostra un messaggio di errore
        $errorMessage = 'Credenziali non valide. Riprova.';
    }
}

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
    <!-- Contenuto del form di login -->
    <div class="container mt-5">
        <h2>Login</h2>

        <?php if (isset($errorMessage)): ?>
            <div class="alert alert-danger">
                <?= $errorMessage ?>
            </div>
        <?php endif; ?>

        <!-- Form di login -->
        <form method="post" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Nome utente</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Accedi</button>
        </form>
    </div>

    <!-- Includi il tuo JavaScript e il link a Bootstrap JS qui -->
</body>
</html>