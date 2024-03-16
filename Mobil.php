<?php
class Mobil{
    var $Warna;
    var $Merk;
    var $Harga;
    function __construct(){
        $this->Warna="Biru";
        $this->Merek="Avanza";
        $this->Harga="180000000";
}
    function gantiWarna($warnaBaru){
        $this->Warna=$warnaBaru;  
}
    function tampilWarna(){
        echo "Warna Mobilnya : " .$this->Warna;
}     
}
    $a = New Mobil();
    $b = New Mobil();
    echo "<b>Mobil Pertama</b></br>";
    $a->tampilWarna();
    echo "<br><br><b>Mobil Pertama Ganti Warna </b></br>";
    $a->gantiWarna("Merahhh");
    $a->tampilWarna ();
    //
    echo "</br></br><b>Mobil Kedua</b></br>";
    $b->gantiWarna("Hijauuu");
    $b->tampilWarna ();
?>