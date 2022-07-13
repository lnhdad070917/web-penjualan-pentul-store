<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$date = $_POST['date'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "INSERT INTO `login` (`id_pengguna`, `username`, `nama`, `tgl_lahir`, `pass`, `email`, `level`) VALUES (NULL, '$username', '$nama', '$date', '$password', '$email', 'user');")
    or die(mysqli_error($koneksi));

if ($query) {
    header("location:../pages-login.php?pesan=success");
} else {
    echo "Proses input gagal, silahkan input kembali";
    echo "Silahkan klik <a href='formBarang.php'>disini</a>";
}