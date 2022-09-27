<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Karyawan</title>
    <style>
        body{
            
            background-color: #fffbfa;
        }
        /* mengatur warna backgroud form */
form{
    background: #c1e7ff;
}
 
/* mengatur border dan padding class form-container */
.form-container{
    border-radius: 10px;
    padding: 30px;
    margin-top: 10%;
    margin-bottom: 10%;
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="container-fluid">
    <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form class="form-container shadow p-3 mb-5" method="post">
            <h2 class="text-center font-weight-bold">Input Data Karyawan</h2>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" name='nama' class="form-control" id="nama" value="" placeholder="Nama Pegawai">
            </div>

            <div class="md-3">
                <label for="agama">Pilih Agama</label><br>
                <select class="form-select mb-4" aria-label="Default select example" name="agama" id="agama">
                    <option value="" disabled="" selected="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
            <div class="md-3">
                <label for="nama" class="form-label">Jabatan</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="manager" value="Manager">
                    <label class="form-check-label" for="manager">
                    Manager </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="asisten" value="Asisten Manager">
                    <label class="form-check-label" for="asisten">
                    Asisten Manager</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="kabag" value="Kabag">
                    <label class="form-check-label" for="kabag">
                    Kabag </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jabatan" id="staff" value="Staff">
                    <label class="form-check-label" for="staff">
                    Staff </label>
                </div>
            </div>
            <br>
            <div class="md-3">
                <label for="jabatan" class="form-label">Status</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="menikah" value="Menikah">
                    <label class="form-check-label" for="menikah">
                    Menikah </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="belumMenikah" value="Belum Menikah">
                    <label class="form-check-label" for="belumMenikah">
                    Belum Menikah</label>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="jmlAnak" class="form-label">Jumlah Anak</label>
                <input type="text" name="jmlAnak" class="form-control" id="jmlAnak" placeholder="0">
            </div>
            <div class="d-grid gap-2">
            <button class="btn btn-primary btn-block my-4" type="submit"  name='simpan' >Simpan</button>
            </div>
            
            
            </form>
        </section>
    </section>
    </section>

    <?php 
    error_reporting(0);
    //tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jumlah_anak = $_POST['jmlAnak'];
    $tombol = $_POST['simpan'];
    //Gapok
    switch($jabatan){
        case 'Manager': $gapok =20000000;break;
        case 'Asisten Manager': $gapok =15000000;break;
        case 'Kabag': $gapok =10000000;break;
        case 'Staff': $gapok =4000000;break;
        default : $gapok=0;
    }
    //tunjangan jabatan
    $tunJabatan = $gapok*0.2;
    if($status=="Belum Menikah" || $jumlah_anak=='') $jumlah_anak=0;
    //tunjangan keluarga
    if($status=="Menikah" && $jumlah_anak>=1 && $jumlah_anak<=2) $tunKeluarga=0.05*$gapok;
    else if($status=="Menikah" && $jumlah_anak>2 && $jumlah_anak<=5) $tunKeluarga=0.1*$gapok;
    else if($status=="Menikah" && $jumlah_anak>5) $tunKeluarga=0.15*$gapok;
    else $tunKeluarga=0;
    
    //Gaji Kotor
    $gajiKotor = $gapok + $tunJabatan + $tunKeluarga;
    //zakat profesi
    $zakat_profesi = ($agama=="Islam" && $gajiKotor>=6000000)? $gajiKotor*0.025 :0;
    $takehomepay = $gajiKotor - $zakat_profesi;

    if(isset($tombol))
    { ?>
    <table class="table border border-1 m-3">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Agama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Status</th>
            <th scope="col">Jumlah Anak</th>
            <th scope="col">Gaji Pokok</th>
            <th scope="col">Tunjangan Jabatan</th>
            <th scope="col">Tunjangan Keluarga</th>
            <th scope="col">Gaji Kotor</th>
            <th scope="col">Zakat Profesi</th>
            <th scope="col">Take Home Pay</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?= $nama ?> </td>
                <td> <?= $agama ?> </td>
                <td> <?= $jabatan ?> </td>
                <td> <?= $status ?> </td>
                <td> <?= $jumlah_anak ?> </td>
                <td> Rp <?= number_format($gapok,2,',' ,'.'); ?> </td>
                <td> Rp <?= number_format($tunJabatan,2,',' ,'.'); ?> </td>
                <td> Rp <?= number_format($tunKeluarga,2,',' ,'.'); ?> </td>
                <td> Rp <?= number_format($gajiKotor,2,',' ,'.'); ?> </td>
                <td> Rp <?= number_format($zakat_profesi,2,',' ,'.'); ?> </td>
                <td> Rp <?= number_format($takehomepay,2,',' ,'.'); ?> </td>
                
            </tr>
        </tbody>
    </table>
    <?php }?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
