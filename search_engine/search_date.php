<?php
require_once "../db.php";
$con = @new mysqli($host, $db_user, $db_password, $db_name);
if($con->connect_errno!=0)
{
    echo $con->connect_errno;
}
else
{
    $date = $_POST['date'];
    $query = "SELECT * FROM wypadki WHERE data='$date'";

    if($result = @$con->query($query)){
        $how=$result->num_rows;
        if($how>0)
        {
            echo "Data:".$date;
            echo "<table border='1' bgcolor='#7fffd4'>";
            echo "<tr><td> rejestracja </td> <td> czy winny </td> <td> poniesiona strata </td><td> miejsce wypadku </td> </tr>";
            while($odp = $result->fetch_row())
            {
                echo "<td>".$odp[2]."</td><td>".$odp[3]."</td><td>".$odp[4]."</td><td>".$odp[5]."</td></tr>";
            }
            echo "</table>";
        }
    }
}


?>