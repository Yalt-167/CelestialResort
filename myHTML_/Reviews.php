<!DOCTYPE html>
<html lang="en" id = "reviewPage" class = "page">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
<head>
    <title>Celeste Reviews</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- <script>
        // < ?php if ($_SESSION["isAdmin"]): ?>
        function addDeleteLink(clickedDiv) {
            
            let deleteLink = document.createElement("a");
            deleteLink.innerHTML = "Delete";
            deleteLink.className = "deleteLink";
            deleteLink.href = "";

            deleteLink.addEventListener("click", (event) => {
                event.preventDefault();
                clickedDiv.remove();
                deleteLink.remove();
            });

            // Append the link next to the clicked div
            clickedDiv.parentNode.insertBefore(deleteLink, clickedDiv.nextSibling);
        }
        // < ?php endif ?>
    </script> -->
    <div id = "wholeContainer">
        <header>
            <h1>La Station Céleste: Critique</h1>
            <?php
                require_once "pdo.php"; 
                // n inclut pas vrm de logique de base de donne mais l appel de start_session() est dedans
                // afficher la banniere login si l utilisateur n est pas connecte sinn afficher un boouton deconnecter
                echo isset($_SESSION["userName"]) ?  "<div id = \"loginBanner\"><form action = \"Disconnect.php\" method = \"post\"><input type = \"submit\" value = Disconnect></input></form></div>" : "<div id = \"loginBanner\"><a href = \"SignUp.html\">Login</a></div>";
            ?>
            <br>
            <br>
            <div id = "banner"></div>
        </header>
        <nav id = "upperNav">
            <ul>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "index.php">Accueil</a></li></span>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "index.php #levels">Niveaux</a></li></span>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "SpeedrunTechs.php">Techniques de Speedrun</a></li></span>
            </ul>
        </nav>
        <br>
    </div>
    <div class = "reviewsSection">
        <form action = "SendComment.php" method = "post">
            <!-- // une ligne cache avec une valeur preremplie permet d envoyer des infos ds le php -->
            <!-- donc ici cela permet de referencer un seul script qui va gerer toutes les logiques de commentaires -->
            <!-- cette ligne gerant le nom de la table a affecter -->
            <input type = "hidden" name = "table" value = "reviews">
            <!-- celle ci gerant l adresse de la page chargee apres l execution de la logique-->
            <input type = "hidden" name = "origin" value = "Reviews.php">
            <textarea placeholder = "Partager une critique " name = "comment" rows = "4" required></textarea>
    
            <input type = "submit" value = "Submit review"></input>
        </form>
    </div>
    <br>
    <br>
    <br>
    <div class = "reviewsSection">
        <?php 
            require_once "pdo.php";
            // charger les commentaires pertinents
            $query = $conn->prepare("SELECT * FROM reviews");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($data as $row)
            {
                echo "<div class = \"review\" onclick = \"AddDeleteLink(this)\">Utilisateur: ".$row['commentSenderName']."<br>Message:".$row['commentContent']."<br><br></div><br>";
                
            }
        ?>
    </div>
        
    <script src = "Logic/main.js">
    </script>
    
</body>
</html>
