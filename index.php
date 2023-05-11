
<!DOCTYPE html>
    <head>
        <title> MaxSales</title>
        <script src="main.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <html lang="en">
    <body>
        
        
        <div>
            <meta content="width=device-width">
            <h1 align="center">MaxSales</h1>
            <select id="selectItem">
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
            <select id="selectroom">
                <option id="all">choose the number of rooms</option>
                <option id="zero">studio</option>
                <option id="one">1</option>
                <option id="two">2</option>
                <option id="three">3</option>
                <option id="four">4</option>
                <option id="five">5</option>
                <option id="six">6</option>
            </select>
        </div>
            <p>availability of a garage
                <input type="checkbox">
            <p>choose price</p>
            <input data-marker="price/from" placeholder="from" maxlength="15" type="text" id="pricefrom">
            <input data-marker="price/from" placeholder="before" maxlength="15" type="text" id="pricebefore">
            <p>choose floor</p>
            <input data-marker="price/from" placeholder="from" maxlength="3" type="text" id="floorfrom">
            <input data-marker="price/from" placeholder="before" maxlength="3" type="text" id="floorfrom">
            <p>Housing type</p>
            <div>
                <input type="radio" name="sex" checked>nevermind
                <input type="radio"name="sex">apartment
                <input type="radio"name="sex">house</p>
            </div>
            <div>
                <p>the presence of a balcony or loggia</p>
                <input type="radio" name="sex1" checked>nevermind
                <input type="radio"name="sex1">balcony
                <input type="radio"name="sex1">loggia</p>
            </div>
            <p>number of floors in the house</p>
            <input data-marker="price/from" placeholder="max" maxlength="3" type="text" id="housefloor">
            <p>availability of an elevator</p>
            <input type="checkbox">service elevator
            <input type="checkbox">passenger elevator
            <p>Availability Parking</p>
            <input type="checkbox">underground
            <input type="checkbox">ground multilevel
            <p></p>
            <input type="checkbox">open in the yard
            <input type="checkbox">with a barrier in the yard
            <p>house type</p>
            <input type="checkbox">brick house
            <input type="checkbox">monolithic house
            <input type="checkbox">panel house
            <input type="checkbox">wooden house

            <div class="d3">
                  <input  type="text" placeholder="Искать здесь...">
                  <button  type="submit">search</button>
                </div>
                <form action="function.php" method="post">
                <input type="text"  name="login" id="login">
                <button type="submit" id="submit" >zaregat</button>

            </form>
    </body>