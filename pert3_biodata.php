<?php
// TUGAS 1: Biodata diri dalam variabel PHP
$nama  = "Nabillah Puja Kusuma";
$npm   = "202433500409";
$kelas = "R4H";

// TUGAS 2: Konstanta untuk kota domisili dan tahun lahir
define('KOTA_DOMISILI', 'BOGOR');
define('TAHUN_LAHIR', 2006);

// TUGAS 3: Hitung BMI = BB / TB
$berat_badan = 68;   
$tinggi_cm   = 155;  
$tinggi_m    = $tinggi_cm / 100;
$bmi         = $berat_badan / ($tinggi_m * $tinggi_m);
$bmi_bulat   = round($bmi, 2);

// Kategori BMI
if ($bmi < 18.5) {
    $kategori = "kurang";
} elseif ($bmi < 25.0) {
    $kategori = "normal";
} elseif ($bmi < 30.0) {
    $kategori = "kelebihan";
} else {
    $kategori = "obesitas";
}

$tahun_sekarang = date('Y');
$usia = $tahun_sekarang - TAHUN_LAHIR;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata - <?= $nama ?></title>
    <style>
        /* TUGAS 4: Format HTML */
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            margin: 40px;
        }

        h2 {
            color: #1a3c5e;
            border-bottom: 2px solid #1a3c5e;
            padding-bottom: 6px;
        }

        table {
            width: 400px;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid white; 
        }

        td {
            padding: 8px;
            border-bottom: 1px solid #ccc;
            font-size: 15px;
            text-align: left;
        }

        .hasil-bmi {
            font-size: 20px;
            font-weight: bold;
            color: #1a3c5e;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Diri</h2>
    <table>
        <tr><td>Nama</td><td><?= $nama ?></td></tr>
        <tr><td>NPM</td><td><?= $npm ?></td></tr>
        <tr><td>Kelas</td><td><?= $kelas ?></td></tr>
        <tr><td>Usia</td><td><?= $usia ?> tahun</td></tr>
    </table>

    <h2>Data Konstan</h2>
    <table>
        <tr><td>Kota Domisili</td><td><?= KOTA_DOMISILI ?></td></tr>
        <tr><td>Tahun Lahir</td><td><?= TAHUN_LAHIR ?></td></tr>
    </table>

    <h2>Hasil BMI</h2>
    <table>
        <tr><td>Berat Badan</td><td><?= $berat_badan ?> kg</td></tr>
        <tr><td>Tinggi Badan</td><td><?= $tinggi_cm ?> cm</td></tr>
    </table>
    <p class="hasil-bmi">BMI : <?= $bmi_bulat ?> [ <?= $kategori ?> ] </p>

</body>
</html>