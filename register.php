<?php
    require_once("functions.php");
    print_r($_SESSION['userdata']);
    if(isset($_POST['submit'])) {
        if(register($_POST['username'], $_POST['password'])) {
            echo'<script>
                    alert("Registrasi berhasil!");
                    window.location.href="login.php";
                </script>';
            exit;
        } else {
            echo "<script>
                    alert('Registrasi gagal!');
                    window.location.href='register.php';
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Masukkan Data User</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Masukkan Username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Masukkan Password">
        <br>
        <button type="submit" name="submit">Register</button>
        <br>
        <p>Sudah punya akun?
            <a href="login.php">klik disini</a>
        </p>
    </form>
</body>
</html>