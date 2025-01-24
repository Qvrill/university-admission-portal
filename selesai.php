<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Selesai</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            box-sizing: border-box;
        }

        img {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        h4 {
            text-align: center;
            font-size: 20px;

        }

        button {
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }

        a {
            margin-left: auto;
            margin-right: auto;
            display: flex;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="img/ss.png" alt="" srcset="">
        <h4>Selamat,<?= $_SESSION["nama_user"] ?> Pendaftaran Selesai Silahkan Datang ke Universitas Untuk Registrasi Ulang</h4>
        <form action="cetak_file.php" method="post">
            <button>Cetak Formulir</button>
        </form>
        <a href="logout.php?out=1">Log Out</a>
    </div>
</body>

</html>