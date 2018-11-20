<?php
$ButtonValue = $_GET['submit'];

$db_con = new SQLite3('../database/bed_en_breakfest.db');
$reslult = $db_con->query("SELECT * FROM kamers WHERE kamer_id = '$ButtonValue'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Home</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="navbar-brand">Menu</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../home/home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../reserveren/reserveren.html">Reserveren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact/contact.html">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<body>
<br>
<div class="container rekentool">
    <h1 class="text-center">U heeft deze keuze gemaakt:</h1>
    <hr>
    Hier komen de opties + prijs
    <br><br>
    Totaalbedrag onderaan
</div>
<br>
<div class="container">
    <h1 class="text-center">Klantgegevens</h1>
    <hr>
    <form action="klantgegevens.php" method="get">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-begindatum">Begindatum</span>
            </div>
            <input type="date" class="form-control" aria-label="begindatum" aria-describedby="label-begindatum" name="begindatum">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-einddatum">Einddatum</span>
            </div>
            <input type="date" class="form-control" aria-label="einddatum" aria-describedby="label-einddatum" name="einddatum">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-voornaam">Voornaam</span>
            </div>
            <input type="text" class="form-control" aria-label="voornaam" aria-describedby="label-voornaam" name="voornaam">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-achternaam">Achternaam</span>
            </div>
            <input type="text" class="form-control" aria-label="achternaam" aria-describedby="label-achternaam" name="achternaam">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-email">Email</span>
            </div>
            <input type="email" class="form-control" aria-label="email" aria-describedby="label-email" name="email">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-telefoonnummer">Telefoonnummer</span>
            </div>
            <input type="text" class="form-control" aria-label="telefoonnummer" aria-describedby="label-telefoonnummer" name="telefoonnummer">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-adres">Adres</span>
            </div>
            <input type="text" class="form-control" aria-label="adres" aria-describedby="label-adres" name="adres">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-postcode">Postcode</span>
            </div>
            <input type="text" class="form-control" aria-label="postcode" aria-describedby="label-postcode" name="postcode">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-plaats">Plaats</span>
            </div>
            <input type="text" class="form-control" aria-label="plaats" aria-describedby="label-plaats" name="plaats">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-opmerking">Opmerking</span>
            </div>
            <input type="text" class="form-control" aria-label="opmerking" aria-describedby="label-opmerking" name="opmerking">
        </div>

        <input class="btn btn-lg btn-secondary btn-bereken" type="submit" name="verzenden" value="Verzenden">

    </form>
</div>
</body>
</html>