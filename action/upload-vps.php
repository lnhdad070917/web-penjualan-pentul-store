<?php
    header("location:../tables-ready-vps.php?pesan=success");
?>
<?php
include "../koneksi.php";

$panel = $_GET['panel'];
$ip = $_GET['ip'];
$core = $_GET['core'];
$ram = $_GET['ram'];
$username = $_GET['username'];
$pass = $_GET['pass'];
$note = $_GET['note'];
$date = $_GET['date'];
$status = $_GET['status'];


$query = mysqli_query($koneksi, "INSERT INTO `vps` (`id_vps`, `ip`, `tgl_buat`, `core`, `ram`, `panel`, `status`, `username`, `pass`, `note`) 
VALUES (NULL, '$ip', '$date', '$core', '$ram', '$panel', '$status', '$username', '$pass', '$note');")
    or die(mysqli_error($koneksi));

if ($query) {
    header("location:../tables-ready-vps.php?pesan=success");
} else {
    echo "Proses input gagal, silahkan input kembali";
    echo "Silahkan klik <a href='formBarang.php'>disini</a>";
}