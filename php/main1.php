<head>
<?php
include("..\php\dbconnect.php");
include("..\php\header.php");
?>
</head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/test.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- <div class="containerr"> -->
    <div class="search"> 
        <div class="category-wrap1"> 
            <div class="category-wrap">
                <h3>Категории</h3>
                <ul>
                    <li><a href="">Дизайн</a></li>
                    <li><a href="">Фотошоп</a></li>
                    <li><a href="">Книги</a></li>
                    <li><a href="">Журналы</a></li>
                    <li><a href="">Картинки</a></li>
                </ul>
            </div>
            </div>
        <div class="row"> 
            <div class="row_1">
                <div class="search_cat_div">
                    <form action="" method="get">
                        <input type="text" placeholder="Искать здесь...">
                        <button class="searchbtn" type="submit"></button>
                    </form>
                </div>
                <span class="icon" type="submit"></span>
                <span class="icon2" type="submit"></span>
            </div>

            <div class="hero__item set-bg" data-setbg="../img/banner.jpg" 
            style="background-image: url(&quot;../img/banner.jpg&quot;);">
                <div class="hero__text">
                    <span>FRUIT FRESH</span>
                    <h2>Vegetable <br>100% Organic</h2>
                    <p>Free Pickup and Delivery Available</p>
                    <a href="photo.php" class="primary-btn">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div>

    <!-- товары -->
    <section class="product">

        <div class="chapter">
            <div class="prod_header">
                <div class="section-title">
                    <h2>
                        Featured Product
                    </h2>
                
                <div class="featured__controls">
                    <ul class="menu-main">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".oranges">Oranges</li>
                        <li data-filter=".fresh-meat">Fresh Meat</li>
                        <li data-filter=".vegetables">Vegetables</li>
                        <li data-filter=".fastfood">Fastfood</li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

<!-- Layout -->
<div class="section"> <!-- Основная секция -->
  <div class="container"> <!-- Основной контейнер -->
    <div class="catalog"> <!-- Блок каталога -->
      <div class="catalog__flex"> <!-- Родитеский блок сетки -->
        <div class="catalog__col"> <!-- Дочерний блок сетки -->
          <div class="catalog__card card"> <!-- Блок с контентом, в данном случае карточка, все стили этого блока уже не относятся к сетке -->
            <div class="card__title">Lorem ipsum dolor sit amet</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod sit amet, consectetur adipisicing elit, sed do eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolordo eiusmod</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
        <div class="catalog__col">
          <div class="catalog__card card">
            <div class="card__title">Card title</div>
            <div class="card__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci expedita eligendi, aut maiores assumenda dolore sapiente, fugit asperiores placeat</div>
            <div class="card__button"><a href="">Button</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        

    </section>



<!-- </div> -->
<!-- <div class="">

        </div> -->


