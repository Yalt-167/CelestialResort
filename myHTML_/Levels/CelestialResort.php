<!DOCTYPE html>
<html lang="en" id = "CelestialResortPage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
    </head>
<body>
    <header class = "levelHeader">
        <h1>Celestial Resort</h1>
    </header>

    <div class = "levelContent">
        <p> Station céleste est le troisième chapitre de Celeste. 
            Ce chapitre présente une variété de nouveaux objets ainsi que 
            l'introduction d'Oshiro, un personnage important de l'histoire.
            Ce chapitre nous dirige dans un hotêl délabré, et nous sommes chargés 
            d'aider Oshiro (le propriétaire de l'hotêl) à le nettoyer.
            Mais quelque chose de mystérieux et de sinistre se trame....
        </p>
        <br>
        <br>
        <h3> Les objets : </h3>
        <ul>
            <li> Les cristaux/button qu'on peut actionner </li> 
            <li> Pics</li>
            <li> Clés et les serrures</li>
            <li>Boue /Boues mobiles (-> Sludge/Moving Sludge)</li>
            <li>Boue circulaire (-> Circling Sludge)</li>
            <li> Vrilles de boue (-> Sludge-Spawning Tiles) </li>
            <li> Plateforme qui disparaissent quand l'on marche dessus </li>
            <li> Murs brisables </li>
            <li> Plateformes mobiles </li>
            <li> Ressorts </li>
            <li> Orbes bleues </li>
            <li> Plateformes activées par les Orbes bleues</li>
        </ul>
    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "celestialresort">
            <input type = "hidden" name = "origin" value = "Levels/CelestialResort.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM celestialresort");
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
