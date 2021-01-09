<?php
//TODO appearance
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pojazdy</title>
    <link rel="stylesheet" href="csstyle.css" >
</head>
<body>

<div class="topnav">
    <p><strong><a href="index.php">BAZA WYPADKÓW</a></strong></p>
    <a href="#">Zarejestruj się</a>
    <a href="loginpage.php">Zaloguj się</a>
</div>

<div class="content">
    <div class="hub">
        Zalogowano jako: <?php echo $_SESSION['login'];?><br/>
        Twój email to: <?php echo $_SESSION['email'];?><br/>
        Email jawny: <?php echo $_SESSION['jawny'];?><br/>
        Dodaj wypadek: <a href="/admin/adminpanel.php">LINK</a>
    </div>
    <div class="content-left">
        <h2>Znajdź wypadek/pojazd:</h2>
        <ul>
            <li><a href="search_engine/date.php" target="iframe">Szukaj po dacie</a></li>
            <li><a href="search_engine/town.php" target="iframe">Szukaj po miejscowosci</a></li>
            <li><a href="search_engine/rej.php" target="iframe">Szukaj po rejestracji</a></li>
        </ul>

    </div>
    <div class="content-right-s" >

        <iframe src="test.php" name="iframe" width="100%" height="100%"></iframe>
    </div>

</div>




</body>
</html>





