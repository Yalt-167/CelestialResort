<!DOCTYPE html>
<html lang="en" id = "wholeContainer">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
<head>
    <title>Celeste SpeedrunTechs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div >
    <header class = "levelHeader">
        <h1>Techniques de Speedrun</h1>
    </header>
    <br>
    <div class = "levelContent">
        <form action = "SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "techs">
            <input type = "hidden" name = "origin" value = "SpeedrunTechs.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "pdo.php";
            // charger les commentaires pertinents
            // preparer une requete
            $query = $conn->prepare("SELECT * FROM techs");
            // l executer
            $query->execute();
            // en sortir les donnnees
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($data as $row)
            {
                // inserer une ligne html avec le commentaire et l envoyeur
                echo "<div class = \"review\" onclick = \"AddDeleteLink(this)\">Utilisateur: ".$row['commentSenderName']."<br>Message:".$row['commentContent']."<br><br></div><br>";
                
            }
        ?>
    </div>
</div>
</body>
</html>