<?php
session_start();

if (isset($_SESSION['email'])) {
    header("Location: index.php");
}

require 'admin/includes/config.php';
include 'admin/includes/const.php';

// check to see if the form was submitted
if (isset($_POST['addBtn'])) {
    // POST all the form data
    // ID = gender  && user = name 
    $firstname =  isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'])  : "";
    $lastname =  isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : "";
    $password = isset($_POST['password']) ?  htmlspecialchars($_POST['password']) : "";
    $confirmpw = isset($_POST['confirmpassword']) ? htmlspecialchars($_POST['confirmpassword']) : "";
    $cryptedpw = sha1($password);
    $phonenumber =  isset($_POST['phonenumber']) ? htmlspecialchars($_POST['phonenumber']) : "";
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : "";
    $zipcode = isset($_POST['zipcode']) ? htmlspecialchars($_POST['zipcode']) : "";
    $idtype = isset($_POST['id_type']) ? htmlspecialchars($_POST['id_type']) : "";
    $idcountry = isset($_POST['id_country']) ? htmlspecialchars($_POST['id_country']) : "";

    // CONNECT TO THE DB
    global $db;

    if ($password == $confirmpw) {
        // make sure all the form data was submitted
        if ($firstname && $lastname && $cryptedpw && $phonenumber && $email && $address && $zipcode && $idtype && $idcountry) {
            $result = mysqli_num_rows(mysqli_query($db, "SELECT email from user WHERE email='$email'"));
            if ($result > 0) {
                header('Location: p_inscription.php?error=1');
                break;
            }

            mysqli_query($db, "INSERT INTO user (id_role, id_country, id_type, first_name, last_name, address, zip_code, email, tel, password) VALUES ('3', '$idcountry', '$idtype', '$firstname', '$lastname', '$address', '$zipcode', '$email', '$phonenumber' , '$cryptedpw')");
            header("Location: p_inscription.php?success=1");
            break;
        } else {
            header("Location: p_inscription.php?error=2");
            break;
        }
    } else {
        header("Location: p_inscription.php?error=3");
        break;
    }
}
?>


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
    <title>Inscription</title>
</head>

<body>
    <header class="min-vh-100">

        <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="../Site/images/logo.png" class="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-tarPOST="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
            <h1 class="banner-title">Inscription</h1>
        </div>

    </header>

    <main>
        <?php
        if (isset($_POST['error'])) {
            $e = $_POST['error'];
            if ($e == 1) {
                echo "<div class='alert alert-danger' role='alert'>
                        Cet e-mail est déjà utilisé veuillez en choisir un autre !
                        </div>";
            }
            if ($e == 2) {
                echo "<div class='alert alert-danger' role='alert'>
                        Veuillez remplir tout le formulaire !
                        </div>";
            }
            if ($e == 3) {
                echo "<div class='alert alert-danger' role='alert'>
                        Les mots de passes ne correspondent pas !
                        </div>";
            }
        }
        ?>

        <?php
        if (isset($_POST['success'])) {
            $s = $_POST['success'];
            if ($s == 1) {
                echo "<div class='alert alert-success' role='alert'>
                        Vous pouvez maintenant vous connecter !
                        </div>";
            }
        }
        ?>
        <form action="p_inscription.php" method="POST" class="d-flex justify-content-center">
            <div class="form mw-100 m-5 p-4 b-radius shadow">
                <div class="form-group d-flex justify-content-center align-items-center">
                    <i class="material-icons">perm_identity</i>
                    <input type="text" name="lastname" class="form-control shadow-sm m-2" aria-describedby="lastname" placeholder="Nom*" value="<?php echo isset($lastname) ? $lastname : ""; ?>" required>
                    <input type="text" name="firstname" class="form-control shadow-sm m-2" aria-describedby="firstname" placeholder="Prénom*" placeholder="" value="<?php echo isset($firstname) ? $firstname : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <img src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/000000/external-genders-wedding-love-dreamstale-lineal-dreamstale.png" style="width:25px; height:25px;" />
                    <select class="form-control m-2" name="id_type" placeholder="Civilité*" required>
                        <option value="1">Homme</option>
                        <option value="2">Femme</option>
                        <option value="3">Non-genré</option>
                        <option value="4">Inconnu</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center align-items-center form-group mt-2">
                    <i class="material-icons">mail</i>
                    <input type="email" name="email" class="form-control shadow-sm m-2" aria-describedby="email" placeholder="Adresse email*" value="<?php echo isset($email) ? $email : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">phone</i>
                    <input type="tel" name="phonenumber" class="form-control shadow-sm m-2" aria-describedby="phonenumber" placeholder="Numéro de téléphone*" value="<?php echo isset($phonenumber) ? $phonenumber : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">house</i>
                    <input type="text" name="address" class="form-control shadow-sm m-2" aria-describedby="address" placeholder="Adresse*" value="<?php echo isset($address) ? $address : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">house</i>
                    <input type="text" name="zipcode" class="form-control shadow-sm m-2" aria-describedby="zipcode" placeholder="Code postal*" value="<?php echo isset($zipcode) ? $zipcode : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">flag</i>
                    <select class="form-control m-2" name="id_country" placeholder="Pays*">
                        <option value="1">France</option>
                        <option value="2">Corse</option>
                    </select>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">lock</i>
                    <input type="password" name="password" class="form-control shadow-sm m-2" aria-describedby="password" placeholder="Mot de passe*" value="<?php echo isset($password) ? $password : ""; ?>" required>
                </div>
                <div class="form-group d-flex justify-content-center align-items-center mt-2">
                    <i class="material-icons">lock</i>
                    <input type="password" name="confirmpassword" class="form-control shadow-sm m-2" aria-describedby="confirmPassword" placeholder="Confirmer votre mot de passe*">
                </div>
                <div class="d-flex justify-content-center form-group mt-5">
                    <button type="submit" name="addBtn" class="px-5 btn btn-primary bg-light shadow-sm">S'inscrire</button>
                </div>
            </div>
        </form>
    </main>

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