<?php

//le variabili superglobali in php sono variabili sempre accessibili indipendentemente dallo scope e continer in go speicifiche o globali sulla richiesta , l'ambiente di esecuzione o altre informazioni 
//utilizzate dovunque sono get,post request rischiooso problemi sicureza e contiene dati dei coockei get e post, session variabili di sessione per conservare dati tra diverse pagine
//cookie per impostare nuovi cookie o leggerli files contine info sul file caricati server continer info sull'ambiente del serve 
//globals contiene tutte,non c'e bisogno di diciareare globali in ogni parte dello script
session_start();
//avvio o ripristina una sessione php sessioni servono a conservare dati attraverso richieste del browser
//in questo caso la sessione viene avviata per registrare dati  conoservare i dati dell'utente
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //if serve a capire se la richiesta http è di tipo post cioè che for inviato per fargli sapere l'arrivo
    // Recupera i dati dal form
    $username = $_POST["username"]; //utilizzando $_POST vengono recuperati i dati username , email e password
    $email = $_POST["email"];////recupera il valore associato al campo username  inviato tramite post e lo mette nella variabile username
    //post è un array associativo contienre tutti i dati inviati username rappresenta name
    $password = $_POST["password"];

    // Crea un array associativo con i dati
    $utente = array(
        'username' => $username,
        'email' => $email,
        'password' => $password
    );
    //creo un array associativo e a ogni valore del campo associa la variabile che contiene dato della richiesta post

    // Salva l'array nella variabile di sessione
    $_SESSION['utente'] = $utente;

    // Redirect alla pagina principale
    header("Location: index.php");
    exit;
} else {
    // Se la richiesta non è di tipo POST, redirect alla pagina principale
    header("Location: index.php");
    exit;
}
?>
