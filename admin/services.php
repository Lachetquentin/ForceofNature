<?php
session_start();
?>

<?php
// if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
//     if ($_SESSION['role'] != 2) {
//         header("Location: ../index.php");
//     }
?>

<?php
// } else header("Location: ../index.php");
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
    <title>Gestion fiches / <?php echo SITE_TITLE ?></title>

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

            <input type="search" placeholder="Recherche" name="query" class="form-control form-control-lg" aria-label="Search">
            <input type="submit" class="visually-hidden" />

        </header>
    </form>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a id="0" class="nav-link tools" href="index.php" title="Ce bouton vous permet de vous rediriger vers le tableau de bord des administrateurs">
                                <span data-feather="home"></span>
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="1" class="nav-link tools" href="users.php" title="Ce bouton vous permettra d'accéder a la page de gestion des utilisateurs">
                                <span data-feather="users"></span>
                                Gestion utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="2" class="nav-link active tools" aria-current="page" href="sheets.php" title="Ce bouton vous permettra d'accéder a la page de gestion des fiches">
                                <span data-feather="file"></span>
                                Gestion fiches
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="3" class="nav-link tools" href="addSheet.php" title="Ce bouton vous permettra d'accéder a la page d'ajout de fiches">
                                <span data-feather="file-plus"></span>
                                Ajout fiche
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="4" class="nav-link tools" href="comments.php" title="Ce bouton vous permettra d'accéder a la page de gestion de commentaire">
                                <span data-feather="message-square"></span>
                                Gestion commentaires
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="5" class="nav-link tools" href="categories.php" title="Ce bouton vous permettra d'accéder a la page de gestion de catégories">
                                <span data-feather="filter"></span>
                                Gestion catégories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="6" class="nav-link tools" href="addCategory.php" title="Ce bouton vous permettra d'accéder a la page d'ajout de catégories">
                                <span data-feather="plus-circle"></span>
                                Ajout catégorie
                            </a>
                        </li>
                    </ul>

                    <hr>

                    <ul class="nav justify-content-center">

                        <li class="nav-item mb-1 mb-md-0 mx-1">
                            <a id="7" class="text-white btn btn-primary tools" href="../public/" title="Ce bouton vous permettra de basculer sur l'interface des utilisateurs">
                                Allez vers l'accueil utilisateur
                            </a>
                        </li>

                        <li class="nav-item mb-1 mx-1 my-1">
                            <button type="button" class="btn btn-info" id="accessibility">Accessibilité off</button>

                            <a id="8" class="text-white btn btn-danger btn-sm tools" href="../public/functions/logout.php" title="Ce bouton vous permettra de vous déconnecter et retourner sur la page d'accueil">
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
                        Fiche ajoutée avec succès !
                        </div>";
                    }
                    if ($s == 2) {
                        echo "<div class='alert alert-success' role='alert'>
                        Fiche modifiée avec succès !
                        </div>";
                    }
                    if ($s == 3) {
                        echo "<div class='alert alert-success' role='alert'>
                        Fiche supprimée avec succès !
                        </div>";
                    }
                }
                ?>

                <?php
                if (isset($_GET['erreur'])) {
                    echo "<div class='alert alert-danger' role='alert'>
                    Fiche non existante !
                </div>";
                }
                ?>

                <?php $totalPages = getNbServices(); ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de Bord</h1>
                </div>

                <h2>Administration fiche</h2>
                <div class="table-responsive" id="myTable">

                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $services = getServices(); ?>
                            <?php foreach ($services as $service) : ?>
                                <tr>
                                    <td><?php echo $service['id_service']; ?></td>
                                    <td><?php echo $service['name']; ?></td>
                                    <td><?php echo $service['price']; ?></td>
                                    <td><?php echo $service['quantity']; ?></td>
                                    <td><?php echo $service['description']; ?></td>
                                    <td><a id="9" href="functions/delete.php?id=<?php echo $service['id_product']; ?>" class="btn btn-danger btn-sm tools" type="button" title="Ce bouton vous permettra de supprimer une fiche de la base de données du site">Supprimer</a></td>
                                    <td><a id="10" href="updateProduct.php?id=<?php echo $service['id_product']; ?>" class="btn btn-warning btn-sm tools" type="button" title="Ce bouton vous permettra d'accéder a la page de modification des informations d'une fiche ">Modifier</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <ul class="pagination pagination-lg justify-content-center">
                    <?php
                    if ($totalPages / 10 < 1.1) : ?>
                    <?php else : ?>
                        <?php for ($i = 1; $i <= ceil($totalPages / 10); $i++) : ?>
                            <a class="page-link" href="products.php?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        <?php
                        endfor; ?>
                    <?php endif; ?>
                </ul>

            </main>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="static/js/dashboard.js"></script>
    <script src="../static/js/accessibility.js"></script>
</body>

</html>