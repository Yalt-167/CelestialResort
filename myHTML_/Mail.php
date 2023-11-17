<?php
$sender = $_POST["userEmail"];
mail("ariviale@gaming.tech", $_POST["subject"], $_POST["message"], "From: $sender");
// uwamp ne disposant pas des reglages necessaire la fonction est mail() est obsolete mais l appel de cette derniere se presenterai comme ceci
// mail("receveur", "sujet", "message", "header(s)");
?>