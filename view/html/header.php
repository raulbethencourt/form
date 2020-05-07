<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Raul Bethencourt Gonzalez">
    <meta name="description" content="This is my first active form">
    <meta name="keywords" content="form, php">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="shortcut icon" href="../public/img/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Dynamic title -->
    <title>
        <?php if (isset($title)) : ?>
            <?= $title; ?>
        <?php else : ?>
            Mon site
        <?php endif ?>
    </title>
</head>

<body>
    <header>
        <nav id="nav-header">
            <div id="fake-nav">
                <a href="../view/index.php" id="nav-logo"><img src="../public/img/seat-Icon-nav.svg" alt="logo Seat"></a>
                <ul id="nav">
                    <a href="https://www.seat.fr/voitures/mii-electric/general.html" id="models">Modèles <i class="fas fa-chevron-down" style="color: #949494; font-size: 13px;"></i></a>
                    <a href="https://www.seat.fr/preparer-mon-achat/offres.html">Offres</a>
                    <a href="https://www.seat.fr/proprietaire/services-apres-vente/general.html">Après-vente <i class="fas fa-chevron-down" style="color: #949494; font-size: 13px;"></i></a>
                    <a href="https://www.seat.fr/flotte/infos-generales.html">Entreprises <i class="fas fa-chevron-down" style="color: #949494; font-size: 13px;"></i></a>
                    <a href="https://www.seat.fr/entreprise/nous_on_reste_libre.html">Décourvrez SEAT <i class="fas fa-chevron-down" style="color: #949494; font-size: 13px;"></i></a>
                </ul>
            </div>
            <div id="nav-buttons">
                <a href="../view/index.php"><img src="../public/img/tab1.svg" alt="icon" class="nav-icons">Login</a>
                <a href="../view/register.php"><img src="../public/img/find_dealer.svg" alt="icon" class="nav-icons">Register</a>
            </div>
            <button class="icon"><i class="fa fa-bars"></i></button>
        </nav>
    </header>
    <main>
        <section id="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../public/img/car1.jpg" class="d-block w-100" alt="car">
                    </div>
                    <div class="carousel-item">
                        <img src="../public/img/car2.jpg" class="d-block w-100" alt="car">
                    </div>
                    <div class="carousel-item">
                        <img src="../public/img/car3.jpg" class="d-block w-100" alt="car">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>