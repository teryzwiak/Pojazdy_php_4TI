<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Pojazdy</title>
    <link rel="stylesheet" href="../csstyle.css" >
</head>
<body>

<div class="topnav">
    <p><strong><a href="index.php">BAZA WYPADKÓW</a></strong></p>
    <?php
    isset($_SESSION['logged']);
    {
        echo "<a href=\"#\">Konto</a>";

 };
    ?>


</div>

<div class="content">

</div>





</body>
</html>