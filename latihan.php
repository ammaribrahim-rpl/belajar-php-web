<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]; //array indexing
$numbers2 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$students = [
    ["nama" => "Ammar", "NISN" => "12345"],
    ["nama" => "Joko", "NISN" => "54321"],
    ["nama" => "Asep", "NISN" => "34521"],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .square {
            padding: 10px;
            background-color: red;
            float: left;
            margin-right: 5px;
            color: white;
        }

        .clear {
            clear: both;
        }

        .kotak {
            padding: 10px;
            background-color: orange;
            float: left;
            color: white;
            text-align: center;
            line-height: 5px;
            margin-right: 5px;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <?php foreach ($numbers as $angka) : ?>
        <div class="square"><?= $angka ?></div>
    <?php endforeach ?>
    <div class="clear"></div>

    <br>
    <?php foreach ($numbers2 as $angka) : ?>
        <?php foreach ($angka as $item) : ?>
            <div class="kotak"><?= $item ?></div>
        <?php endforeach ?>
    <?php endforeach ?>

    <hr />
    <h1>Daftar Siswa</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $siswa) : ?>
                <tr>
                    <td><?= $siswa["nama"] ?></td>
                    <td><?= $siswa["NISN"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>