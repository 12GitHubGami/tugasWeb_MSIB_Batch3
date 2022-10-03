<?php
require_once 'bangunDatar.php';
class Segitiga extends bangunDatar{

    public $alas;
    public $tinggi;

    public function sisiMiring(){
        $this->sisimiring=sqrt(pow($this->alas,2)+pow($this->tinggi,2));
        return $this->sisimiring;
    }
    
    public function __construct($alas,$tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo'Segitiga Siku-siku';
    }
    public function luasBidang(){
        $this->luasSegitiga = 0.5*$this->alas * $this->tinggi;

        
        echo $this->luasSegitiga;
    }
    public function kelilingBidang(){
        
        $this->kelilingSegitiga = $this->alas + $this->tinggi + $this->sisiMiring();

        echo $this->kelilingSegitiga;

    }
    public function keterangan(){
        echo 'Alas : '.$this->alas;
        echo '<br/>Tinggi : '.$this->tinggi;
        echo '<br/>Sisi Miring : '.$this->sisiMiring();
    }
}

?>