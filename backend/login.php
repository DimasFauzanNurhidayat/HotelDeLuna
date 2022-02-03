<?php
include('koneksi.php');
// query email and password from form login
$email = $_POST['email'];
$password = $_POST['password'];
// query to check if email and password exist in database
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($db, $query);
// if email and password exist in database, then create session
session_start();
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['roles'] == 'ADMIN') {
        $_SESSION['username'] = $row['username'];
        header('location: admin.php');
    } else {
        $_SESSION['username'] = $row['username'];
        header('location: home.php');
    }
} else {
    $_SESSION['error'] = true;
    header('location: index.php');
}
?>

