<?php
require_once "pdo.php";

if (isset($_SESSION["userName"])) // si l utilisateur est connecte
{
    // on stocke les infos de sessions
    $userEmail = $_SESSION["userEmail"];
    $userName = $_SESSION["userName"];
    $comment = $_POST["comment"];
    if (empty($comment))
    {
        // si pas de commentaire quitter la page
        exit();
    }
    // inserer une nouvelle ligne dans la table commenttechs avec commentSender = $userEmail; commentContent = $comment; commentSenderName = $userName
    $conn->exec("INSERT INTO commenttechs (commentSender, commentContent, commentSenderName) VALUES (\"$userEmail\", \"$comment\", \"$userName\")");
}   
else
{
    // si pas de session active renvoyer un message d erreur
    echo "You must be logged in to post a comment";
}
// revenir a la page speedrun
// header() permet de rentrer une nouvelle url dans a barre d adresse
header("Location: SpeedrunTechs.php");
?>