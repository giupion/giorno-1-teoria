<?php
//catturare dati
//print_r($_POST);
//qui prendo soolo na porzione
//con request prendo tutto
session_start();
//print_r($_REQUEST); //prendo da tutte le richieste dal client

$contacts=isset($_SESSION['contacts']) ?  $_SESSION['contacts']:[];
$target_dir="uploads/";


if(!empty($_FILES['image'])) //controllo che il file non sia vuot
{if($_FILES['image']['type']==='image/png' ||$_FILES['image']['type']==='image/jpg'){//controlo che il tipo di file sia png //vedo se nella variabile temporanea è stato caricato qualcosa se non c'e stato un errore
    if($_FILES['image']['size']<400000){ //piu piccolo di 400 kb
if(is_uploaded_file($_FILES['image']["tmp_name"])&&$_FILES['image']['error']===UPLOAD_ERR_OK){
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'])){
//vado a controllare se nella variali
//se tutto ok lo sposto a una variabile uploads da variabile temporanesa,
echo'caricamento avvenuto con successo';
}
else{echo 'errore';}

}
    }else{'file size troppo grande';}
}else{echo 'filetype non supportato';}}

//leggo sessione ma la sessione c'e sempre...? no! la prima volta che lancio pagina non c'e sessione quindi o ce sessione o array vuoto
//leggo se c'e qualcosa nella sessione e lo metto in contacts, se non c'e contacts è un array vuoto cosi qpoi sotto su session
$contact=['Firstname'=>$_REQUEST['firstname'], //mettimi il contenuto dell'array dentro questo array
'Lastname'=>$_REQUEST['lastname'],
'città'=>$_REQUEST['città'],
'cell'=>$_REQUEST['telefono'],
'image'=>$target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname']];


var_dump($_FILES['image']);

//inizializzo array


//controllo se presente file




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