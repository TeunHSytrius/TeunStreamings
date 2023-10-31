<?php
    require "./conf/dbconn.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren | TeunsStreaming</title>

    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--Registratie formulier-->
    <form action="./php/regist.php" method="post" id="registrationForm">
        <label for="naam">Naam</label>
        <input type="text" name="naam" id="namer" placeholder="Uw naam"><br>
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" id="psswordr" placeholder="Uw wachtwoord"><br>
        <label for="repeat_wachtwoord">Herhaal wachtwoord</label>
        <input type="password" name="repeat_wachtwoord" id="repeatpsswr" placeholder="Herhaal uw wachtwoord"><br>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="emailr" placeholder="Uw email"><br>
        <input type="submit" value="Submit"> 
    </form>
    
    <script src="./scripts/main.js" defer></script>
</body>
</html>