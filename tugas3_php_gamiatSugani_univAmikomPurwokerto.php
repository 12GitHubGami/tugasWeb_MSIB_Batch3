<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
     <?php 
     //Array Scalar Daftar Nilai Mahasiswa
     $m1 = ['nim'=>'19SB1003','nama'=>'Akbar Firmansyah','nilai'=>80];
     $m2 = ['nim'=>'19SB1001','nama'=>'Budi Satrio','nilai'=>60];
     $m3 = ['nim'=>'19SB1002','nama'=>'Eka Riyanti','nilai'=>84];
     $m4 = ['nim'=>'19SB1004','nama'=>'Dwiyanti','nilai'=>70];
     $m5 = ['nim'=>'19SB1005','nama'=>'Sekar Arum','nilai'=>50];
     $m6 = ['nim'=>'19SB1008','nama'=>'Fitri Nurul Arifah','nilai'=>67];
     $m7 = ['nim'=>'19SB1007','nama'=>'Putra Nugraha','nilai'=>98];
     $m8 = ['nim'=>'19SA1006','nama'=>'Dewa Eka Prayoga','nilai'=>75];
     $m9 = ['nim'=>'19SA1005','nama'=>'Sujatmiko','nilai'=>55];
     $m10 = ['nim'=>'19SA1002','nama'=>'Ikhsan','nilai'=>68];

     //Array Judul
    $ar_judul =['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

    //aggregate function in array
    $jumlahMahasiswa = count($mahasiswa);
    $jmlNilai = array_column($mahasiswa,'nilai');
    $totalNilai = array_sum($jmlNilai);
    $maxNilai = max($jmlNilai);
    $minNilai = min($jmlNilai);
    $rata2Nilai = $totalNilai / $jumlahMahasiswa;
    //keterangan
    $keterangan = [
        'Nilai Tertinggi'=>$maxNilai,
        'Nilai Terendah'=>$minNilai,
        'Nilai Rata-rata'=>$rata2Nilai,
        'Jumlah Mahasiswa'=>$jumlahMahasiswa
    ];
     ?>

    <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
    <div class="container">
  <!-- Content here -->

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
            foreach($mahasiswa as $mhs){
                //keterangan
                $ket =($mhs['nilai']>=60) ?'Lulus' :'Tidak Lulus';
                if($mhs['nilai']<=100 && $mhs['nilai']>=85) $grade='A';
                else if($mhs['nilai']<85 && $mhs['nilai']>=75) $grade='B';
                else if($mhs['nilai']<75 && $mhs['nilai']>=60) $grade='C';
                else if($mhs['nilai']<60 && $mhs['nilai']>=40) $grade='D';
                else if($mhs['nilai']<40 && $mhs['nilai']>=0) $grade='E';
                else $grade='';

                //switch case
                switch($grade) {
                    case 'A' : $predikat='Memuaskan';break;
                    case 'B' : $predikat='Bagus';break;
                    case 'C' : $predikat='Cukup';break;
                    case 'D' : $predikat='Kurang';break;
                    case 'E' : $predikat='Buruk';break;
                    default :$predikat='';
                }
                ?>
            <tr>
            <td><?=$no++ ?></td>
            <td><?=$mhs['nim'] ?></td>
            <td><?=$mhs['nama'] ?></td>
            <td><?=$mhs['nilai'] ?></td>
            <td><?=$ket ?></td>
            <td><?=$grade ?></td>
            <td><?=$predikat ?></td>
            </tr>
                <?php }?>
        </tbody>
        <tfoot class="table-group-divider table-info">
            <?php foreach ($keterangan as $sub => $hasil){
                ?>
                <tr>
                    <th colspan="3"><?=$sub ?></th>
                    <th colspan="4"><?=$hasil ?></th>
                </tr>

            <?php } ?>
        </tfoot>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>