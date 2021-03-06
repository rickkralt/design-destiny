<?php
//error_reporting(0);

if (empty($_GET['ontbijdopbed'])){
    $OntbijOpBedPrijs = 0.00;
}
else{
    $OntbijOpBedPrijs = 7.50;
}
if (empty($_GET['krant'])){
    $KrantPrijs = 0.00;
}
else{
    $KrantPrijs = 1.00;
}
if (empty($_GET['wifi'])){
    $WifiPrijs = 0.00;
}
else{
    $WifiPrijs = 2.00;
}

$ButtonValue = $_GET['submit'];
$Ontbijt = $_GET['ontbijt'];

if($Ontbijt == 1) {
    $OntbijtPrijs = 0.00;
}
elseif($Ontbijt == 2) {
    $OntbijtPrijs = 15.00;
}

$db_con = new SQLite3('../database/bed_en_breakfest.db');
$ressult = $db_con->query("SELECT * FROM kamers WHERE kamer_id = '$ButtonValue'");
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
    <title>Reseveren</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="../home/home.html">
        <img src="../../Bed & Breakfest logo/B&B logo.jpg" width="50" height="50" alt="">
    </a>
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
    <?php while ($row = $ressult->fetchArray() ){ $row = (object) $row; ?>
    <h5 class="card-title"><?php echo $row->kamer_naam; ?></h5>
    <label>Personen: <?php echo $row->kamer_personen; ?></label><br>
    <label>Plaats: <?php echo $row->kamer_plaats; ?></label><br>
    <?php $KamerPrijs = $row->kamer_prijs; ?>
    <br>
    <form action="klantgegevens.php" method="get">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-ontbijt">Ontbijt:</span>
            </div>
            <input type="text" class="form-control" aria-label="ontbijtprijs" aria-describedby="label-ontbijtprijs" name="ontbijtprijs" value="€ <?php echo number_format($OntbijtPrijs, 2, ',', '') ?>" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-voornaam">Ontbijt op bed:</span>
            </div>
            <input type="text" class="form-control" aria-label="ontbijtopbed" aria-describedby="label-ontbijtopbed" name="ontbijtopbed" value="€ <?php echo number_format($OntbijOpBedPrijs, 2, ',', '') ?>" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-voornaam">Ochtend krant:</span>
            </div>
            <input type="text" class="form-control" aria-label="ochtentkrant" aria-describedby="label-ochtentkrant" name="ochtentkrant" value="€ <?php echo number_format($KrantPrijs, 2, ',', '') ?>" readonly>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-voornaam">Wifi:</span>
            </div>
            <input type="text" class="form-control" aria-label="wifi" aria-describedby="label-wifi" name="wifi" value="€ <?php echo number_format($WifiPrijs, 2, ',', '') ?>" readonly>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="label-voornaam">Totaal:</span>
            </div>
            <input type="text" class="form-control" aria-label="totaal" aria-describedby="label-totaal" name="totaal" value="€ <?php echo number_format($KamerPrijs, 2, ',', '') ?>" readonly>
        </div>
        <?php } ?>
</div>
<br>
<div class="container">
    <h1 class="text-center">Klantgegevens</h1>
    <hr>
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