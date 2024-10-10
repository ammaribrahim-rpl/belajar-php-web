<?php
echo "Belajar aja";
$judul = "Belajar PHP Web";
$body = "Form Data Diri";

$nameError = $emailError = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $nameError = "Nama harus diisi";
    } else {
        $name = $_POST["nama"];
    }

    if (empty($_POST["email"])) {
        $emailError = "Email harus diisi";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["telp"])) {
        $telpError = "Nomor harus diisi";
    } else {
        $telp = $_POST["telp"];
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul ?></title>
    <style>
        .error {
            color: red
        }
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
    <h1>
        <?= $body ?>
    </h1>
    <!-- GET -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">

        <input type="text" name="nama" placeholder="Masukkan Nama" />
        <span class="error">*<?= $nameError ?></span>

        <input type="email" name="email" placeholder="Masukkan Email" />
        <span class="error">*<?= $emailError ?></span>

        <input type="number" name="telp" placeholder="Masukkan Nomor" />
        <span class="error">*<?= $telpError ?></span>
        
        <button type="submit">Submit</button>
    </form>

    <h1><?= $name ?? "" ?></h1>
    <h1><?= $email ?? "" ?></h1>
    <h1><?= $telp ?? "" ?></h1>

</body>

</html>