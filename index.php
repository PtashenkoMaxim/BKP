
<!DOCTYPE html>
    <head>
        <title> MaxSales</title>
        <script defer src="/js/function.js"></script>
        <link rel="stylesheet" href="/css/indexf.css">
    </head>
    <html lang="en">
    <body>
        
        
        <div>
            <meta content="width=device-width">
            <h1 align="center">MaxSales</h1>
            <select id="selectroom">
                <option id="all">choose the number of rooms</option>
                <option id="zero">studio</option>
                <option id="one">1</option>
                <option id="two">2</option>
                <option id="three">3</option>
                <option id="four">4</option>
                <option id="five">5</option>
                <option id="six">6</option>
            </select><br><br>
        </div>

            <p>availability of a garage
                <input type="checkbox" value="yes"><br><br>
            <p>choose price</p>
            <input data-marker="price/from" placeholder="from" maxlength="15" type="text" id="pricefrom">
            <input data-marker="price/from" placeholder="before" maxlength="15" type="text" id="pricebefore"><br><br>
            <p>choose floor</p>
            <input data-marker="price/from" placeholder="from" maxlength="3" type="text" id="floorfrom">
            <input data-marker="price/from" placeholder="before" maxlength="3" type="text" id="floorfrom"><br><br>
            <p>Housing type</p>
        <div>
            <input type="radio" name="sex" checked>nevermind
            <input type="radio"name="sex">apartment
            <input type="radio"name="sex">house</p><br>
        </div>

        <div>
            <p>the presence of a balcony or loggia</p>
            <input type="radio" name="sex1" checked>nevermind
            <input type="radio"name="sex1">balcony
            <input type="radio"name="sex1">loggia</p><br>
        </div>

            <p>number of floors in the house</p>
            <input data-marker="price/from" placeholder="max" maxlength="3" type="text" id="housefloor"><br><br>
            <p>availability of an elevator</p>
            <input type="checkbox">service elevator
            <input type="checkbox">passenger elevator<br><br>
            <p>Availability Parking</p>
            <input type="checkbox">underground
            <input type="checkbox">ground multilevel<br>
            <input type="checkbox">open in the yard
            <input type="checkbox">with a barrier in the yard<br><br>
            <p>house type</p>
            <input type="checkbox">brick house
            <input type="checkbox">monolithic house
            <input type="checkbox">panel house
            <input type="checkbox">wooden house
        <div class="d3">
            <input  type="text" placeholder="Искать здесь...">
            <button  type="submit">search</button>
        </div>
            
        <select id="selectItem" name="gorod">
            <option id="all">choose the city</option>
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

            <input type="text">
            <button type="submit" id="submit" >zaregat</button>
            <br>
            <button>показать</button>
            <button id="modalopen">Создать обьявление</button>


           <div class="modal" id="mymodal">
                <div class="modalview">
                    <form action="/php/AddOffer.php" method="post">

                        <span>choose the city</span><br>
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

                        <span>choose the number of rooms</span><br>
                        <select  required id="selectroom" name="room" class="room">
                            <option id="all"></option>
                            <option id="zero">studio</option>
                            <option id="one">1</option>
                            <option id="two">2</option>
                            <option id="three">3</option>
                            <option id="four">4</option>
                            <option id="five">5</option>
                            <option id="six">6</option>
                        </select><br>

                        <span class="text">floor number in the house</span><br>
                        <input  required class="inputhouse" data-marker="price/from" placeholder="choose floor" maxlength="3" type="text" id="housefloor" name="floor"><br><br>

                        <span>availability of an elevator</span><br>
                        <input type="checkbox" name="serviceEl" ><span class="text">service elevator</span>
                        <input type="checkbox" name="passengerEl"><span class="text">passenger elevator</span><br><br>

                        <span>availability of a garage</span>
                        <input type="checkbox" name="garage" value="yes"><br>

                        <span class="text">offer your price</span><br>
                        <input  required type="text"  name="price" id="price"><br>

                        <span class="text">write your name</span><br>
                        <input  required type="text"  name="name" id="name"><br><br><br>

                        <button class="adduser" id="adduser">добавить</button>

                       
                    </form>
                    <button class="closemymodal" id="closemymodal">закрыть</button>
                </div>
            </div>
            <form action="/php/database.php" method="post">
                        <button>naity</button>
                    </form>
        </body>