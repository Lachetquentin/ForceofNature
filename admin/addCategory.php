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

<?php include 'includes/const.php' ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Une source d'aide pour les étudiants en alternance.">
    <meta name="author" content="<?php echo SITE_TITLE ?>">
    <title>Ajout catégorie / <?php echo SITE_TITLE ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../static/img/favicon.ico">
    <link rel="icon" href="../static/img/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css" />

    <!-- Custom styles for this template -->
    <link href="static/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <form action="search.php" method="get">
        <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><?php echo SITE_TITLE ?></a>
            <button onclick="hide_table()" class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input type="text" placeholder="Recherche" name="query" class="form-control form-control-lg" aria-label="Search">
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

                <?php
                if (isset($_GET['erreur'])) {
                    echo "<div class='alert alert-danger' role='alert'>
                    Catégorie déjà existante !
                </div>";
                }
                ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de Bord</h1>
                </div>

                <h2>Administration catégorie</h2>
                <section class="text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h2>Création d'une catégorie</h2>
                            <form method="POST" action="functions/categories/create.php">

                                <div>
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="categoryname" required>
                                </div>

                                <input id="9" type="submit" class="btn btn-primary my-2 tools" value="Créer" name="submit" title="Ce bouton vous permettra de créer une catégorie">
                                <input id="10" type="reset" class="btn btn-warning my-2 tools" value="Réinitialiser" title="Ce bouton permettra de réinitialiser les mots-clés de votre saisie de nouvelle catégorie ">
                            </form>
                        </div>
                    </div>
                </section>

            </main>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="static/js/dashboard.js"></script>
    <script src="../static/js/accessibility.js"></script>
</body>

</html>