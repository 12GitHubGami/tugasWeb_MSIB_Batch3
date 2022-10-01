<?php
class Pegawai{
    //member variabel
    //variabel : nip, nama, jabatan, agama, status
    protected $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    const Mitra = 'PT Nurul Fikri Cipta Inovasi';

    //konstruktor
    public function __construct($nip, $nama,$jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }

    //set gaji
    public function setGajiPokok(){
        switch($this->jabatan){
            case 'Manager' : $this->gaji=15000000; break;
            case 'Asisten Manager' : $this->gaji=10000000; break;
            case 'Kabag' : $this->gaji=7000000; break;
            case 'Staff' : $this->gaji=4000000; break;
            default : $this->gaji=0;
        }
        return $this->gaji;
    }
    
    //set Tunjab
    public function tunJabatan(){
        $this->tunJab = $this->gaji * 0.2;

        return $this->tunJab;
    }
    public function tunKel(){

        $this->tunKeluarga = ($this->status == "Menikah")? $this->gaji*0.1 : 0;
        return $this->tunKeluarga;
    }
    public function gajiKotor(){
        $this->bruto= $this->gaji + $this->tunJab + $this->tunKeluarga;

        return $this->bruto;
    }
    public function Zakat(){
        if($this->agama =='Islam' && $this->gaji >= 6000000) $this->zakatProfesi = $this->gaji *0.025;
        else $this->zakatProfesi=0;

        return $this->zakatProfesi; 
    }
    public function gaji_Bersih(){
        $this->gaji_Bersih = $this->gajiKotor() - $this->zakatProfesi;

        return $this->gaji_Bersih;
    }
    
    //mencetak
    public function mencetak(){

        echo '<br/>NIP : '.$this->nip;
        echo '<br/>Nama Pegawai : '.$this->nama;
        echo '<br/>Jabatan : '.$this->jabatan;
        echo '<br/>Agama : '.$this->agama;
        echo '<br/>Status : '.$this->status;
        echo '<br/>Gaji: '.number_format($this->setGajiPokok(), 0, ',', '.');
        echo '<br/>Jabatan: '.number_format($this->tunJabatan(), 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: '.number_format($this->tunKel(), 0, ',', '.');
        echo '<br/>Zakat Profesi: '.number_format($this->Zakat(), 0, ',', '.');
        echo '<br/>Gaji Bersih: '.number_format($this->gaji_Bersih(), 0, ',', '.');
        echo '<hr/>';
    }
}

?>