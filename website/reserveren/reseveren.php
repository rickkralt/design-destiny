<?php
$db_con = new SQLite3('../database/bed_en_breakfest.db');
$reslult_kamers  = $db_con->query('select * from kamers');
$reslult_extraopties_ontbijtNL  = $db_con->query('select * from ExtraOpties where extraopties_id < 2');
$reslult_extraopties_ontbijtEN  = $db_con->query('select * from ExtraOpties where extraopties_id > 1 and extraopties_id < 3');
$reslult_extraopties = $db_con->query('select * from ExtraOpties where extraopties_id > 3');

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
    <title>TEST + Reserveren + TEST</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../home/home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="../reserveren/reserveren.html">Reserveren</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../contact/contact.html">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container">
    <h1 class="text-center">Reserveringsopties</h1>
    <hr>
</div>
<br>
<div class="container">
    <div class="row">
        <?php
        while ($row = $reslult_kamers->fetchArray() ){
            $row = (object) $row; ?>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../img/slideshow/Eenpersoonskamer_f1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php $row->kamer_naam ?></h5>
                    <p class="card-text">
                        <?php
                        echo "Personen: " . $row->kamer_personen."<br>";
                        echo "Plaats: " . $row->kamer_plaats."<br>";
                        echo "<br>";
                        echo "Beschijving: <br>";
                        echo $row->kamer_beschrijving."<br>";
                        echo "<br>";
                        echo "Prijs: € " . $row->kamer_prijs;
                        echo "<br>";
                        echo "<h5 class=\"card-title\">Extra opties:</h5>";
                        while ($row2 = $reslult_extraopties_ontbijtNL->fetchArray() ) {
                            $row2 = (object)$row2;
                            echo "<input type=\"radio\" name=\"ontbijt\" value=\"ontbijt_nl\" checked> ".$row2->extraopties_naam." + € ".$row2->extraopties_prijs."<br>";
                        }
                        while ($row3 = $reslult_extraopties_ontbijtEN->fetchArray() ) {
                            $row3 = (object)$row3;
                            echo "<input type=\"radio\" name=\"ontbijt\" value=\"ontbijt_nl\"> ".$row3->extraopties_naam." + € ".$row3->extraopties_prijs."<br>";
                        }
                        while ($row4 = $reslult_extraopties->fetchArray() ) {
                            $row4= (object)$row4;
                            echo "<input type=\"checkbox\" name=\"ontbijt\" value=\"ontbijt_nl\" checked> ".$row4->extraopties_naam." + € ".$row4->extraopties_prijs."<br>";
                        } ?>
                        <br>
                        <button type="button" class="btn btn-lg btn-info btn-bereken" value='<?php for ($x = 1; $x <= 5; $x++) { echo $x; } ?>' href="reseveren_klantgegevens.html">Boek!</button>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<br>
<button type="button" class="btn btn-lg btn-info btn-bereken">Bereken</button>
<br>
<footer class="footer">
    <div class="container-fluid footer-info">
        <div class="row">
            <div class="col-sm">
                <ul>
                    <li>Bed & Breakfast Cuyk</li>
                    <li>Koning Willemstraat 76</li>
                    <li>8397 UI Cuyk</li>
                </ul>
            </div>
            <div class="col-sm text-right footer-info-right">
                Volg ons online!
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>