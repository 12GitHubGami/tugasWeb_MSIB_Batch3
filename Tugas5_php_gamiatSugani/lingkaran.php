<?php
require_once 'bangunDatar.php';
class Lingkaran extends bangunDatar{

    public $jari2;

    public function __construct($jari2)
    {
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        echo'Lingkaran';
    }
    public function luasBidang(){
        $this->luaslingkaran =3.14* $this->jari2 * $this->jari2;

        return $this->luaslingkaran;
        echo $this->luaslingkaran;
    }
    public function kelilingBidang(){
        $this->kelilinglingkaran = 2 * 3.14 *$this->jari2;

        return $this->kelilinglingkaran;
        echo $this->kelilinglingkaran;
    }
    public function keterangan(){
        echo 'Jari-jari : '.$this->jari2;
    }
}

?>