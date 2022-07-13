<?php
    header("location:../tables-user.php?pesan=hapus");
?>
<?php
include '../koneksi.php';
$id_pengguna = $_GET['id_pengguna'];
$query = mysqli_query($koneksi, "DELETE FROM login WHERE id_pengguna ='$id_pengguna'");
if ($query) {
    header("location:../tables-user.php?pesan=hapus");
} else {
    echo "Data gagal dihapus";
}