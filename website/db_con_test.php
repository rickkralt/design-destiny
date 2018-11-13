<?php
$db_con = new SQLite3('bed_en_breakfest.db');
$reslult  = $db_con->query('select * from kamers');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dit is een test!</title>
</head>
<body>
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
    </table>
</body>
</html>

