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
    <title>Contact</title>
</head>

<body>
    <header class="min-vh-100">
        <nav class="navbar navbar-expand-lg navbar-light shadow-lg sticky-lg-top">
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
                        <a href="panierParticuliers.php">
                            <div class="header-item cart shadow-sm"><i class="material-icons">shopping_cart</i></div>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <div class="banner-welcome shadow">
            <h1 class="banner-title">Contact</h1>
        </div>
        <h2 class="text-center mt-5">Vous avez une question ? Contactez nous !<h2>
        <form class="d-flex justify-content-center">
           
            <div class="w-50 h-100 form mw-100 m-5 p-4 w-200 b-radius shadow">
                <div class="form-group d-flex justify-content-center align-items-center">

                    <input type="text" class="w-75 form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom">
                    <input type="text" class="w-75 form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse e-mail">
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-5">
                    <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Liste des sujets"> <i class="material-icons">expand_more</i>

                </div>
                <h6 style="margin-left:16px; margin-top:8px;">Message</h6>
                <div class="h-100 form-group d-flex justify-content-center align-items-center mt-4">
                    
                    <input type="text" style="height:300px;" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <div class="d-flex justify-content-center form-group mt-5">
                    <button type="submit" class="px-5 btn btn-primary bg-light shadow-sm" style="background-color:#98D688;">Envoyer</button>
                </div>
            </div>
        </form>


    </header>

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