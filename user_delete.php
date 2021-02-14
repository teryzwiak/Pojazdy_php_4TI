<?php
session_start();
    require_once "../db.php";
    $con = @new mysqli($host, $db_user, $db_password, $db_name);
    if($con->connect_errno!=0)
    {
        echo $con->connect_errno;
    }
    else {
        $login = $_SESSION['login'] ;
        $email = $_SESSION['email'] ;
        $query = "DELETE FROM uzytkownicy WHERE login='$login' AND e_mail='$email';";
        if ($result = @$con->query($query)) {
           echo "Usunięto konto";
           echo '<a href="index.php">Powrót</a>';
        }
    }

    $con->close();
