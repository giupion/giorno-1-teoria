<?php

//questo script viene usato per visualizzare i dati dell'utente registrato sulla pagina 

session_start();
//inizio la sessione cosi ho accesso a session post e compagni bella

// Recupera l'array associativo dalla variabile di sessione! l'avevamo impostato in gestione.php
//$_SESSION['utente'] = $utente; qua avevamo salvato l'array associativo in session
$utente = isset($_SESSION['utente']) ? $_SESSION['utente'] : null;
//con isset ci rendiamo conto se la varibile esiste o è null con isset ci rendiamo conto se abbiamo settato $utente a $SESSION_utente, altrimenti gli da null
//inizializzare variabile assegnare un valore a una variabile
//$utente="bellissimo"
//$dichiarazione $utente; esite ma non è inizializzata non ha valore
//quindi con isset ci rendiamo conto se utente ha valore e se è diverso da null 
//poi cn operazione ternaria ci chiediamo , se è inizializzata va di suio valore altrimenti si ci mette null
//serve a evitare erriro nel coso la variabile di sessione non esista ancora o sia stata distrutta cosi eviti di accedere a una variabile che potrebbe non esistere, cosi codice robusto è un controllo!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
</head>
<body>
   
    <h1>Dati Utente Registrato</h1>
 <!--variabile impostata globale utente
se utente diverso da null tutta la mafrina appare e si fa echi di  $utente['username'] chiave tra parentesi quadra per stampare valore!

  $utente = array(
        'username' => $username, //valore diventa john_dohe
        'email' => $email,
        'password' => $password
    );
-->
    <?php if ($utente): ?>
        <p><strong>Username:</strong> <?php echo $utente['username']; ?></p>
        <p><strong>Email:</strong> <?php echo $utente['email']; ?></p>
        <p><strong>Password:</strong> <?php echo $utente['password']; ?></p>
    <?php else: ?>
        <p>Nessun utente registrato.</p>
    <?php endif; ?>

</body>
</html>