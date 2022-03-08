<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Site/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Services</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg sticky-lg-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../Site/images/logo.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="indexEntreprises.php">Accueil </a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="lesservices.php">Services</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="faqEntreprises.php">FAQ</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="contactEntreprises.php">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <div class="searchBox shadow-sm">
                            <input class="searchInput" type="text" name="" placeholder="Rechercher...">
                            <button class="searchButton" href="#">
                                <i class="material-icons scop">
                                    search
                                </i>
                            </button>
                        </div>
                        <a href="connexion.php">
                            <div class="header-item shadow-sm"><i class="material-icons">perm_identity</i>Connexion</div>
                        </a>
                        <a href="panierServices.php">
                            <div class="header-item cart shadow-sm"><i class="material-icons">shopping_cart</i></div>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!--banner welcome shadow-->
        <div class="banner-welcome shadow">

        </div>
    </header>

    <!-- Filtre & Services -->
    <div class="row">
        <!-- Filtre -->
        <div class="col-2 border-end border-dark">
            <div class="filtre1 m-5">
                <label>Filtre 1</label><br>
                <input type="checkbox"> ~~~</input><br>
                <input type="checkbox"> ~~~</input><br>
                <input type="checkbox"> ~~~</input><br>
            </div>

            <div class="filtre3 m-5">
                <label>Filtre 2</label><br>
                <input type="checkbox"> # </input><br>
                <input type="checkbox"> ## </input><br>
                <input type="checkbox"> ### </input><br>
            </div>

            <div class="filtre3 m-5">
                <label>Filtre 3</label><br>
                <input type="checkbox"> * </input><br>
                <input type="checkbox"> ** </input><br>
                <input type="checkbox"> *** </input><br>
            </div>

            <div class="filtre4 m-5">
                <label>Filtre 4</label><br>
            </div>

        </div>
        <!-- Les services -->

        <?php

        $dsn = 'mysql:dbname=forceofnature;host=localhost';
        $user = 'root';
        $password = '';

        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );

        try {
            $pdo = new PDO($dsn, $user, $password, $options);
        } catch (PDOException $e) {
            echo "Connexion échouée : " . $e->getMessage();
        }

        $req = "SELECT * FROM services";
        $stmt = $pdo->prepare($req);
        $stmt->execute();
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <div class="col-10">
            <div class="container pt-5 pb-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <?php foreach($services as $unService) : ?>
                    <div class="col-md-4 col-12 mt-3 d-flex justify-content-center">
                        <div class="card border-dark shadow-sm" style="width: 18rem;">
                            <div class="img p-2">
                                <img class="card-img-top rounded shadow borders" src="admin/static/images/services/<?= $unService['picture']?>" alt="Card image cap" style="width:270px; height: 170px;">
                            </div>
                            <div class="card-body">
                                <p class="card-title"><?= $unService['name']?></p>
                                <p class="card-text"><?= $unService['description']?></p>
                                <p class="text-center"><?= $unService['price']?>€</p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-primary">Ajout panier</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                    <nav aria-label="..." class="d-flex justify-content-center mt-5">
                        <ul class="pagination pagination shadow-sm">
                            <li class="page-item disabled">
                                <a class="page-link" style="background:#98D688;" href="#" tabindex="-1">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="shadow-lg page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-md-left p-0">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-4 mx-auto">

                    <!-- Content -->
                    <h3 class="mt-3 mb-4">Notre histoire</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Dicta, maiores aspernatur provident nobis quam sapiente ipsa similique blanditiis velit quas nihil.
                    </p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-lg-2 mx-auto">

                    <!-- Links -->
                    <h3 class="mt-3 mb-4">Liens rapides</h3>

                    <ul class="list-unstyled">
                        <li>
                            <a href="mentionslegalesEntreprises.php">Mentions légales</a>
                        </li>
                        <li>
                            <a href="faqEntreprises.php">FAQ</a>
                        </li>
                        <li>
                            <a href="contactEntreprises.php">Contact</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-lg-3 mx-auto">

                    <!-- Links -->
                    <h3 class="mt-3 mb-4">Moyens de paiements</h3>

                    <ul class="d-flex list-unstyled">
                        <li>
                            <img src="images/stripe.jpg" style="width: 130px; height:70px;" class="stripe shadow">
                        </li>
                        <li>
                            <img src="images/paypal.jpg" style="width: 130px; height:70px;" class="paypal ms-3 shadow">
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-lg-3 mx-auto">

                    <!-- Links -->
                    <h3 class="mt-3 mb-4">Réseaux sociaux</h3>

                    <ul class="d-flex list-unstyled">
                        <li>
                            <img src="images/facebook.jpg" style="width: 70px; height:70px;" class="rounded-circle shadow">
                        </li>
                        <li>
                            <img src="images/twitter.jpg" style="width: 70px; height:70px;" class="ms-3 rounded-circle shadow">
                        </li>
                        <li>
                            <img src="images/instagram.jpg" style="width: 70px; height:70px;" class="ms-3 rounded-circle shadow">
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="mt-4 footer-copyright text-center py-3">
            <h3>© Copyright 2022
                Tout droits réservés</h3>

        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>

</html>