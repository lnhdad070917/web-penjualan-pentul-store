<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_Panel.xls")
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

<h5 class="card-title" style="text-align: center;">DATA Akun Provider SIAP JUAL</h5>
<p>Akun Provider yang ada disini adalah Akun Provider siap dijual, menggunakan Database sederhana</p>

<!-- Table with stripped rows -->
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Provider </th>
            <th scope="col">email</th>
            <th scope="col">Password</th>
            <th scope="col">Note</th>
            <th scope="col">date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $tahun = $_GET['tahun'];
        $bulan = $_GET['bulan'];
        $query = mysqli_query($koneksi, "SELECT * from panel WHERE month(tgl_buat) =$bulan AND year(tgl_buat)=$tahun");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $data['id_panel']; ?></th>
                <td><?php echo $data['provider']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['pass']; ?></td>
                <td><?php echo $data['note']; ?></td>
                <td><?php echo $data['tgl_buat']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>