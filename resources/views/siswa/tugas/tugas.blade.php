<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
        }
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
            margin-top: 50px;
        
            padding: 1rem;
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
        .assignment-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .assignment-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-icon {
            font-size: 2.5rem;
        }
        .card-math {
            background-color: #f8f9fa; /* Light Gray */
            color: #333; 
            
        }
        .card-math :hover{
            background-color: #e2e6ea;
        }
        
        .card-english {
            background-color: #d4edda;
            color: #333;
        }
        .card-english :hover{
            background-color: #e2e6ea;
        }
        .card-chemistry {
            background-color: #d0eaff;
            color: #333;
        }
        .card-chemistry :hover{
            background-color: #e2e6ea;
        }
        .card-bahasa {
            background-color: #FAD6D6;
            color: #333;
        }
        .card-bahasa :hover{
            background-color: #e2e6ea;
        }
        .card-ppkn {
            background-color: #f8c0c0;
            color: #333;
        }
        .card-ppkn :hover{
            background-color: #e2e6ea;
        }

        .card-fisika {
            background-color: #ffe5e5;
            color: #333;
        }
        .card-fisika :hover{
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2>
        <div class="account-info d-flex align-items-center">
            <span>Welcome, User!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar" class="ms-2 rounded-circle" style="width: 40px; height: 40px;">
        </div>
    </div>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar bg-dark text-white">
            <div class="d-flex align-items-center mb-4">
                <img src="https://via.placeholder.com/80" alt="User Avatar" class="rounded-circle me-3" style="width: 80px; height: 80px;">
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
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/pengumuman/pengumuman.html">
                        <i class="bi bi-megaphone"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Projek-PKL-html 2 3/Projek-PKL-html/siswa/Jadwal-pelajaran/materi-pelajaran.html">
                        <i class="bi bi-book"></i> Materi Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./tugas.html">
                        <i class="bi bi-journal-text"></i> Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ujian/ujian.html">
                        <i class="bi bi-file-earmark-text"></i> Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../nilai.html">
                        <i class="bi bi-bar-chart"></i> Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="/Projek-PKL-html 2 3/Projek-PKL-html/login.html">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row text-center mb-4">
                    <div class="col-12">
                        <div class="blue-background-container">
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p>
                            <p class="form-title fw-bolder">Selamat Datang siswa!</p>
                        </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-math">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas Matematika</h5>
                                            <p class="card-text">Kerjakan soal latihan bab 1-3. Batas waktu pengumpulan: 31 Juli 2024.</p>
                                        </div>
                                        <i class="bi bi-calculator card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-english">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas Bahasa Inggris</h5>
                                            <p class="card-text">Buatlah esai tentang topik pilihan Anda. Batas waktu pengumpulan: 5 Agustus 2024.</p>
                                        </div>
                                        <i class="bi bi-pencil card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-chemistry">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas Kimia</h5>
                                            <p class="card-text">Lakukan eksperimen sederhana di rumah dan tulis laporan hasilnya. Batas waktu pengumpulan: 10 Agustus 2024.</p>
                                        </div>
                                        <i class="bi bi-flask card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-bahasa">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas Bahasa Indonesia</h5>
                                            <p class="card-text">Kerjakan soal latihan bab 1-3. Batas waktu pengumpulan: 31 Juli 2024.</p>
                                        </div>
                                        <i class="bi bi-bookmark card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-ppkn">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas PPKN</h5>
                                            <p class="card-text">Kerjakan soal latihan bab 1-3. Batas waktu pengumpulan: 31 Juli 2024.</p>
                                        </div>
                                        <i class="bi bi-clipboard card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card assignment-card card-fisika">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="card-title">Tugas Fisika</h5>
                                            <p class="card-text">Kerjakan soal latihan bab 1-3. Batas waktu pengumpulan: 31 Juli 2024.</p>
                                        </div>
                                        <i class="bi bi-lightning card-icon"></i>
                                    </div>
                                    <a href="detail-tugas-harian.html" class="btn btn-light mt-3">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <!-- Add more assignments here if needed -->
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
