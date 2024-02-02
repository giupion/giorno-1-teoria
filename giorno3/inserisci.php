<?php
include 'connessione.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Esegui l'inserimento nel database
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $query = "INSERT INTO utenti (nome, email) VALUES ('$nome', '$email')";
    $result = $conn->query($query);

    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Errore durante l'inserimento dell'utente.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserisci Utente</title>
</head>
<body>
    <h1>Inserisci Nuovo Utente</h1>

    <form action="inserisci.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
