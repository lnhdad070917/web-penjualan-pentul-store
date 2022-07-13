<?php
    header("location:../tables-ready-vps.php?pesan=sold");
?>
<?php
session_start();
$username = $_SESSION['username'];
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}
?>
<?php
include '../koneksi.php';
$id_vps = $_GET['id_vps'];
$query = mysqli_query($koneksi, "UPDATE vps SET status = 'sold' WHERE id_vps ='$id_vps'");
if ($query) {
    header("location:../tables-ready-vps.php?pesan=sold");
} else {
    echo "Data gagal dihapus";
}