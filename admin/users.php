<?php
session_start();
// if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
//     if ($_SESSION['role'] != 1) {
//         header("Location: db_signin.php?error=1");
//         break;
//     }
// } else header("Location: db_signin.php?error=1");
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

    <!-- TODO include search -->

    <div class="container-fluid">
        <div class="row">

            <!-- TODO include nav -->

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
                                    <td><a id="9" href="functions/delete.php?id=<?php echo $user['id_user']; ?>" class="btn btn-danger btn-sm tools" type="button" title="Ce bouton vous permettra de supprimer un utilisateur de la base de données du site">Supprimer</a></td>
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