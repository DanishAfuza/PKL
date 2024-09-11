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
        .sidebar {
            height: auto;
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
        .content {
            padding: 2rem;
        }
        .page-title {
            background-color: #007bff;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            display: inline-block;
        }
        .blue-background-container {
            background-color: #007bff;
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: left;
        }
        .content {
            margin-top: 60px;
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
        .footer {
            background-color: #343a40;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
            padding: 1rem;
        }
        .footer p {
            margin: 0;
        }
        .announcement-container {
            margin-top: 25px;
        }
        .announcement-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .announcement-card:hover {
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
        .card-info {
            background-color: #17a2b8;
            color: white;
        }
        .card-warning {
            background-color: #ffc107;
            color: white;
        }
        .card-danger {
            background-color: #dc3545;
            color: white;
        }
        .card-success {
            background-color: #28a745;
            color: white;
        }
        .card-icon {
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <header class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2>
        <div class="account-info">
            <span>Welcome, User!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar">
        </div>
    </header>
    <div class="d-flex">
        <nav class="sidebar bg-dark text-white p-4">
            <div class="d-flex align-items-center mb-4">
                <img src="https://via.placeholder.com/80" alt="User Avatar" class="rounded-circle me-3">
                <div>
                    <h5 class="mb-0">John Doe</h5>
                    <p class="mb-0">Student</p>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/Dashboardsiswa.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.html">
                        <i class="bi bi-megaphone"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/Jadwal-pelajaran/materi-pelajaran.html">
                        <i class="bi bi-list-task"></i> Materi Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/tugas/tugas.html">
                        <i class="bi bi-journals"></i> Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/ujian/ujian.html">
                        <i class="bi bi-newspaper"></i> Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/nilai.html">
                        <i class="bi bi-check-circle"></i> Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/Projek-PKL-html 2 3/Projek-PKL-html/login.html">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <main class="content w-100">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="blue-background-container">
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p>
                            <p class="form-title fw-bolder">Selamat Datang siswa!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container announcement-container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="mb-4">Pengumuman Sekolah</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 announcement-card card-info">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Pengumuman Penting</h5>
                                        <p class="card-text">Sekolah akan libur pada tanggal 1 Agustus 2024 untuk memperingati hari besar nasional.</p>
                                        <a href="detailpengumuman.html"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
                                    </div>
                                    <i class="bi bi-info-circle card-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 announcement-card card-warning">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Peringatan</h5>
                                        <p class="card-text">Pastikan untuk mengumpulkan tugas tepat waktu agar tidak terkena penalti.</p>
                                        <a href="detailpengumuman.html"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
                                    </div>
                                    <i class="bi bi-exclamation-triangle card-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 announcement-card card-danger">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Perubahan Jadwal</h5>
                                        <p class="card-text">Ujian akhir semester akan dimulai pada tanggal 10 Agustus 2024.</p>
                                        <a href="detailpengumuman.html"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
                                    </div>
                                    <i class="bi bi-calendar3 card-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4 announcement-card card-success">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Selamat</h5>
                                        <p class="card-text">Selamat kepada siswa yang telah berhasil memenangkan lomba sains tingkat nasional.</p>
                                        <a href="detailpengumuman.html"><button type="button" class="btn btn-primary">Lihat Detail</button></a>
                                    </div>
                                    <i class="bi bi-trophy card-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email: smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | &copy; 2024</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
