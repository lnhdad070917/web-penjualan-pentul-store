<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Pemesanan.xls")
?>
<?php
session_start();
$username = $_SESSION['username'];
if (empty($_SESSION['username'])) {
    header("location:../action/ceklogin.php");
}
include '../koneksi.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM login WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_array($result);
    $_SESSION["nama"] = $user["nama"];
    $_SESSION["id_pengguna"] = $user["id_pengguna"];
    $_SESSION["level"] = $user["level"];
    $_SESSION["email"] = $user["email"];
}
?>

<style>
    #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04aa6d;
            color: white;
        }
</style>

<h5 class="card-title" style="text-align: center;">DATA PESANAN</h5>
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">ID_PEMESANAN</th>
            <th scope="col">Tanggal Bayar</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Core</th>
            <th scope="col">Ram</th>
            <th scope="col">Jumlahh Bayar</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $nama = $_SESSION["id_pengguna"];
        $query = mysqli_query($koneksi, "SELECT * FROM `pemesanan` WHERE id_pengguna = '$nama'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['id_pemesanan']; ?></td>
                <td><?php echo $data['tgl_bayar']; ?></td>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><?php echo $data['core']; ?></td>
                <td><?php echo $data['ram']; ?></td>
                <td><?php echo "Rp " . number_format($data['jumlah_bayar'], 2, ',', '.') ?></td>
                <td><?php echo $data['status']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>