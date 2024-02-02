<?php
include 'connessione.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Esegui la query per ottenere i dettagli dell'utente
    $query = "SELECT * FROM utenti WHERE id = $id";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    } else {
        die("Utente non trovato");
    }
} else {
    die("ID utente non specificato");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio Utente</title>
</head>
<body>
    <h1>Dettaglio Utente</h1>

    <ul>
        <li><strong>ID:</strong> <?php echo $user['id']; ?></li>
        <li><strong>Nome:</strong> <?php echo $user['nome']; ?></li>
        <li><strong>Email:</strong> <?php echo $user['email']; ?></li>
    </ul>

    <a href="index.php">Torna alla Lista Utenti</a>
</body>
</html>