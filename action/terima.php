<?php
    header("location:../index.php");
?>
<?php
session_start();
$username = $_SESSION['username'];
if (empty($_SESSION['username'])) {
    header("location:../action/ceklogin.php");
}
include '../koneksi.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM login WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
if( mysqli_num_rows($result)>0){
    $user = mysqli_fetch_array($result);
    $_SESSION["nama"] = $user["nama"];
    $_SESSION["id_pengguna"] = $user["id_pengguna"];
}
?>

<?php
include "../koneksi.php";

$id_pesanan = $_GET['id_pemesanan'];


$query = mysqli_query($koneksi, "UPDATE `pemesanan` SET `status` = 'diterima' WHERE `pemesanan`.`id_pemesanan` = $id_pesanan;")
    or die(mysqli_error($koneksi));

if ($query) {
    header("location:../index.php");
} else {
    header("location:../vps.php");
}