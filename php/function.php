<?php
   if($_POST['garage'] == true){
      $garage = 'yes';
   }
   else{
      $garage = 'no';
   }
   
   
   if($_POST['room'] != 'studio'){
      $room = filter_var(trim($_POST['room']));
   }
   else{
      $room = 0;
   }

   if($_POST['serviceEl'] == true){
      $serviceEl = 'yes';
   }
   else{
      $serviceEl = 'no';
   }

   if($_POST['passengerEl'] == true){
      $passengerEl = 'yes';
   }
   else{
      $passengerEl = 'no';
   }

   if($_POST['name'] == null){
      echo "Вы ответили \"Да\", спасибо за ответ<br>";
   }
   $city = filter_var(trim($_POST['city']));
   $floor = filter_var(trim($_POST['floor']));
   $name = filter_var(trim($_POST['name']));
   $price = filter_var(trim($_POST['price']));
   $login = filter_var(trim($_POST['login']));
   $mysql = new mysqli('bkp','root','','MaxSales');
   $mysql->query("INSERT INTO `offer`(`city`,`room`,`garage`,`floor`,`service_elevator`,`passenger_elevator`,`price`,`name`) 
                              VALUES ('$city','$room','$garage','$floor','$serviceEl','$passengerEl','$price','$name')");
   $mysql->close();
   header('Location: /');
?>
    
