<?php

    session_start();
    require_once '../config/connect.php';

    $fill_name = $_POST['fill_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        die('Пароли не совпадают');
    }