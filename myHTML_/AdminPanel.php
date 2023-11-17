<?php
require_once "pdo.php";
// on accede au panel admin en tapant PanelAdmin.php dans la barre d adresse a la place de index.php (en etant admin sinn vous serez renvoye a l accueil)

if (!$_SESSION["isAdmin"]) // si la session actuelle n est pas admin renvoie vers index.php
{
    header("Location: index.php");
}

$query = $conn->prepare("SELECT * FROM users");
$query->execute();
$data = $query->fetchAll(PDO::FETCH_ASSOC); // recuperer tous les utilisateurs

// iterer sur les utilisateurs
foreach ($data as $row)
{

    // afficher ses infos
    echo "userName: " . $row["userName"] . ", userEmail: " . $row["userEmail"];

    // creer un lien vers DeleteUser.php avec une variable userEmail accessible en get(dans l url)
    echo "<a href=\"DeleteUser.php?userEmail=" . $row["userEmail"] . "\">Delete</a>  ";

    echo "<a href=\"EditUser.php?userEmail=" . $row["userEmail"] . "\">EditName</a>";

    echo "<br>";
}
echo "end of user list";
?>