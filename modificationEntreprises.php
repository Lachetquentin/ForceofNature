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
    <title>Modification</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Accueil </a>
                        </li>
                        <span class="divided">|</span>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produits</a>
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
            <h1 class="banner-title">MODIFICATION</h1>
        </div>
    </header>

    <form class="d-flex justify-content-center">
        <div class="form m-5 p-4 b-radius shadow w-25">
        <h3 class="text-center mb-3"> Modification </h3>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-genders-wedding-love-dreamstale-lineal-dreamstale.png"
                style="width:25px; height:25px;"/>
                <select class="form-control m-2" id="inputGroupSelect01" placeholder="Civilité*">
                    <option value="1">Homme</option>
                    <option value="2">Femme</option>
                    <option value="3">Neutre</option>
                </select>
            </div>
            <div class="d-flex justify-content-center align-items-center form-group mt-2">
                <i class="material-icons">mail</i>
                <input type="email" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse email*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">phone</i>
                <input type="tel" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Numéro de téléphone*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">work_outline</i>
                <input type="tel" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entreprise*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">house</i>
                <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse de l'entreprise*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">house</i>
                <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Code postal*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">flag</i>
                <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pays*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">lock</i>
                <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mot de passe*">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center mt-2">
                <i class="material-icons">lock</i>
                <input type="text" class="form-control shadow-sm m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirmer votre mot de passe*">
            </div>
            <div class="d-flex justify-content-center form-group mt-5">
                <button type="submit" class="px-5 btn btn-primary bg-light shadow-sm">S'inscrire</button>
            </div>
        </div>
    </form>

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