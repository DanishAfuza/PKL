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
        .back-button {
            margin-bottom: 20px;
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
                    <a class="nav-link active" href="Dashboardsiswa.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.html">
                        <i class="bi bi-megaphone"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi-pelajaran.html">
                        <i class="bi bi-list-task"></i> Materi Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tugas.html">
                        <i class="bi bi-journals"></i> Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ujian.html">
                        <i class="bi bi-newspaper"></i> Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nilai.html">
                        <i class="bi bi-check-circle"></i> Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="login.html">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </nav>
        <main class="content w-100">
            <div class="announcement-detail-container">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Pengumuman Penting</h5>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Diumumkan pada: 1 Januari 2024</h6>
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                        <img src="https://via.placeholder.com/800x400" alt="Dokumentasi Kegiatan" class="activity-image ">
                        </div>
                        <p class="card-text">Berikut adalah detail lengkap mengenai pengumuman nomor 181. Harap diperhatikan oleh seluruh siswa untuk mematuhi informasi dan instruksi yang diberikan dalam pengumuman ini. Pengumuman ini berisi informasi penting mengenai jadwal kegiatan, perubahan kebijakan, dan informasi lainnya yang relevan bagi semua siswa SMKN 64 Jakarta.</p>
                        <ul>
                            <li>Poin pertama dari pengumuman ini menjelaskan tentang perubahan jadwal mata pelajaran.</li>
                            <li>Poin kedua menginformasikan tentang kegiatan ekstrakurikuler yang akan dilaksanakan.</li>
                            <li>Poin ketiga mencakup aturan baru yang harus diikuti oleh semua siswa.</li>
                        </ul>
                        <p class="card-text">Harap pastikan untuk memeriksa pengumuman ini secara berkala untuk informasi terbaru dan perubahan yang mungkin terjadi. Terima kasih atas perhatian dan kerjasamanya.</p>
                        
                    </div>
                </div>
            </div>
            <!-- Back Button -->
            <div class="back-button">
                <a href="javascript:history.back()" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
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