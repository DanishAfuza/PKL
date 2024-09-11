<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Selesai</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #202124;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 600px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 40px;
            text-align: center;
        }
        h1 {
            color: #4285f4;
            font-size: 32px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .icon {
            font-size: 64px;
            color: #34a853;
            margin-bottom: 20px;
        }
        .results {
            display: flex;
            justify-content: space-around;
            margin-bottom: 30px;
        }
        .results div {
            font-size: 20px;
            font-weight: bold;
        }
        .correct {
            color: #34a853;
        }
        .incorrect {
            color: #ea4335;
        }
        .back-button {
            background-color: #4285f4;
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
            text-decoration: none;
            display: inline-block;
        }
        .back-button:hover {
            background-color: #3367d6;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">✅</div>
        <h1>Ujian Telah Selesai</h1>
        <p>Selamat! Anda telah menyelesaikan ujian dengan baik. Terima kasih atas partisipasi Anda.</p>

        <div class="results">
            <div class="correct">Jawaban Benar: 8</div>
            <div class="incorrect">Jawaban Salah: 2</div>
        </div>

        <a href="ujian.html" class="back-button">Kembali ke Beranda</a>
    </div>
</body>
</html>
