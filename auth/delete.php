<?php
include('./auth/auth.php');
include("../utilities/dbconnection.php");
if (!$authenticated) {
    header("Location: ./login.php");
} else {
    if (!$admin) {
        header("Location: ./unauth.php");
    } else {
        $id = $_GET['id'];

        $sql = "DELETE FROM users WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) header("Location: updateUser.php");
    }
}
