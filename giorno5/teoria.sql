/*DDL data definition language per definire creare struttura database*/
/*dml data manipulation language fare modifiche*/
/*DQL data query language leggo dati database*/
/*creare database*/
CREATE DATABASE miodb; /*creadatabae di nome miodb*/

USE miodb; /*selezionare database*/

DROP DATABASE miodb; /*cancellare*/
/*DDL su struttura database*/

CREATE TABLE IF NOT EXISTS miatab(
    /*crea nome tabella mia tabe se non esiste*/
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
/*prima colonna con chiave primaria che usa per rendere univoca i dati database come key map,si incrementa da solo*/
name VARCHAR (255) NOT NULL,
age INT UNSIGNED NOT NULL,



    /*colonne*/
)
