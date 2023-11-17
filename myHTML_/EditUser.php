<?php
require_once "pdo.php";

if (isset($_GET['userEmail']) && isset($_POST['newName'])) // rettrieve the id from the url
{
    $userIdToEdit = $_GET['userEmail'];
    $query = $conn->prepare("UPDATE users SET userame = :newUserName WHERE userEmail = $userIdToEdit");
    $query->bindValue(":newUserName", $_POST['newName']);
}
header("Location: AdminPanel.php");
?>