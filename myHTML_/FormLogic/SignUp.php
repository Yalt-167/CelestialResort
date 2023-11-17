<?php
require_once "../pdo.php";

// / htmlspecialchars() supprime els balises html du string passe en parametre
$userName = htmlspecialchars($_POST["userName"]);
// filter_var() renvoie false si le premier parametre ne correspond pas au filtre passe en deuxieme parametre
$userEmail = filter_var(htmlspecialchars($_POST["userEmail"]), FILTER_VALIDATE_EMAIL);
// compare les deux mots de passe entres et renvoie a la page signup avec une erreur ds l url si ils sont different sinnn stock le hash du mdp
$userPassword = $_POST["userPassword"] === $_POST["userPassword_"] ? password_hash(htmlspecialchars($_POST["userPassword"]), PASSWORD_DEFAULT) : header("Location: ../SignUp.html");

// requete pr voir si un utlisateur du site a deja cet email
$query = $conn->prepare("SELECT * FROM users WHERE userEmail = :userEmail");
// lier $userEmail avec le placeholder :userEmail dans la requete
$query->bindValue(":userEmail", $userEmail);
// executer la requete
$query->execute();
// recuperer les donnes de la requete
$data = $query->fetch(PDO::FETCH_ASSOC);
if (!empty($data))
{
    // si un utilisateur est trouve alors l emailn est deja pris ce qui n est pas bn
    // renvoie a la page de signup avc un message d erreur ds la barre d adresse
    header("Location: ../SignUp.html?error=email_already_taken");
}
// prepare une requete d insertion avec des placeholder (:userEmail, :userName, :userPassword)
$query = $conn->prepare("INSERT INTO users (userEmail, userName, userPassword) VALUES (:userEmail, :userName, :userPassword)");
// completer la requete en remplacant les placeholder (:userEmail, :userName, :userPassword)
$entrySuccesful = $query->execute(
    array(
        ":userEmail" => $userEmail,
        ":userName" => $userName,
        ":userPassword" => $userPassword
    )
);
// si l entree est un echec alors renvoyer a signup
if (!$entrySuccesful)
{
    header("Location: ../SignUp.html");
}
// sinn set les variables de session
$_SESSION['userName'] = $userName;
$_SESSION['userEmail'] = $userEmail;
$_SESSION['isAdmin'] = false; // if sign up then not by default then no
// et renvoyer a l accueil
header("Location: ../index.php");
?>