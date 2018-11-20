<?php
//error_reporting(0);


$db_con = new SQLite3('../database/bed_en_breakfest.db');

$naam = $_POST['naam'];
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$query_string = "INSERT INTO contact (contact_id, contact_naam, contact_email, contact_bericht)
  VALUES (NULL,'$naam','$email','$bericht')";

$result = $db_con->query($query_string);

echo "<script type='text/javascript'>alert('Je bericht is verstuurd!');</script>";
echo "<script>window.location = '../home/home.html'</script>";
?>