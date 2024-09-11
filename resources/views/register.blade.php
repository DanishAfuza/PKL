<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Login Form with Logo and Image</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(recources/image.png);
            background-size: cover;
            background-position: center;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.6); /* White background with 60% opacity */
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }
        .image-container {
            text-align: center;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        .image-caption {
            margin-top: 1rem;
            text-align: center;
        }
        .form-title {
            text-align: center;
            margin-bottom: 1rem;
            
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="w-75">
            <div class="d-flex justify-content-center mb-1">
                <img src="./recources/IMG_1864-removebg-preview.png" alt="Company Logo" class="img-fluid" style="max-width: 150px;">
            </div>
            <h2 class="form-title text-center">Register</h2>
            <form class="form-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="./recources/Screen_Shot_2024-07-18_at_16.51.33-removebg-preview.png" alt="Side Image" class="img-fluid">
                            <b><p class="image-caption">E-Learning SMKN 64 Jakarta</p></b>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="Kategori-Pengumuman">Kategori</label>
                            <select class="form-control " id="mataPelajaran">
                                <option value="Matematika">Siswa</option>
                                <option value="Matematika">Guru</option>
                            </select>   
                        </div>
                        <div class="mb-3">
                            <label for="Kategori-Pengumuman">Kelas</label>
                            <select class="form-control " id="mataPelajaran">
                                <option value="Matematika">X-RPL</option>
                                <option value="Matematika">X-RPL1</option>
                            </select>   
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-warning" ><a href="./login.html">Submit</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
