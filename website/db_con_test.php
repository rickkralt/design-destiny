<?php
$db_con = new SQLite3('../database/bed_en_breakfest.db');
$result = $db_con->query('select * from kamers');
$results = $result->fetchArray();

while ($row = $results){
    echo $row[kamer_id];
}




?>