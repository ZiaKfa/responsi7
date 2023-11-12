<?php
    require_once("functions.php");
    $tempuser = $_SESSION['userdata'];
    $timeout = 10;
    if(isset($_SESSION["login_time"])) {
        if((time() - $_SESSION["login_time"]) > $timeout) {
            session_unset();
            $_SESSION["userdata"] = $tempuser;
            echo "<script>
                    alert('Session timeout!');
                    window.location.href='login.php';
                </script>";
            exit;
        }
    }
    $_SESSION["login_time"] = time();
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }
    $username = $_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $username ?></h1>
    <a href="logout.php">Logout</a>
</body>
<script>
function redirectAfterTimeout(timeout) {
    setTimeout(function() {
        window.location.href = 'login.php';
    }, timeout);
}

redirectAfterTimeout(<?php echo $timeout * 1000; ?>);
</script>
</html>