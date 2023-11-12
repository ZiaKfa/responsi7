<?php
    require_once("functions.php");
    print_r($_SESSION['userdata']);
    if(isset($_POST["submit"])) {
        if(login($_POST["username"], $_POST["password"])) {
            echo'<script>
                    alert("Login berhasil!");
                    window.location.href="index.php";
                </script>';
            exit;
        } else {
            echo "<script>
                    alert('Login gagal!');
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Masukkan Data Login</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan Username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan Password">
        <br>
        <button type="submit" name="submit">Login</button>
        <br>
        <p>Belum punya akun?
            <a href="register.php">klik disini</a>
        </p>
    </form>
</body>
</html>