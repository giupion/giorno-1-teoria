<?php
//catturare dati
//print_r($_POST);
//qui prendo soolo na porzione
//con request prendo tutto
session_start();
//print_r($_REQUEST); //prendo da tutte le richieste dal client
//se esite array conctacts all'nizio sessione portrebbe non esistere o dopo cancellazione archivio
$contacts=isset($_SESSION['contacts']) ?  $_SESSION['contacts']:[];
$target_dir="uploads/";
//cartella destinazione salvare immafini caricate

if(!empty($_FILES['image'])) //controllo che il file non sia vuot
{if($_FILES['image']['type']==='image/png' ||$_FILES['image']['type']==='image/jpg'){//controlo che il tipo di file sia png //vedo se nella variabile temporanea è stato caricato qualcosa se non c'e stato un errore
    if($_FILES['image']['size']<400000){ //piu piccolo di 400 kb
if(is_uploaded_file($_FILES['image']["tmp_name"])&&$_FILES['image']['error']===UPLOAD_ERR_OK){
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'])){
//vado a controllare se nella variali is uploaded file verifica caricamento form e invioe cne non ci siano errori
//se tutto ok lo sposto a una variabile uploads da variabile temporanesa,
//Questa condizione controlla se il file è stato caricato tramite un form (is_uploaded_file) e se non ci sono errori (UPLOAD_ERR_OK). Questa è una precauzione per assicurarsi che il file sia stato caricato con successo e non ci siano problemi.
echo'caricamento avvenuto con successo';
//"tmp_name": Questo è il sottotipo di $_FILES["image"] che contiene il percorso temporaneo del file sul server. Prima che tu decida di spostare o rinominare il file, esso si trova in questa posizione temporanea.
//tmp name percorso temporaneo da destianzione temporanea a permantente ocn dir request
//dopo tutti questu controlo li sposta su target dir con nome firstname e cognome lastname dalla richiesta quell oche abbimao digiatato
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