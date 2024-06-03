<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->

    <title>Veri Vali Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Plugins css -->
    <link rel="stylesheet" href="css/default-assets/mini-event-calendar.min.css">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="flapt-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="flapt-sidemenu-wrapper">
            <!-- Desktop Logo -->
            <div class="flapt-logo">
                <a href="index.php"><img class="desktop-logo" src="img/verivali-logo.png" alt="Desktop Logo"> <img class="small-logo" src="img/verivali-logo.png alt=" Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="flapt-sidenav" id="flaptSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="menu-header-title">Dashboard</li>
                            <li class=""><a href="index.php"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                            <li class="px-0 py-1">
                                <a href="pengusulan.php">
                                    <div class="d-flex justify-content-center w-100">
                                        <i class='bx bx-file'></i>
                                        <span>Pengusulan</span>
                                    </div>
                                </a>
                            </li>

                            <li class="px-0 py-1">
                                <a href="tanggapan.php">
                                    <div class="d-flex justify-content-center w-100">
                                        <i class='bx bx-file'></i>
                                        <span>Verifikasi</span>
                                    </div>
                                </a>
                            </li>

                            <li class="px-0 py-1 active">
                                <a href="manajemen-data.php">
                                    <div class="d-flex justify-content-center w-100">
                                        <i class='bx bx-group'></i>
                                        <span>Manajemen Data</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>


        <!-- Page Content -->
        <div class="flapt-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo">
                        <a href="index.php"><img src="img/verivali-logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="flapt-triggers">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                    </div>

                </div>

            </header>

            <!-- Body Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="shortcode-html">
                                            <!-- Table Striped Rows -->
                                            <?php
                                            include 'koneksi.php';

                                            // Konfigurasi pagination
                                            $limit = 1000; // Jumlah data per halaman
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $offset = ($page - 1) * $limit;

                                            // Variabel untuk menyimpan kondisi pencarian
                                            $search_nik = isset($_GET['nik']) ? $_GET['nik'] : '';

                                            // Query untuk mengambil data dengan limit dan offset, serta kondisi pencarian
                                            if (!empty($search_nik)) {
                                                $sql = "SELECT nama, nik, tanggal_lahir, umur, bansos, status_dtks, alamat, kabupaten, kecamatan, desa 
                                                    FROM bansos 
                                                    WHERE nik LIKE '%$search_nik%' 
                                                    LIMIT $limit OFFSET $offset";
                                                $total_sql = "SELECT COUNT(*) 
                                                        FROM bansos 
                                                        WHERE nik LIKE '%$search_nik%'";
                                            } else {
                                                $sql = "SELECT nama, nik, tanggal_lahir, umur, bansos, status_dtks, alamat, kabupaten, kecamatan, desa 
                                                            FROM bansos 
                                                            LIMIT $limit OFFSET $offset";
                                                $total_sql = "SELECT COUNT(*) 
                                                                FROM bansos";
                                            }

                                            $result = $conn->query($sql);
                                            $total_result = $conn->query($total_sql);
                                            $total_rows = $total_result->fetch_row()[0];
                                            $total_pages = ceil($total_rows / $limit);
                                            ?>

                                            <!-- Form Pencarian -->
                                            <form method="GET" action="manajemen-data.php">
                                                <div class="d-flex gap-2 my-3">
                                                    <div class=" w-100">
                                                        <!-- <label for="nik">Cari berdasarkan NIK:</label> -->
                                                        <input placeholder="Cari penerima berdasarkan NIK" type="text" name="nik" id="nik" class="form-control" value="<?php echo htmlspecialchars($search_nik); ?>">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Cari</button>
                                                </div>
                                            </form>

                                            <table class="table table-bordered table-striped table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>NIK</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Umur</th>
                                                        <th>Bansos</th>
                                                        <th>Status DTKS</th>
                                                        <th>Alamat</th>
                                                        <th>Kabupaten</th>
                                                        <th>Kecamatan</th>
                                                        <th>Desa</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<tr>
                                                                <td>{$row['nama']}</td>
                                                                <td>{$row['nik']}</td>
                                                                <td>{$row['tanggal_lahir']}</td>
                                                                <td>{$row['umur']}</td>
                                                                <td>{$row['bansos']}</td>
                                                                <td>{$row['status_dtks']}</td>
                                                                <td>{$row['alamat']}</td>
                                                                <td>{$row['kabupaten']}</td>
                                                                <td>{$row['kecamatan']}</td>
                                                                <td>{$row['desa']}</td>
                                                            </tr>";
                                                        }
                                                    } else {
                                                        echo "<tr><td colspan='10' class='text-center'>Tidak ada data</td></tr>";
                                                    }
                                                    $conn->close();
                                                    ?>
                                                </tbody>
                                            </table>

                                            <!-- Pagination -->
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-center overflow-x-auto">
                                                    <?php if ($page > 1) : ?>
                                                        <li class="page-item"><a class="page-link" href="manajemen-data.php?page=<?php echo $page - 1; ?>&nik=<?php echo urlencode($search_nik); ?>">Previous</a></li>
                                                    <?php endif; ?>

                                                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                                                        <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                                            <a class="page-link" href="manajemen-data.php?page=<?php echo $i; ?>&nik=<?php echo urlencode($search_nik); ?>"><?php echo $i; ?></a>
                                                        </li>
                                                    <?php endfor; ?>

                                                    <?php if ($page < $total_pages) : ?>
                                                        <li class="page-item"><a class="page-link" href="manajemen-data.php?page=<?php echo $page + 1; ?>&nik=<?php echo urlencode($search_nik); ?>">Next</a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Footer Area -->
                    <div class="container-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>

    <!-- Active JS -->
    <script src="js/settings.js"></script>
    <script src="js/scrool-bar.js"></script>
    <script src="js/todo-list.js"></script>
    <script src="js/default-assets/active.js"></script>


</body>

</html>