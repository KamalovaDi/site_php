<?php
include("dbconnect.php");
include("header.php");
?>
<meta charset="UTF-8">
<link rel="stylesheet" href="test.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

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
        <form action="" method="get">
            <input type="text" placeholder="Искать здесь...">
            <button class="searchbtn" type="submit"></button>
        </form>
    </div>
    <span class="icon">
        <i class="fa fa-heart fa-fw"></i>
        <i class="fa fa-truck fa-fw"></i>
    </span>
</div>
