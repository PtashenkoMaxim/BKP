<?php
session_start();
?>
<head>
        <title> MaxSales</title>
        <script defer src="/js/functionsx.js"></script>
        <link rel="stylesheet" href="/css/indexfxx.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <html lang="en">

    <body>
    <h1 align="center">MaxSales</h1>
            <form  class="signin" action="/php/signin.php" method="post">
                <input   required type="text"  name="loginin" id="loginin" placeholder="Введите логин"><br>
                <input   required type="password"  name="passwordin" id="passwordin" placeholder="Введите пароль"><br>
                <button >Войти</button><br>
                
            </form>

    <?php
        if($_SESSION['passerror']){
            echo '<p class = "msg"> ' . $_SESSION['passerror'] . ' </p>';
        }
        unset($_SESSION['passerror']);
    ?>

            <button class="test" id="modalopen">У вас нет аккаунта?-зарагестрируйтесь</button>
    <div class="modalnik" id="mymodal">
                <div class="modalview">
                    <form action="/php/signup.php" method="post">
                    <input class="login"   required type="text"  name="login" id="login" placeholder="Введите логин"><br>
                    
                    <input   class="number" required type="text"  name="number" id="number" placeholder="Введите номер телефона"><br>
                    <input class="mail"   required type="text"  name="login" id="login" placeholder="Введите адрес электронной почты"><br>
                    <input  class="password"  required type="password"  name="password" id="password" placeholder="Введите пароль"><br>
                    <button class="modalreg">Зарегистрироваться</button>
                    </form>
                    <button class="closemymodal" id="closemymodal">Закрыть</button>   
    </div>

    </body>
    