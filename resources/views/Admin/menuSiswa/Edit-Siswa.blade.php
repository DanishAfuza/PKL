<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">

    <style>
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
        .card {
            margin-bottom: 2rem;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .col-md-4 {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2>
        <div class="account-info">
            <span>Welcome, Admin!</span>
            <img src="https://via.placeholder.com/40" alt="User Avatar">
        </div>
    </div>
    <div class="d-flex">
        <!-- SideBar -->
        <div class="sidebar bg-dark text-white p-z">
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
        <div class="container mt-5">

            
            <!-- Detail Card -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Siswa</h5>
                    <form>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor</label>
                            <input type="text" class="form-control" id="nomor" value="12345" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input type="text" class="form-control" id="nis" value="67890" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="Jane Doe" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" value="XII RPL 2" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" value="Jl. Contoh Alamat No.1" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" rows="3" disabled>Contoh keterangan siswa</textarea>
                        </div>
                        <a href="CRUD-Data-Siswa.html" class="btn btn-primary">Back</a>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <!-- footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Bootstrap JavaScript and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9D0Mo8L7/qX4cKpW9/Yuo1EtdNiw3aRpzF1aA3J5XyYZK5iL2E2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIph3tW7rTbo8Kp13R7uZoUUt+57bX5aVXogv2foh/gAnE/Xj4W5v4P4g9Uj4" crossorigin="anonymous"></script>
</body>
</html>
