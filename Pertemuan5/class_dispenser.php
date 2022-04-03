<?php
//buat class
class Dispenser{
    //Buat Property
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    //Buat Method

    public function set_volume($v){
        return $this->volume = $v;
    }
    public function set_harga($h){
        return $this->hargasegelas = $h;
    }
    public function set_volge($vg){
        return $this->volumegelas = $vg;
    }
}
//buat object
$jumlah = new semua();
echo $jumlah -> set_volume('Volume galon nya 1000 ml');
echo "<br/>";
echo $jumlah -> set_harga('Harga segelasnya adalah 3000 Rupiah');
echo "<br/>";
echo $jumlah -> set_volge('Andi beli air 1 gelas volume nya 250 ml');
echo "<br/>";
echo $jumlah -> namaminuman = 'Hasil volume sekarang adalah 750 ml';
echo "<br/>";
?>
