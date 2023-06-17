<?php
session_start();
?>
<!DOCTYPE html>
    <head>
        <title> MaxSales</title>
        <script defer src="/js/functionsx.js"></script>
        <link rel="stylesheet" href="/css/indexfxx.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
    <html lang="en">
     

    <body>
        <div>
            <meta content="width=device-width">
            <h1 align="center">MaxSales</h1>
            <?php
                if($_SESSION['signinacces'] && $_SESSION['name'] != 'null'){
                    echo '<p class = "username"> ' . $_SESSION['name']  . ' </p>';
                }
            ?>
            <form action="/php/logout.php" method="post">
                        <button>выйти</button>
                    </form>
            <select id="selectroom">
                <option id="all">выберите количество комнат</option>
                <option id="zero">студия</option>
                <option id="one">1</option>
                <option id="two">2</option>
                <option id="three">3</option>
                <option id="four">4</option>
                <option id="five">5</option>
                <option id="six">6</option>
            </select><br><br>
            <p>наличие гаража
                <input type="checkbox" value="yes"><br>
            <p>выберите цену</p>
            <input data-marker="price/from" placeholder="от" maxlength="15" type="text" id="pricefrom">
            <input data-marker="price/from" placeholder="до" maxlength="15" type="text" id="pricebefore"><br>

            <p>выберите площадь объекта</p>
            <input data-marker="price/from" placeholder="от" maxlength="15" type="text" id="pricefrom">
            <input data-marker="price/from" placeholder="до" maxlength="15" type="text" id="pricebefore"><br>

            <p>выберите этаж</p>
            <input data-marker="price/from" placeholder="от" maxlength="3" type="text" id="floorfrom">
            <input data-marker="price/from" placeholder="до" maxlength="3" type="text" id="floorfrom"><br>

            <p>выберите тип дома</p>
            <input type="radio" name="sex" checked>неважно
            <input type="radio"name="sex">апартаменты
            <input type="radio"name="sex">частный дом</p>

            <p>наличие балкона или лоджии</p>
            <input type="radio" name="sex1" checked>неважно
            <input type="radio"name="sex1">балкон
            <input type="radio"name="sex1">лоджия</p>

            <p>количество этажей в доме</p>
            <input data-marker="price/from" placeholder="неважно" maxlength="3" type="text" id="housefloor"><br>

            <p>наличие лифта</p>
            <input type="checkbox">грузовой лифт
            <input type="checkbox">пассажирский лифт<br>

            <p>наличие парковки</p>
            <input type="checkbox">подземная
            <input type="checkbox">наземная многоуровневая<br>
            <input type="checkbox">открытая во дворе
            <input type="checkbox">во дворе со шлакбаумом<br>

            <p>тип постройки дома</p>
            <input type="checkbox">кирпичный дом
            <input type="checkbox">монолитный дом
            <input type="checkbox">панельный дом
            <input type="checkbox">деревянный дом
        </div>
        
        <div class="d3">
            <input  type="text" placeholder="Искать здесь...">
            <button  type="submit">search</button>
        </div>
            
        <select id="selectItem" name="gorod">
            <option id="all">Выберите город</option>
            <option id="moskva">Москва</option>
            <option id="chelyabinsk">Челябинск</option>
            <option id="piter">Санкт-Петербург</option>
            <option id="nnovgor">Нижний Новгород</option>
            <option id="ekaterinburg">Екатеринбург</option>
            <option id="kazan">Казань</option>
            <option id="krasnoyarsk">Красноярск</option>
            <option id="samara">Самара</option>
            <option id="yfa">Уфа</option>
            <option id="rostovnadony">Ростов-на-Дону</option>
            <option id="omsk">Омск</option>
            <option id="krasnodar">Краснодар</option>
            <option id="voronej">Воронеж</option>
            <option id="perm">Пермь</option>
            <option id="volgograd">Волгоград</option>
            <option id="saratov">Саратов</option>
            <option id="tumen">Тюмень</option>
            <option id="tolyati">Тольятти</option>
            <option id="barnayl">Барнаул</option>
            <option id="izhevsk">Ижевск</option>
        </select>
        <form action="/php/signin.php" method="post">
                        <button>найти</button>
                    </form><br><br><br><br>

            <input type="text">
            <button type="submit" id="submit" >зарагестрировать объявление</button>
            <br>
            <button>показать</button>
            <button id="modalopen">Создать обьявление</button>


           <div class="modalnik" id="mymodal">
                <div class="modalview">
                    <form action="/php/AddOffer.php" method="post">

                        <span>Выберите город</span><br>
                        <select required id="chooisecity" name="city" class="city">
                            <option id="all"></option>
                            <option id="moskva">Москва</option>
                            <option id="chelyabinsk">Челябинск</option>
                            <option id="piter">Санкт-Петербург</option>
                            <option id="nnovgor">Нижний Новгород</option>
                            <option id="ekaterinburg">Екатеринбург</option>
                            <option id="kazan">Казань</option>
                            <option id="krasnoyarsk">Красноярск</option>
                            <option id="samara">Самара</option>
                            <option id="yfa">Уфа</option>
                            <option id="rostovnadony">Ростов-на-Дону</option>
                            <option id="omsk">Омск</option>
                            <option id="krasnodar">Краснодар</option>
                            <option id="voronej">Воронеж</option>
                            <option id="perm">Пермь</option>
                            <option id="volgograd">Волгоград</option>
                            <option id="saratov">Саратов</option>
                            <option id="tumen">Тюмень</option>
                            <option id="tolyati">Тольятти</option>
                            <option id="barnayl">Барнаул</option>
                            <option id="izhevsk">Ижевск</option>
                        </select><br>

                        <span>Выберите колличество комнат в квартире</span><br>
                        <select  required id="selectroom" name="room" class="room">
                            <option id="all"></option>
                            <option id="zero">студия</option>
                            <option id="one">1</option>
                            <option id="two">2</option>
                            <option id="three">3</option>
                            <option id="four">4</option>
                            <option id="five">5</option>
                            <option id="six">6</option>
                        </select><br>
                        <span>Изображение объекта</span>
                        <input type="file">
                        <span class="text">Введите номер этажа на котором расположена квартира</span><br>
                        <input  required class="inputhouse" data-marker="price/from" placeholder="" maxlength="3" type="text" id="housefloor" name="floor"><br><br>

                        <span>Укажите наличие лифта</span><br>
                        <input type="checkbox" name="serviceEl" ><span class="text">грузовой лифт</span>
                        <input type="checkbox" name="passengerEl"><span class="text">пассажирский лифт</span><br><br>

                        <span>Укажите наличие парковки</span><br>
                        <input type="checkbox" name="ground_parking" ><span class="text">наземная парковка</span>
                        <input type="checkbox" name="underground_parking"><span class="text">подземная парковка</span><br><br>

                        <span>Укажите наличие гаража</span>
                        <input type="checkbox" name="garage" value="yes"><br>

                        <span class="text">Укажите предложенную вами цену</span><br>
                        <input  required type="text"  name="price" id="price"><br>

                        <span class="text">Укажите своё имя</span><br>
                        <input  required type="text"  name="name" id="name"><br><br><br>

                        <span class="text">Опишите свой объект подробнее</span><br>
                        <textarea require type="text" class="description" name="description" id="description"></textarea>

                        <button class="adduser" id="adduser">Добавить</button>

                       
                    </form>
                    <button class="closemymodal" id="closemymodal">Закрыть</button>
                </div>
                
            </div>

            <?php
            if($_SESSION['name'] == 'null'){
                echo
                '<form action="/php/register.php" method="post">
                <button class="register" id="registr">Зарегестрироваться</button>
                </form>';}
            ?>




            
            

        </div>
        </body>