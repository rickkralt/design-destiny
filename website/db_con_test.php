<?php
$db_con = new SQLite3('database/bed_en_breakfest.db');
$reslult  = $db_con->query('select * from kamers');
$reslult2  = $db_con->query('select * from ExtraOpties');

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
        while ($row = $reslult->fetchArray() ){
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
        while ($row = $reslult2->fetchArray() ){
            $row = (object) $row;
            echo "<tr><td>".$row->extraopties_id."</td><td>".$row->extraopties_naam."</td><td>".$row->extraopties_prijs."</td></tr>";
        }
        ?>
    </table>
    <hr/>
    <?php for ($x = 1; $x <= 5; $x++) { echo $x; } ?>
</body>
</html>