<?php
session_start(); // recupere la session
session_unset(); // suprime els donnees de la session
session_destroy(); // detruit la session
header("Location: index.php"); // renvoie a l accueil
?>