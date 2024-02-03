<?php
//catturare dati
//print_r($_POST);
//qui prendo soolo na porzione
//con request prendo tutto
session_start();
print_r($_REQUEST); //prendo da tutte le richieste dal client

$contacts=$_SESSION['contacts'] ?  $_SESSION['contacts']:[];
//leggo sessione ma la sessione c'e sempre...? no! la prima volta che lancio pagina non c'e sessione quindi o ce sessione o array vuoto
//leggo se c'e qualcosa nella sessione e lo metto in contacts, se non c'e contacts è un array vuoto cosi qpoi sotto su session
$contact=['Firstname'=>$_REQUEST['firstname'], //mettimi il contenuto dell'array dentro questo array
'Lastname'=>$_REQUEST['lastname'],
'città'=>$_REQUEST['città'],
'cell'=>$_REQUEST['telefono'],];

//array dentro seessione
//salvo array in sessione

//per non sovrascrivere //sbalgiavo nel non copaire tutti i contatit e a mettere il SINGOLO CONTATTO in coda
$_SESSION['contacts'] = [...$contacts, $contact];
//qua salvo lo stato precedente di contacts e in coda nell'array ci metto altro contatto cosi non sovrascrivo




//firstname e valore richiesta

//vedere come eliminare cookie
//va in gestione salva insessione e li salva in index php

session_write_close();

header('Location:http://localhost/giorno-1-teoria/giorno4/')


?>