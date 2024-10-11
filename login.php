<?php

if(isset($_POST["submit"])){
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
        header("Location: admin.php");
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Admin</h1>

    <form action="" method="post">
        <input type="text" name="username" placeholder="Masukkan Username">
        <input type="password" name="password" placeholder="********">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>