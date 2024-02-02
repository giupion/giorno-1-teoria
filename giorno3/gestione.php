<?php
session_start();

// Controlla se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se l'utente ha effettuato la registrazione
    if (isset($_SESSION['registered_user'])) {
        // Puoi inserire qui la logica per salvare l'utente nel database o in un array di utenti
        // Ad esempio, se stai utilizzando la sessione per mantenere gli utenti registrati temporaneamente:
        $registeredUser = $_SESSION['registered_user'];

        // Puoi anche fare altro con i dati, ad esempio inviarli via email, registrare attività, ecc.

        // Pulisce la sessione dall'utente registrato temporaneamente
        unset($_SESSION['registered_user']);

        // Redirect a login.php
        header('Location: login.php');
        exit();
    } else {
        // Se l'utente non ha effettuato la registrazione, reindirizza alla pagina di registrazione
        header('Location: registrazione.php');
        exit();
    }
} else {
    // Se il form non è stato inviato, reindirizza alla pagina di registrazione
    header('Location: registrazione.php');
    exit();
}
?>

