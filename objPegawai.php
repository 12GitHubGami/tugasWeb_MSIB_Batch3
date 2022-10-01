<?php 
require 'tugas4_Pegawai.php';
$gami = new Pegawai('UX001','Gamiat','Manager','Islam','Menikah');
$resti = new Pegawai('UX002','Resti','Asisten Manager','Kristen','Menikah');
$subagyo = new Pegawai('UX003','Subagyo','Kabag','Islam','Menikah');
$restu = new Pegawai('UX004','Restu','Staff','Islam','Menikah');
$erna = new Pegawai('PM001','Erna Suyanti','Manager','Islam','Menikah');
$dewi = new Pegawai('PM002','Dewi Mulyani','Asisten Manager','Hindu','Belum Menikah');
$akbar = new Pegawai('PM003','Akbar','Kabag','Kristen','Menikah');
$toni = new Pegawai('PM004','Toni','Staff','Budha','Belum Menikah');
$neni = new Pegawai('JS001','Neni','Manager','Kristen','Menikah');
$sulistio = new Pegawai('JS002','Sulistio','Asisten Manager','Islam','Menikah');
$susanti = new Pegawai('JS003','Susanti','Kabag','Hindu','Belum Menikah');
$suyanto = new Pegawai('JS004','Suyanto','Staff','Islam','Menikah');
$sujarwo = new Pegawai('BE001','Sujarwo','Manager','Budha','Menikah');
$sujatmiko = new Pegawai('BE002','Sujarmiko','Asisten Manager','Kristen','Belum Menikah');
$suryani = new Pegawai('BE003','Suryani','Kabag','Islam','Menikah');
$sukarni = new Pegawai('BE004','Sukarni','Staff','Islam','Menikah');

echo '<h3 align="center">'.Pegawai::Mitra.'</h3>';
$gami->mencetak();
$resti->mencetak();
$subagyo->mencetak();
$restu->mencetak();
$erna->mencetak();
$dewi->mencetak();
$akbar->mencetak();
$toni->mencetak();
$neni->mencetak();
$sulistio->mencetak();
$susanti->mencetak();
$suyanto->mencetak();
$sujarwo->mencetak();
$sujatmiko->mencetak();
$suryani->mencetak();
$sukarni->mencetak();

?>