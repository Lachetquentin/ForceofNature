<?php
session_start();
?>

<?php

include_once '../../includes/config.php';

?>

<?php include '../../includes/get.php' ?>

<?php
if (isset($_POST['submit'])) {

    $userId = htmlspecialchars($_POST['id']);
    $firstName = htmlspecialchars($_POST['firstname']);
    $lastName = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    
    $user = getUserById($userId);
    if ($user['email'] != $email) {
        $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($db, $email_check_query);
        if (mysqli_num_rows($result) > 0) { // if email exists
            // Alert déjà  existant
            header("Location: ../../updateUser.php?id=$userId&erreur=true");
            break;
        }
        // update user if there are no errors in the form
        else {
            $query = "UPDATE user SET first_name = '$firstName', last_name = '$lastName', email = '$email' WHERE id_user = '$userId'";
            mysqli_query($db, $query);

            // Alert réussite
            header('location: ../../admins.php?success=1');
            break;
        }
    }
    else{
        $query = "UPDATE user SET first_name = '$firstName', last_name = '$lastName' WHERE id_user = '$userId'";
        mysqli_query($db, $query);
        // Alert réussite
        header('location: ../../admins.php?success=1');
        break;
    }
   

    

    
}
mysqli_close($db);
