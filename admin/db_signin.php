<?php
session_start();
?>

<?php
if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1 OR $_SESSION['role'] == 2) {
        header("Location: dashboard.php");
    }
?>

<?php
} else header("Location: db_signin.php?error=1");
?>

<?php include 'includes/config.php' ?>
<?php include 'includes/get.php' ?>
<?php include 'includes/const.php' ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Respectons la nature pour un commerce écologique">
    <meta name="author" content="<?php echo SITE_TITLE ?>">
    <title>Tableau de bord / <?php echo SITE_TITLE ?></title>

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="../static/img/favicon.ico"> TODO Change favicon -->
    <!-- <link rel="icon" href="../static/img/favicon.ico"> TODO Change favicon -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css" /> <!-- TODO Change bootstrap -->
    <!-- Custom styles for this template -->
    <link href=" static/css/dashboard.css" rel="stylesheet"> <!-- TODO dashboard css -->
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-primary p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><?php echo SITE_TITLE ?></a>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de bord</h1>
                </div>

                <h2>Connexion</h2>

                <div class="row">
                    <?php
                    if (isset($_GET['error'])) {
                        $e = $_GET['error'];
                        if ($e == 1) {
                            echo "<div class='alert alert-danger' role='alert'>
                    Vous êtes pas autorisé à accéder à cette partie du site !
                    </div>";
                        }
                        if ($e == 2) {
                            echo "<div class='alert alert-danger' role='alert'>
                    Nom d'utilisateur ou mot de passe incorrect, veuillez réessayer !
                    </div>";
                        }
                        if ($e == 3) {
                            echo "<div class='alert alert-danger' role='alert'>
                    Nom d'utilisateur ou mot de passe vide, veuillez réessayer !
                </div>";
                        }
                    }
                    ?>

                    <form action="functions/db_verification.php" method="POST" class="d-flex justify-content-center">
                        <div class="form mw-100 m-5 p-4 b-radius shadow">
                            <h3 class="text-center mb-3"> Se connecter </h3>
                            <div class="form-group d-flex justify-content-center align-items-center">
                                <i class="material-icons">perm_identity</i>
                                <input type="email" name="email" class="form-control shadow-sm m-2" aria-describedby="email" placeholder="Adresse email">
                            </div>
                            <div class="form-group mt-2 d-flex justify-content-center align-items-center">
                                <i class="material-icons">lock</i>
                                <input type="password" name="password" class="form-control shadow-sm m-2" aria-describedby="password" placeholder="Mot de passe">
                            </div>
                            <div class="d-flex justify-content-center form-group">
                                <p class="mw-100 mt-2"><a href="motDePasseOublie.php"> Mot de passe oublié ? </a></p>
                            </div>
                            <div class="d-flex justify-content-center form-group">
                                <button type="submit" class="btn btn-primary bg-light shadow-sm">Connexion</button>
                            </div>
                            <div class="d-flex justify-content-center form-group">
                                <p class="mw-100 mt-3 no-spacing">Vous n'avez pas de compte ? <a href="p_signup.php"> Inscrivez-vous </a></p>
                            </div>
                        </div>
                    </form>

                </div>

            </main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="static/js/dashboard.js"></script>
    <script src="../static/js/accessibility.js"></script>
</body>

</html>