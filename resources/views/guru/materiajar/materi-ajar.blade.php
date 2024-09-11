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
                    <a class="nav-link active" href="../Dashboard-guru.html">
                        <i class="bi bi-calendar-event"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="materi-ajar.html">
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
                        <h2 class="page-title">Tambah Materi Ajar</h2>
                        <form id="addMateriForm" class="mt-4">
                            <div class="mb-3">
                                <label for="materiTitle" class="form-label">Judul Materi</label>
                                <input type="text" class="form-control" id="materiTitle" required>
                            </div>
                            <div class="mb-3">
                                <label for="materiDescription" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="materiDescription" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="materiFile" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="materiFile" required>
                            </div>
                            <div class="mb-3">
                                <label for="materiClass" class="form-label">Kelas</label>
                                <select name="class" id="class">
                                    <option value="">X RPL 1 </option>
                                    <option value="">X RPL 2</option>
                                    <option value="">XI RPL 1</option>
                                    <option value="">XI RPL 2</option>
                                    <option value="">XII RPL 1</option>
                                    <option value="">XII RPL 2</option>
                                </select>
                                <label for="materi" class="form-label">Pilih Mata pelajaran </label>
                                <select name="materi" id="materi">
                                    <option value="">Matematika </option>
                                    <option value="">PJOK </option>
                                    <option value="">Bahasa Indonesia </option>
                                    <option value="">Bahasa Inggris </option>
                                    <option value="">PPLG </option>
                                    <option value="">IPA </option>
                                    <option value="">PPKN </option>                                        
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Materi</button>
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
