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
                            <li class="active"><a href="index.php"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
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
                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="text-uppercase font-14">
                                                    Total Penerima Bansos
                                                </h6>
                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0" id="totalRecipients">Loading...</span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="/img/bg-img/icon-10.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="font-14 text-uppercase">
                                                    Total Pengusul
                                                </h6>
                                                <!-- Heading -->
                                                <span class="font-24 text-dark mb-0" id="totalProposals">Loading...</span>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="/img/bg-img/icon-9.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl">
                                <!-- Card -->
                                <div class="card box-margin">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <!-- Title -->
                                                <h6 class="font-14 text-uppercase">
                                                    Total Verifikasi
                                                </h6>
                                                <div class="row align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <!-- Heading -->
                                                        <span class="font-24 text-dark mr-2" id="totalResponses">Loading...</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Icon -->
                                                <div class="icon">
                                                    <img src="/img/bg-img/icon-11.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-4 mb-3">
                                <div class="card bg-boxshadow full-height">
                                    <div class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                        <div class="widgets-card-title">
                                            <h5 class="card-title mb-0">Total Pendataan</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="proposalPieChart" width="400" height="200"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-sm-8 mb-3">
                                <div class="card bg-boxshadow full-height">
                                    <div class="card-header bg-transparent d-flex align-items-center justify-content-between">
                                        <div class="widgets-card-title">
                                            <h5 class="card-title mb-0">Total Pendataan Harian</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="dailyDataBarChart" width="400" height="200"></canvas>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script>
        // Firebase configuration
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

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const firestore = firebase.firestore();

        var myTimestamp = firebase.firestore.FieldValue.serverTimestamp();

        console.log("myTimestamp", myTimestamp);

        var settings = {
            timestampsInSnapshots: true
        }; // force Timestamp instead of Date
        firestore.settings(settings);

        // Function to get data per day
        async function getDataPerDay(collectionName) {
            const collection = firestore.collection(collectionName);
            const snapshot = await collection.get();
            const dataPerDay = {};


            snapshot.forEach(doc => {
                // console.log(doc);
                const dataTime = doc.data({
                    serverTimestamps: 'estimate'
                });

                console.log("Data Time", dataTime);
                // console.log("Time: ", dataTime.timestampField.toDate());

                const timestamp = moment(doc.dateCreated).format('YYYY-MM-DD');
                if (dataPerDay[timestamp]) {
                    dataPerDay[timestamp]++;
                } else {
                    dataPerDay[timestamp] = 1;
                }
            });

            return dataPerDay;
        }

        async function loadData() {
            const proposalsCollection = firestore.collection('proposals');
            const responsesCollection = firestore.collection('responses');
            const recipientsCollection = firestore.collection('recipients');

            const totalProposals = (await proposalsCollection.get()).size;
            const totalResponses = (await responsesCollection.get()).size;
            const totalRecipients = (await recipientsCollection.get()).size;

            document.getElementById('totalProposals').innerText = totalProposals;
            document.getElementById('totalResponses').innerText = totalResponses;
            document.getElementById('totalRecipients').innerText = totalRecipients;

            const proposalData = await getDataPerDay('proposals');
            const responseData = await getDataPerDay('responses');

            // Data total proposal dan total response
            const ctxPie = document.getElementById('proposalPieChart').getContext('2d');
            new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['Total Pengusul', 'Total Verifikasi'],
                    datasets: [{
                        label: 'Pengusulan vs Verifikasi',
                        data: [totalProposals, totalResponses],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)', // Merah
                            'rgba(54, 162, 235, 0.6)', // Biru
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    // scales: {
                    //     y: {
                    //         beginAtZero: true
                    //     }
                    // }
                }
            });

            // Data per hari untuk proposal dan response (contoh)
            // const ctxBar = document.getElementById('dailyDataBarChart').getContext('2d');
            // new Chart(ctxBar, {
            //     type: 'bar',
            //     data: {
            //         labels: Object.keys(proposalData), // Menggunakan kunci tanggal sebagai label
            //         datasets: [{
            //             label: 'Proposal',
            //             data: Object.values(proposalData), // Mengambil nilai proposal
            //             backgroundColor: 'rgba(255, 99, 132, 0.6)', // Warna merah
            //             borderColor: 'rgba(255, 99, 132, 1)',
            //             borderWidth: 1
            //         }, {
            //             label: 'Response',
            //             data: Object.values(responseData), // Mengambil nilai response
            //             backgroundColor: 'rgba(54, 162, 235, 0.6)', // Warna biru
            //             borderColor: 'rgba(54, 162, 235, 1)',
            //             borderWidth: 1
            //         }]
            //     },
            //     options: {
            //         responsive: true,
            //         maintainAspectRatio: false,
            //         scales: {
            //             y: {
            //                 beginAtZero: true
            //             }
            //         }
            //     }
            // });
        }

        // Load data and create charts on page load
        document.addEventListener('DOMContentLoaded', loadData);
    </script>


</body>

</html>