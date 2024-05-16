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
                                                    Total Tanggapan
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

    <!-- Inject JS -->
    <!-- <script src="js/default-assets/mini-event-calendar.min.js"></script>
    <script src="js/default-assets/mini-calendar-active.js"></script>
    <script src="js/default-assets/apexchart.min.js"></script>
    <script src="js/default-assets/dashboard-active.js"></script> -->

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-firestore.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        function displayData() {
            // Reference to the collections
            const proposalsCollection = db.collection('proposals');
            const responsesCollection = db.collection('responses');
            const recipientsCollection = db.collection('recipients');

            // Get total number of documents in each collection
            let totalProposals, totalResponses, totalRecipients;
            proposalsCollection.get().then(querySnapshot => {
                totalProposals = querySnapshot.size;
                updateTotalProposals(totalProposals);
            });
            responsesCollection.get().then(querySnapshot => {
                totalResponses = querySnapshot.size;
                updateTotalResponses(totalResponses);
            });
            recipientsCollection.get().then(querySnapshot => {
                totalRecipients = querySnapshot.size;
                updateTotalRecipients(totalRecipients);
            });

            // Get data per day for proposals and responses
            getDataPerDay('proposals', function(proposalData) {
                updateProposalChart(proposalData);
            });
            getDataPerDay('responses', function(responseData) {
                updateResponseChart(responseData);
            });
        }

        function getDataPerDay(collectionName, callback) {
            const collection = db.collection(collectionName);
            const dataPerDay = {};

            collection.onSnapshot(querySnapshot => {
                querySnapshot.forEach(doc => {
                    const createTime = doc.data().createTime;

                    console.log(createTime);
                    if (createTime) {
                        const timestamp = createTime.toDate().toISOString().split('T')[0];
                        dataPerDay[timestamp] = (dataPerDay[timestamp] || 0) + 1;
                    }
                });
                callback(dataPerDay);
            });
        }


        function updateTotalProposals(total) {
            document.getElementById('totalProposals').innerText = total;
        }

        function updateTotalResponses(total) {
            document.getElementById('totalResponses').innerText = total;
        }

        function updateTotalRecipients(total) {
            document.getElementById('totalRecipients').innerText = total;
        }

        function updateProposalChart(dailyProposalData) {
            // Update proposal chart
            var ctx = document.getElementById('proposalPieChart').getContext('2d');
            var proposalPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Total Pengusul', 'Total Tanggapan'],
                    datasets: [{
                        label: 'Pengusul vs Tanggapan',
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
                    maintainAspectRatio: false
                }
            });
        }

        function updateResponseChart(dailyResponseData) {
            // Update response chart
            var ctx = document.getElementById('dailyDataBarChart').getContext('2d');
            var dailyDataBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: Object.keys(dailyResponseData), // Menggunakan kunci tanggal sebagai label
                    datasets: [{
                        label: 'Proposal',
                        data: Object.values(dailyResponseData), // Mengambil nilai proposal
                        backgroundColor: 'rgba(255, 99, 132, 0.6)', // Warna merah
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        // Call displayData function to start fetching and updating data
        displayData();
    </script>


</body>

</html>