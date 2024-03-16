<?php
// Include the Pegawai.php file
include('Pegawai.php');

// Instantiate Pegawai with some default values
$pegawai = new Pegawai("1234567890", "John Doe", "Jl. Sudirman", "123456789", "2000-01-01");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a Pegawai object to store the submitted data
    $pegawai->nip = $_POST["nip"];
    $pegawai->nama = $_POST["nama"];
    $pegawai->alamat = $_POST["alamat"];
    $pegawai->notelp = $_POST["notelp"];
    $pegawai->tgllahir = $_POST["tgllahir"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tampilan Data Pegawai</title>
    <style>
        table {
            border-collapse: collapse;
            width: 500px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Tampilan Data Pegawai</h1>
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
                <td><input type="submit" value="Tampilkan"></td>
            </tr>
        </table>
    </form>
    <div>
        NIP: <?php echo $pegawai->nip; ?><br>
        Nama: <?php echo $pegawai->nama; ?><br>
        Alamat: <?php echo $pegawai->alamat; ?><br>
        No. Telp: <?php echo $pegawai->notelp; ?><br>
        Tanggal Lahir: <?php echo $pegawai->tgllahir; ?><br>
    </div>
</body>
</html>
