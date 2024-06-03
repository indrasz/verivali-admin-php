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

            <!-- Body Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <button class="btn btn-success px-4 py-2" onclick="exportToExcel()">Export Excel</button>

                                        <div class="shortcode-html mt-3">
                                            <!-- Table Striped Rows -->
                                            <div class="container">
                                                <div class="table-responsive">
                                                    <table class="table table-striped" id="proposalTable">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pengusul</th>
                                                                <th>NIK</th>
                                                                <th>Disabilitas</th>
                                                                <th>Program Bansos</th>
                                                                <th>Status DTKS</th>
                                                                <th></th>
                                                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Data Proposal akan dimasukkan di sini -->
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-striped d-none" id="individuData">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pengusul</th>
                                                                <th>NIP</th>
                                                                <th>Email</th>
                                                                <th>No Whatsapp</th>
                                                                <th>No KK</th>
                                                                <th>NIK</th>
                                                                <th>Nama Lengkap</th>
                                                                <th>Ibu Kandung</th>
                                                                <th>Jenis Pekerjaan</th>
                                                                <th>Tanggal Lahir</th>
                                                                <th>Tempat Lahir</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Status Perkawinan</th>
                                                                <th>Hubungan Keluarga</th>
                                                                <th>Pendidikan Terakhir</th>
                                                                <th>Alamat</th>
                                                                <th>Kecamatan</th>
                                                                <th>Kelurahan</th>
                                                                <th>Lingkungan</th>
                                                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Data Proposal akan dimasukkan di sini -->
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-striped d-none" id="surveyData">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pengusul</th>
                                                                <th>NIP</th>
                                                                <th>Email</th>
                                                                <th>No Whatsapp</th>
                                                                <th>Apakah memiliki tempat berteduh tetap sehari hari?</th>
                                                                <th>Apakah kepala keluarga atau pengurus keluarga masih berkerja?</th>
                                                                <th>Apakah pengeluaran pangan lebih besar (> 70%) dari total pengeluaran?</th>
                                                                <th>Apakah tempat tinggal sebagian besar berlantai tanah dan/atau plesteran?</th>
                                                                <th>Apakah tempat tinggal memiliki fasilitas buang air kecil / besar sendiri?</th>
                                                                <th>Apakah target survey tinggal bersama anggota keluarga yang lain?</th>
                                                                <th>Apakah pernah khawatir atau pernah tidak makan dalam setahun terakhir?</th>
                                                                <th>Apakah ada pengeluaran untuk pakaian selama 1 (satu) tahun terakhir?</th>
                                                                <th>Apakah tempat tinggal sebagian besar berdinding bambu / kawat / kayu?</th>
                                                                <th>Apakah sumber penerangan berasal dari listrik dengan daya 450V atau bukan listrik?</th>
                                                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Data Proposal akan dimasukkan di sini -->
                                                        </tbody>
                                                    </table>

                                                    <table class="table table-striped d-none" id="proposalData">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Pengusul</th>
                                                                <th>NIP</th>
                                                                <th>Email</th>
                                                                <th>No Whatsapp</th>
                                                                <th>Nama Penerima</th>
                                                                <th>NIK</th>
                                                                <th>Disabilitas</th>
                                                                <th>Program Bansos</th>
                                                                <th>Status Orang Tua</th>
                                                                <th>Tanggal Hamil</th>
                                                                <th>Latitude</th>
                                                                <th>Longitude</th>
                                                                <th>Foto Ktp</th>
                                                                <th>Foto Rumah</th>
                                                                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Data Proposal akan dimasukkan di sini -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- End Table Striped Rows -->
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

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    <script>
        // Initialize Firebase
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

        // fungsi untuk mengambil data proposal dari Firestore
        function fetchProposalData() {
            const proposalTable = document.getElementById('proposalTable').getElementsByTagName('tbody')[0];
            proposalTable.innerHTML = ''; // Clear previous data

            // Reference to the proposals collection
            const collection = db.collection('proposals');

            // Get all proposals
            collection.get().then(querySnapshot => {
                let proposalData = [];
                querySnapshot.forEach(doc => {
                    // Convert Firestore document to JavaScript object
                    const proposal = doc.data()

                    // Retrieve idRecipient, idIndividual, and idSurvey from the proposal
                    const idRecipient = proposal.idRecipient;
                    const idIndividual = proposal.idIndividual;
                    const idSurvey = proposal.idSurvey;
                    const idUser = proposal.idUser;

                    // Get recipient data based on idRecipient
                    getDataById('recipients', idRecipient).then(recipientData => {
                        // Get individual data based on idIndividual
                        getDataById('individuals', idIndividual).then(individualData => {
                            // Get survey data based on idSurvey
                            getDataById('surveys', idSurvey).then(surveyData => {

                                getDataById('users', idUser).then(userData => {
                                    // Combine proposal data with related recipient, individual, and survey data
                                    proposalData.push({
                                        id: doc.id, // Add proposal ID to the data
                                        proposal: proposal,
                                        recipient: recipientData,
                                        individual: individualData,
                                        survey: surveyData,
                                        user: userData
                                    });

                                    // Render the table row for the current proposal
                                    renderProposalRow(proposalData.length, proposal, recipientData, individualData, surveyData, doc.id);
                                    // renderProposalUserRow(proposalData.length, proposal, recipientData, individualData, surveyData, doc.id);
                                    renderIndividualRow(proposalData.length, individualData, userData);
                                    renderSurveyRow(proposalData.length, surveyData, userData);
                                    renderProposalDataRow(proposalData.length, proposal, recipientData, userData);
                                });
                            });
                        });
                    });
                });
            }).catch(error => {
                console.error("Error fetching proposal data: ", error);
            });
        }

        // Function to get data from a specific collection based on document ID
        async function getDataById(collectionName, documentId) {
            // Reference to the specified collection
            const collection = db.collection(collectionName);

            // Get the document based on the document ID
            const document = await collection.doc(documentId).get();

            // Return the document data
            return document.data();
        }

        // Function to delete a proposal from Firestore and remove the row from the table
        async function deleteProposal(proposalId, row) {
            try {
                await db.collection('proposals').doc(proposalId).delete();
                row.remove();
            } catch (error) {
                console.error("Error deleting proposal: ", error);
            }
        }

        // Function to render a table row for a proposal
        function renderProposalRow(index, proposal, recipient, individual, survey, id) {
            const proposalTable = document.getElementById('proposalTable').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();

            row.innerHTML = `
            <td>${index}</td>
            <td>${recipient.nama}</td>
            <td>${recipient.nik}</td>
            <td>${proposal.disabilitas}</td>
            <td>${proposal.programBansos}</td>
            <td>${recipient['status_dtks']}</td>
            <td>
                <button class="btn btn-primary p-2 detail-button" data-proposal-id="${id}">Detail</button>
                <button class="btn btn-danger p-2 delete-button" data-proposal-id="${id}">Delete</button>
            </td>
            `;

            // Add event listener for detail button
            const detailButton = row.querySelector(`button.detail-button[data-proposal-id="${id}"]`);
            detailButton.addEventListener('click', function() {
                // Redirect to detail.php with proposal ID as parameter
                window.location.href = `detail.php?id=${id}`;
            });

            // Add event listener for delete button
            const deleteButton = row.querySelector(`button.delete-button[data-proposal-id="${id}"]`);
            deleteButton.addEventListener('click', function() {
                // Call deleteProposal function and pass the row to be removed
                deleteProposal(id, row);
            });
        }

        function renderIndividualRow(index, individual, user) {
            const proposalTable = document.getElementById('individuData').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();
            // console.log(id);
            row.innerHTML = `
                <td>${index}</td>
                <td>${user.username}</td>
                <td>${user.nip}</td>
                <td>${user.email}</td>
                <td>${user.whatsappNumber}</td>
                <td>${individual.noKK}</td>
                <td>${individual.nik}</td>
                <td>${individual.namaLengkap}</td>
                <td>${individual.ibuKandung}</td>
                <td>${individual.jenisPekerjaan}</td>
                <td>${individual.tanggalLahir}</td>
                <td>${individual.tempatLahir}</td>
                <td>${individual.jenisKelamin}</td>
                <td>${individual.statusPerkawinan}</td>
                <td>${individual.hubunganKeluarga}</td>
                <td>${individual.pendidikanTerakhir}</td>
                <td>${individual.alamat}</td>
                <td>${individual.kecamatan}</td>
                <td>${individual.kelurahan}</td>
                <td>${individual.lingkungan}</td>
                `;
        }

        function renderSurveyRow(index, survey, user) {
            const proposalTable = document.getElementById('surveyData').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();
            // console.log(id);
            row.innerHTML = `
                <td>${index}</td>
                <td>${user.username}</td>
                <td>${user.nip}</td>
                <td>${user.email}</td>
                <td>${user.whatsappNumber}</td>
                <td>${survey.question1}</td>
                <td>${survey.question2}</td>
                <td>${survey.question3}</td>
                <td>${survey.question4}</td>
                <td>${survey.question5}</td>
                <td>${survey.question6}</td>
                <td>${survey.question7}</td>
                <td>${survey.question8}</td>
                <td>${survey.question9}</td>
                <td>${survey.question10}</td>
                `;
        }

        function renderProposalDataRow(index, proposal, recipient, user) {
            const proposalTable = document.getElementById('proposalData').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();
            // console.log(id);
            row.innerHTML = `
                <td>${index}</td>
                <td>${user.username}</td>
                <td>${user.nip}</td>
                <td>${user.email}</td>
                <td>${user.whatsappNumber}</td>
                <td>${recipient.nama}</td>
                <td>${recipient.nik}</td>
                <td>${proposal.disabilitas}</td>
                <td>${proposal.programBansos}</td>
                <td>${proposal.statusOrangTua}</td>
                <td>${proposal.tanggalHamil}</td>
                <td>${proposal.mapsLatitude}</td>
                <td>${proposal.mapsLongitude}</td>
                <td>${proposal.fotoKTP}</td>
                <td>${proposal.fotoRumah}</td>
            `;
        }

        // Call the function to fetch proposal data when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', () => {
            fetchProposalData();
        });

        function exportToExcel() {
            const proposalTable = document.getElementById('individuData');
            const wb = XLSX.utils.table_to_book(proposalTable, {
                sheet: "Data Individu"
            });

            // Tambahkan tiga sheet tambahan
            const ws1 = XLSX.utils.table_to_sheet(document.getElementById('surveyData'), {
                sheet: "Survey Kriteria"
            });
            const ws2 = XLSX.utils.table_to_sheet(document.getElementById('proposalData'), {
                sheet: "Pengusulan Bansos"
            });

            XLSX.utils.book_append_sheet(wb, ws1, "Survey Kriteria");
            XLSX.utils.book_append_sheet(wb, ws2, "Pengusulan Bansos");

            const wbout = XLSX.write(wb, {
                bookType: 'xlsx',
                bookSST: true,
                type: 'binary'
            });

            function s2ab(s) {
                const buf = new ArrayBuffer(s.length);
                const view = new Uint8Array(buf);
                for (let i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                return buf;
            }

            saveAs(new Blob([s2ab(wbout)], {
                type: "application/octet-stream"
            }), 'proposal_data.xlsx');
        }
    </script>

</body>

</html>