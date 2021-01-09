<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Pojazdy</title>
    <link rel="stylesheet" href="csstyle.css" >
</head>
<body>

<div class="topnav">
    <p><strong><a href="index.php">Baza wypadków</a></strong></p>
    <a href="#">Zarejestruj się</a>
    <a href="loginpage.php">Zaloguj się</a>
</div>

<div class="content">
    <div class="column-left">
        <div class="form-content">
        <h2 class="login-banner"> Zaloguj się:</h2>
        <form action="login.php" method="post" class="form">
            <label for="login"><strong>Login:</strong> </label><br>
            <input type="text" name="login"> <br/><br/>
            <label for="pass"><strong>Hasło: </strong></label><br>
            <input type="password" name="pass"> <br/><br/>
            <input type="submit" value="Zaloguj się">
        </form>
        <?php if(isset($_SESSION['blad']))echo $_SESSION['blad'];?>
        </div>
    </div>

    <div class="column-right">
        <img src="assets/car-accident.jpg" alt="wypadek" style="width: 60%" width="100%" height="100%" >
    </div>
</div>

</body>
</html>