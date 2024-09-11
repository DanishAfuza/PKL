<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Radio Input</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
            color: #202124;
        }
        .container {
            max-width: 640px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-header {
            background-color: #3367d6;
            color: white;
            padding: 24px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .form-header h1 {
            margin: 0;
            font-size: 32px;
            font-weight: 400;
        }
        .form-content {
            padding: 24px;
        }
        .form-group {
            margin-bottom: 24px;
        }
        .question {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 16px;
        }
        .question-number {
            font-weight: 700;
            margin-right: 8px;
        }
        .radio-group {
            display: flex;
            flex-direction: column;
        }
        .radio-option {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }
        input[type="radio"] {
            margin-right: 12px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #5f6368;
            border-radius: 50%;
            outline: none;
            transition: border-color 0.2s ease-in-out;
        }
        input[type="radio"]:checked {
            border: 6px solid #3367d6;
        }
        label {
            font-size: 14px;
        }
        button {
            background-color: #3367d6;
            color: white;
            border: none;
            padding: 10px 24px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        button:hover {
            background-color: #5000d3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>Survei Preferensi Musik</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">1.</span>
                        Apa genre musik favorit Anda?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="pop" name="genre" value="pop">
                            <label for="pop">Pop</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="rock" name="genre" value="rock">
                            <label for="rock">Rock</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jazz" name="genre" value="jazz">
                            <label for="jazz">Jazz</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="klasik" name="genre" value="klasik">
                            <label for="klasik">Klasik</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="elektronik" name="genre" value="elektronik">
                            <label for="elektronik">Elektronik</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">2.</span>
                        Seberapa sering Anda mendengarkan musik?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="setiap_hari" name="frekuensi" value="setiap_hari">
                            <label for="setiap_hari">Setiap hari</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="beberapa_kali_seminggu" name="frekuensi" value="beberapa_kali_seminggu">
                            <label for="beberapa_kali_seminggu">Beberapa kali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="sekali_seminggu" name="frekuensi" value="sekali_seminggu">
                            <label for="sekali_seminggu">Sekali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jarang" name="frekuensi" value="jarang">
                            <label for="jarang">Jarang</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">2.</span>
                        Seberapa sering Anda mendengarkan musik?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="setiap_hari" name="frekuensi" value="setiap_hari">
                            <label for="setiap_hari">Setiap hari</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="beberapa_kali_seminggu" name="frekuensi" value="beberapa_kali_seminggu">
                            <label for="beberapa_kali_seminggu">Beberapa kali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="sekali_seminggu" name="frekuensi" value="sekali_seminggu">
                            <label for="sekali_seminggu">Sekali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jarang" name="frekuensi" value="jarang">
                            <label for="jarang">Jarang</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">2.</span>
                        Seberapa sering Anda mendengarkan musik?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="setiap_hari" name="frekuensi" value="setiap_hari">
                            <label for="setiap_hari">Setiap hari</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="beberapa_kali_seminggu" name="frekuensi" value="beberapa_kali_seminggu">
                            <label for="beberapa_kali_seminggu">Beberapa kali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="sekali_seminggu" name="frekuensi" value="sekali_seminggu">
                            <label for="sekali_seminggu">Sekali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jarang" name="frekuensi" value="jarang">
                            <label for="jarang">Jarang</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">2.</span>
                        Seberapa sering Anda mendengarkan musik?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="setiap_hari" name="frekuensi" value="setiap_hari">
                            <label for="setiap_hari">Setiap hari</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="beberapa_kali_seminggu" name="frekuensi" value="beberapa_kali_seminggu">
                            <label for="beberapa_kali_seminggu">Beberapa kali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="sekali_seminggu" name="frekuensi" value="sekali_seminggu">
                            <label for="sekali_seminggu">Sekali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jarang" name="frekuensi" value="jarang">
                            <label for="jarang">Jarang</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="question">
                        <span class="question-number">2.</span>
                        Seberapa sering Anda mendengarkan musik?
                    </div>
                    <div class="radio-group">
                        <div class="radio-option">
                            <input type="radio" id="setiap_hari" name="frekuensi" value="setiap_hari">
                            <label for="setiap_hari">Setiap hari</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="beberapa_kali_seminggu" name="frekuensi" value="beberapa_kali_seminggu">
                            <label for="beberapa_kali_seminggu">Beberapa kali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="sekali_seminggu" name="frekuensi" value="sekali_seminggu">
                            <label for="sekali_seminggu">Sekali seminggu</label>
                        </div>
                        <div class="radio-option">
                            <input type="radio" id="jarang" name="frekuensi" value="jarang">
                            <label for="jarang">Jarang</label>
                        </div>
                    </div>
                </div>
                <a href="keterangan-ujian.html"><button type="submit">Kirim</a></button>
            </form>
        </div>
    </div>
</body>
</html>