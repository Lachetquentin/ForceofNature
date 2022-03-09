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
if (isset($_POST['submit'])) {

    $name = htmlspecialchars($_POST['name']);
    $category = htmlspecialchars($_POST['category']);
    $price = htmlspecialchars($_POST['price']);
    $description = htmlspecialchars($_POST['description']);

    $targetDir = "../../../static/img";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $category_check_query = "SELECT * FROM category WHERE name='$categoryname' LIMIT 1";
    $result = mysqli_query($db, $category_check_query);
    if (mysqli_num_rows($result) > 0) { // if category exists

        // Alert déjà  existant
        header('Location: ../../addCategory.php?erreur=true');
    }
    // register category if there are no errors in the form
    else {
        $query = "INSERT INTO category (name) VALUES ('$categoryname')";
        mysqli_query($db, $query);

        // Alert réussite
        header('location: ../../categories.php?success=1');
    }
}
mysqli_close($db);
