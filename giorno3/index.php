<?php
include 'connessione.php';

// Esegui la query per ottenere la lista degli utenti
$query = "SELECT * FROM utenti";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Utenti</title>
</head>
<body>
    <h1>Lista Utenti</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Azioni</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['nome']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td><a href='dettaglio.php?id={$row['id']}'>Dettaglio</a> | <a href='modifica.php?id={$row['id']}'>Modifica</a> | <a href='elimina.php?id={$row['id']}'>Elimina</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <a href="inserisci.php">Inserisci Nuovo Utente</a>
</body>
</html>