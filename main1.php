<?php
include("dbconnect.php");
include("header.php");
?>
<meta charset="UTF-8">
<link rel="stylesheet" href="test.css">
<link rel="stylesheet" href="all.min.css">

<div class="search"> 

<div class="dropdown">

    <button class="dropbtn">Выпадающее</button>
        <div class="dropdown-content">
        <ul>
                <li><a href="#">Категория1</a></li>
                <li><a href="#">Категория2</a></li>
                <li><a href="#">Категория3</a></li>
                <li><a href="#">Категория4</a></li>
                <li><a href="#">Категория5</a></li>
                <li><a href="#">Категория6</a></li>
                <li><a href="#">Категория7</a></li>
                <li><a href="#">Категория8</a></li>
                <li><a href="#">Категория9</a></li>
                <li><a href="#">Категория10</a></li>
                <li><a href="#">Категория11</a></li>
            </ul>
        </div>
</div>
    <div class="search_cat_div">
        <!-- <form action = "#" method="get">
            <input name="text" placeholder="vgbg" type="search">
            <button type="submit">Gjbcr</button>
        </form> -->
        <form>
            <input type="text" placeholder="Искать здесь...">
            <button type="submit"></button>
        </form>
        <!-- <div class ="search_cat1">
            <form action = "#">
                <div class ="search_cat">
                "All cat"
                ::after
                </div>
            <input type="text" placeholder="vgbg">
            <button type="search" class="site-btn"></button>
        </form>
        </div> -->
    </div>
    
</div>
