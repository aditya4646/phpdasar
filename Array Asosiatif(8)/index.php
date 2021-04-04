<?php 
    // membuat array di PHP
    $vapor = [
        [
            'merk' => 'Vgod',
            'tipe' => '4s',
            'warna' => 'silver',
            'gambar' => '1.jpeg'
        ],
        [
            'merk' => 'wismac',
            'tipe' => '12s',
            'warna' => 'black',
            'gambar' => '2.jpg'
        ],
        [
            'merk' => 'dragonic',
            'tipe' => '14x',
            'warna' => 'red',
            'gambar' => '3.jpg'
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <style>
        .kotak{
            width: 100px;
            height: 100px;
            margin: 3px;
            background-color: red;
            text-align: center;
            line-height: 100px;
            float : left;
            list-style: none;
        }
    </style>
</head>
<body>
    <h1>Menampilkan Array asosiatif</h1>
    <ul>
    <?php foreach ($vapor as $e) : ?>
        <li>
            <img src="img/<?= $e['gambar'] ?>">
        </li>
        <li>Merk: <?= $e['merk'] ?> </li>
        <li>Tipe: <?= $e['tipe'] ?> </li>
        <li>Warna: <?= $e['warna'] ?> </li>

        <br>
    <?php endforeach; ?>
    </ul>
</body>
</html>