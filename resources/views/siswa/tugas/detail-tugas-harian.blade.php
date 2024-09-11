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
            position:relative ; /* Agar footer selalu berada di bawah halaman */
            bottom: 0;
            width: 100%; /* Agar footer memenuhi lebar halaman */
            padding: 1rem;
        }

        .footer p {
            margin: 0;
        }
        /* end Footer */
        .content {
    flex: 1;
    padding: 20px;
}

h1 {
    margin-top: 0;
}

.exam-details {
    background-color: #F0ECEC;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.details-table {
    width: 100%;
    border-collapse:var(#F0ECEC) ;
}

.details-table td {
    padding: 10px;
    border: 0px solid #f0ecec;
}

.instructions {
    margin-top: 20px;
}

.buttons {
    margin-top: 20px;
}

.start-button, .back-button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-right: 10px;
    cursor: pointer;
}

       
    </style>
</head>
<body>
    <div class="header d-flex justify-content-between align-items-center">
        <h2 class="fw-bolder">E-Learning</h2> <!-- Judul website -->
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
                    <a class="nav-link" href="nilai.html">
                        <i class="bi bi-check-circle"></i>Nilai
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="#">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
        <main class="content">
            <h1>Detail Tugas Harian</h1>
            <div class="exam-details">
                <h2>Tugas Matematika</h2>
                <table class="details-table">
                    <tr>
                        <td>Mata Pelajaran</td>
                        <td>Matematika</td>
                    </tr>
                    <tr>
                        <td>Jumlah Soal</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Batas Waktu</td>
                        <td>10 March 2018</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td>XII RPL 2</td>
                    </tr>
                    <tr>
                        <td>Guru</td>
                        <td>Rudi, A.Md.</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>03 March 2018 16:00</td>
                    </tr>
                    <tr>
                        <td>Jumlah Soal</td>
                        <td>3</td>
                    </tr>
                </table>
                <div class="instructions">
                    <h3>Tugas</h3>
                    <ol>
                        <li> Hitung nilai dari sin30∘+cos60∘+tan45?</li>
                        <li>Diketahui fungsi kuadrat f(x)=2x2−4x+1? 
                        </br> a. Tentukan titik puncak (vertex) dari fungsi kuadrat tersebut!
                        </br> b. Tentukan nilai maksimum atau minimum dari fungsi tersebut!</li>
                        <li>Hitunglah integral berikut:
                            ∫(3𝑥2−2𝑥+1) 𝑑𝑥∫(3x 2−2x+1)dx</li>
                    </ol>
                </div>
                <input type= "file">
                <div class="buttons">
                    <button class="start-button">Kirim</button>
                </div>
            </div>
        </main>
    </div>
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0">Email : smkn64jakarta@gmail.com | Sistem Informasi E-Learning SMKN 64 Jakarta | Jl. Jaani Nasir No.8, RT.8/RW.11, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630 | Copyright 2024</p>
        </div>
    </footer>
    <!-- ENd Footee -->
    </div>
</body>