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
        'username' => $username, //valore diventa john_dohe
        'email' => $email,
        'password' => $password
    );

    //Quindi, se ad esempio $username contenesse la stringa "john_doe", $email contenesse "john.doe@example.com" e $password contenesse "securePassword123", l'array associativo risultante sarebbe:
    //creo un array associativo e a ogni valore del campo associa la variabile che contiene dato della richiesta post

    // Salva l'array nella variabile di sessione
    $_SESSION['utente'] = $utente;
    //viene utilizzato per salvare array precedente nella variabile di sessione cosi globalmente i dati sono salvati in piu pagine
    //session superglobale che conserva dati in piu pagine finche sessione chiusa o discrtutta
    //la chiave utente posso scegliere qualsiasi eh pure pippo è la chiave e il valore è $utente, alla fine è un array associativo pippo
    //per accedere in un altra pagina o scrip a questo array utente basta che scrivo $utente=$_SESSION['utente'] e lo richiamo

    // Redirect alla pagina principale
    header("Location: index.php");// come window location alla fine salvato l'array con dati in session disponibile a livello glovbale faccio na cosa ovvero mi sposto su index php.
    //location specifica l'url
    //exit usato per terminare esecuzione script
    exit;//questo viene esguito solo se la richiesta è post per stare piu tranquilli, ma cmq l'indirizzamento ti porta sempre a index.php
} else {
    // Se la richiesta non è di tipo POST, redirect alla pagina principale
    header("Location: index.php");
    exit;
}
?>
