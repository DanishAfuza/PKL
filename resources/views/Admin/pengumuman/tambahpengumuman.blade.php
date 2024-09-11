<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
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
        /* Header */
        .header {
            background-color: #007bff; /* Warna biru */
            color: white;
            padding: 1rem;
            text-align: left;
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

        /* konten */
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        /* end konten */

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

        .form-group-inline {
            display: flex;
            justify-content: space-between;
        }
        .form-group-inline input[type="date"] {
            width: 48%;
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
        <!-- end side bar -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mt-5">Tambah Pengumuman</h2>
                    <p class="text-center">Jangan Sampai Salah Ya!</p>
                    <form>
                        <div class="form-group">
                            <label for="text">Judul Pengumuman</label>
                            <input type="text" class="form-control" id="text" placeholder="Masukan Judul Pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="isi_pengumuman">Isi Pengumuman</label>
                            <textarea class="form-control" id="isi_pengumuman" placeholder="Masukan Isi Pengumuman"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                            <input type="date" class="form-control" id="tanggal_pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_mulai_akhir">Tanggal Mulai dan Tanggal Akhir</label>
                            <div class="form-group-inline">
                                <input type="date" class="form-control" id="tanggal_mulai" placeholder="Masukan Tanggal Mulai">
                                <input type="date" class="form-control" id="tanggal_akhir" placeholder="Masukan Tanggal Akhir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Kategori-Pengumuman">Pilih Kategori pengumuman </label>
                            <select class="form-control " id="mataPelajaran">
                                <option value="Matematika">Matematika</option>
                            </select>   
                        </div>
                        <div class="form-group">
                            <label for="Gambar">Masukan Gambar</label>
                            <input type="file" class="form-control" id="text" placeholder="Masukan Judul Pengumuman">
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-2">Tambahkan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
    <!-- ENd Footee -->
</body>