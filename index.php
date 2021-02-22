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
    <p><strong><a href="index.php">BAZA WYPADKÓW</a></strong></p>
    <a href="#">Zarejestruj się</a>
    <a href="loginpage.php">Zaloguj się</a>
</div>
<?php if(isset($_SESSION['blad']))
{echo $_SESSION['blad'];};?>
<div class="content">
    <h2>Znajdź wypadek po pojedzie lub miejscowości</h2>
    <p>Zaloguj się po więcej.</p>
    <img src="assets/crash.jpg" alt="wypadek" width="1300" height="600">
</div>



<div class="footer">
    <p>MADE BY Patryk Józwiak</p>
</div>

</body>
</html>