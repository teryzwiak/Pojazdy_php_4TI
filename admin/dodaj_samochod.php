<?php
$conn = new mysqli("localhost","root","","pojazdy");
function wlasciciel($conn){
    $result = $conn->query("SELECT id FROM wlasciciele");
    echo "<select name='id'>";
    echo "<option>Wybierz wlasciciela</option>";
    while ($odp = $result->fetch_row())
    {
        echo "<option>".$odp[0]."</option>";
    }
    echo "</select>";
}

echo "<form action='dodaj_samochod.php' method=POST>";
wlasciciel($conn);
?>
    <p>Podaj rejestracje:</p>
    <input type="text" name="rej" />
    <p>Podaj rocznik:</p>
    <input type="text" name="rcz" />
    <p>Podaj date_rej:</p>
    <input type="text" name="datrej" />
    <p>Podaj kolor:</p>
    <input type="text" name="kol" />
    <p>Podaj marke:</p>
    <input type="text" name="mar" />

    <input type="submit" value="Wyślij"  />

    </form>
<?php


if (isset($_POST['mar']))
{
    $rej = $_POST['rej'];
    $rcz = $_POST['rcz'];
    $datrej = $_POST['datrej'];
    $kol = $_POST['kol'];
    $mar = $_POST['mar'];
    $id = $_POST['id'];

    $query1 = $conn->query("INSERT INTO samochody VALUES (rejestracja='$rej',rocznik='$rcz',wlasciciel='$id',data_rej='$datrej',kolor='$kol',marka='$mar')");

    if ($query1)
    {
        echo "Dane zostały poprawnie wprowadzone";
    }
    else
    {
        echo "Napotkano na błąd podczas wprowadzania danych";
    }
}

$conn->close();
?>