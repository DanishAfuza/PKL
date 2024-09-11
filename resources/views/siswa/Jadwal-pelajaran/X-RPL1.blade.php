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
            background-color: #f8f9fa; /* Light background color */
        }
        /* Header */
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
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background: #495057;
        }
        /* End Header */
        .content {
            padding: 2rem;
            margin-top: 60px; /* Space for header */
        }
        .page-title {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            display: inline-block;
        }
        .blue-background-container {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Header */
        .header {
            background-color: #007bff; /* Blue color */
            color: white;
            padding: 1rem;
            text-align: left;
            
            width: 100%;
            top: 0;
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
        /* End Header */
        /* Footer */
        .footer {
            background-color: #343a40; /* Dark footer color */
            color: #ffffff;
            padding: 1rem;
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        /* End Footer */
        /* Card */
        .schedule-container {
            margin-top: 25px;
        }
        .table-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        thead {
            background-color: #007bff;
            color: white;
        }
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tbody tr:hover {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2> <!-- Website title -->
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
                    <a class="nav-link" href="#">
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
                    <a class="nav-link" href="#">
                        <i class="bi bi-check-circle"></i> Nilai
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
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p> <!-- Blue background paragraph -->
                            <p class="form-title fw-bolder">Selamat Datang siswa!</p> <!-- Blue background paragraph -->
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="container schedule-container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mb-4">Jadwal Pelajaran</h1>
                            <div class="table-container">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Guru</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Senin</td>
                                            <td>08:00 - 09:30</td>
                                            <td>Matematika</td>
                                            <td>Pak Budi</td>
                                        </tr>
                                        <tr>
                                            <td>Senin</td>
                                            <td>09:45 - 11:15</td>
                                            <td>Bahasa Inggris</td>
                                            <td>Bu Siti</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>08:00 - 09:30</td>
                                            <td>Fisika</td>
                                            <td>Pak Andi</td>
                                        </tr>
                                        <tr>
                                            <td>Selasa</td>
                                            <td>09:45 - 11:15</td>
                                            <td>Kimia</td>
                                            <td>Bu Rina</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>08:00 - 09:30</td>
                                            <td>Biologi</td>
                                            <td>Pak Yanto</td>
                                        </tr>
                                        <tr>
                                            <td>Rabu</td>
                                            <td>09:45 - 11:15</td>
                                            <td>Sejarah</td>
                                            <td>Bu Ani</td>
                                        </tr>
                                        <!-- Add more schedule rows here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
