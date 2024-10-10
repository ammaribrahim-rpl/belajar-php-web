<?php
$nama = htmlspecialchars($_POST ["nama"]);
$email = htmlspecialchars($_POST ["email"]);
$telp = htmlspecialchars($_POST ["telp"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUBMIT</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to bottom right, lightgreen, yellow);
            background-size: 300%;
            animation: gradient 7s infinite alternate;
        }

        /* animasi gradient */

        @keyframes gradient {
            0% {
                background-position: center;
            }

            25% {
                background-position: right;
                background-size: 250%;
            }

            50% {
                background-position: left;
                background-size: 350%;
            }

            75% {
                background-position: bottom right;
                background-size: 200%;
            }

            100% {
                background-position: center;
            }
        }
    </style>
</head>

<body>
    <h1>Data telah ditambahkan!</h1>
    <p>Nama : <?= $nama ?></p>
    <p>Email : <?= $email ?></p>
    <p>Telp : <?= $telp ?></p>
</body>

</html>