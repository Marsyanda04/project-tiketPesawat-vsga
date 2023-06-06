<?php
$Asal = ["Soekarno-Hatta (CGK)", "Husein Sastranegara (BDO)", "Abdul Rachman Saleh (MLG)", "Juanda (SUB)"];
sort($Asal); //mengurutkan array sesuai abjad A-Z
$Tujuan = ["Ngurah Rai (DPS)", "Hasanuddin (UPG)", "Inanwatan (INX)", "Sultan Iskandarmuda (BTJ)"];
sort($Tujuan);


$fileJson = 'data.json'; //file json untuk menampung/menyimpan data
$dataPesawat = array(); //array untuk menyimpan data sebelum masuk ke file json

//membaca file Json
$dataJson = file_get_contents($fileJson);
$dataPesawat = json_decode($dataJson, true); //ubah json ke array

// Input Pajak
$cgk = 50000;
$bdo = 30000;
$mlg = 40000;
$sub = 40000;
$dps = 80000;
$upg = 70000;
$inx = 90000;
$btj = 70000;

if (isset($_POST['btnSubmit'])) {
    //ambil data
    $maskapai = $_POST['maskapai'];
    $bandaraAsal = $_POST['bandaraAsal'];
    $bandaraTujuan = $_POST['bandaraTujuan'];
    $hargaTiket = $_POST['hargaTiket'];

    if ($bandaraAsal = "Soekarno-Hatta") {
        if ($bandaraTujuan == "NgurahRai") {
            $totalPajak = $cgk + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasanuddin") {
            $totalPajak = $cgk + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $cgk + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "SultanIskandarmuda") {
            $totalPajak = $cgk + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }

    if ($bandaraAsal = "Husein Sastranegara") {
        if ($bandaraTujuan == "NgurahRai") {
            $totalPajak = $bdo + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasanuddin") {
            $totalPajak = $bdo + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $bdo + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "SultanIskandarmuda") {
            $totalPajak = $bdo + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }

    if ($bandaraAsal = "Abdul Rachman Saleh") {
        if ($bandaraTujuan == "NgurahRai") {
            $totalPajak = $mlg + $dps;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Hasanuddin") {
            $totalPajak = $mlg + $upg;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "Inanwatan") {
            $totalPajak = $mlg + $inx;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        } else if ($bandaraTujuan == "SultanIskandarmuda") {
            $totalPajak = $mlg + $btj;
            $totalHarga = $hargaTiket + $totalPajak;

            $dataBaru = [$maskapai, $bandaraAsal, $bandaraTujuan, $hargaTiket, $totalPajak, $totalHarga];
        }
    }

    array_push($dataPesawat, $dataBaru); //memasukkann object data baru ke dataPesawat
    $dataToJson = json_encode($dataPesawat, JSON_PRETTY_PRINT); // mengubah array ke json
    file_put_contents("data.json", $dataToJson); //menulis ke file json

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project | Form pesawat</title>
    <link rel="stylesheet" type="text/css" href="../library//bootstrap-5.2.3-dist//css//bootstrap.css">
</head>

<body style="background-color: #ADD8E6;">
    <img src="../gambar//logo.png" alt="Logo" align="left" width="30px" height="30px"><pre style="font-size: 10px;"><b>  Global Airport 
  Indonesia
  </b></pre>
    <h1 align="center" style="color: blue;">Pendaftaran Rute Penerbangan</h1>
    <br>
    <form action="#" method="post">
        <table>
            <tr>
                <td>Maskapai</td>
                <td>: </td>
                <td><input type="text" name="maskapai" id="maskapai" placeholder="Nama Maskapai" class="form-label"></td>
            </tr>
            <tr>
                <td>Bandara Asal</td>
                <td>: </td>
                <td>
                    <select name="bandaraAsal" id="bandaraAsal" class="form-label">
                        <option value="Soekarno-Hatta">Soekarno-Hatta (CGK)</option>
                        <option value="Husein Sastranegara">Husein Sastranegara (BDO)</option>
                        <option value="Abdul Rachman Saleh">Abdul Rachman Saleh (MLG)</option>
                        <option value="Juanda">Juanda (SUB)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Bandara Tujuan</td>
                <td>: </td>
                <td>
                    <select name="bandaraTujuan" id="bandaraTujuan" class="form-label">
                        <option value="NgurahRai">Ngurah Rai (DPS)</option>
                        <option value="Hasanuddin">Hasanuddin (UPG)</option>
                        <option value="Inanwatan">Inanwatan (INX)</option>
                        <option value="SultanIskandarmuda">Sultan Iskandarmuda (BTJ)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>: </td>
                <td>
                    <input type="text" name="hargaTiket" id="hargaTiket" placeholder="Harga Tiket" class="form-label">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary" style="background-color: green; color: white; border: transparent;">
                </td>
            </tr>
        </table>
    </form>

    <hr>
    <h1 align="center" style="color: blue;">Daftar Rute Tersedia</h1>
    <table border="1" class="table table-bordered" style="border-color: black;">

        <tr>
            <th>Maskapai</th>
            <th>Asal Penerbangan</th>
            <th>Tujuan Penerbangan</th>
            <th>Harga Tiket</th>
            <th>Pajak</th>
            <th>Total Harga</th>
        </tr>

        <?php foreach ($dataPesawat as $pesawat) { ?>
            <tr>
                <td><?php echo $pesawat[0]; ?></td>
                <td><?php echo $pesawat[1];  ?></td>
                <td><?php echo $pesawat[2]; ?></td>
                <td><?php echo $pesawat[3]; ?></td>
                <td><?php echo $pesawat[4]; ?></td>
                <td><?php echo $pesawat[5]; ?></td>
            </tr>
        <?php }; ?>
    </table>
<script type="text/javascript" src="../library//bootstrap-5.2.3-dist//js//bootstrap.js"></script>
</body>

</html>