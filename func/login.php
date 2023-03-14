<?php
function login($link, $login, $password) {
    $query = "SELECT id FROM user WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($link, $query);
    $amount = mysqli_num_rows($result);
    if($amount > 0)
    { 
        session_start();
        $_SESSION['user'] = $login;
        header("Location:/admin.php");
    }
    else
        header("Location:/login.php");
}
?>