<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>

<?php
require_once 'lingkaran.php';
require_once 'persegiPanjang.php';
require_once 'segitiga.php';

$b1= new Lingkaran(21);
$b2= new Segitiga(6,9);
$b3= new PersegiPanjang(20,8);
$b4= new Lingkaran(14);
$b5= new Segitiga(3,4);
$b6= new Lingkaran(9);
$b7= new PersegiPanjang(15,8);

$bangun = [$b1,$b2,$b3,$b4,$b5,$b6,$b7];
$ar_judul =['No','Nama Bidang','Keterangan','Luas Bidang','Keliling Bidang'];

?>
<h3 class="text-center">Bangun Datar</h3>
    <div class="container">
<!-- Tabel of content -->
<table class="table table-hover border">
        <thead class="table-primary">
            <tr>
                <!-- Looping Array Judul dari ar_judul -->
                <?php foreach($ar_judul as $judul){?>
                <th scope="col"><?= $judul?></th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($bangun as $bgn){
                
                ?>
            <tr>
            <td><?=$no++ ?></td>
            <td><?=$bgn->namaBidang() ?></td>
            <td><?=$bgn->keterangan() ?></td>
            <td><?=$bgn->luasBidang() ?></td>
            <td><?=$bgn->kelilingBidang() ?></td>
            </tr>
                <?php }?>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
