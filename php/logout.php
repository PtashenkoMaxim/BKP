<?php
session_start();
$_SESSION['name'] = 'null';
header('Location: /');
?>