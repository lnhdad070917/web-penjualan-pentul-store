<?php
session_start();
include "../koneksi.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$query = mysqli_query($koneksi, " SELECT * FROM login WHERE username='$user' && pass= '$pass'") or die(mysqli_error($koneksi));

$cek = mysqli_fetch_assoc($query);

if ($cek['level'] == "user") {
    $_SESSION['username'] = $user;
    $_SERVER['password'] = $pass;
    $_SESSION['level'] = "user";
    header("location:../user/dashboard.php");
} elseif ($cek['level'] == "admin"){
    $_SESSION['username'] = $user;
    $_SERVER['password'] = $pass;
    $_SESSION['level'] = "admin";
    header("location:../index.php");
} 
else {
    header("location:../pages-login.php?pesan=gagal");
}