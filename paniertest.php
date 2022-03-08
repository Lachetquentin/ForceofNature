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
    <title>Panier</title>
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="indexParticuliers.php">Accueil </a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="lesproduits.php">Produits</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="faqParticuliers.php">FAQ</a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="contactParticuliers.php">Contact</a>
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
            <h1 class="banner-title">PANIER</h1>
        </div>
    </header>

    <!-- Panier -->
    <div class="container my-5">
        <h2>Vos produits</h2>
        <div class="ms-0 cart p-5 borders" style="background: #A9ED98;">
            <div class="row">
                <div class="col d-flex ">
                    <img src="./images/produits/produit1.png" class="borders shadow" style="width: 170px; height:210px;"></img>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Titre service</p>
                    <div class="col">
                        <btn class="btn btn-primary bg-light shadow-sm px-5">Retirer</btn>
                    </div>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Prix</p>
                    <p class="mb-0">20€</p>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Quantité</p>
                    <div class="col">
                        <input type="number" class="form-control shadow-sm w-50" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col d-flex ">
                    <img src="./images/produits/produit2.png" class="borders shadow" style="width: 170px; height:210px;"></img>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Titre service</p>
                    <div class="col">
                        <btn class="btn btn-primary bg-light shadow-sm px-5">Retirer</btn>
                    </div>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Prix</p>
                    <p class="mb-0">20€</p>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Quantité actuel</p>
                    <div class="col">
                        <input type="number" readonly value="1" class="form-control text-center shadow-sm w-50" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
                    </div>
                </div>
                <div class="col d-grid align-items-center">
                    <p>Quantité</p>
                    <div class="col">
                        <input type="number" class="form-control shadow-sm w-50" id="exampleInputEmail1" aria-describedby="emailHelp"></input>
                    </div>
                </div>
            </div>
            <div class="row me-5 mt-5">
                <div class="col d-flex justify-content-end me-5">
                    <p>Total</p>
                    <p class="ms-5">40€</p>
                </div>
            </div>
            
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="btn btn-primary mt-3">Confirmer le panier</a>
        </div>
    </div>
    <!-- Fin panier -->

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
                            <a href="mentionslegalesParticuliers.php">Mentions légales</a>
                        </li>
                        <li>
                            <a href="faqParticuliers.php">FAQ</a>
                        </li>
                        <li>
                            <a href="contactParticuliers.php">Contact</a>
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