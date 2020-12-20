<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pojazdy</title>
    <link rel="stylesheet" href="styl1.css" >
</head>
<body>
<div class="header"><br/>
    <h1>Baza pojazdów i ich wypadki</h1> <br/>
</div>
<div class="hub">
    Zalogowano jako: <?php echo $_SESSION['login'];?><br/>
    Twój email to: <?php echo $_SESSION['email'];?><br/>
    Email jawny: <?php echo $_SESSION['jawny'];?><br/>
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

</body>
</html>





