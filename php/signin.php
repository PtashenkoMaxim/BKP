<?php
session_start();
 $mysql = new mysqli('bkp','root','','MaxSales');
 if(!$mysql){
    die('error connect');
 }
 $acces = 1;
 $k=[];
 $loginin = filter_var(trim($_POST['loginin']));
 $passwordin = filter_var(trim($_POST['passwordin']));
 $alllogin = $mysql->query("SELECT login FROM `users` WHERE password = '$passwordin' AND login = '$loginin';");
 $alllogin = mysqli_fetch_all($alllogin);

for($i = 0; $i <count($alllogin);$i++){
        $k[$i]=$alllogin[$i][0];
 }
if ((empty($k))){
   $_SESSION['passerror'] = 'Неправильный логин или пароль';
            header('Location: /php/register.php');
}else{
   $_SESSION['signinacces'] = 'Вы успешно авторизованы';
   $_SESSION['name'] = $loginin;
   header('Location: /');
}
?>