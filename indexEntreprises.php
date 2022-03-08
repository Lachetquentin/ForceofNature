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
    <title>Accueil</title>
</head>

<body>
    <!-- Header avec le menu & -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../Site/images/logo.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
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
                        <a href="panier.php">
                            <div class="header-item cart shadow-sm"><i class="material-icons">shopping_cart</i></div>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <div class="banner-welcome shadow">
            <div class="bg-light rounded-pill d-flex justify-content-center shadow-lg h-75">
                <img src="images/logo.png" class="w-100 h-100 opacity-100"></img>
            </div>
        </div>
    </header>
    <!-- Fin header avec le menu -->

    <!-- Head banner -->
    <div class="block-green w-100 h-auto p-5">
        <h3 class="text-center">PRÉSENTATION DE LA DÉMARCHE 0 DÉCHET</h3>
        <div class="d-lg-flex justify-content-around align-items-center">
            <div class="form-group m-3">
                <div class="form-group rounded-circle d-flex justify-content-center">
                    <img src="images/delivery.png" class="mw-100 h-50 rounded-circle shadow-sm"></img>
                </div>
                <p class="mt-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="form-group m-5">
                <p class="text-center m-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Quos hic eum voluptates maxime earum maiores aliquid sint soluta magni
                    alias molestias aliquam recusandae error, totam, facere iure provident, architecto vero.
                </p>
            </div>
            <div class="form-group m-3">
                <div class=" rounded-circle d-flex justify-content-center">
                    <img src="images/recyclage.png" class="mw-100 h-50 rounded-circle shadow-sm"></img>
                </div>
                <p class="mt-3 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <!-- Fin Head banner -->

    <!-- Bloc Cards -->
    <div class="container pt-5 pb-5">

        <!-- Title of services -->
        <h3 class="text-center">Aperçu des services</h3>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col mt-3 d-flex justify-content-center">
                <div class="card border-dark shadow-sm" style="width: 18rem;">
                    <div class="img p-2">
                        <img class="card-img-top rounded shadow" src="./images/services/service.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <p class="card-title">Titre du service</p>
                        <p class="card-text">Petite description du service</p>
                        <p class="text-center">24.99€</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary">Ajout panier</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3 d-flex justify-content-center">
                <div class="card border-dark shadow-sm" style="width: 18rem;">
                    <div class="img p-2">
                        <img class="card-img-top rounded shadow" src="./images/services/service.png" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <p class="card-title">Titre du service</p>
                        <p class="card-text">Petite description du service</p>
                        <p class="text-center">24.99€</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary">Ajout panier</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3 d-flex justify-content-center">
                <div class="card border-dark shadow-sm" style="width: 18rem;">
                    <div class="img p-2">
                        <img class="card-img-top rounded shadow" src="./images/services/service.png" alt="Card image cap"> 
                    </div>
                    <div class="card-body">
                        <p class="card-title">Titre du service</p>
                        <p class="card-text">Petite description du service</p>
                        <p class="text-center">24.99€</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary">Ajout panier</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-3 d-flex justify-content-center">
                <div class="card border-dark shadow-sm" style="width: 18rem;">
                    <div class="img p-2">
                        <img class="card-img-top rounded shadow" src="./images/services/service.png" alt="Card image cap"> 
                    </div>                    <div class="card-body">
                        <p class="card-title">Titre du service</p>
                        <p class="card-text">Petite description du service</p>
                        <p class="text-center">24.99€</p>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-primary">Ajout panier</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin bloc Cards -->


    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

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
                            <a href="mentionslegales.php">Mentions légales</a>
                        </li>
                        <li>
                            <a href="faq.php">FAQ</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact</a>
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