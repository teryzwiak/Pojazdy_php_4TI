<?php
//TODO appearance
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pojazdy</title>
    <link rel="stylesheet" href="../csstyle.css" >
</head>
<body>

<div class="topnav">
    <p><strong><a href="index.php">BAZA WYPADKÓW</a></strong></p>
    <a href="#">Zalogowano jako: <?php echo $_SESSION['login'];?></a>

</div>

<div class="content">

    <br/><br/>
    <div class="column-left">
        <div class="menu">
            <h2>Znajdź wypadek/pojazd:</h2>
            <ul>
                <li><a href="dodaj_wlasciciela.php" target="iframe">Dodaj właściciela</a></li>
                <li><a href="dodaj_wypadek.php" target="iframe">Dodaj wypadek</a></li>
                <li><a href="dodaj_samochod.php" target="iframe">Dodaj samochod</a></li>
            </ul>
        </div>
    </div>
    <div class="column-right">
        <iframe src="../test.php" name="iframe" width="100%" height="400px"></iframe>
    </div>

</div>



</body>
</html>





