<?php
include_once('class_bmipasien.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data BMI Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div style="text-align: center">
    <h1><b>Gambar Index BMI</b></h1>
        <img src="bmi_index.jpg" alt="" width="70%" height="25%">
    </div>
    <br>
    <br>
<div class="col-md-6 mx-auto">
    <header><h2>Data BMI Pasien</h2></header><br>
    <table class="table table-strip">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Berat (Kg)</th>
                <th>Tinggi (cm)</th>
                <th>BMI</th>
                <th>Hasil</th>
            </tr>
        <?php
            $index = 1; foreach ($_SESSION['result'] as $value) : 
        ?>
            <tr>
                <td><?= $index++ ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['jeniskelamin'] ?></td>
                <td><?= $value['umur'] ?></td>
                <td><?= $value['berat'] ?></td>
                <td><?= $value['tinggi'] ?></td>
                <td><?= $value['bmi'] ?></td>
                <td><?= $value['hasil'] ?></td>
            </tr>

        <?php
        endforeach 
        ?>

    </table>
  </div>
</body>
</html>