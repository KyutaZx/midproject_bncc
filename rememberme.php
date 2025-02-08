<?php

$user = "admin";
$pass = md5('admin');

$name = $_POST['name'];
$password = md5($_POST['password']);

if ($user == $username && $pass == $password)
{
    echo"Login berhasil";
}else{
    echo "login gagal";
}
?>