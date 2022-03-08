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
    $gender = htmlspecialchars($_POST['type']);
    $tel = htmlspecialchars($_POST['tel']);
    $address = htmlspecialchars($_POST['address']);
    $zipcode = htmlspecialchars($_POST['zipcode']);
    $country = htmlspecialchars($_POST['country']);

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
            $query = "UPDATE user SET first_name = '$firstName', last_name = '$lastName', email = '$email', id_type = '$gender', tel = '$tel', address = '$address', zip_code = '$zipcode', id_country = '$country' WHERE id_user = '$userId'";
            mysqli_query($db, $query);

            // Alert réussite
            header('location: ../../users.php?success=1');
        }
    }
    else{
        $query = "UPDATE user SET first_name = '$firstName', last_name = '$lastName', id_type = '$gender', tel = '$tel', address = '$address', zip_code = '$zipcode', id_country = '$country' WHERE id_user = '$userId'";
        mysqli_query($db, $query);
        // Alert réussite
        header('location: ../../users.php?success=1');
    }
   

    

    
}
mysqli_close($db);
