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
    <meta name="description" content="Une source d'aide pour les étudiants en alternance.">
    <meta name="author" content="<?php echo SITE_TITLE ?>">
    <title>Gestion particuliers / <?php echo SITE_TITLE ?></title>

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
                if (isset($_GET['success'])) {
                    $s = $_GET['success'];
                    if ($s == 1) {
                        echo "<div class='alert alert-success' role='alert'>
                        Utilisateur(trice) modifié(e) avec succès !
                        </div>";
                    }
                    if ($s == 2) {
                        echo "<div class='alert alert-success' role='alert'>
                        Utilisateur(trice) supprimé(e) avec succès !
                        </div>";
                    }
                }
                ?>

                <?php
                if (isset($_GET['error'])) {
                    echo "<div class='alert alert-danger' role='alert'>
                    Utilisateur(trice) non existant(e) !
                </div>";
                }
                ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de Bord</h1>
                </div>

                <h2>Administration utilisateur</h2>
                <div class="table-responsive" id="myTable">

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Adresse</th>
                                <th scope="col">Code postal</th>
                                <th scope="col">Numéro de téléphone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $users = getUsers(); ?>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?php echo $user['id_user']; ?></td>
                                    <td><?php echo $user['last_name']; ?></td>
                                    <td><?php echo $user['first_name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['address']; ?></td>
                                    <td><?php echo $user['zip_code']; ?></td>
                                    <td><?php echo $user['tel']; ?></td>
                                    <td><a id="9" href="functions/users/delete.php?id=<?php echo $user['id_user']; ?>" class="btn btn-danger btn-sm tools" type="button" title="Ce bouton vous permettra de supprimer un utilisateur de la base de données du site">Supprimer</a></td>
                                    <td><a id="10" href="updateUser.php?id=<?php echo $user['id_user']; ?>" class="btn btn-warning btn-sm tools" type="button" title="Ce bouton vous permettra d'accéder a la page de modification des informations d'un utilisateur ">Modifier</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

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