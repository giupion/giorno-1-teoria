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

$image=$target_dir.'avatar.png';



if(!empty($_FILES['image'])) //controllo che il file non sia vuot
{if($_FILES['image']['type']==='image/png' ||$_FILES['image']['type']==='image/jpg'){//controlo che il tipo di file sia png //vedo se nella variabile temporanea è stato caricato qualcosa se non c'e stato un errore
    if($_FILES['image']['size']<400000){ //piu piccolo di 400 kb
if(is_uploaded_file($_FILES['image']["tmp_name"])&&$_FILES['image']['error']===UPLOAD_ERR_OK){
if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'])){

    $image=$target_dir.$_REQUEST['firstname'].'-'.$_REQUEST['lastname'];
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
$re = '/^((00|0)?39[1-9]{1}[0-9]{8,9})$/m';


preg_match_all($re, htmlspecialchars($_REQUEST['telefono']),$matches, PREG_SET_ORDER, 0);

//fare i controlli di validazione dei campi
$firstname = strlen(trim(htmlspecialchars($_REQUEST['firstname']))) > 2 ? trim(htmlspecialchars($_REQUEST['firstname'])) : exit();
$lastname=$_REQUEST['lastname'];//faccio stesse cose
$città=$_REQUEST['città'];
$telefono=$matches ? $_REQUEST['telefono']:exit();
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];

;

// Print the entire match result
var_dump($matches);


$contact=['Firstname'=>$_REQUEST['firstname'], //mettimi il contenuto dell'array dentro questo array
'Lastname'=>$_REQUEST['lastname'],
'città'=>$_REQUEST['città'],
'cell'=>$_REQUEST['telefono'],
'email'=>$_REQUEST['email'],
'password'=>$_REQUEST['password'],
'image'=>$image];


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

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';             //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '86c0ecff78884d';                       //SMTP username
    $mail->Password   = '74df30e674fcbe';                       //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 2525;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   

    //Recipients
    //setto invio mail al secondo dinamioc il primo metto il mi oamminastratore

    $mail->setFrom('giuseppesansone144@gmail.com', 'Mailer');
    $mail->addAddress($email, $firstname.' '.$lastname); //mandi a chi ha fatto la registrazione sono variabile salvate prima    //Add a recipient
    $mail->addAddress('giuseppesansone144@gmail.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');



    //Attachments
    $mail->addAttachment($image);         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'grazie per esserti registrato al nostro sito.';
    $mail->Body    = ' <b>Ti aspettiamo sul nostro sito rubrica</b>';
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header('Location:http://localhost/giorno-1-teoria/giorno4/')

//sanitize toglie i caratteri non consentiti email che ne so !
//validate ti dice se è di qiel formato o meno con true e false..tipo manca http, per l'url false

//perche devi validare lato server...quindi si fa n'altro controllo lato server per sicurezza
//validare e pulire firstname
//htmlspecialchars caratteri speiciali in html per evitare attacchi xss inserendo javascritp dannoso
//trim togliere spazi banchi inizio e fine 
//strlen dopo pulizia e rimozione spazio maggiore 2 caratteri
//se strlen è vera firstname impostato con valore pulit o e trimmato 
//lo script si interrompe se se non ci sono questi requisiti di lunghezza
//quindi < < ecc li mette inhtml &amp altrimenti sarebbe un simbolo e chiunque ti butto all'aria un sito ti mette codice js e te lo rovina
//FILTER_SANITIZE_EMAIL cosa fa
?>


