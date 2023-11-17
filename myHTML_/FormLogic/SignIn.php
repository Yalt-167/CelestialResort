<?php
require_once "../pdo.php";
// on recupere la DB
// htmlspecialchars() supprime els balises html du string passe en parametre
$userName = htmlspecialchars($_POST["userName"]);
// filter_var() renvoie false si le premier parametre ne correspond pas au filtre passe en deuxieme parametre
$userEmail = filter_var(htmlspecialchars($_POST["userEmail"]), FILTER_VALIDATE_EMAIL);
$userPassword = $_POST["userPassword"];

// les admins (pseudo: quelconque, email: l une des cle du tableau associatif, password: valeur associe a l email utilise)
$admins = array(
    "randyYele@gmail.com" => "randy",
    "cthiery@gaming.tech" => "coralie",
    "ariviale@gaming.tech" => "antoine",
);

// si l adresse mail renseignee appartient au tableau des admins et que le mot de passe est celui associe a cette adresse mail
if (array_key_exists($userEmail, $admins) && $admins[$userEmail] === $userPassword)
{
    // est admin
    $_SESSION['userName'] = $userName;
    $_SESSION['userEmail'] = $userEmail;
    $_SESSION['isAdmin'] = true;
    
    header("Location: ../index.php");
}

// recuperer l utilisateur actuel
// preparer une requete ou l on cherche un (ou plusieurs) utilisateur qui possede l email  $userEmail
// renvoie 1 ligne max max car userEmail estn la cle primaire de la table user
$query = $conn->prepare("SELECT * FROM users WHERE userEmail = :userEmail");
// lier $userEmail avec le placeholder :userEmail dans la requete
$query->bindValue(":userEmail", $userEmail);
// executer la requete
$query->execute();
// recuperer les donnes de la requete
$data = $query->fetch(PDO::FETCH_ASSOC);
if (empty($data))
{
    // pas de donnes -> pas ouf -> utilisateur pas ds la DB
    // renvoie a la page signin avec un message d erreur ds l url
    header("Location: ../SignIn.html?error=no_account_with_this_email");
}
// booleen: true si le correct est le mm false sinn
// password_verify(p1, p2) compare un mdp (p1) avec un hash (p2)
$correctPassword = password_verify($userPassword, $data["userPassword"]);
if (!$correctPassword)
{
    // si incorrect renvoie a la page signin avec un message d erreur ds l url
    header("Location: ../SignIn.html?error=wrong_password");
}

// sinn set les valeurs de la session
$_SESSION['userName'] = $userName;
$_SESSION['userEmail'] = $userEmail;
$_SESSION['isAdmin'] = false;
header("Location: ../index.php");
?>