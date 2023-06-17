<?php
    $login = filter_var(trim($_POST['login']));
    $number = filter_var(trim($_POST['number']));
    $password = filter_var(trim($_POST['password']));
    $mysql = new mysqli('bkp','root','','MaxSales');
    $mysql->query("INSERT INTO `users`(`login`,`number`,`password`) 
                               VALUES ('$login','$number','$password')");
    $mysql->close();
    header('Location: /php/register.php');
?>