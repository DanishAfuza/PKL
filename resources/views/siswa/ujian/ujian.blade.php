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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header .account-info {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .header .account-info span {
            margin-right: 1rem;
        }

        .header .account-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .sidebar {
            height: 100vh;
            background: #343a40;
            padding: 2rem 1rem;
            position: fixed;
            top: 60px; /* Adjusted for header */
            width: 200px;
            overflow-y: auto;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
        }

        .sidebar a.active, .sidebar a:hover {
            background: #495057;
        }

        .content {
            margin-left: 250px; /* Sidebar width */
            margin-top: 80px; /* Header height + some padding */
            padding: 2rem;
        }

        .page-title {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .footer {
            background: #343a40;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .card {
            flex: 1;
            min-width: 280px;
            margin-bottom: 1rem;
            border: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-body {
            text-align: center;
            padding: 1rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        .btn-light {
            color: #007bff;
            border-color: #007bff;
        }

        .btn-light:hover {
            background-color: #007bff;
            color: #fff;
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .card-math { background-color: #ff6f61; color: white; }
        .card-english { background-color: #6f42c1; color: white; }
        .card-chemistry { background-color: #28a745; color: white; }
        .card-bahasa { background-color: darkgoldenrod; color: white; }
        .card-ppkn { background-color: brown; color: white; }
        .card-fisika { background-color: chartreuse; color: white; }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder ms-3">E-Learning</h2>
        <div class="account-info me-3">
            <span>Welcome, User!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar">
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
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
                <a class="nav-link" href="../pengumuman/pengumuman.html">
                    <i class="bi bi-megaphone"></i> Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../Jadwal-pelajaran/materi-pelajaran.html">
                    <i class="bi bi-list-task"></i> Materi Mata Pelajaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../tugas/tugas.html">
                    <i class="bi bi-journals"></i> Tugas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./ujian.html">
                    <i class="bi bi-newspaper"></i> Ujian
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../nilai.html">
                    <i class="bi bi-check-circle"></i> Nilai
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/Projek-PKL-html 2 3/Projek-PKL-html/login.html">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="page-title">
                        Sistem Informasi E-Learning SMKN 64 JAKARTA
                        <br>
                        <span>Selamat Datang Siswa!</span>
                    </div>
                </div>
            </div>

            <!-- Cards -->
            <div class="card-container">
                <div class="card card-math">
                    <div class="card-body">
                        <i class="bi bi-calculator card-icon"></i>
                        <h5 class="card-title">Ujian Matematika</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="detail-ujian.html" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
                <div class="card card-english">
                    <div class="card-body">
                        <i class="bi bi-book card-icon"></i>
                        <h5 class="card-title">Ujian Bahasa Inggris</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
                <div class="card card-chemistry">
                    <div class="card-body">
                        <i class="bi bi-capsule card-icon"></i>
                        <h5 class="card-title">Ujian Kimia</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
                <div class="card card-bahasa">
                    <div class="card-body">
                        <i class="bi bi-pencil card-icon"></i>
                        <h5 class="card-title">Ujian Bahasa Indonesia</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
                <div class="card card-ppkn">
                    <div class="card-body">
                        <i class="bi bi-people card-icon"></i>
                        <h5 class="card-title">Ujian PPKN</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
                <div class="card card-fisika">
                    <div class="card-body">
                        <i class="bi bi-globe card-icon"></i>
                        <h5 class="card-title">Ujian Fisika</h5>
                        <p class="card-text">Kerjakan dengan jujur dan fokus agar mendapatkan hasil yang maksimal. Waktu pengerjaan 120 menit.</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <!-- End Cards -->
        </div>
    </div>
    <!-- End Main Content -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">Email: smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat Jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
