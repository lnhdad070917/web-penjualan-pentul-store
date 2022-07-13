<?php
    header("location:../tables-ready-panel.php?pesan=success");
?>
<?php
include "../koneksi.php";

$provider = $_GET['provider'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$note = $_GET['note'];
$date = $_GET['date'];
$rs = $_GET['rs'];

$query = mysqli_query($koneksi, "INSERT INTO `panel` (`id_panel`, `email`, `pass`, `tgl_buat`, `status`, `note`, `provider`) 
VALUES (NULL, '$email', '$pass', '2022-05-24', 'ready', '$note', '$provider');")
    or die(mysqli_error($koneksi));

if ($query) {
    header("location:../tables-ready-panel.php?pesan=success");
} else {
    echo "Proses input gagal, silahkan input kembali";
    echo "Silahkan klik <a href='formBarang.php'>disini</a>";
}