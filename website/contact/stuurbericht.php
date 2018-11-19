<?php
    $db_con = new SQLite3('database/bed_en_breakfest.db');

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

