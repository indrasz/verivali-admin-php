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
                <a href="index.html"><img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="flapt-sidenav" id="flaptSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="menu-header-title">Dashboard</li>
                            <li class="px-0 py-1"><a href="index.php"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                            <li class="px-0 py-1 active">
                                <a href="pengusulan.php">
                                    <div class="d-flex justify-content-center w-100">
                                        <i class='bx bx-file'></i>
                                        <span>Pengusulan</span>
                                    </div>
                                </a>
                            </li>

                            <li class="px-0 py-1">
                                <a href="#">
                                    <div class="d-flex justify-content-center w-100">
                                        <i class='bx bx-file'></i>
                                        <span>Tanggapan</span>
                                    </div>
                                </a>
                            </li>

                            <li class="px-0 py-1">
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
                        <a href="index.html"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
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

                    <!-- Left Side Nav -->
                    <ul class="left-side-navbar d-flex align-items-center">
                        <li class="hide-phone app-search">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </li>
                    </ul>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class='bx bx-menu-alt-right'></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><i class='bx bx-world'></i></span></button>
                            <div class="dropdown-menu language-dropdown dropdown-menu-right">
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/f1.jpg" alt="Image">
                                        <span>Ind</span></a>
                                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/f2.jpg" alt="Image">
                                        <span>German</span></a>
                                    <a href="#" class="dropdown-item mb-15"><img src="img/core-img/f3.jpg" alt="Image">
                                        <span>Italian</span></a>
                                    <a href="#" class="dropdown-item"><img src="img/core-img/f4.jpg" alt="Image">
                                        <span>Russian</span></a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-envelope'></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Message Area -->
                                <div class="top-message-area">
                                    <!-- Heading -->
                                    <div class="message-heading">
                                        <div class="heading-title">
                                            <h6 class="mb-0">All Messages</h6>
                                        </div>
                                        <span>10</span>
                                    </div>

                                    <div class="message-box" id="messageBox">
                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-dollar-circle'></i>
                                            <div>
                                                <span>Did you know?</span>
                                                <p class="mb-0 font-12">Adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-shopping-bag'></i>
                                            <div>
                                                <span>Congratulations!
                                                </span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit.</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-wallet-alt'></i>
                                            <div>
                                                <span>Hello Obeta</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit.</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-border-all'></i>
                                            <div>
                                                <span>Your order is placed</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit.</p>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-wallet-alt'></i>
                                            <div>
                                                <span>Haslina Obeta</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-bell bx-tada'></i> <span class="active-status"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Notifications Area -->
                                <div class="top-notifications-area">
                                    <!-- Heading -->
                                    <div class="notifications-heading">
                                        <div class="heading-title">
                                            <h6>Notifications</h6>
                                        </div>
                                        <span>11</span>
                                    </div>

                                    <div class="notifications-box" id="notificationsBox">
                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-shopping-bag'></i>
                                            <div>
                                                <span>Your order is placed</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-wallet-alt'></i>
                                            <div>
                                                <span>Haslina Obeta</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-dollar-circle'></i>
                                            <div>
                                                <span>Your order is Dollar</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-border-all'></i>
                                            <div>
                                                <span>Your order is placed</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-wallet-alt'></i>
                                            <div>
                                                <span>Haslina Obeta</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/bg-img/person_1.jpg" alt=""></button>
                            <div class="dropdown-menu profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item"><i class="bx bx-user font-15" aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wallet font-15" aria-hidden="true"></i> My wallet</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wrench font-15" aria-hidden="true"></i> settings</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-power-off font-15" aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <?php
            // Include your database connection file
            // include 'firebase_config.php';

            // Function to fetch data from Firestore
            // function getDataById($collectionName, $documentId)
            // {
            //     global $firestoreClient;
            //     $collectionReference = $firestoreClient->collection($collectionName);
            //     $documentReference = $collectionReference->document($documentId);
            //     $snapshot = $documentReference->snapshot();

            //     if ($snapshot->exists()) {
            //         return $snapshot->data();
            //     } else {
            //         return null;
            //     }
            // }

            // Fetch the proposal ID from the URL
            $proposalId = isset($_GET['id']) ? $_GET['id'] : null;

            // if ($proposalId) {
            //     // Get proposal data
            //     $proposal = getDataById('proposals', $proposalId);

            //     if ($proposal) {
            //         // Get recipient, individual, and survey data
            //         $recipient = getDataById('recipients', $proposal['idRecipient']);
            //         $individual = getDataById('individuals', $proposal['idIndividual']);
            //         $survey = getDataById('surveys', $proposal['idSurvey']);
            //     } else {
            //         echo "Proposal not found.";
            //         exit;
            //     }
            // } else {
            //     echo "No proposal ID specified.";
            //     exit;
            // }
            ?>
            <!-- Body Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="card box-margin">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Nama
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="nama"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        NIK
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="nikData"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Alamat
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="alamat"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Tanggal Lahir
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="tanggalLahir"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Umur
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="umur"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Desa
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="desa"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Kabupaten
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="kabupaten"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Kecamatan
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="kecamatanData"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Bansos
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="bansos"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Status DTKS
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="statusDtk"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Alasan
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="alasan"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Catatan
                                                    </h6>
                                                </div>
                                                <div class="col-auto" id="catatan"></div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Status Kelayakan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <p id="statusKelayakan"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p>Data pendukung 1</p>
                                    <img class="img-fluid rounded mb-3" id="dataPendukung1" src="" style="width: 100%; height: 320px; object-fit: cover; object-position:center;" alt="Data Pendukung 1" />
                                    <p>Data Pendukung 2</p>
                                    <img class="img-fluid rounded" id="dataPendukung2" src="" style="width: 100%; height: 320px; object-fit: cover; object-position:center;" alt="Data Pendukung 1" />
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

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Ambil ID proposal dari URL
            const urlParams = new URLSearchParams(window.location.search);
            const proposalId = urlParams.get('id');

            // Resolve Firestore instance
            const firebaseConfig = {
                apiKey: "AIzaSyCfbnT6teL7jUr2J4Tf0V7Ktz7FFrWTfcY",
                authDomain: "very-vali.firebaseapp.com",
                databaseURL: "https://very-vali-default-rtdb.firebaseio.com",
                projectId: "very-vali",
                storageBucket: "very-vali.appspot.com",
                messagingSenderId: "976664971480",
                appId: "1:976664971480:web:2da9180d52120fcc896fad",
                measurementId: "G-WPK2EXJHMC"
            };
            firebase.initializeApp(firebaseConfig);
            const db = firebase.firestore();

            const proposalRef = db.collection('responses').doc(proposalId);
            proposalRef.get().then((doc) => {
                if (doc.exists) {
                    const proposalData = doc.data();
                    console.log("Response data:", proposalData);

                    function fillProposalData(proposalData) {
                        const alasanElement = document.querySelector('#alasan');
                        const catatanElement = document.querySelector('#catatan');
                        const statusKelayakanElement = document.querySelector('#statusKelayakan');

                        alasanElement.textContent = proposalData.alasan;
                        catatanElement.textContent = proposalData.catatan;
                        statusKelayakanElement.textContent = proposalData.statusKelayakan;
                        document.getElementById('statusKelayakan').textContent = proposalData.statusKelayakan ? 'Layak' : 'Tidak Layak';

                        document.getElementById('dataPendukung1').src = proposalData.dataPendukung1Url || '';
                        document.getElementById('dataPendukung2').src = proposalData.dataPendukung2Url || '';
                    }

                    fillProposalData(proposalData);

                    getDataById('recipients', proposalData.idRecipient).then(recipientData => {
                        console.log("Recipient data:", recipientData);

                        function fillRecipientData(recipientData) {
                            const namaElement = document.querySelector('#nama');
                            const nikElement = document.querySelector('#nikData');
                            const alamatElement = document.querySelector('#alamat');
                            const tanggalLahirElement = document.querySelector('#tanggalLahir');
                            const umurElement = document.querySelector('#umur');
                            const desaElement = document.querySelector('#desa');
                            const kabupatenElement = document.querySelector('#kabupaten');
                            const kecamatanElement = document.querySelector('#kecamatanData');
                            const bansosElement = document.querySelector('#bansos');
                            const statusDtkElement = document.querySelector('#statusDtk');

                            namaElement.textContent = recipientData.nama;
                            nikElement.textContent = recipientData.nik;
                            alamatElement.textContent = recipientData.alamat;
                            tanggalLahirElement.textContent = recipientData['tanggal_lahir'];
                            umurElement.textContent = recipientData.umur;
                            desaElement.textContent = recipientData.desa;
                            kabupatenElement.textContent = recipientData.kabupaten;
                            kecamatanElement.textContent = recipientData.kecamatan;
                            bansosElement.textContent = recipientData.bansos;
                            statusDtkElement.textContent = recipientData['status_dtks'];
                        }

                        fillRecipientData(recipientData);

                    }).catch(error => {
                        console.error("Error fetching recipient data:", error);
                    });
                } else {
                    console.log("No such document!");
                }
            }).catch((error) => {
                console.error("Error getting document:", error);
            });

            async function getDataById(collectionName, documentId) {
                const collectionRef = db.collection(collectionName);
                const doc = await collectionRef.doc(documentId).get();
                if (doc.exists) {
                    return doc.data();
                } else {
                    console.log(`No such document in collection ${collectionName} with ID ${documentId}`);
                    return null;
                }
            }
        });
    </script>

</body>

</html>