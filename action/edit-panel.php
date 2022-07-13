<?php
    header("location:../tables-ready-panel.php?pesan=edit");
?>
<?php
include '../koneksi.php';

$id_panel = $_GET['id_panel'];
$provider = $_GET['provider'];
$mail = $_GET['mail'];
$pass = $_GET['pass'];
$note = $_GET['note'];
$date = $_GET['date'];
$status = $_GET['status'];

$query = mysqli_query($koneksi, "UPDATE panel SET provider='$provider', email= '$mail', pass= '$pass', note= '$note', tgl_buat= '$date', status = '$status' WHERE id_panel='$id_panel'");
if ($query) {
    header("location:../tables-ready-panel.php?pesan=edit");
    echo "Data gagal diubah";
}