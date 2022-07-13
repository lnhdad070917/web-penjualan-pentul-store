<?php
header("Content-type:application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data_USER.xls")
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

<h5 class="card-title">DATA USER</h5>
<p>Data table user yang sudah mendaftar di web</p>

<!-- Table with stripped rows -->
<table border="1" id="customers">
    <thead>
        <tr>
            <th scope="col">id_pengguna</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include '../koneksi.php';
        $query = mysqli_query($koneksi, "SELECT * FROM login WHERE level='user'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <th scope="row" class="text-center"><?php echo $data['id_pengguna']; ?></th>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td>'<?php echo $data['pass']; ?></td>
                <td><?php echo date("d/F/y", strtotime($data['tgl_lahir'])); ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['level']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>