<?php
   $login = filter_var(trim($_POST['login']));
   $mysql = new mysqli('bkp','root','','maxsales');
   $mysql->query("INSERT INTO `dbsales` (`name`) VALUES ('$login')");
   $mysql->close();
   header('Location: /');
?>
    
