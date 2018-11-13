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
<h1>fotoos</h1>
    <?php
    while ($row = $reslult2->fetchArray() ){
        $row = (object) $row;
        echo "<tr><td>".$row->extraopties_id."</td><td>".$row->extraopties_naam."</td><td>".$row->extraopties_prijs."</td></tr>";
        echo ""
    }
    ?>
</body>
</html>