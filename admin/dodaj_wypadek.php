<?php
$conn = new mysqli("localhost","root","","pojazdy");
function rejestracja($conn){
    $result = $conn->query("SELECT rejestracja FROM samochody");
    echo "<select name='rej'>";
    echo "<option>Wybierz rejestracje</option>";
    while ($odp = $result->fetch_row())
    {
        echo "<option>".$odp[0]."</option>";
    }
    echo "</select>";
}

function wojewodztwo($conn){
    $result = $conn->query("SELECT id FROM wojewodztwa");
    echo "<select name='woj'>";
    echo "<option>Wybierz wojewodztwo</option>";
    while ($odp = $result->fetch_row())
    {
        echo "<option>".$odp[0]."</option>";
    }
    echo "</select>";
}

echo "<form action='dodaj_wypadek.php' method=POST>";
rejestracja($conn);
wojewodztwo($conn);
?>
    <p>Podaj date:</p>
    <input type="text" name="data" />
    <p>Czy winny:</p>
    <input type="text" name="winny" maxlength=3 />
    <p>Podaj wartość odszkodowania:</p>
    <input type="text" name="strata" />
    <p>Podaj miejsce</p>
    <input type="text" name="miasto" />

    <input type="submit" value="Wyślij" />

    </form>
<?php

$conn->close();
?>