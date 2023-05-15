<?php
 $mysql = new mysqli('bkp','root','','MaxSales');
 if(!$mysql){
    die('error connect');
 }
 $product = $mysql->query("SELECT `id` FROM `offer` WHERE floor=5");
 $product = mysqli_fetch_all($product);
 for($i = 0; $i <count($product);$i++){
        $k[$i]=$product[$i][0];
 }

 for($i = 0; $i <count($product);$i++){
    if($k[$i]==47-$i){
    echo('kakaska');
    }
}
print_r($k[1]);

?>