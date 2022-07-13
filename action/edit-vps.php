<?php
header("location:../tables-ready-vps.php?pesan=edit");
?>
<?php
include '../koneksi.php';

$id_vps = $_GET['id_vps'];
$panel = $_GET['panel'];
$ip = $_GET['ip'];
$core = $_GET['core'];
$ram = $_GET['ram'];
$username = $_GET['username'];
$pass = $_GET['pass'];
$note = $_GET['note'];
$date = $_GET['date'];
$status = $_GET['status'];

$query = mysqli_query($koneksi, "UPDATE `vps` SET `ip` = '$ip', `tgl_buat` = '$date', `core` = '$core', `ram` = '$ram', `status` = '$status', `username` = '$username', `pass` = '$pass', `note` = '$note' WHERE `vps`.`id_vps` = '$id_vps';");
if ($query) {
    header("location:../tables-ready-vps.php?pesan=edit");
} else {
    echo "Data gagal diubah";
}