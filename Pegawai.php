<?php

class Pegawai
{
    public $nip;
    public $nama;
    public $alamat;
    public $notelp;
    public $tgllahir;

    public function __construct($nip, $nama, $alamat, $notelp, $tgllahir)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->notelp = $notelp;
        $this->tgllahir = $tgllahir;
    }

    public function tampilkanData()
    {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>";
        echo "<th>NIP</th>";
        echo "<th>Nama</th>";
        echo "<th>Alamat</th>";
        echo "<th>No. Telp</th>";
        echo "<th>Tanggal Lahir</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>{$this->nip}</td>";
        echo "<td>{$this->nama}</td>";
        echo "<td>{$this->alamat}</td>";
        echo "<td>{$this->notelp}</td>";
        echo "<td>{$this->tgllahir}</td>";
        echo "</tr>";
        echo "</table>";
    }

    public function ubahData($nip, $nama, $alamat, $notelp, $tgllahir)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->notelp = $notelp;
        $this->tgllahir = $tgllahir;
    }
}
