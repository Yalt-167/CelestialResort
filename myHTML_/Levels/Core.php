<!DOCTYPE html>
<html lang = "en" id = "CorePage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
    </head>
<body>
    <header class = "levelHeader">
        <h1>Core</h1>
    </header>

    <div class = "levelContent">
        <p> Core est le huitième chapitre de Celeste.
            Ce chapitre présente diverses nouvelles fonctionnalités, 
            notamment : l’incapacité de recharger les tirets (sans utiliser un diamant,
            ou passer par une transition d’écran), et la porte de coeur de cristal. 
            La porte du cœur de cristal empêche le joueur d’accéder à la majorité du chapitre 8 : Noyau, 
            jusqu’à ce que certaines conditions soient remplies. </p>

        <br> 
        <br>
        <h3> Les objets : </h3>
        <ul>
            <li>  Pointes </li>
            <li> Dash Crystals</li>
            <li> Conveyor Walls </li>
            <li> Dash Crystals </li>
            <li> Boules de feu </li>
            <li> Ressorts/tremplin </li>
            <li> Launching Blocks </li>
            <li> Hot Bumpers </li>
            <li> Pointes </li>
            <li> Ice/Magma Barriers </li>
            <li> Interrupteurs chaud/froid</li>
            <li> Boules de glace </li>
            <li> Shattering Blocks </li>
            <li> Cristaux </li>
            <li>  Murs de glace </li>
            <li> Boucliers </li>
            <li> Plateformes activées par le bouclier </li>
            <li> Bumpers </li>
        </ul>
    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "core">
            <input type = "hidden" name = "origin" value = "Levels/Core.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM core");
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
