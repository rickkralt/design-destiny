<?php
//error_reporting(0);

include ('reseveren_klantgegevens.php');

$db_con = new SQLite3('../database/bed_en_breakfest.db');

$BeginDatum = $_GET['begindatum'];
$EindDatum = $_GET['einddatum'];

$Voornaam = $_GET['voornaam'];
$Achternaam = $_GET['achternaam'];
$Email = $_GET['email'];
$Telefoonnummer = $_GET['telefoonnummer'];
$Adres = $_GET['adres'];
$Postcode = $_GET['postcode'];
$Plaats = $_GET['plaats'];
$Opmerking = $_GET['opmerking'];

$query_string = "INSERT INTO Resevering (resevering_id, resevering_klant_voornaam, resevering_klant_achternaam, resevering_klant_email, resevering_klant_telefoonnummer, resevering_klant_adres, resevering_klant_postcode, resevering_klant_plaats, resevering_datumkomst, resevering_datumvertrek, resevering_opmerking, resevering_tebetalenprijs)
  VALUES (NULL,'$Voornaam','$Achternaam','$Email','$Telefoonnummer','$Adres','$Postcode','$Plaats','$BeginDatum','$EindDatum','$Opmerking','$TotaalPrijs')";

$result = $db_con->query($query_string);

echo "<script type='text/javascript'>alert('Je hebt succesvol geboekt!');</script>";
echo "<script>window.location = '../home/home.html'</script>";
?>