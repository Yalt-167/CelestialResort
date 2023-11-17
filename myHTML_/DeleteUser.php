<?php
require_once "pdo.php";

if (isset($_GET['userEmail'])) // recuperer l utilisateur a partir de son email (cle primaire)
{
    $userToDelete = $_GET['userEmail'];
    $result = $conn->exec("DELETE FROM users WHERE userEmail = \"$userToDelete\"");
}
header("Location: AdminPanel.php"); // renvoie au panel admin
?>