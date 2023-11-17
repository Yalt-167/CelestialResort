<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Celeste is a masterpiece Login</title>
</head>
<body>
    <!-- not quite but same css -->
    <div class = "loginPopUp" id = "loginPopUp"> 
        <div id = "wholeLoginDiv">
            <div class = "loginContainer">
                <span onclick = "NavigateToPage('index.php')">X</span>
                <h2>Contact us</h2>
                <form action = "Mail.php" method = "post">
                    <input type = "text" placeholder = "Nickname" name = "userName" required><br>
                    <input type = "email" placeholder = "Email" name = "userEmail" required><br>
                    <input type = "text" placeholder = "Subject" name = "subject" required><br>
                    <textarea placeholder = "Enter your message" name = "message" rows = "4" required></textarea><br>
                    <input type = "submit" name = "Send Message" value = "Submit">
                </form>
            </div>
        </div>
    </div>
    <script src="Logic/main.js"></script>
</body>
</html>