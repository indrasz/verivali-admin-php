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
                <a href="index.html"><img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo"> <img
                        class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="flapt-sidenav" id="flaptSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="menu-header-title">Dashboard</li>
                            <li class="px-0 py-1"><a href="index.php"><i
                                        class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                            <li class="px-0 py-1 active">
                                <a href="#">
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
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><span><i
                                        class='bx bx-world'></i></span></button>
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
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class='bx bx-envelope'></i></button>
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
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class='bx bx-bell bx-tada'></i> <span
                                    class="active-status"></span></button>
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
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="img/bg-img/person_1.jpg"
                                    alt=""></button>
                            <div class="dropdown-menu profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item"><i class="bx bx-user font-15"
                                            aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wallet font-15"
                                            aria-hidden="true"></i> My wallet</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wrench font-15"
                                            aria-hidden="true"></i> settings</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-power-off font-15"
                                            aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
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

        // Function to fetch proposal data from Firestore
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

                    // Get recipient data based on idRecipient
                    getDataById('recipients', idRecipient).then(recipientData => {
                        // Get individual data based on idIndividual
                        getDataById('individuals', idIndividual).then(individualData => {
                            // Get survey data based on idSurvey
                            getDataById('surveys', idSurvey).then(surveyData => {

                                // Combine proposal data with related recipient, individual, and survey data
                                proposalData.push({
                                    id: doc.id, // Add proposal ID to the data
                                    proposal: proposal,
                                    recipient: recipientData,
                                    individual: individualData,
                                    survey: surveyData
                                });

                                // Render the table row for the current proposal
                                renderProposalRow(proposalData.length, proposal, recipientData, individualData, surveyData, doc.id);

                                // Add event listener for detail button
                                const detailButton = document.querySelector(`button[data-proposal-id="${doc.id}"]`);
                                detailButton.addEventListener('click', function () {
                                    // Redirect to detail.html with proposal ID as parameter
                                    window.location.href = `/detail.html?id=${doc.id}`;
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

        // Function to render a table row for a proposal
        function renderProposalRow(index, proposal, recipient, individual, survey, id) {
            const proposalTable = document.getElementById('proposalTable').getElementsByTagName('tbody')[0];
            const row = proposalTable.insertRow();
            console.log(id);
            row.innerHTML = `
        <td>${index}</td>
        <td>${recipient.NAMA}</td>
        <td>${recipient.NIK}</td>
        <td>${proposal.disabilitas}</td>
        <td>${proposal.programBansos}</td>
        <td>${recipient['STATUS DTKS']}</td>
        <td>
            <button class="btn btn-primary p-2 detail-button" data-proposal-id="${id}">Detail</button>
        </td>
    `;
        }

        // Call the function to fetch proposal data when the DOM content is loaded
        document.addEventListener('DOMContentLoaded', () => {
            fetchProposalData();
        });
    </script>



</body>

</html>