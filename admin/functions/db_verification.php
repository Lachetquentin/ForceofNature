<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {

    include("../includes/config.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email !== "" && $password !== "") {
        $req = "SELECT count(*) FROM user where email = '" . $email . "' and password = '" . $password . "' ";
        $query = mysqli_query($db, $req);
        $res = mysqli_fetch_array($query);
        $count = $res['count(*)'];

        $role = "SELECT id_role FROM user where email = '$email'";
        $qrole = mysqli_query($db, $role);
        $resrole = mysqli_fetch_array($qrole);
        $access = $resrole['id_role'];

        $id = "SELECT id_user FROM user where email = '$email'";
        $qId = mysqli_query($db, $id);
        $resId = mysqli_fetch_array($qId);
        $userId = $resId['id_user'];

        if ($count != 0) {
            switch ($access) {
                case '1':
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $access;
                    $_SESSION['userId'] = $userId;
                    header('Location: ../dashboard.php');
                    break;

                case '2':
                    $_SESSION['email'] = $email;
                    $_SESSION['role'] = $access;
                    $_SESSION['userId'] = $userId;
                    header('Location: ../sales/dashboard.php');
                    break;

                default:
                    header('Location: ../db_signin.php?error=1');
                    break;
            }
        } else {
            header('Location: ../db_signin.php?error=2');
            break;
        }
    } else {
        header('Location: ../db_signin.php?error=3');
        break;
    }
} else {
    header('Location: ../db_signin.php');
    break;
}
mysqli_close($db);
