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
                            <li class="px-0 py-1 active">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="card box-margin">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        NIK
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="nik"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        No KK
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="noKK"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Tempat Tanggal Lahir
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="tempatTanggalLahir"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Jenis Kelamin
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="jenisKelamin"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Jenis Pekerjaan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="jenisPekerjaan"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Status Perkawinan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="statusPerkawinan"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Pendidikan Terakhir
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="pendidikanTerakhir"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Kelurahan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="kelurahan"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Kecamatan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="kecamatan"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Lingkungan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="lingkungan"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-8">
                                    <div class="card box-margin">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah memiliki tempat berteduh tetap sehari-hari?
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question1" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah kepala keluarga atau pengurus keluarga masih berkerja?
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question2" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        AApakah pengeluaran pangan lebih besar (> 70%) dari total
                                                        pengeluaran?</h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question3" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah tempat tinggal sebagian besar berlantai tanah dan/atau
                                                        plesteran? </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question4" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah tempat tinggal memiliki fasilitas buang air kecil / besar
                                                        sendiri? </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question5" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah target survey tinggal bersama anggota keluarga yang lain?
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question6" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah pernah khawatir atau pernah tidak makan dalam setahun
                                                        terakhir?
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question7" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah ada pengeluaran untuk pakaian selama 1 (satu) tahun
                                                        terakhir? </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question8" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah tempat tinggal sebagian besar berdinding bambu / kawat /
                                                        kayu?</h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question9" class="font-14"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Apakah sumber penerangan berasal dari listrik dengan daya 450V
                                                        atau bukan listrik?
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span id="question10" class="font-14"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="card box-margin">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Program Bansos yang diajukan
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="programBansos"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Disabilitas
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="disabilitas"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Tanggal Hamil
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="tanggalHamil"></span>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Status Orang Tua
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="statusOrangTua"></span>
                                                </div>
                                            </div>

                                            <hr class="my-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="font-14 mb-0">
                                                        Koordinat Rumah
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <span class="font-14" id="koordinatRumah"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <p>Foto KTP</p>
                                        <img class="img-fluid rounded mb-3" id="fotoKTP" src="" style="width: 100%; height: 320px; object-fit: cover; object-position:center;" alt="Data Pendukung 1" />
                                    </div>
                                    <div class="col-12 col-sm-6">

                                        <p>Foto Rumah</p>
                                        <img class="img-fluid rounded" id="fotoRumah" src="" style="width: 100%; height: 320px; object-fit: cover; object-position:center;" alt="Data Pendukung 1" />
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

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

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

            // Mendapatkan dokumen proposal berdasarkan ID proposal
            const proposalRef = db.collection('proposals').doc(proposalId);
            proposalRef.get().then((doc) => {
                if (doc.exists) {
                    const proposalData = doc.data();
                    console.log("Proposal data:", proposalData);

                    function fillProposalData(proposalData) {
                        // Ambil elemen-elemen HTML yang akan diisi dengan data proposal
                        const programBansosElement = document.querySelector('#programBansos');
                        const disabilitasElement = document.querySelector('#disabilitas');
                        const tanggalHamilElement = document.querySelector('#tanggalHamil');
                        const statusOrangTuaElement = document.querySelector('#statusOrangTua');
                        const koordinatRumahElement = document.querySelector('#koordinatRumah');

                        // Isi elemen-elemen HTML dengan data proposal
                        programBansosElement.textContent = proposalData.programBansos;
                        disabilitasElement.textContent = proposalData.disabilitas;
                        tanggalHamilElement.textContent = proposalData.tanggalHamil;
                        statusOrangTuaElement.textContent = proposalData.statusOrangTua;
                        koordinatRumahElement.textContent = proposalData.mapsLatitude + ', ' + proposalData.mapsLongitude;
                        document.getElementById('fotoKTP').src = proposalData.fotoKTP || '';
                        document.getElementById('fotoRumah').src = proposalData.fotoRumah || '';
                    }

                    // Panggil fungsi fillProposalData dengan data proposalData yang diperoleh
                    fillProposalData(proposalData);

                    // Mendapatkan data penerima berdasarkan idRecipient
                    getDataById('recipients', proposalData.idRecipient).then(recipientData => {
                        console.log("Recipient data:", recipientData);

                        function fillRecipientData(recipientData) {
                            // Ambil elemen-elemen HTML yang akan diisi dengan data penerima
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

                            // Isi elemen-elemen HTML dengan data penerima
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

                        // Panggil fungsi fillRecipientData dengan data penerima yang diperoleh
                        fillRecipientData(recipientData);
                        // Mendapatkan data individu berdasarkan idIndividual
                        getDataById('individuals', proposalData.idIndividual).then(individualData => {
                            console.log("Individual data:", individualData);

                            function fillIndividualData(individualData) {
                                // Ambil elemen-elemen HTML yang akan diisi dengan data individu
                                const nikElement = document.querySelector('#nik');
                                const noKKElement = document.querySelector('#noKK');
                                const tempatTanggalLahirElement = document.querySelector('#tempatTanggalLahir');
                                const jenisKelaminElement = document.querySelector('#jenisKelamin');
                                const jenisPekerjaanElement = document.querySelector('#jenisPekerjaan');
                                const statusPerkawinanElement = document.querySelector('#statusPerkawinan');
                                const pendidikanTerakhirElement = document.querySelector('#pendidikanTerakhir');
                                const kelurahanElement = document.querySelector('#kelurahan');
                                const kecamatanElement = document.querySelector('#kecamatan');
                                const lingkunganElement = document.querySelector('#lingkungan');

                                // Isi elemen-elemen HTML dengan data individu
                                nikElement.textContent = individualData.nik;
                                noKKElement.textContent = individualData.noKK;
                                tempatTanggalLahirElement.textContent = individualData.tempatLahir + ', ' + individualData.tanggalLahir;
                                jenisKelaminElement.textContent = individualData.jenisKelamin;
                                jenisPekerjaanElement.textContent = individualData.jenisPekerjaan;
                                statusPerkawinanElement.textContent = individualData.statusPerkawinan;
                                pendidikanTerakhirElement.textContent = individualData.pendidikanTerakhir;
                                kelurahanElement.textContent = individualData.kelurahan;
                                kecamatanElement.textContent = individualData.kecamatan;
                                lingkunganElement.textContent = individualData.lingkungan;
                            }

                            // Panggil fungsi fillIndividualData dengan data individu yang diperoleh
                            fillIndividualData(individualData);
                            // Mendapatkan data survei berdasarkan idSurvey
                            getDataById('surveys', proposalData.idSurvey).then(surveyData => {
                                console.log("Survey data:", surveyData);

                                function fillSurveyData(surveyData) {
                                    const question1Element = document.querySelector('#question1');
                                    const question2Element = document.querySelector('#question2');
                                    const question3Element = document.querySelector('#question3');
                                    const question4Element = document.querySelector('#question4');
                                    const question5Element = document.querySelector('#question5');
                                    const question6Element = document.querySelector('#question6');
                                    const question7Element = document.querySelector('#question7');
                                    const question8Element = document.querySelector('#question8');
                                    const question9Element = document.querySelector('#question9');
                                    const question10Element = document.querySelector('#question10');

                                    question1Element.textContent = surveyData.question1;
                                    question2Element.textContent = surveyData.question2;
                                    question3Element.textContent = surveyData.question3;
                                    question4Element.textContent = surveyData.question4;
                                    question5Element.textContent = surveyData.question5;
                                    question6Element.textContent = surveyData.question6;
                                    question7Element.textContent = surveyData.question7;
                                    question8Element.textContent = surveyData.question8;
                                    question9Element.textContent = surveyData.question9;
                                    question10Element.textContent = surveyData.question10;
                                }

                                // Panggil fungsi fillSurveyData dengan data survei yang diperoleh
                                fillSurveyData(surveyData);

                            }).catch(error => {
                                console.error("Error fetching survey data:", error);
                            });
                        }).catch(error => {
                            console.error("Error fetching individual data:", error);
                        });
                    }).catch(error => {
                        console.error("Error fetching recipient data:", error);
                    });
                } else {
                    console.log("No such document!");
                }
            }).catch((error) => {
                console.error("Error getting document:", error);
            });

            // Helper function to get data from a specific collection based on document ID
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


        // Fungsi untuk menambahkan data penerima ke dalam elemen HTML
    </script>

</body>

</html>