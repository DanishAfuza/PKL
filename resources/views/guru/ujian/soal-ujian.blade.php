<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #343a40;
            padding: 1rem;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 0.5rem 1rem;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
        }

        /* Header */
        .header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: left;
        }
        .content {
            margin-top: 15px;
        }
        .header .account-info {
            display: flex;
            align-items: center;
        }
        .header .account-info span {
            margin-right: 1rem;
        }
        .header .account-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .blue-background-container {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        /* Footer */
        .footer {
            background-color: #343a40;
            color: #ffffff;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 1rem;
            text-align: center;
        }

        /* Card */
        .assignment-container {
            margin-top: 25px;
        }
        .assignment-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .assignment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .card-math {
            background-color: #FFCC99; /* Warm Peach */
            color: white;
        }
        .card-english {
            background-color: #FF6F61; /* Rich Salmon */
            color: white;
        }
        .card-chemistry {
            background-color: #FFBF00; /* Soft Amber */
            color: white;
        }
        .card-ppkn {
            background-color: #F4A460; /* Gentle Apricot */
            color: white;
        }
        .card-bahasa {
            background-color: #FAD6D6; /* Creamy Blush */
            color: white;
        }
        .card-fisika {
            background-color: #E86C4F; /* Rusty Orange */
            color: white;
        }
        .card-icon {
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2> <!-- Judul website -->
        <div class="account-info">
            <span>Welcome, User!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar">
        </div>
    </div>
    <div class="d-flex">
        <!-- SideBar -->
        <div class="sidebar bg-dark text-white p-4">
            <div class="d-flex align-items-center mb-4">
                <img src="https://via.placeholder.com/80" alt="User Avatar" class="rounded-circle me-3">
                <div>
                    <h5 class="mb-0">John Doe</h5>
                    <p class="mb-0">Teacher</p>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="Dashboardsiswa.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.html">
                        <i class="bi bi-megaphone"></i> Kelola Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="login.html">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="content w-100">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="blue-background-container">
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p> <!-- Paragraf dengan background biru -->
                            <p class="form-title fw-bolder">Selamat Datang Guru!</p> <!-- Paragraf dengan background biru -->
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="container assignment-container">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <h1 class="mb-4">Mapel Ujian</h1>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-math">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Matematika</h5>
                                            <p class="card-text">Ujian Kalkulus dan Aljabar</p>
                                        </div>
                                        <i class="bi bi-calculator card-icon"></i>
                                    </div>
                                    <a href="tambah-soalujian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-english">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Bahasa Inggris</h5>
                                            <p class="card-text">Ujian Grammar dan Vocabulary</p>
                                        </div>
                                        <i class="bi bi-book card-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-chemistry">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Kimia</h5>
                                            <p class="card-text">Ujian Reaksi Kimia</p>
                                        </div>
                                        <i class="bi bi-flask card-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-ppkn">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">PJOK</h5>
                                            <p class="card-text">Ujian Kebugaran Jasmani</p>
                                        </div>
                                        <i class="bi bi-bicycle card-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-bahasa">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Bahasa Indonesia</h5>
                                            <p class="card-text">Ujian Keterampilan Menulis</p>
                                        </div>
                                        <i class="bi bi-pencil card-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-fisika">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">PPKN</h5>
                                            <p class="card-text">Ujian Kewarganegaraan</p>
                                        </div>
                                        <i class="bi bi-flag card-icon"></i>
                                    </div>
                                    <a href="#" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak tugas di sini dengan menambahkan div.col-md-4 -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-dark text-white text-center">
            <div class="container">
                <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
