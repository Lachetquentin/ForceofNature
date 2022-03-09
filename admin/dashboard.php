<?php
session_start();
?>

<?php
if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 1 or $_SESSION['role'] != 2) {
        header("Location: db_signin.php?error=1");
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

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css" /> <!-- TODO Change bootstrap -->
    <!-- Custom styles for this template -->
    <link href=" static/css/dashboard.css" rel="stylesheet"> <!-- TODO dashboard css -->
</head>

<body>

    <form action="search.php" method="get">
        <!-- TODO Search -->
        <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><?php echo SITE_TITLE ?></a>
            <button onclick="hide_table()" class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input type="search" placeholder="Recherche" name="query" class="form-control form-control-lg" aria-label="Search">
            <input type="submit" class="visually-hidden" />

        </header>
    </form>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard.php">
                                <span data-feather="home"></span>
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admins.php">
                                <span data-feather="users"></span>
                                Gestion Administration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">
                                <span data-feather="users"></span>
                                Gestion utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="enterprises.php">
                                <span data-feather="users"></span>
                                Gestion entreprises
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categories.php">
                                <span data-feather="plus-circle"></span>
                                Gestion catégories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tools" href="comments.php">
                                <span data-feather="plus-circle"></span>
                                Gestion commentaires
                            </a>
                        </li>
                    </ul>

                    <hr>

                    <ul class="nav justify-content-center">

                        <li class="nav-item mb-1 mx-1 my-1">
                            <button type="button" class="btn btn-info tools" id="accessibility">Accessibilité off</button>

                            <a class="text-white btn btn-danger btn-sm" href="../public/functions/logout.php">
                                Déconnexion
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de bord</h1>
                </div>

                <h2>Accueil</h2>

                <div class="row">

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbEnterprises = getNbEnterprises() ?>
                                <h5 class="card-title"><?php echo $nbEnterprises ?></h5>
                                <?php if ($nbEnterprises == 1) : ?>
                                    <p class="card-text">entreprise inscrite</p>
                                <?php else : ?>
                                    <p class="card-text">entreprises inscrites</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbUsers = getNbUsers() ?>
                                <h5 class="card-title"><?php echo $nbUsers ?></h5>
                                <?php if ($nbUsers == 1) : ?>
                                    <p class="card-text">utilisateur</p>
                                <?php else : ?>
                                    <p class="card-text">utilisateurs inscrit</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbOrdering = getNbOrdering() ?>
                                <h5 class="card-title"><?php echo $nbOrdering ?></h5>
                                <?php if ($nbOrdering == 1) : ?>
                                    <p class="card-text">commande effectué</p>
                                <?php else : ?>
                                    <p class="card-text">commandes effectués</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbServices = getNbServices() ?>
                                <h5 class="card-title"><?php echo $nbServices ?></h5>
                                <?php if ($nbServices == 1) : ?>
                                    <p class="card-text">service</p>
                                <?php else : ?>
                                    <p class="card-text">services</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbProducts = getNbProducts() ?>
                                <h5 class="card-title"><?php echo $nbProducts ?></h5>
                                <?php if ($nbProducts == 1) : ?>
                                    <p class="card-text">produit</p>
                                <?php else : ?>
                                    <p class="card-text">produits</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 mb-2">
                        <div class="card">
                            <div class="card-body">
                                <?php $nbComments = getNbPendingComments() ?>
                                <h5 class="card-title"><?php echo $nbComments ?></h5>
                                <?php if ($nbComments == 1) : ?>
                                    <p class="card-text">commentaire en attente</p>
                                <?php else : ?>
                                    <p class="card-text">commentaires en attente</p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>

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