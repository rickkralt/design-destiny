<?php
$db_con = new SQLite3('database/bed_en_breakfest.db');
$result  = $db_con->query('select * from kamers');
$result2  = $db_con->query('select * from ExtraOpties');
$result3  = $db_con->query('select * from Resevering');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dit is een test!</title>
</head>
<body>
    <h1>Kamers</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Personen</th>
            <th>Naam</th>
            <th>Prijs</th>
        </tr>
        <?php
        while ($row = $result->fetchArray() ){
            $row = (object) $row;
            echo "<tr><td>".$row->kamer_id."</td><td>".$row->kamer_personen."</td><td>".$row->kamer_naam."</td><td>".$row->kamer_prijs."</td></tr>";
        }
        ?>
    </table><br/>
    <hr/>
    <h1>Extra opties</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Prijs</th>
        </tr>
        <?php
        while ($row = $result2->fetchArray() ){
            $row = (object) $row;
            echo "<tr><td>".$row->extraopties_id."</td><td>".$row->extraopties_naam."</td><td>".$row->extraopties_prijs."</td></tr>";
        }
        ?>
    </table>
    <hr/>
    <h1>Reseveringen</h1>
    <table>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Datum komst</th>
            <th>Datum vertrek</th>
        </tr>
        <?php
        while ($row = $result3->fetchArray() ){
            $row = (object) $row;
            echo "<tr><td>".$row->resevering_klant_voornaam."</td><td>".$row->resevering_klant_achternaam."</td><td>".$row->resevering_datumkomst."</td><td>".$row->resevering_datumvertrek."</td></tr>";
        }
        ?>
    </table>
</body>
</html>