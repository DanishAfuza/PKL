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
        }
        .sidebar a:hover {
            background: #495057;
        }
        /*  End Header */
        .content {
            padding: 2rem;
        }
       
        .page-title {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            display: inline-block;
        }
        .blue-background-container {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 0.5rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }
        /* Header */
        .header {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 1rem;
            text-align: left;
        }
        .content {
        margin-top: 60px; /* Atur sesuai dengan tinggi header untuk memberi ruang */
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
        /* end Header */
        /* Footer */
        .footer {
            background-color: #343a40; /* Warna latar belakang footer */
            color: #ffffff; /* Warna teks */
            position: relative; /* Agar footer selalu berada di bawah halaman */
            bottom: 0;
            width: 100%; /* Agar footer memenuhi lebar halaman */
            padding: 1rem;
        }

        .footer p {
            margin: 0;
        }
        /* end Footer */
        /* Card */
        .card {
            margin-bottom: 2rem;
        }
        .row {
            display: flex; /* Menggunakan Flexbox untuk menyelaraskan card */
            flex-wrap: wrap; /* Membungkus card jika tidak cukup ruang */
        }

        .col-md-4 {
            display: flex; /* Menggunakan Flexbox untuk menyelaraskan card dalam kolom */
            justify-content: center; /* Menyelaraskan card secara horizontal */
        }
       
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2> <!-- Judul website -->
        <div class="account-info">
            <span>Welcome, Admin!</span>
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
                    <p class="mb-0">Admin</p>
                </div>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="Dashboard-admin.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.html">
                        <i class="bi bi-megaphone"></i> Kelola Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi-pelajaran.html">
                        <i class="bi bi-list-task"></i> Kelola Kelas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tugas.html">
                        <i class="bi bi-journals"></i> Kelola Pengunguman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ujian.html">
                        <i class="bi bi-newspaper"></i> Kelola Siswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nilai.html">
                        <i class="bi bi-check-circle"></i>Kelola Guru
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
                <div class="row text-center" >
                    <div class="col-12">
                        <div class="blue-background-container">
                            <p class="form-title fs-2 fw-bolder">Sistem Informasi E-Learning SMKN 64 JAKARTA</p> <!-- Paragraf dengan background biru -->
                            <p class="form-title fw-bolder">Selamat Datang Admin!</p> <!-- Paragraf dengan background biru -->
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Card -->
                <div class="container">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="card mb-3 text-white bg-secondary" style="max-width: 237px; max-height: 132px;">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">3 </h5>
                                <p class="card-text">Data Siswa</p>
                                <a href="menuGuru/dataguru.html" class="btn btn-light btn-sm"><i class="bi bi-arrow-right-short"></i></a>
                              </div>
                              
                            </div>
                            <div class="col-md-4">
                              <img src="recources/shopping_15089864.png" class="img-fluid rounded-start" alt="..." style="width: 95px; height:100px; margin-top: 10px; opacity: 0.5;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card mb-3 text-white bg-danger" style="max-width: 237px; max-height: 132px;">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">2</h5>
                                <p class="card-text">Data Guru</p>                                
                                <a href="menuGuru/dataguru.html"btn btn-light btn-sm"><i class="bi bi-arrow-right-short"></i></a>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="recources/megaphone_12003602.png" class="img-fluid rounded-start" alt="..." style="width: 95px; height: 100px; margin-right: 25px; margin-top: 10px; opacity: 0.5;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card mb-3 text-white bg-success" style="max-width: 237px; max-height: 132px;">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <p class="card-text">Mata Pelajaran</p>
                                <a href="tugas.html" class="btn btn-light btn-sm"><i class="bi bi-arrow-right-short"></i></a>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="recources/reading_4072011.png" class="img-fluid rounded-start" alt="..."  style="width: 95px; height: 100px; margin-right: 25px; margin-top: 9px; margin-bottom: 5px; opacity: 0.5;">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card mb-3 text-white bg-warning" style="max-width: 237px; max-height: 132px;">
                          <div class="row g-0">
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">5</h5>
                                <p class="card-text">Pengunguman</p>
                                <a href="pengumuman/pengumuman.html" class="btn btn-light btn-sm"><i class="bi bi-arrow-right-short"></i></a>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <img src="recources/writing_17170356.png" class="img-fluid rounded-start" alt="..."  style="width: 95px; height: 100px; margin-right: 25px; margin-top: 10px; opacity: 0.5;">
                            </div>
                          </div>
                        </div>
                      </div>
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
        <!-- ENd Footee -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
