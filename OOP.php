<?php
class Buah{
    public $nama;
    public $warna;
    public $rasa;

    public function __construct($nama, $warna, $rasa)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->rasa = $rasa;
    }
    public function jatuh()
    {
        echo "$this->nama jatuh \n";
    }
}

class biji extends Buah {
    public $biji;

    public function __construct($nama, $warna, $rasa, $biji){
        parent::__construct($nama, $warna, $rasa);
        $this->biji = $biji;
    }
    public function jatuh(){
        echo "$this->nama jatuh dari pohon \n";
    }
}

$jeruk = new biji('jeruk', 'orange', 'asem', 10);
$jeruk->jatuh();
echo "<br>";

$apel = new Buah('apel', 'merah', 'manis');
$apel->jatuh();
echo "<br>";

class Mobil {
    public $warna;
    public $merek;
    public static $jumlah_mobil;

    public function __construct($warna, $merek)
    {
        self::$jumlah_mobil++;
        $this->warna = $warna;
        $this->merek = $merek;
    }
    public function berjalan(){
        echo "mobil $this->merek berjalan \n";
    }
    public function mengerem(){
        echo "mobil $this->merek mengerem \n";
    }
}

$toyota = new Mobil('silver', 'toyota');
$toyota->berjalan();
echo "<br>";
$toyota->mengerem();
echo "<br>";
echo "Mobil $toyota->merek berwarna $toyota->warna";
echo "<br>";
echo Mobil::$jumlah_mobil;


echo "\n";
?>