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
    <a href="#">Zalogowano jako: <?php echo $_SESSION['login'];?></a>

</div>

<div class="content">
    <div class="hub">
        Twój email to: <?php echo $_SESSION['email'];?><br/>
        Email jawny: <?php echo $_SESSION['jawny'];?><br/>
        Dodaj wypadek: <a href="admin/adminpanel.php">LINK</a>
        <a href="admin/modyfikacja.php">Modyfikacja danych w bazie</a>
    </div>
    <br/><br/>
    <div class="column-left">
        <div class="menu">
        <h2>Znajdź wypadek/pojazd:</h2>
        <ul>
            <li><a href="search_engine/date.php" target="iframe">Szukaj po dacie</a></li>
            <li><a href="search_engine/town.php" target="iframe">Szukaj po miejscowosci</a></li>
            <li><a href="search_engine/rej.php" target="iframe">Szukaj po rejestracji</a></li>
        </ul>
        </div>
    </div>
    <div class="column-right">
        <iframe src="test.php" name="iframe" width="100%" height="400px"></iframe>
    </div>

</div>




</body>
</html>





