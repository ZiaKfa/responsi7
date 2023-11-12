<?php
    session_start();
    $userdata = [];

    function register($username, $password) {
        global $userdata;
        $userdata[$username] = $password;
        if (isset($_SESSION['userdata'])) {
            $_SESSION['userdata'] = array_merge($_SESSION['userdata'], $userdata);
        } else {
            $_SESSION['userdata'] = $userdata;
        }
        return true;
    }

    function login($username, $password) {
        if (isset($_SESSION['userdata'][$username])) {
            if ($password == $_SESSION['userdata'][$username]) {
                $_SESSION['username'] = $username;
                $_SESSION['login_time'] = time();
                return true;
            }
        }
        return false;
    }
?>