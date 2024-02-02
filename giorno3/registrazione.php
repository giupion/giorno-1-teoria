<?php
session_start();

// Controlla se l'utente è già loggato
if (isset($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// Inizializza le variabili
$errors = [];
$successMessage = '';

// Processa il form quando viene inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validazione dei campi
    if (empty($_POST['firstname'])) {
        $errors[] = 'Il campo Nome è obbligatorio.';
    }

    if (empty($_POST['lastname'])) {
        $errors[] = 'Il campo Cognome è obbligatorio.';
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Inserisci un indirizzo email valido.';
    }

    if (empty($_POST['password'])) {
        $errors[] = 'Il campo Password è obbligatorio.';
    }

    // Se non ci sono errori di validazione, procedi con la registrazione
    if (empty($errors)) {
      
        $user = [
            'Firstname' => $_POST['firstname'],
            'Lastname' => $_POST['lastname'],
            'Email' => $_POST['email'],
            'Password' => password_hash($_POST['password'], PASSWORD_DEFAULT), // Raccomandato: usa password_hash()
        ];

        $_SESSION['registered_user'] = $user;

        // Redirect dopo la registrazione
        header('Location: registration_success.php');
        exit();
    }
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

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- Form di registrazione -->
        <form method="post" action="register.php">
            <div class="mb-3">
                <label for="firstname" class="form-label">Nome</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</body>
</html>