<?php
require_once 'bangunDatar.php';
class PersegiPanjang extends bangunDatar{

    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        echo'Persegi Panjang';
    }
    public function luasBidang(){
        $this->luasPersegiPanjang = $this->panjang * $this->lebar;

        return $this->luasPersegiPanjang;
        echo $this->luasPersegiPanjang;
    }
    public function kelilingBidang(){
        $this->kelilingPersegiPanjang = 2 *($this->panjang + $this->lebar);

        return $this->kelilingPersegiPanjang;
        echo $this->kelilingPersegiPanjang;
    }
    public function keterangan(){
        echo 'Panjang : '.$this->panjang;
        echo '<br/>Lebar : '.$this->lebar;
    }
}

?>