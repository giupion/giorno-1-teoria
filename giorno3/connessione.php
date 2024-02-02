<?php
$servername = "nome_del_server";
$username = "nome_utente";
$password = "password";
$dbname = "nome_database";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}
?>
