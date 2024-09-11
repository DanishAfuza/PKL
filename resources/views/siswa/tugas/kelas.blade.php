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
            background-color: #f8f9fa; /* Light background color for the body */
        }
        .sidebar {
            background: #343a40;
            padding: 1rem;
            height: auto;
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
          
            width: 100%;
            z-index: 1000;
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
        .content {
            padding: 2rem;
        }
        .blue-background-container {
            background-color: #007bff; /* Bright blue background */
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .blue-background-container p {
            margin: 0;
        }
        .assignment-container {
            margin-top: 2rem;
        }
        .assignment-card {
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .assignment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 1.5rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        .btn-light {
            background-color: #f8f9fa;
            border: none;
            color: #007bff;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-light:hover {
            background-color: #007bff;
            color: white;
        }
        .card-icon {
            font-size: 2rem;
            color: #007bff;
        }
        .card-math { background-color: #d1e7dd; }
        .card-english { background-color: #e2e3e5; }
        .card-chemistry { background-color: #cce5ff; }
        .card-bahasa { background-color: #d4edda; }
        .card-ppkn { background-color: #f8d7da; }
        .card-fisika { background-color: #f0f0f0; }
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2>
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
                    <p class="mb-0">Student</p>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="../Dashboardsiswa.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pengumuman.html">
                        <i class="bi bi-megaphone"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi-pelajaran.html">
                        <i class="bi bi-list-task"></i> Jadwal Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tugas/tugas.html">
                        <i class="bi bi-journals"></i> Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ujian/ujian.html">
                        <i class="bi bi-newspaper"></i> Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../nilai.html">
                        <i class="bi bi-check-circle"></i>Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">
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
                            <p class="fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p>
                            <p class="fw-bolder">Selamat Datang siswa!</p>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="container assignment-container">
                    <div class="row">
                        <div class="col-10">
                            <h1 class="mb-4">Pilih Kelas</h1>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-math">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">X RPL 1</h5>
                                            <p class="card-text">Lihat Tugas</p>
                                        </div>
                                        <i class="bi bi-calculator card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-english">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">X RPL 2</h5>
                                            <p class="card-text">Lihat Tugas</p>
                                        </div>
                                        <i class="bi bi-globe card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-chemistry">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">XI RPL 1</h5>
                                            <p class="card-text">Lihat Tugas</p>
                                        </div>
                                        <i class="bi bi-boxes card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-bahasa">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">XI RPL 2</h5>
                                            <p class="card-text">Tugas</p>
                                        </div>
                                        <i class="bi bi-pencil card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-ppkn">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">XII RPL 1</h5>
                                            <p class="card-text">Lihat Tugas</p>
                                        </div>
                                        <i class="bi bi-bookmark card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 assignment-card card-fisika">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">XII RPL 2</h5>
                                            <p class="card-text">Lihat Tugas</p>
                                        </div>
                                        <i class="bi bi-gear card-icon"></i>
                                    </div>
                                    <a href="tugas.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer bg-dark text-white text-center py-3">
        <p class="mb-0">Email: smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | &copy; 2024</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9w5vYo4FHp1K8A7zr5e2rE5/TKkcL9A+FNCGtl7WZ5p7GRZz5ik" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cP3xX8tT2EL43r8A0EfcMTU5W/7u1f3z0F2UqtT/5zKhR8deCH3qD0cr5k0aJ3Dq" crossorigin="anonymous"></script>
</body>
</html>
