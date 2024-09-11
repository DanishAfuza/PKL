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
        /* Footer */
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer p {
            margin: 0;
        }
        /* Main Content */
        .content {
            margin-top: 20px;
            padding: 2rem;
            flex-grow: 1;
        }
        .blue-background-container {
          background-color: #007bff; /* Bright blue background */
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .card {
            width: 23%;
            margin-bottom: 2rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            text-align: center;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-text {
            font-size: 1rem;
        }
        .icon {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2>
        <div class="account-info">
            <span>Welcome, User!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar">
        </div>
    </div>
    <div class="d-flex">
        <!-- Sidebar -->
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
                    <a class="nav-link active" href="Dashboard-guru.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./materiajar/materi-ajar.html">
                        <i class="bi bi-megaphone"></i> Kelola mata Pelajaran
                    </a>
                </li>
               
            </ul>
        </div>
        <!-- Main Content -->
        <div class="content w-100">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="blue-background-container">
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p>
                            <p class="form-title fw-bolder">Selamat Datang guru!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards -->
            <div class="container">
                <div class="card-container">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <i class="bi bi-calendar3 icon"></i>
                            <h5 class="card-title">Materi Ajar</h5>
                            <p class="card-text">Tambah Materi Ajar</p>
                            <a href="./materiajar/materi-ajar.html" class="btn btn-light btn-sm">Selengkapnya <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                    <div class="card text-white bg-danger">
                        <div class="card-body">
                            <i class="bi bi-megaphone icon"></i>
                            <h5 class="card-title">Soal Ujian</h5>
                            <p class="card-text">Tambah Soal Uian</p>
                            <a href="./ujian/soal-ujian.html" class="btn btn-light btn-sm">Selengkapnya <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <i class="bi bi-journal icon"></i>
                            <h5 class="card-title">Tugas</h5>
                            <p class="card-text">Tambah Tugas</p>
                            <a href="tugas/tugas.html" class="btn btn-light btn-sm">Selengkapnya <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <i class="bi bi-pencil-square icon"></i>
                            <h5 class="card-title">Ujian</h5>
                            <p class="card-text">Lihat jadwal ujian dan persiapkan diri Anda.</p>
                            <a href="ujian/soal-ujian.html" class="btn btn-light btn-sm">Selengkapnya <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cards -->
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email: smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | &copy; 2024</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6TLKJhI6B0A2vF6IhX5sW5dMG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>
