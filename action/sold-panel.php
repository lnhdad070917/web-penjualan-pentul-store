<?php
    header("location:../tables-ready-panel.php?pesan=sold");
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
$id_panel = $_GET['id_panel'];
$query = mysqli_query($koneksi, "UPDATE panel SET status = 'sold' WHERE id_panel ='$id_panel'");
if ($query) {
    header("location:../tables-ready-panel.php?pesan=sold");
} else {
    echo "Data gagal dihapus";
}