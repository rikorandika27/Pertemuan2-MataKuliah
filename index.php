<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penilaian Mahasiswa</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        text-align: center;
        border: 1px solid #000;
        padding: 10px;
        border-radius: 10px;
        background-image: url(gambar2.jpg);
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-family: cursive;
        font-size: 20px;
        margin-bottom: 15px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    label,
    input {
        font-size: 18px;
        margin-bottom: 10px;
    }

    input[type="number"] {
        padding: 5px;
        font-size: 16px;
        width: 200px;
    }

    .hasil {
        font-size: 20px;
        margin-top: 20px;
    }

    .submit-btn {
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <div class="container">
        <p>-------------------------------------------------------</p>
        <h1>Aplikasi Penilaian Mahasiswa</h1>
        <p>-------------------------------------------------------</p>

        <form method="POST">
            <label for="nilai1">Masukkan Nilai Mata Kuliah 1:</label>
            <input type="number" name="nilai1" id="nilai1" required><br>

            <label for="nilai2">Masukkan Nilai Mata Kuliah 2:</label>
            <input type="number" name="nilai2" id="nilai2" required><br>

            <label for="nilai3">Masukkan Nilai Mata Kuliah 3:</label>
            <input type="number" name="nilai3" id="nilai3" required><br>

            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nilai1 = isset($_POST['nilai1']) ? (float) $_POST['nilai1'] : 0;
            $nilai2 = isset($_POST['nilai2']) ? (float) $_POST['nilai2'] : 0;
            $nilai3 = isset($_POST['nilai3']) ? (float) $_POST['nilai3'] : 0;

            $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

            if ($rata_rata >= 60) {
                $status = "Lulus";
            } else {
                $status = "Tidak Lulus";
            }

            echo "<div class='hasil'><strong>Nilai Rata-Rata: $rata_rata</strong></div>";
            echo "<div class='hasil'><strong>Status Kelulusan: $status</strong></div>";
        }
        ?>
    </div>
</body>

</html>