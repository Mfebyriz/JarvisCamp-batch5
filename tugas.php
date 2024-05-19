<?php
class kendaraan{
    public $nama;
    public $muatan;
    public $tujuan;


    public function __construct($nama, $muatan, $tujuan){
        $this->nama = $nama;
        $this->muatan = $muatan;
        $this->tujuan = $tujuan;
    }

    public function gerak(){
        echo "$this->nama bergerak menuju ke $this->tujuan";
    }

    public function barang(){
        echo "$this->nama membawa muatan berupa $this->muatan";
    }

}

$pesawat = new kendaraan('pesawat', 'manusia', 'indonesia');
$pesawat->gerak();
echo "<br>";
$pesawat->barang();
echo "<br>";


class senjata extends kendaraan{
    public $jenis;

    public function __construct($nama, $muatan, $tujuan, $jenis){
        parent::__construct($nama, $muatan, $tujuan);
        $this->jenis = $jenis;
    }
    public function gerak(){
        echo "$this->nama dikirim ke $this->tujuan";
    }

    public function barang(){
        echo "$this->nama  berjenis $this->jenis dan berjumlah $this->muatan unit";
    }
}

$glock = new senjata('glock', '10', 'rusia', 'pistol');
$glock->gerak();
echo "<br>";
$glock->barang();

?>