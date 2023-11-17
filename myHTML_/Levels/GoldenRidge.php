<!DOCTYPE html>
<html lang="en" id = "GoldenRidgePage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
    </head>
<body>
    <header class = "levelHeader">
        <h1>Golden Ridge</h1>
    </header>

    <div class = "levelContent">
        <p>  Golden Ridge est le quatrième chapitre de Celeste. 
         Il dispose de la mécanique du vent et d’autres nouveaux objets tels que
         les nuages, les bulles vertes et les plates-formes mobiles 
         qui peuvent être déclenchés par l’interaction du joueur.</p>

    <br> 
    <br>
    <h3> Les objets : </h3>
    <ul>
        <li> Nuages blancs : on peut monter dessus comme une plateforme </li>
        <li> Bulles vertes </li>
        <li> Eau </li>
        <li> Vent </li>
        <li>  Pointes de cristal </li>
        <li>  Murs brisables </li>
        <li> Nuages roses  </li>
        <li> Plateformes qui disparaissent quand on marche desssus </li>
        <li> Plateformes mobiles </li>
        <li> Cristaux </li>
        <li> Boucliers </li>
        <li>  Plateformes activées par le bouclier </li>
        <li> Ressorts/tremplin </li>
        <li> Jumelles crâniennes : type de block qui apparaissent 
            dès que l'on marche dessus en rouge et nous tue </li>
        <li> Cassette </li>
      
    </ul>
    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "goldenridge">
            <input type = "hidden" name = "origin" value = "Levels/GoldenRidge.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM goldenridge");
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
 