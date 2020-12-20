<?php

    session_start();

require_once "db.php";

$con = @new mysqli($host, $db_user, $db_password, $db_name);

if($con->connect_errno!=0)
{
    echo $con->connect_errno;
}
else{

    $login = $_POST['login'];
    $haslo = $_POST['pass'];

    $query = "SELECT * FROM uzytkownicy WHERE login='$login' AND haslo='$haslo'";

    if($result = @$con->query($query))
    {
        $how_user = $result->num_rows;
        if($how_user>0)
        {
            $_SESSION['logged'] = true;

            $row = $result->fetch_assoc();

            $_SESSION['login'] = $row['login'];
            $_SESSION['email'] = $row['e_mail'];
            $_SESSION['jawny'] = $row['czy_jawny'];

            $_SESSION['id'] = $row['id'];

            unset($_SESSION['blad']);
            $result->close();
            header('location: user_settings.php');
        }
        else
        {
            $_SESSION['error'] = '<span style="color: red"> Nieprawidłowy login lub hasło!</span>';
            header('location: index.php');
        }
    }
    $con->close();
}