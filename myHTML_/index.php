<!DOCTYPE html>
<html lang="en">
<!-- img background https://steamuserimages-a.akamaihd.net/ugc/1297549135823923012/B67392C2C04E18F3416D0A23A9E58F29558C1923/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false -->
<head>
    <title>Celeste</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- se connecter a google font pr -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,500&display=swap" rel="stylesheet">
</head>

<body>
    <div id = "wholeContainer">
        <header id = "mainPageheader">
            <h1>La Station Céleste</h1>
            <?php   
                require_once "pdo.php"; 
                // n inclut pas vrm de logique de base de donne mais l appel de start_session() est dedans
                // afficher la banniere login si l utilisateur n est pas connecte sinn afficher un boouton deconnecter
                echo isset($_SESSION["userName"]) ?  "<div id = \"loginBanner\"><form action = \"Disconnect.php\" method = \"post\"><input type = \"submit\" value = Disconnect></input></form></div>" : "<div id = \"loginBanner\"><a href = \"SignUp.html\">Login</a></div>";
            ?>
            <br>
            <br>
            <div id = "homeBanner"></div>
        </header>
        <nav id = "upperNav">
            <ul>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "#reviews">Critiques</a></li></span>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "#levels">Niveaux</a></li></span>
                <span class = "upperNavItem dropShadowBehaviour"><li><a href = "#speedrunTechs">Speedrun</a></li></span>
            </ul>
        </nav>
        <br>
        <!-- la barre sur le cote permettant de naviguer rapidement la page sans avoir recoours a la nav qui est un bandeau sous la banniere -->
        <div id = "sideBar">  
            <ul>   
                <li><a href = "#reviews">Critiques</a></li><br>
                <li><a href = "#levels">Niveaux</a></li><br>
                <li><a href = "#speedrunTechs">Speedrun</a></li><br>
            </ul>
        </div>
        <section id = "home">
            <h2>Celeste: qu'est-ce que c'est?</h2>
            <div>
                <p>
                    Celeste est une aventure captivante  qui a su conquérir le cœur des joueurs du monde entier.<br>
                    Développé par Maddy Makes Games, Celeste offre une expérience unique mêlant plateforme exigeante, atmosphère envoûtante et une histoire profonde.<br><br>

                    &nbsp&nbsp&nbsp&nbspPlongez dans le monde de Celeste en suivant les pas de Madeline, une jeune adolescente déterminée à gravir le mystérieux mont Celeste.<br>
                    Chaque niveau du jeu présente des défis uniques, mettant à l'épreuve vos compétences en
                    matière de sauts, d'escalade et de résolution de puzzles.<br><br>
                    
                    &nbsp&nbsp&nbsp&nbspNéanmoins, ce qui distingue Celeste va bien au-delà de son gameplay raffiné. L'histoire touchante de Madeline aborde des thèmes
                    tels que la persévérance, l'acceptation de soi et la lutte contre les démons intérieurs.<br>Accompagnée d'une musique
                    envoûtante composée par Lena Raine, l'expérience devient une véritable œuvre d'art interactive.<br><br>
                    
                    &nbsp&nbsp&nbsp&nbspCeleste n'est pas simplement un défi pour les amateurs de jeux vidéo. En effet, en jouant à Céleste vous serez amené a
                    voir l'évolution de Madeline et son combat contre la dépression et l'anxiété au fur et a mesure que le sommet approche.<br>
                    Préparez-vous à être transporté dans un monde où le défi et la beauté se rencontrent, où chaque victoire est une
                    célébration, et où chaque échec est une leçon précieuse. Bienvenue dans l'univers captivant de Celeste.<br><br>
                </p>
            </div>
        </section>
        <br>
        <div id = "reviews" class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Reviews.php')">
            <h2>Critiques</h2>
            <p>
                N'achetez pas le jeu sans savoir ce dans quoi vous vous engagez (bien que vous pourriez car le jeu est un chef d'oeuvre). Voyez ce que les joueurs en ont pensé afin de savoir si oui ou non le jeu vous intéresse. Si vous possédez déja le jeu, n'hésitez pas a laisser un commentaire pour partager votre expérience avec ceux qui ne se sont pas encore décidés.
            </p>
        </div>
        <br> 
        <span id = "levels"><h2 class = "onDarkBackground">Niveaux</h2></span>
        <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/ForsakenCity.php')">
            <h3>Forsaken City</h3>
            <div class = "levelData">
                <div class = "levelImageContainer">
                    <img src = "https://i.redd.it/forsaken-city-art-by-me-v0-j3nwrq9qi6ia1.jpg?width=2550&format=pjpg&auto=webp&s=eb905969e19a97882c52938bfaa6868e76b9ae58" alt = "img" width = "200px">
                </div>
                <div class = "levelTextContainer">
                    <p>
                        Forsaken City s'étend devant Madeline comme une toile de fond lugubre, avec ses bâtiments en ruine et ses ruelles étroites.<br>
                        Des débris jonchent le sol, rappelant la décrépitude de cet endroit.<br>
                        Les vents sifflent à travers les structures éventrées, créant une atmosphère mélancolique.<br>
                        Ce niveau initial introduit subtilement les mécanismes de base, tout en servant de toile de fond à l'histoire émotionnelle qui se déroule.
                    </p>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/OldSite.php')">
                <h3>Old Site</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT138kTBwpmvCkzIQyGZYYPf2r4EGn91QazbjBi01IECADKK5fQ" alt = "img" width = 200px>
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            L'Ancien Site transporte Madeline dans un monde empreint de mystère et de spiritualité.<br>
                            Des ruines antiques témoignent d'une histoire oubliée, tandis que des vents tourbillonnants ajoutent une dimension de défi.<br>
                            Les plateformes anciennes se déplacent avec une grâce fragile, offrant des panoramas époustouflants au fur et à mesure que Madeline progresse.<br>
                            Ce niveau met à l'épreuve la précision des sauts et la maîtrise de l'environnement.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/CelestialResort.php')">
                <h3>Celestial Resort</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://i.redd.it/eea27d8nqoe71.png" alt = "img"  width = "200px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            La Station Céleste, un hôtel jadis grandiose, est maintenant en décrépitude.<br>
                            Madeline se trouve face à Oshiro, le propriétaire obsédé par le nettoyage.<br>
                            Les cristaux, les pics perfides et les plateformes instables créent un défi unique alors que Madeline s'efforce de restaurer la grandeur passée de l'hôtel.<br>
                            L'atmosphère lugubre et la dynamique du personnage ajoutent une profondeur narrative.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/GoldenRidge.php')">
                <h3>Golden Ridge</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnoiocNhlp-QpG5PRQIhlwyecZ-83cMyXCiA&usqp=CAU" alt = "img" width = "200px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Perché dans les hauteurs des montagnes, la Crête Dorée offre des panoramas à couper le souffle.<br>
                            Des vents violents rendent la progression difficile, et des oiseaux hostiles défient la traversée du ciel.<br>
                            Les cimes escarpées et les plateformes mobiles exigent une maîtrise accrue des compétences.<br>
                            L'expérience immersive est accentuée par une bande sonore envoûtante qui accompagne chaque ascension.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/MirrorTemple.php')" >
                <h3>Mirror Temple</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://steamuserimages-a.akamaihd.net/ugc/808871845681857942/D27C0AA132760F7681127149DAF41EECEA9AA73F/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt = "img" width = "200px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Le Temple des Miroirs plonge Madeline dans un royaume mystique où les réflexions et les ombres prennent vie.<br>
                            Les mécanismes de réflexion ajoutent une dimension de réflexion aux énigmes, tandis que les ombres sinistres créent une atmosphère mystérieuse.<br>
                            Ce niveau explore les thèmes de la perception de soi et de la dualité, enrichissant l'histoire narrative.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/Reflection.php')" >
                <h3>Reflection</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkMr93x3tULGsIQuAWXiWuIkPdxLVNm81l4iZQtC5oLEnUlpvK" alt = "img"  width = "200px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Réflexion plonge au cœur des luttes internes de Madeline.<br>
                            Chaque section de ce niveau introspectif représente une facette de sa personnalité, avec des séquences émotionnelles et des puzzles cérébraux qui dévoilent sa vulnérabilité.<br>
                            La narration immersive atteint son apogée, offrant aux joueurs une connexion plus profonde avec le personnage principal.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/Summit.php')">
                <h3>Summit</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX4UmyDhbfHeQz100wvm0gdGLi_KaclgynJg&usqp=CAU"
                        alt = "img" width = "150px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Le Sommet représente l'apogée de l'aventure, avec des sections variées qui rappellent les défis des niveaux précédents.<br>
                            Chaque ascension est une célébration de la maîtrise des compétences, combinant habilement les éléments de gameplay dans une expérience finale épique.<br>
                            Des panoramas spectaculaires défilent alors que Madeline atteint de nouveaux sommets, prête à conclure son voyage.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/Core.php')">
                <h3>Core</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT46cMOqKmNu6zHrw4YKvTLrhe8ky-MDi0DAw&usqp=CAU" alt = "img" width = "200px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Le Noyau, situé au cœur de la montagne, est le défi ultime.<br>
                            Des obstacles ardus, des environnements en constante évolution et des séquences exigeantes mettent à l'épreuve la détermination de Madeline.<br>
                            Le Noyau offre une conclusion intense à l'histoire, soulignant la croissance personnelle et la résilience de notre protagoniste.
                        </p>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('Levels/Farewell.php')">
                <h3>Farewell</h3>
                <div class = "levelData">
                    <div class = "levelImageContainer">
                        <img src = "https://pbs.twimg.com/media/FI0A7wvVcAAwoXu?format=jpg&name=900x900" alt = "img" width = "150px">
                    </div>
                    <div class = "levelTextContainer">
                        <p>
                            Farewell est un épilogue émotionnel qui conclut l'histoire de Celeste de manière poignante.<br>
                            Madeline se lance dans un dernier voyage difficile pour dire au revoir à ses démons intérieurs.<br>
                            Ce niveau offre des défis extrêmes, testant la maîtrise des compétences acquises au fil du jeu.<br>
                            Les environnements changeants et la musique émouvante créent une expérience finale inoubliable, célébrant le parcours de Madeline.
                        </p>
                    </div>
                </div>
            </div>
        <br>

        <div id = "speedrunTechs" class = "region SmoothShiftBehaviour clickable" onclick = "NavigateToPage('SpeedrunTechs.php')">
            <h2>Speedrun</h2>
            <div class = "levelData">
                <div class = "levelImageContainer">
                    <img src = "https://howlongtobeat.com/games/42818_Celeste.jpg" alt = "img" width = "150px">
                </div>
                <div class = "levelTextContainer">
                    <p>
                        Malgré sa difficulté extrêmement punitive, Céleste n'est pas parvenu à dissuader les speedrunners, ces joueurs à la passion inébranlable pour la vitesse. Bien que l'univers de Céleste soit jonché d'obstacles ardus et de défis éreintants, les speedrunners embrassent ces difficultés avec une détermination remarquable.Ils maîtrisent chaque recoin du jeu, exploitent les moindres failles et découvrent des raccourcis insoupçonnés. Les mouvements, précis et fluides, sont exécutés avec une habileté impressionnante, transformant les niveaux autrefois hostiles et insurmontables en un simple parcours familier.<br>

                        Néanmoins, ces speedrunners ont bien commencé à apprendre quelque part. C'est pourquoi une section dédiée au speedrun est disponible sur ce forum. Si vous êtes déjà aguerri voir rompu au speedrun de Céleste allez partagez votre précieuse expérience avec ceux qui souhaitent débuter. Si vous ne l'êtes pas, devenez le en découvrant les expériences des autres !!
                    </p>
                </div>
            </div>
        </div>

        <br>
        </br>
        <script src = "Logic/main.js">

        </script>
</body>
<footer>
    <p class = "onDarkBackground"> Copyright © </p>
    <a href = "Contact.php" class = "onDarkBackground">Contact Us</a>
</footer>
</html>


<!-- make the side bar only appear when the mouse is on the side -->

<!-- envoi d un mail a l envoi du formulaire de contact -> galere prsk uwamp a pas la config necessaire a l envoi de mail-->
<!-- utilisateur peuvent voir/modifier/supprimer leurs msgs -->
<!-- finir le pannel admin -->