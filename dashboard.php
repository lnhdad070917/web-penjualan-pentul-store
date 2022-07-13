<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Pentul Store</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/pentul1.png" rel="icon">
    <link href="assets/img/pentul1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
    ======================================================== -->
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            text-align: center;
            border: 1px solid #b0b0b0;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        #body-panel {
            font-family: 'Montserrat', sans-serif;
            background: radial-gradient(#e7e1d1, #d1e7dd);
        }

        #rdp {
            font-family: 'Montserrat', sans-serif;
            background: radial-gradient(#e7e1d1, #d1e7dd);
        }

        #accordion {
            font-family: 'Montserrat', sans-serif;
            background: radial-gradient(#e7e1d1, #d1e7dd);
        }

        #accordion .container {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
        }

        #accordion .content {
            width: 90%;
            max-width: 1000px;
            margin: 2rem auto;
        }

        #accordion .accordion-item {
            background-color: #f2f2f2;
            color: #111;
            margin: 1rem 0;
            border-radius: 0.5rem;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 9, 0.25);
        }

        #accordion .accordion-button {
            padding: 2rem 2rem 2rem 3rem;
            min-height: 3.5rem;
            line-height: 1.25rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
            font-size: large;
        }

        #accordion .accordion-header::after {
            font-size: 2rem;
            position: absolute;
            right: 1rem;
        }

        #accordion .accordion-body {
            padding: 2rem;
        }

        .carousel-container {
            background-color: #0c3429;
        }

        .con1 {
            width: 50%;
            float: left;
            text-align: center;
            margin-top: 50px;
        }

        .con2 {
            width: 50%;
            float: right;
            margin-top: 50px;
        }

        .con3 {
            width: 50%;
            float: left;
            margin-top: 50px;
        }

        .con4 {
            width: 50%;
            float: right;
            text-align: center;
            margin-top: 50px;
        }

        @media screen and (max-width: 922px) {

            .con1,
            .con2 {
                width: 100%;
            }
        }

        @media screen and (max-width: 922px) {

            .con3,
            .con4 {
                width: 100%;
            }
        }

        div.scrollmenu {
            background-color: radial-gradient(#e7e1d1, #d1e7dd);
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px;
            text-decoration: none;
        }

        div.scrollmenu a:hover {
            background-color: radial-gradient(#e7e1d1, #d1e7dd);
        }
    </style>
</head>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
    </symbol>
    <symbol id="instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
    </symbol>
    <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
    </symbol>
</svg>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-right ms-auto">
        <nav class="navbar navbar-expand-lg bg-light fixed-top">
            <div class="container-fluid">
                <a href="#" class="logo d-flex">
                    <img src="assets/img/pentul1.png" alt="">
                    <span class="d-none d-lg-block">PENTUL STORE</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav justify-content-end ms-auto">
                        <li class="bg-succes">
                            <a class="nav-link" style="color: green;" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: green;" href="#vps">VPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: green;" href="#rdp">RDP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: green;" href="#provider">Provider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: green;" href="#accordion">Q&A</a>
                        </li>&ensp;&ensp;
                        <li class="nav-item">
                            <a type="button" class="btn btn-outline-primary" href="pages-login.php">login</a>
                        </li>&ensp;
                        <li class="nav-item">
                            <a type="button" class="btn btn-primary" href="register.php">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="header-nav">

        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
    <div class="container-fluid carousel-container py-5">
        <div class="container">
            <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="assets/img/pentul1.png" style="display:block; margin-left:auto;margin-right:auto; width:auto;" class="d-block" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/img/pentul1.png" style="display:block; margin-left:auto;margin-right:auto;" class="d-block" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/img/pentul1.png" style="display:block; margin-left:auto;margin-right:auto;" class="d-block" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <h3 class="text-white" style="text-align: center; margin: 0 0; font-size: 2rem;">Selamat Datang Di Pentul Store</h3>
                <p class="text-white" style="text-align: center; margin: 0 0; font-size: 2rem;">Semoga kami bisa menjawab semua kebutuhan anda</p>
                <center><button type="button" class="btn btn-outline-info btn-lg" style="margin: 1rem 0;"> Read More </button></center><br><br>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>

    <section id="link">
        <div class="card">
            <div class="card-body" id="body-panel"><br><br>
                <br>
                <center>
                    <h2 style="font-size: 50px;"><strong>Alasan Terbaik Memilih VPS dan RDP di Pentul Store</strong></h2>
                    <p>Website dijamin 10x lebih baik dengan VPS dan Windows didukung premium SSD dari Pentul Store</p>
                </center>
                <div class="container-lg">
                    <div class="row">
                        <div class="con1" style="color: green;">
                            <img src="assets/img/speed.jpg" /><br>
                        </div>
                        <div class="con2" style="color: green;">
                            <h2><strong>Kecepatan Up To 1 Gb dengan Bandwith Unlimited</strong></h2>
                            <p style="text-align: justify;"> Kecepatan download dan upload lebih stabil, anda dialokasikan dengan sumber daya yang mirip dengan server khusus, tidak ada yang akan berbagi sumber daya server dengan anda. Selain itu, Penyimpanan dengan premium SSD yang memungkinkan pengunjung memiliki pengalaman yang lancar</p>
                        </div>
                        <br><br>
                    </div>
                    <div class="row">
                        <div class="con3" style="color: green;">
                            <h2><strong>Dukungan OS Terbaik dari Windows Server 2022</strong></h2>
                            <p style="text-align: justify;"> Menghadirkan opsi Windows Server 2022 yang memiliki kinerja terbaik dan lebih stabil dibandingkan pendahulunya. Inti infrastruktur teknologi Anda akan bekerja dengan performa yang optimal dan aman. Peningkatan perlindungan keamanan yang prima memberikan proteksi berlipat ganda. Pengelolaan yang lebih mudah dengan update terbaru dari tampilan Windows Update Center.</p>
                        </div>
                        <div class="con4" style="color: green;">
                            <img src="assets/img/windows.jpg" /><br>
                        </div>
                    </div>
                </div>
            </div>
            <div id="vps" class="scrollmenu">
                <br><br>
                <h2 style="color: green; text-align: center; margin: 2rem 0; font-size: 2.5rem;"><strong>PRICELIST VPS</strong></h2>
                <div class="container">
                    <table id="customers">
                        <thead>
                            <tr>
                                <th scope="col">Operating System</th>
                                <th scope="col">CPU</th>
                                <th scope="col">RAM</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Bandwith</th>
                                <th scope="col">IP Address</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * from vps_das");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $data['os']; ?></td>
                                    <td><?php echo $data['cpu']; ?></td>
                                    <td><?php echo $data['ram']; ?></td>
                                    <td><?php echo $data['storage']; ?></td>
                                    <td><?php echo $data['bandwith']; ?></td>
                                    <td><?php echo $data['ip_look']; ?></td>
                                    <td>Rp. <?php echo $data['harga']; ?></td>
                                    <td>
                                        <a href="pages-login.php" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square"></i>&nbsp;PESAN</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br><br><br><br>
            </div>

            <div id="rdp" class="scrollmenu">
                <br><br>
                <h2 style="color: green; text-align: center; margin: 2rem 0; font-size: 2.5rem;"><strong>PRICELIST RDP</strong></h2>
                <div class="container">
                    <table id="customers" class="scrollmenu">
                        <thead>
                            <tr>
                                <th scope="col">Operating System</th>
                                <th scope="col">CPU</th>
                                <th scope="col">RAM</th>
                                <th scope="col">Storage</th>
                                <th scope="col">Bandwith</th>
                                <th scope="col">IP Address</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * from rdp_das");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $data['os']; ?></td>
                                    <td><?php echo $data['cpu']; ?></td>
                                    <td><?php echo $data['ram']; ?></td>
                                    <td><?php echo $data['storage']; ?></td>
                                    <td><?php echo $data['bandwith']; ?></td>
                                    <td><?php echo $data['ip_look']; ?></td>
                                    <td>Rp. <?php echo $data['harga']; ?></td>
                                    <td>
                                        <a href="pages-login.php" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square"></i>&nbsp;PESAN</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table><br><br><br>
                </div>
            </div><br>
            <div id="provider" class="scrollmenu">
                <br><br>
                <h2 style="color: green; text-align: center; margin: 2rem 0; font-size: 2.5rem;"><strong>PRICELIST PROVIDER</strong></h2>
                <div class="container">
                    <table id="customers">
                        <thead>
                            <tr>
                                <th scope="col">Provider</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $query = mysqli_query($koneksi, "SELECT * from panel_das");
                            while ($data = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                    <td><?php echo $data['provider']; ?></td>
                                    <td><?php echo $data['jenis']; ?></td>
                                    <td><?php echo $data['saldo']; ?></td>
                                    <td>Rp. <?php echo $data['harga']; ?></td>
                                    <td>
                                        <a href="pages-login.php" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square"></i>&nbsp;PESAN</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table><br><br>
                </div>
            </div>
            <div id="accordion">
                <br><br>
                <h2 style="color: green; text-align: center; margin: 2rem 0; font-size: 2.5rem;"><strong>Q&A</strong></h2>
                <div class="container">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Apa itu VPS ?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">VPS merupakan singkatan dari Virtual Private Server. VPS hosting adalah salah satu layanan hosting yang paling banyak digunakan untuk mengonlinekan website. Tipe hosting ini menggunakan teknologi virtualisasi yang menyediakan resourse dedicated (pribadi) di server meskipun digunakan oleh lebih dari satu user.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Apa itu RDP ?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Remote Desktop Protocol (sering disingkat menjadi RDP) adalah sebuah protokol jaringan yang digunakan oleh Microsoft Windows Terminal Services dan Remote Desktop. RDP dibuat berdasarkan protokol T.120 yang spesifikasinya diumumkan oleh International Telecommunication Union (ITU), yang juga merupakan protokol yang digunakan di dalam perangkat lunak konferensi jarak jauh Microsoft NetMeeting.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Perbedaan VPS dan RDP ?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">RDP (Remote Desktop Protocol) fitur untuk mendapatkan tampilan GUI nya target. Sedangakn
                                    VPS (Virtual Private Server) adalah host/computer/vm yang disewakan penuh tidak di sharing.
                                    keduanya beda produk tidak bisa dibandingkan. hanya bisa dikorelasikan. VPS windows akan diberikan akses RDP atau SSH. tergantung providernya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    Berapa sih kecepatan internet RDP ?
                                </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Dengan menggunakan RDP, kecepatan internet yang bisa digunakan dapat mencapai 1.000 Mbps atau lebih, tergantung dari kecepatan network server RDP nya.</div>
                            </div>
                        </div>
                    </div><!-- End Accordion without outline borders -->
                </div>
                <br><br>
            </div>
        </div>

    </section>
    <!-- ======= Footer ======= -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Pentul Store</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Dashboard</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Price VPS</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Price RDP</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Price Provider</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Q&A</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Provider</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Azure</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Linode</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Digital Ocean</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vultr</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">AWS</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>About</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">RDP</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">VPS</a></li>
                    </ul>
                </div><br>
                <div class="col-md-5 offset-md-1 mb-3">
                    <iframe frameborder="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7916.773798098933!2d108.62426667654793!3d-7.196620534881657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f701808bd3e19%3A0xace3748f259f5181!2sKaduluhur%2C%20Sumpinghayu%2C%20Kec.%20Dayeuhluhur%2C%20Kabupaten%20Cilacap%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1653175735059!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3 instagram"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>