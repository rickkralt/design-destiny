<?php
$db_con = new SQLite3('../database/bed_en_breakfest.db');
$reslult  = $db_con->query('select * from Resevering');

while ($row = $reslult->fetchArray() ){
    $row = (object) $row;
    echo "<tr><td>".$row->resevering_klant_voornaam."</td><td>".$row->resevering_klant_achternaam."</td></tr>";
}

?>