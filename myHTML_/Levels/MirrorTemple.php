<!DOCTYPE html>
<html lang="en" id = "MirrorTemplePage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        
    </head>
<body>    
    <header class = "levelHeader">
        <h1>Mirror Temple</h1>
    </header>

    <div class = "levelContent">
        <p> Mirror Temple est le cinquième chapitre de Celeste. 
          Il se déroule dans un ancien temple qui contient une puissance mystérieuse venant de la montagne.
          Il présente également au joueur une variété de nouvelles mécaniques. </p>
        <br> 
        <br>
        <h3> Les objets : </h3>
        <ul>
            <li> Swap Blocks </li>
            <li> Bulles rouges </li>
            <li> Torches bleues </li>
            <li> Commutateurs de tableau de bord </li>
            <li> Portes du temple </li>
            <li> Cristaux </li>
            <li> Ressorts/tremplin </li>
            <li> Les cristaux/button qu'on peut actionner </li>
            <li> Pointes </li>
            <li> Lames </li>
            <li> Clés/Serrures</li>
        </ul>

    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "mirrortemple">
            <input type = "hidden" name = "origin" value = "Levels/MirrorTemple.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM mirrortemple");
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
