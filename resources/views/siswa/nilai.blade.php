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

        .content {
            padding: 2rem;
            flex: 1;
            margin-top: 75px;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: left;
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
            padding: 1rem;
        }

        .footer p {
            margin: 0;
        }

        h2 {
            margin-top: 0;
        }

        .table-responsive input {
            margin-bottom: 1rem;
        }

        .table thead th {
            background-color: #007bff;
            color: white;
        }

        .pagination .page-item.disabled .page-link,
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination .page-link {
            color: #007bff;
        }

        .pagination .page-link:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            color: white;
        }
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
                    <a class="nav-link" href="../siswa/pengumuman/pengumuman.html">
                        <i class="bi bi-megaphone"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../siswa/Jadwal-pelajaran/materi-pelajaran.html">
                        <i class="bi bi-list-task"></i> Jadwal Mata Pelajaran
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./tugas/tugas.html">
                        <i class="bi bi-journals"></i> Tugas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./tugas/tugas.html">
                        <i class="bi bi-newspaper"></i> Ujian
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./nilai.html">
                        <i class="bi bi-check-circle"></i>Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="../login.html">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <main class="content">
            <div class="container-fluid">
                <h2 class="text-center mb-4">Nilai Siswa "VII A" - "Ahmad"</h2>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mataPelajaran">Pilih Mata Pelajaran</label>
                            <select class="form-control" id="mataPelajaran">
                                <option value="Matematika">Matematika</option>
                            </select>                           
                            <div class="text-right mt-2">
                                <button class="btn btn-primary">Pilih</button>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <button class="btn btn-secondary">Nilai Tugas</button>
                        <button class="btn btn-secondary">Nilai Ujian</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="col-md-6 ms-auto mb-2" >
                        <input type="search" class="form-control w-75 ms-auto" placeholder="Search">
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Judul Ujian</th>
                                <th>Jenis</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Nilai Ujian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Matematika</td>
                                <td>Ujian MTK 1</td>
                                <td>Ujian Harian</td>
                                <td>13312232</td>
                                <td>Ahmad</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Matematika</td>
                                <td>Ujian MTK MID</td>
                                <td>Ujian MID</td>
                                <td>13312232</td>
                                <td>Ahmad</td>
                                <td>100</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item ">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </main>
    </div>
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
</body>
</html>
