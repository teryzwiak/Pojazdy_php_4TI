<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Pojazdy</title>
    <link rel="stylesheet" href="styl1.css" >
</head>
<body>

<div class="header"><br/>
    <h1>Baza pojazdów i ich wypadki</h1> <br/>
</div>
<div class="content">
    <div class="content-left">
        <h2 class="login-banner"> Zaloguj się by przejść do panelu</h2>
        <form action="login.php" method="post" class="form">
            <label for="login"><strong>Login:</strong> </label><br>
            <input type="text" name="login"> <br/><br/>
            <label for="pass"><strong>Hasło: </strong></label><br>
            <input type="password" name="pass"> <br/><br/>
            <input type="submit" value="Zaloguj się">
        </form>
        <?php if(isset($_SESSION['blad']))echo $_SESSION['blad'];?>
    </div>

    <div class="content-right">
        <img src="assets/crash.jpg" alt="wypadek" style="width: 60%" class="img">
    </div>
</div>
</body>
</html>