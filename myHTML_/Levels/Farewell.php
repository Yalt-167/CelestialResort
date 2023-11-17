<!DOCTYPE html>
<html lang = "en" id = "FarewellPage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
    </head>
<body>
        <header class = "levelHeader">
            <h1>Farewell</h1>
        </header>

        <div class = "levelContent">
            <p> Farewell est le neuvième et dernier chapitre de Celeste, et a été présenté comme une mise à jour gratuite du jeu.
            Le chapitre présente plusieurs nouveaux objets et utilise des mécanismes hautement techniques, notamment Wavedashing et Wallbouncing.
            Farewell est le chapitre le plus long et le plus difficile du jeu. 
            Il est déverrouillé lorsque le chapitre 8 est terminé, mais selon la progression du joueur, 
            les sous-chapitres cinq et suivants peuvent être inaccessibles. </p>
            <br> 
            <br>
            <h3> Farewell introduit des nouveaux objets : </h3>
            <ul>
                <li>  Double crystal </li>
                <li> Méduse prachute </li>
                <li> Poisson explosif </li>
                <li> Panneau électrique </li>
                <li> Starbelts </li>
                <li> Starblades </li>
                <li> Oiseau </li>
            </ul>
        </div>
        <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "farewell">
            <input type = "hidden" name = "origin" value = "Levels/Farewell.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM farewell");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($data as $row)
            {
                echo "<div class = \"review\" onclick = \"AddDeleteLink(this)\">Utilisateur: ".$row['commentSenderName']."<br>Message:".$row['commentContent']."<br><br></div><br>";
                
            }
        ?>
    </div>
</body>
</html>