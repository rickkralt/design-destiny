<?php
$db_con = new SQLite3('database/bed_en_breakfest.db');
//$reslult  = $db_con->query('select * from kamers');
$reslult  = $db_con->query('select * from Test_Fotoos');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Dit is een test!</title>
</head>
<body>
<?php
while ($row = $reslult->fetchArray() ) {
    $row = (object)$row;
    ?>
    <div class="container">
        <h1 class="text-center">Foto's</h1>
        <hr>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/<?php echo $row->foto_naam; }?>" alt="First slide">
                </div>
                <!--
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/<?php echo $row->foto_naam; ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/<?php echo $row->foto_naam; ?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            -->
        </div>
    </div>


    <?php
    while ($row = $reslult->fetchArray() ){
        $row = (object) $row;
        echo $row->foto_naam . "<br/>";
    }
    ?>

<!-- <?php echo $row->foto_naam; ?> -->
</body>
</html>