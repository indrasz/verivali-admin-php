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

                            <li class="px-0 py-1 active">
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
                        <div class="card box-margin">

                            <div class="card-body">
                                <!-- <div class="d-flex float-end p-3"> -->
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
                                                        <th>Kecamatan</th>
                                                        <th>Kabupaten</th>
                                                        <th>Status Kelayakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Data will be populated here -->
                                                </tbody>
                                            </table>

                                            <table class="table table-striped d-none" id="responseTable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Pengusul</th>
                                                        <th>NIP</th>
                                                        <th>Email</th>
                                                        <th>No Whatsapp</th>
                                                        <th>Nama Penerima</th>
                                                        <th>NIK Penerima</th>
                                                        <th>Kecamatan</th>
                                                        <th>Kabupaten</th>
                                                        <th>Alasan</th>
                                                        <th>Catatan</th>
                                                        <th>Data Pendukung 1</th>
                                                        <th>Data Pendukung 2</th>
                                                        <th>Status Kelayakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Data will be populated here -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- End Table Striped Rows -->
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

        function fetchProposalData() {
            const proposalTable = document.getElementById('proposalTable').getElementsByTagName('tbody')[0];
            proposalTable.innerHTML = ''; // Clear previous data

            // Reference to the responses collection
            const collection = db.collection('responses');

            // Get all responses
            collection.get().then(querySnapshot => {
                let proposalData = [];
                querySnapshot.forEach(doc => {
                    // Convert Firestore document to JavaScript object
                    const response = doc.data();

                    // Retrieve idRecipient from the response
                    const idRecipient = response.idRecipient;
                    const idUser = response.idUser;

                    // Get recipient data based on idRecipient
                    getDataById('recipients', idRecipient).then(recipientData => {

                        getDataById('users', idUser).then(userData => {
                            // Combine response data with related recipient data
                            proposalData.push({
                                id: doc.id, // Add response ID to the data
                                response: response,
                                recipient: recipientData,
                                user: userData
                            });

                            // Render the table row for the current response
                            renderProposalRow(proposalData.length, response, recipientData, doc.id);
                            renderResponseRow(proposalData.length, response, recipientData, userData, doc.id);
                        });
                    });
                });
            }).catch(error => {
                console.error("Error fetching response data: ", error);
            });
        }

        async function getDataById(collectionName, documentId) {
            const collection = db.collection(collectionName);

            const document = await collection.doc(documentId).get();

            return document.data();
        }

        async function deleteProposal(responseId, row) {
            try {
                await db.collection('responses').doc(responseId).delete();
                row.remove();
            } catch (error) {
                console.error("Error deleting response: ", error);
            }
        }

        function renderProposalRow(index, response, recipient, id) {
            const proposalTable = document.getElementById('proposalTable').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();
            // console.log(id);
            row.innerHTML = `
                <td>${index}</td>
                <td>${recipient.nama}</td>
                <td>${recipient.nik}</td>
                <td>${recipient.kecamatan}</td>
                <td>${recipient.kabupaten}</td>
            <td>${response.statusKelayakan ? '<p class="text-success fw-bold fs-11 m-0">Layak</p>' : '<p class="text-danger fw-bold fs-11 m-0">Tidak Layak</p>'}</td>
           <td>
                    <button class="btn btn-primary p-2 detail-button" data-proposal-id="${id}">Detail</button>
                    <button class="btn btn-danger p-2 delete-button" data-proposal-id="${id}">Delete</button>
                </td>
            `;

            const detailButton = row.querySelector(`button[data-proposal-id="${id}"]`);
            detailButton.addEventListener('click', function() {
                // Redirect to detail.php with proposal ID as parameter
                window.location.href = `detail-tanggapan.php?id=${id}`;
            });

            const deleteButton = row.querySelector(`button.delete-button[data-proposal-id="${id}"]`);
            deleteButton.addEventListener('click', function() {
                // Call deleteProposal function and pass the row to be removed
                deleteProposal(id, row);
            });
        }

        function renderResponseRow(index, response, recipient, user, id) {
            const proposalTable = document.getElementById('responseTable').getElementsByTagName('tbody')[0];
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
                <td>${recipient.kecamatan}</td>
                <td>${recipient.kabupaten}</td>
                <td>${response.alasan}</td>
                <td>${response.catatan}</td>
                <td>${response.dataPendukung1Url}</td>
                <td>${response.dataPendukung2Url}</td>
            <td>${response.statusKelayakan ? '<p class="text-success fw-bold fs-11 m-0">Layak</p>' : '<p class="text-danger fw-bold fs-11 m-0">Tidak Layak</p>'}</td>
            `;

        }

        document.addEventListener('DOMContentLoaded', () => {
            fetchProposalData();
        });

        function exportToExcel() {
            const proposalTable = document.getElementById('responseTable');
            const wb = XLSX.utils.table_to_book(proposalTable, {
                sheet: "Verifikasi"
            });
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
            }), 'verifikasi_data.xlsx');
        }
    </script>


</body>

</html>