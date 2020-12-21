<?php require_once "assets/resources/header.php"?>
<h1>Dodaj wypadek:</h1>
<form action="add_wypadek.php" method="post">
    <label for="data">Data:</label><br/>
    <input type="date" name="data"><br/>
    <label for="rej">Rejestracja:</label><br/>
    <input type="text" name="rej"><br/>
    <label for="winny">Czy winny: </label><br/>
    <select name="winny"><br/>
        <option value="TAK">TAK</option>
        <option value="NIE">NIE</option>
    </select><br/>
    <label for="strata">Strata:</label><br/>
    <input type="number" name="strata"><br/>
    <label for="miejsce">Miejsce:</label><br/>
    <input type="text" name="miejsce"><br/>
    <label for="wojewodztwo">Wojewodztwo:</label><br/>
    <input type="text" name="wojewodztwo"><br/>
    <input type="submit" value="Dodaj"><br/>
</form>

</body>
</html>
