<!DOCTYPE html>
<html lang = "en" id = "OldSitePage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        
    </head>
<body>
    <header class = "levelHeader">
        <h1>Old Site</h1>
    </header>

    <div class = "levelContent">
        <p> Old Site est le second chapitre, il introduit plusieurs nouveaux objets 
        et est également le premier chapitre à inclure une grande quantité
    de contenu de l'histoire, ce chapitre nous présente aussi un personnage : partie "démoniaque" de Madeline </p>
    <br>
    <br>
    <h3> Les objets : </h3>
    <ul> 
        <li> blocs d'espace</li>
        <li> Pointes (comme ceux dans Mario) (déjà vu dans le chp 1)</li>
        <li> Murs brisables (déjà vu dans le chp1) </li>
        <li> Les cristaux/button qu'on peut actionner </li>
        <li> Plateformes qui tombent </li>
        <li> Jumelles crâniennes : type de block qui apparaissent dès que l'on marche dessus en rouge et nous tue </li>
        <li> Cassettes : items bonus  </li>
        <li> Feux rouges : ce n'est pas vraiment un objet mais on peut le voir en arrière plan </li> 
        <li> Les plateformes qui disparaissent (quand on marche dessus) (déjà vu dans le chp 1) </li>
    </ul>

    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "oldsite">
            <input type = "hidden" name = "origin" value = "Levels/OldSite.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM oldsite");
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