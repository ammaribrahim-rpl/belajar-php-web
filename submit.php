<?php
$judul = "Belajar PHP Web";
$body = "Hello World!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
</head>

<body>
    <h1>Data telah ditambahkan!</h1>
    <p>Nama: <?= $nama ?></p>
    <p>Email: <?= $email ?></p>
</body>

</html>