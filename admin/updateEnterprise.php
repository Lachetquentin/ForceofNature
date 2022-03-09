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

<?php if (empty($_GET['id'])) {
    header("Location: enterprises.php");
    break;
} else $id = $_GET['id'];
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
    <title>Modification entreprise / <?php echo SITE_TITLE ?></title>

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
                    Utilisateur(trice) déjà existant(e) !
                </div>";
                }
                ?>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Tableau de Bord</h1>
                </div>

                <h2>Administration utilisateur</h2>
                <section class="text-center container">
                    <div class="row py-sm-3 py-md-4 py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h2>Modification d'un utilisateur</h2>

                            <?php $user = getUserById($id); ?>

                            <form method="POST" action="functions/enterprises/update.php">

                                <div>
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $user['last_name'] ?>" required>
                                </div>

                                <div>
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $user['first_name'] ?>" required>
                                </div>

                                <div>
                                    <label>Civilité</label>
                                    <select class="form-control" name="type" required>
                                        <?php $genders = getGenders(); ?>
                                        <option value="">Sélectionner une civilité</option>
                                        <?php foreach ($genders as $gender) : ?>
                                            <?php if ($user['id_type'] == $gender['id_type']) : ?>
                                                <option value="<?php echo $gender['id_type']; ?>" selected><?php echo $gender['name']; ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $gender['id_type']; ?>"><?php echo $gender['name']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div>
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" value="<?php echo $user['email'] ?>" required>
                                </div>

                                <div>
                                    <label>Numéro de téléphone</label>
                                    <input type="tel" class="form-control" name="tel" value="<?php echo $user['tel'] ?>" required>
                                </div>

                                <div>
                                    <label>Entreprise</label>
                                    <input type="text" class="form-control" name="enterprise" value="<?php echo $user['enterprise'] ?>" required>
                                </div>

                                <div>
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $user['address'] ?>" required>
                                </div>

                                <div>
                                    <label>Code postal</label>
                                    <input type="text" class="form-control" name="zipcode" value="<?php echo $user['zip_code'] ?>" required>
                                </div>

                                <div>
                                    <label>Pays</label>
                                    <select class="form-control" name="country" required>
                                        <?php $countrys = getCountry(); ?>
                                        <option value="">Sélectionner un pays</option>
                                        <?php foreach ($countrys as $country) : ?>
                                            <?php if ($user['id_country'] == $country['id_country']) : ?>
                                                <option value="<?php echo $country['id_country']; ?>" selected><?php echo $country['name']; ?></option>
                                            <?php else : ?>
                                                <option value="<?php echo $country['id_country']; ?>"><?php echo $country['name']; ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <input id="9" type="submit" class="btn btn-primary my-2 tools" value="Modifier" name="submit" title="Ce bouton vous permettra de prendre en compte votre modification">
                                <input id="10" type="reset" class="btn btn-warning my-2 tools" value="Réinitialiser" title="Ce bouton permettra de réinitialiser les mots-clés de votre modification">
                            </form>
                            <a id="11" class="text-white btn btn-danger tools" href="users.php" title="Ce bouton vous permettra de revenir a la page précédente">
                                Annuler
                            </a>
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