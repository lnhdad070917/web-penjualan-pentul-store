Thanks for downloading this template!

Template Name: NiceAdmin
Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/



              <?php
              include 'koneksi.php';
              $nomor = $_GET['nomor'];
              $data = mysqli_query($koneksi, "SELECT*FROM rdp WHERE nomor='$nomor'");
              while ($hasil = mysqli_fetch_array($data)) {
              ?>
                <p>Terimakasih Sudah Berbelanja di PENTUL_STORE</p>
                <p>Panel <?php echo $data['panel']; ?> </p>
                <p>IP : ||<?php echo $data['ip']; ?>|| </p>
                <p>ID : ||<?php echo $data['username']; ?>|| </p>
                <p>PASS : ||<?php echo $data['pass1']; ?>|| </p>
                <p>PASS : ||<?php echo $data['pass2']; ?>|| </p>
                <p>note : </p>
                <p>1. Garansi 7 hari, berupa penggantian akun baru</p>
                <p>2. Langsung sampaikan jika ada kendala</p>
                <p>3. Pembelian RDP + lisensi, silahakn registerkan sendiri, lisensi ada di file lisensi.txt</p>
                <?php } ?>




                <?php
              include 'koneksi.php';
              $nomor = $_GET['nomor'];
              $data = mysqli_query($koneksi, "SELECT*FROM rdp WHERE nomor='$nomor'");
              while ($hasil = mysqli_fetch_array($data)) {
              ?>
              
                <p>Terimakasih Sudah Berbelanja di PENTUL_STORE</p>
                <p>Panel <?php echo $hasil['panel']; ?> </p>
                <p>IP : ||<?php echo $hasil['ip']; ?>|| </p>
                <p>ID : ||<?php echo $hasil['username']; ?>|| </p>
                <p>PASS : ||<?php echo $hasil['pass1']; ?>|| </p>
                <p>PASS : ||<?php echo $hasil['pass2']; ?>|| </p>
                <p>note : </p>
                <p>1. Garansi 7 hari, berupa penggantian akun baru</p>
                <p>2. Langsung sampaikan jika ada kendala</p>
                <p>3. Pembelian RDP + lisensi, silahakn registerkan sendiri, lisensi ada di file lisensi.txt</p>
                <?php } ?>