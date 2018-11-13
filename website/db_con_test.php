<?php
/*
$db_con  = new SQLite3('/database/bed_en_breakfest.db');
//$sql = 'select * from kamers';
//$db_con->exec($sql);
//$result = $db_con->query($sql);
$result = $db_con->query('SELECT * kamers');

while ($row = mysqli_fetch_array($result)){
    echo $row[kamer_id];
    echo $row[kamer_personen];
    echo $row[kamer_naam];
    echo $row[kamer_prijs];
}
*/

/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('bed_en_breakfest.db.db');
    }
}

$db = new MyDB();

$db->exec('CREATE TABLE foo (bar STRING)');
$db->exec("INSERT INTO foo (bar) VALUES ('This is a test')");

$result = $db->query('SELECT bar FROM foo');
var_dump($result->fetchArray());
 * */


$db_con = new SQLite3('')
?>