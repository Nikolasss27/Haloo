<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tampilan Data Pegawai</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .pegawai-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
        }

        .pegawai-card h2 {
            color: #333;
        }

        .pegawai-card p {
            margin: 0;
            padding: 5px 0;
            color: #666;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"], input[type="date"], input[type="submit"] {
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    // Include the Pegawai.php file
    include('Pegawai.php');

    // Instantiate Pegawai with some default values
    $pegawai = new Pegawai("1234567890", "John Doe", "Jl. Sudirman", "123456789", "2000-01-01");

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Assuming you have a Pegawai object to store the submitted data
        $pegawai->ubahData(
            $_POST["nip"],
            $_POST["nama"],
            $_POST["alamat"],
            $_POST["notelp"],
            $_POST["tgllahir"]
        );
    }
    ?>
    <div class="pegawai-card">
        <h2>Data Pegawai</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>NIP</td>
                    <td><input type="text" name="nip" value="<?php echo $pegawai->nip; ?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $pegawai->nama; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $pegawai->alamat; ?>"></td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td><input type="text" name="notelp" value="<?php echo $pegawai->notelp; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tgllahir" value="<?php echo $pegawai->tgllahir; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Ubah Data"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    // Menampilkan data pegawai
    $pegawai->tampilkanData();
    ?>
</body>
</html>
