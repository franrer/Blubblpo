<?php
// Ermitteln ob die Datenbanken bereits bestehen.
try {
  $verbindung = new PDO('mysql:host=localhost;dbname=blubb', "root", "",);
} catch (\Exception $e) {
// wenn noch keine Datenbanken Bestehen weden siese Hier angelebt
$server = 'mysql:host=localhost';
$sqlBefehl = 'CREATE DATABASE IF NOT EXISTS blubb;';
$verbindung = new PDO($server, "root", "");
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$verbindung=null;
$server = 'mysql:host=localhost;dbname=blubb';
$verbindung = new PDO($server, "root", "",);
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS calender(ID INTEGER AUTO_INCREMENT, title VARCHAR (50), descriptions varchar(100), start_datetime datetime NOT NULL, end_datetime datetime DEFAULT NULL, PRIMARY KEY (ID))ENGINE=INNODB DEFAULT CHARSET=utf8mb4;;';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS user_tabelle(ID INTEGER AUTO_INCREMENT, username varchar(100), password varchar(100), email varchar(100), privalage int, PRIMARY KEY (ID));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS subscribers(ID INTEGER AUTO_INCREMENT,subsName varchar(100), email varchar(100), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS locations(id INTEGER AUTO_INCREMENT, fsk VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS category(id INTEGER AUTO_INCREMENT, preise VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS alphabet(id INTEGER AUTO_INCREMENT, genre VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS time_sort(id INTEGER AUTO_INCREMENT, mode VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS priority_sort(id INTEGER AUTO_INCREMENT, price VARCHAR (50), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
$sqlBefehl = 'CREATE TABLE IF NOT EXISTS platform(id INTEGER AUTO_INCREMENT, platform VARCHAR (100), PRIMARY KEY (id));';
$abfrage = $verbindung->prepare($sqlBefehl);
$abfrage->execute();
// Die Initialen Daten der Datenbanktabelle werden nun eingelesen
}
$verbindung=null;


 ?>
