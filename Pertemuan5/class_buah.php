<?php
// buat class buah
class Buah{
    // buat property
    public $name;
    protected $color;
    private $berat;

    // buat method
    public function set_color($c){
        return $this->color = $c;
    }
    public function set_berat($b){
        return $this->berat = $b;
    }
}
// buat object
$mangga = new buah();
echo $mangga -> name = 'Mangga';
echo "<br/>";
//echo $mangga -> color = 'Hijau';
echo $mangga -> set_color('Hijau');
echo "<br/>";
//echo $mangga -> berat = '300KG';
echo $mangga -> set_berat('300 KG')
?>