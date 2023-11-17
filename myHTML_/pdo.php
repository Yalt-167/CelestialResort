<?php
// inititalise une session
session_start();
// gere la connexion a la DB
// on l importe partt donc ca permet de disposer de la DB partt ds le code
try
{
    // le bloc try catch permet d executer des lignes de code pouvant causer une erreur
    // et gerer l erreur ds le bloc catch afin de ne pas faire crash l application/site (ici site dcp)
    $conn = new PDO(
        "mysql:host=localhost;dbname=mysitelogin",
        "root",
        "root"
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    die("Connection to DB impossible !");
}
?>