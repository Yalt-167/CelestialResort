<!DOCTYPE html>
<html lang = "en" id = "SummitPage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
    </head>
<body>
    <header class = "levelHeader">
        <h1>Summit</h1>
    </header>

    <div class = "levelContent">
        <p> Sommet est le septième chapitre de Celeste. 
        C'est le dernier chapitre pré-épilogue qui est une combinaison 
        de mécaniques d'autres chapitres, cependant avec la capacité du joueur à dash à deux reprises dans les airs.</p>
        <br> 
        <br>
        <h3> Les objets : </h3>
        <ul>
            <li> Cristaux </li>
            <li> Ressorts </li>
            <li> Plateforme qui disparaissent quand on marche dessus </li>
            <li> Murs cassables </li>
            <li> Pics </li>
            <li> Orbes violettes </li>
        </ul>
    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "summit">
            <input type = "hidden" name = "origin" value = "Levels/Summit.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM summit");
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
