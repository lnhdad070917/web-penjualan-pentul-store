<?php
    header("location:../tables-ready-panel.php?pesan=hapus");
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
$query = mysqli_query($koneksi, "DELETE FROM panel WHERE id_panel ='$id_panel'");
if ($query) {
    header("location:../tables-ready-panel.php?pesan=hapus");
} else {
    echo "Data gagal dihapus";
}