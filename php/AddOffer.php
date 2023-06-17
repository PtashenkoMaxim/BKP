<?php
   session_start();
   
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

   if($_POST['ground_parking'] == true){
      $ground_parking = 'yes';
   }
   else{
      $ground_parking = 'no';
   }

   if($_POST['underground_parking'] == true){
      $underground_parking = 'yes';
   }
   else{
      $underground_parking = 'no';
   }

   if($_POST['passengerEl'] == true){
      $passengerEl = 'yes';
   }
   else{
      $passengerEl = 'no';
   }
$creator = $_SESSION['name'];
   $city = filter_var(trim($_POST['city']));
   $floor = filter_var(trim($_POST['floor']));
   $name = filter_var(trim($_POST['name']));
   $price = filter_var(trim($_POST['price']));
   $login = filter_var(trim($_POST['login']));
   $description = filter_var(trim($_POST['description']));
   $mysql = new mysqli('bkp','root','','MaxSales');
   $mysql->query("INSERT INTO `offers`(`city`,`room`,`garage`,`floor`,`service_elevator`,`passenger_elevator`,`price`,`name`,`description`,`ground_parking`,`underground_parking`,`creator`) 
                              VALUES ('$city','$room','$garage','$floor','$serviceEl','$passengerEl','$price','$name','$description','$ground_parking','$underground_parking','$creator')");
   $mysql->close();
   header('Location: /');
?>
    
