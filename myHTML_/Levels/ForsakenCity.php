<!DOCTYPE html>
<html lang = "en" id = "ForsakenCityPage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
    <head>
        <title>Celeste Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        
    </head>
<body>
    </html>
        <header class = "levelHeader">
            <h1>Forsaken City</h1>
        </header>
    <div class = "levelContent">
        <p>
            Forsaken City est le premier niveau de Celeste, bien que techniquement ce premier chapitre est précédé par le proloque qui initie le joueur aux contrôles du jeu ainsi que la palette de mouvements de <a href = "" class = "onDarkBackground">Madeline</a> (Sauter, Grimper et Dash).
            Le joueur apprend également à connaître Madeline et récupères ses premières fraises (fraises qu'il sera amené à collecter tout au long de son expérience de jeu).
            Dans ce chapitre Madeline fait également la rencontre de Théo.
        </p>
        <br>
        <br>
        <h3> Les objets : </h3>
        <ul>
            <li> Pics</li>
            <li> Ressort </li>
            <li> Feux rouges</li>
            <li> Les plateformes qui disparaissent (quand on marche dessus) </li>
            <li> Murs brisables </li>
        </ul>
    </div>
    <div class = "levelContent">
        <form action = "../SendComment.php" method = "post">
            <input type = "hidden" name = "table" value = "forsakencity">
            <input type = "hidden" name = "origin" value = "Levels/ForsakenCity.php">
            <textarea placeholder = "Partagez votre expérience" name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <div class = "levelContent">
        <?php 
            require_once "../pdo.php";
    
            $query = $conn->prepare("SELECT * FROM forsakencity");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
    
            foreach ($data as $row)
            {
                echo "<div class = \"review\" onclick = \"AddDeleteLink(this)\">Utilisateur: ".$row['commentSenderName']."<br>Message:".$row['commentContent']."<br><br></div><br>";
                
            }
        ?>
    </div>
</body>

<!-- essayer de faire une section comment (l utilisateur peut envoyer un msg uniquement si il est loggedIn )-->
<!-- faire une partie B-side? -->