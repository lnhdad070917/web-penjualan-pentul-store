<?php
header("location:../tables-user.php?pesan=edit");
?>
<?php
include '../koneksi.php';

$id_pengguna = $_GET['id_pengguna'];
$nama = $_GET['nama'];
$username = $_GET['username'];
$pass = $_GET['pass'];
$email = $_GET['email'];
$tgl_lahir = $_GET['tgl_lahir'];
$level = $_GET['level'];


$query = mysqli_query($koneksi, "UPDATE `login` SET `username` = '$username', `nama` = '$nama', `tgl_lahir` = '$tgl_lahir', `pass` = '$pass', `email` = '$email', `level` = '$level' WHERE `login`.`id_pengguna` = $id_pengguna;");
if ($query) {
    header("location:../tables-user.php?pesan=edit");
} else {
    echo "Data gagal diubah";
}
