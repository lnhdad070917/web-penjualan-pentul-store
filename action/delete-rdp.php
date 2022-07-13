<?php
    header("location:../tables-ready-rdp.php?pesan=hapus");
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
$query = mysqli_query($koneksi, "DELETE FROM rdp WHERE id_rdp ='$id_rdp'");
if ($query) {
    header("location:../tables-ready-rdp.php?pesan=hapus");
} else {
    echo "Data gagal dihapus";
}