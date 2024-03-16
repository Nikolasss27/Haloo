<?php

class Pegawai {
    // Properties
    private $NIP;
    private $alamat;
    private $notelp;
    private $tgllahir;

    // Constructor
    public function __construct($NIP, $alamat, $notelp, $tgllahir) {
        $this->NIP = $NIP;
        $this->alamat = $alamat;
        $this->notelp = $notelp;
        $this->tgllahir = $tgllahir;
    }

    // Method untuk menampilkan data pegawai
    public function tampilkanData() {
        echo "NIP: {$this->NIP}<br>";
        echo "Alamat: {$this->alamat}<br>";
        echo "No. Telepon: {$this->notelp}<br>";
        echo "Tanggal Lahir: {$this->tgllahir}<br>";
    }

    // Method untuk mengubah data pegawai
    public function ubahData($alamatBaru, $notelpBaru, $tgllahirBaru) {
        $this->alamat = $alamatBaru;
        $this->notelp = $notelpBaru;
        $this->tgllahir = $tgllahirBaru;
        echo "Data pegawai berhasil diubah!<br>";
    }
}

// Contoh penggunaan
$pegawai1 = new Pegawai('12345', 'Jl. Contoh 123', '08123456789', '1990-01-01');
$pegawai1->tampilkanData();

// Mengubah data pegawai
$pegawai1->ubahData('Jl. Baru 456', '087654321', '1995-05-05');

// Menampilkan data setelah diubah
$pegawai1->tampilkanData();

?>
