<?php
   $gorod = filter_var(trim($_POST['gorod']));
   $room = filter_var(trim($_POST['room']));
   $floor = filter_var(trim($_POST['floor']));
   $login = filter_var(trim($_POST['login']));
   $mysql = new mysqli('bkp','root','','MaxSales');
   $mysql->query("INSERT INTO `offer`(`city`,`room`,`floor`) VALUES ('$gorod','$room','$floor')");
   $mysql->close();
   header('Location: /');
?>
    
