<?php
session_start();
$username = $_SESSION['username'];
if ($_SESSION['level']=="") {
  header("location:pages-login.php?pesan=bukan_admin");
}
include 'koneksi.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM login WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
if (mysqli_num_rows($result) > 0) {
  $user = mysqli_fetch_array($result);
  $_SESSION["nama"] = $user["nama"];
}
?>
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
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/pentul1.png" alt="">
                <span class="d-none d-lg-block">PENTUL STORE</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <!--<img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">-->
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $username; ?></span>
                    </a><!-- End Profile Iamge Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $username; ?></span></h6><!-- Pake PHP -->
                            <span>Web Designer</span><!-- Pake PHP ambil dari database -->
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <!-- Help <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>-->
                        <li>
                            <a href="action/logout.php" class="dropdown-item d-flex align-items-center">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="user/dash-admin.php">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php">
                    <i class="bi bi-grid"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="tables-user.php">
                    <i class="bi bi-person"></i>
                    <span>User</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="forms-rdp.php">
                            <i class="bi bi-circle"></i><span>RDP</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-vps.php">
                            <i class="bi bi-circle"></i><span>VPS</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-panel.php">
                            <i class="bi bi-circle"></i><span>Panel</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#rdp-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>RDP</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="rdp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-ready-rdp.php">
                            <i class="bi bi-circle"></i><span>Ready</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-sold-rdp.php">
                            <i class="bi bi-circle"></i><span>Sold</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#vps-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>VPS</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="vps-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-ready-vps.php">
                            <i class="bi bi-circle"></i><span>Ready</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-sold-vps.php">
                            <i class="bi bi-circle"></i><span>Sold</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#panel-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>PANEL</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="panel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-ready-panel.php">
                            <i class="bi bi-circle"></i><span>Ready</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-sold-panel.php">
                            <i class="bi bi-circle"></i><span>Sold</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->
        </ul>
    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="col">
                <div class="card">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger'>Kesalahan Data</div><meta http-equiv=refresh content=0.5;url=tables-user.php>";
                        } else if ($_GET['pesan'] == "success") {
                            echo "<div class='alert alert-success'>Berhasil Tambah Data</div><meta http-equiv=refresh content=0.5;url=tables-user.php>";
                        } else if ($_GET['pesan'] == "edit") {
                            echo "<div class='alert alert-warning'>Berhasil Edit Data</div><meta http-equiv=refresh content=0.5;url=tables-user.php>";
                        } else if ($_GET['pesan'] == "hapus") {
                            echo "<div class='alert alert-secondary'>Berhasil Hapus Data</div><meta http-equiv=refresh content=0.5;url=tables-user.php>";
                        } else if ($_GET['pesan'] == "sold") {
                            echo "<div class='alert alert-success'>Berhasil Jual Data</div><meta http-equiv=refresh content=0.5;url=tables-user.php>";
                        }
                    }
                    ?>
                    <div class="card-body">
                        <h5 class="card-title">LAPORAN <span>| user terdaftar</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID_PENGGUNA</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">NAMA Pengguna</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'koneksi.php';
                                $query = mysqli_query($koneksi, "SELECT * from login WHERE level = 'user' ");
                                while ($data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['id_pengguna']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['tgl_lahir']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td>
                                            <a href="forms-user-edit.php?id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-warning rounded-pill"><i class="bi bi-pencil-square"></i></a>
                                            <a href="action/delete-user.php?id_pengguna=<?php echo $data['id_pengguna']; ?>" class="btn btn-secondary rounded-pill" onclick="return confirm('Hapus data ini?')"><i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="container-fluid">
                            <div class="col-sm-2">
                                <a type="button" href="laporan/laporan-user.php" class="btn btn-outline-success">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div><!-- End Recent Sales -->
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->

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