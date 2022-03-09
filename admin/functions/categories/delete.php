<?php
session_start();
?>

<?php
if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] != 1 or $_SESSION['role'] != 2) {
        header("Location: db_signin.php?error=1");
        break;
    }
?>

<?php
} else header("Location: db_signin.php?error=1");
break;
?>

<?php
include_once '../../includes/config.php';
?>

<?php

$id = $_GET['id'];

$category_check_query = "SELECT * FROM category WHERE id_category='$id' LIMIT 1";
$result = mysqli_query($db, $category_check_query);
if (mysqli_num_rows($result) > 0) { // if category exists

    // Alert réussite
    $query = "DELETE FROM category WHERE id_category='$id'";
    mysqli_query($db, $query);
    header('location: ../../categories.php?success=3');
}
// register category if there are no errors in the form
else {
    // Alert non existant
    header("Location: ../../categories.php?erreur=true");
}

mysqli_close($db);
