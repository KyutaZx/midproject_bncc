<?php
session_start();

session_destroy();

if (isset($_COOKIE['user']))
{
    $time = time();

    setcookie('user', $time + 3600);
}

header('location: ./');
exit();
?>

