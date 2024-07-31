<?php
include('./includes/config.php');
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $insert = mysqli_query($conn, "INSERT INTO emp(name,email,password,phone) VALUES('$name','$email','$password','$phone')");
    if ($insert) {
        echo "register successfully";
        header('location:index.php');
    } else {
        header('location:register.php');
    }
}
// update
if (isset($_POST['update'])) {

    $update_id = $_POST['update_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $update = mysqli_query($conn, "UPDATE emp set name=' $name',email='$email',password='$password',phone='$phone' WHERE id='$update_id'");
    if ($update) {
        echo "update successfully";
        header('location:index.php');
    } else {
        echo "update unsuccessfully";
        header('location:index.php');
    }
}
// delete
// if (isset($_POST['delete'])) {

//     $delete_id = $_POST['delete_id'];
//     $delete = mysqli_query($conn, "DELETE FROM emp WHERE id='$delete_id'");
//     if ($delete == TRUE) {
//         header('location:index.php');
//         $statusMsg = "<div class='alert alert-success' style='margin-right:700px;'>class Arm deleted successfully!</div>";
//     } else {
//         header('location:index.php');
//         $statusMsg = "<div class='alert alert-danger' style='margin-right:700px;'>An error Occurred!</div>";
//     }
// }

if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];
    $delete = mysqli_query($conn, "DELETE FROM emp WHERE id='$delete_id'");
    if ($delete) {
        header('location:index.php');
    } else {
        header('location:index.php');
    }
}
