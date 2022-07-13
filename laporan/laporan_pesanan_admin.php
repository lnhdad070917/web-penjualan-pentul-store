<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Pemesanan.xls")
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
        $tahun = $_GET['tahun'];
        $bulan = $_GET['bulan'];
        $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE month(tgl_pesan) =$bulan AND year(tgl_pesan)=$tahun");
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