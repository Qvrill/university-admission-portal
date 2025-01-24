<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Universitas - User Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        .profile {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 20px;
        }

        .profile-info {
            flex-grow: 1;
        }

        .profile-info h2 {
            margin: 0;
        }

        .profile-info p {
            margin: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        .logout-btn {
            text-align: center;
            margin-top: 20px;
        }

        .logout-btn button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-btn button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile">
            <img class="profile-img" src="img/fp/<?= $_SESSION["foto"] ?>">
            <div class="profile-info">
                <h2>Nama:<?= $_SESSION["nama_user"] ?></h2>
                <h2>Email:<?= $_SESSION["email"] ?></h2>
            </div>
        </div>

        <h1>Pendaftaran Universitas</h1>
        <?php
        foreach ($data as $data_pengguana) : ?>
            <form action="proses_pendaftara.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_mahasiswa" value="<?= $data_pengguana["id_mahasiswa"] ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="nama" required value="<?= $data_pengguana["nama_lengkap"] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?= $data_pengguana["email"] ?>">
                </div>
                <div class="form-group">
                    <label for="fakultas">Program vokasi:</label>
                    <input type="text" id="nama" name="nama" required value="<?= $data_pengguana["nama_program"] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="fakultas">Fakultas:</label>
                    <input type="text" id="nama" name="nama" required value="<?= $data_pengguana["nama_fakultas"] ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" id="nama" name="nama" required value="<?= $data_pengguana["nama_jurusan"] ?>" readonly>
                </div>
            <?php endforeach; ?>
            <div class="form-group">
                <label for="asal-sekolah">Asal Sekolah:</label>
                <input type="text" id="asal-sekolah" name="asal-sekolah" required>
            </div>
            <div class="form-group">
                <label for="asal-sekolah">Provinsi:</label>
                <input type="text" id="asal-sekolah" name="prov" required>
            </div>
            <div class="form-group">
                <label for="tingkat-pendidikan">Jurusan Sekolah:</label>
                <select id="tingkat-pendidikan" name="tingkat-pendidikan" required>
                    <option value="">Pilih Tingkat Pendidikan</option>
                    <option value="saintek">Saintek (IPA/SMK TEKNIK)</option>
                    <option value="shosum">Saintek (IPS/SMK NON TEKNIK/BAHASA)</option>

                </select>
            </div>
            <div class="form-group">
                <label for="izasah">Upload Izasah (Gambar):</label>
                <input type="file" id="izasah" name="izasah" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="skl">Upload SKL (Gambar):</label>
                <input type="file" id="skl" name="skl" accept="image/*" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Daftar">
            </div>
            </form>
            <div class="logout-btn">
                <button>Logout</button>
            </div>
    </div>
</body>

</html>