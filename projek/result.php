<?php

include_once('class_bmipasien.php');
if(isset($_POST['send'])) {
    $bmi->nama = $_POST['nama'] ?? null;
    $bmi->umur = (int)$_POST['umur'] ?? null;
    $bmi->jeniskelamin = $_POST['gender'] ?? null;
    $bmi->berat = (float)$_POST['berat'] ?? null;
    $bmi->tinggi = (float)$_POST['tinggi'] ?? null;
    $bmi->hasilbmi();
    $_SESSION['result'][] = [
        'nama' => $bmi->nama,
        'umur' => $bmi->umur,
        'jeniskelamin' =>$bmi->jeniskelamin,
        'berat' => $bmi->berat,
        'tinggi' => $bmi->tinggi,
        'bmi' => $bmi->hasilbmi()[0],
        'hasil' => $bmi->hasilbmi()[1],
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Akhir Pengukuran</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <form action="index1.php" method="POST">
  <div class="mt-5 col-md-4 border p-3 mx-auto">
    <header class="text-center"><h2>Hasil Evaluasi BMI</h2></header>
    <table class="w-100">

    <!-- Nama -->
        <tr>
            <td>Nama</td>
            <td width="10">:</td>
            <td><?= $bmi->nama ?? '' ?> (<?= $bmi->jeniskelamin ?? '' ?>)</td>
        </tr>

      <!-- Berat/Tinggi -->
        <tr>
            <td>Berat/Tinggi Badan</td>
            <td>:</td>
            <td><?= $bmi->berat.'kg' ?? '' ?>/<?= $bmi->tinggi.'cm' ?? '' ?></td>
        </tr>

      <!-- Umur -->
        <tr>
            <td>Umur</td>
            <td>:</td>
            <td><?= $bmi->umur.' Tahun' ?? '' ?></td>
        </tr>

      <!-- BMI -->
        <tr>
            <td>BMI</td>
            <td>:</td>
            <td><?= $bmi->hasilBMI()[0] ?? '' ?></td>
        </tr>

      <!-- Result -->
        <tr>
            <td>Hasil</td>
            <td>:</td>
            <td><?= $bmi->hasilBMI()[1] ?? '' ?></td>
        </tr>

    </table>
  </div>
</form>
<img src="bmi_index.png" alt="">
</body>
</html>