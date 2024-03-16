<?php

class Pekerjaan
{
    private $nip;
    private $nama;
    private $alamat;
    private $notelp;
    private $tgllahir;

    // Constructor untuk inisialisasi data pekerjaan
    public function __construct($nip, $nama, $alamat, $notelp, $tgllahir)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->notelp = $notelp;
        $this->tgllahir = $tgllahir;
    }

    // Method untuk menampilkan data pekerjaan
    public function tampilkanData()
    {
        echo "<div class='pekerjaan-card'>";
        echo "<h2>Data Pekerjaan</h2>";
        echo "<p><strong>NIP:</strong> {$this->nip}</p>";
        echo "<p><strong>Nama:</strong> {$this->nama}</p>";
        echo "<p><strong>Alamat:</strong> {$this->alamat}</p>";
        echo "<p><strong>No. Telp:</strong> {$this->notelp}</p>";
        echo "<p><strong>Tanggal Lahir:</strong> {$this->tgllahir}</p>";
        echo "</div>";
    }

    // Method untuk mengubah data pekerjaan
    public function ubahData($nip, $nama, $alamat, $notelp, $tgllahir)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->notelp = $notelp;
        $this->tgllahir = $tgllahir;
    }
}

?>
