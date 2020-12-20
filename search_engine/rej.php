
<?php
require_once "../db.php";
$con = @new mysqli($host, $db_user, $db_password, $db_name);
if($con->connect_errno!=0)
{
    echo $con->connect_errno;
}
else{
$query = "SELECT rejestracja FROM wypadki";
if($result = @$con->query($query))
{
$how = $result->num_rows;
if($how>0)
{
?>
<form action="search_date.php" method="post">
    <label for="rej">Wybierz rejestracje:</label>

    <?php
    echo "<select name='rej'>";
    while($date = $result->fetch_row())
    {
        echo "<option value='$date[0]'>".$date[0]."</option>";
    }
    echo "</select>";
    }
    }
    }
    $con->close();
    ?>

    <input type="submit" value="Szukaj">
</form>

