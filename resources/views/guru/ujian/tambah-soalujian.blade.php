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
            position: fixed;
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
                    <p class="mb-0">Teacher</p>
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
                        <i class="bi bi-megaphone"></i> Kelola Mata Pelajaran
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
            <!-- Add Materi Ajar Form -->
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h2 class="page-title mt-1">Tambah Soal</h2>
                        <h3 class="page-title fw-bold">1/34</h3>
                        <form id="addMateriForm" class="mt-4 border border-1">
                            <div class="mb-3">
                                <label for="materiTitle" class="form-label">Soal</label>
                                <input type="text" class="form-control" id="materiTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="materiFile" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="materiFile" required>
                            </div>
                            <div class="mb-3">
                                <label for="answer" class="form-label">Jawaban</label></br>
                                <input type="radio" id="jakarta" name="q1" value="Jakarta">
                                <label for="jakarta">A.Jakarta</label><br>
                                <input type="radio" id="bandung" name="q1" value="Bandung">
                                <label for="bandung">B.Bandung</label><br>
                                <input type="radio" id="surabaya" name="q1" value="Surabaya">
                                <label for="surabaya">C.Surabaya</label><br>
                                <input type="radio" id="medan" name="q1" value="Medan">
                                <label for="medan">D.Medan</label><br>
                            </div>
                            <div class="mb-3">
                                <label for="correctAnwser" class="form-label">Jawaban Benar</label>
                                <select name="class" id="class">
                                    <option value="">A.Jakarta </option>
                                    <option value="">B.Bandung</option>
                                    <option value="">C.Surabaya</option>
                                    <option value="">D.Medan</option>
                                </select>
                            </div>
                        
                            <button type="submit" class="btn btn-primary ">Sebelumnya</button>
                            <button type="submit" class="btn btn-primary text-align">Selanjutnya</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Add Materi Ajar Form -->
        </div>
        <!-- Footer -->
        <footer class="footer mt-auto py-3 bg-dark text-white text-center">
            <div class="container">
                <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
