<?php
    header("location:../tables-ready-rdp.php?pesan=sold");
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
$id_rdp = $_GET['id_rdp'];
$query = mysqli_query($koneksi, "UPDATE rdp SET status = 'sold' WHERE id_rdp ='$id_rdp'");
if ($query) {
    header("location:../tables-ready-rdp.php?pesan=sold");
} else {
    echo "Data gagal dihapus";
}