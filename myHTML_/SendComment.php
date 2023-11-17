<?php
require_once "pdo.php";

if (isset($_SESSION["userName"]))  // si est connecte
{
    // on stocke les infos de sessions
    $userEmail = $_SESSION["userEmail"];
    $userName = $_SESSION["userName"];
    $comment = $_POST["comment"];
    $table = $_POST["table"];
    if (empty($comment))
    {
        // si pas de commentaire quitter la page
        exit();
    }

    // inserer une nouvelle ligne dans la table commenttechs avec commentSender = $userEmail; commentContent = $comment; commentSenderName = $userName
    $conn->exec("INSERT INTO $table (commentSender, commentSenderName, commentContent) VALUES (\"$userEmail\", \"$userName\", \"$comment\")");
}
else
{
    // si pas de session active renvoyer un message d erreur
    echo "You must be logged in to post a comment";
}
// revenir a la page speedrun
// header() permet de rentrer une nouvelle url dans a barre d adresse
$location = $_POST["origin"];
header("Location: $location");

?>