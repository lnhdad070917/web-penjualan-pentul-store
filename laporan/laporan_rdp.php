<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_RDP.xls")
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

<h5 class="card-title">DATA RDP SIAP JUAL</h5>
<p>RDP yang ada disini adalah rdp siap dijual, menggunakan Database sederhana</p>

<!-- Table with stripped rows -->
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Panel ke - </th>
            <th scope="col">IP</th>
            <th scope="col">core</th>
            <th scope="col">Ram</th>
            <th scope="col">username</th>
            <th scope="col">pass1</th>
            <th scope="col">Note</th>
            <th scope="col">date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $tahun = $_GET['tahun'];
        $bulan = $_GET['bulan'];
        $query = mysqli_query($koneksi, "SELECT * FROM rdp WHERE month(tgl_buat) =$bulan AND year(tgl_buat)=$tahun");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $data['id_rdp']; ?></th>
                <td><?php echo $data['panel']; ?></td>
                <td><?php echo $data['ip']; ?></td>
                <td><?php echo $data['core']; ?></td>
                <td><?php echo $data['ram']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['pass']; ?></td>
                <td><?php echo $data['note']; ?></td>
                <td><?php echo date("d/F/y", strtotime($data['tgl_buat'])); ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>