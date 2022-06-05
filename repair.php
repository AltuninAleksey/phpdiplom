<?php
    include "nav.php";
?>
<title>Каталог</title>
<link rel="stylesheet" href="css/style_catalog.css">
   
<div class="background">
                    <!-- 1 страница слайдер-->
                <div class="page1">
                        <div class="container">
                        

                        <div class="technic">
                            <div class="maintextpage">Главная <div class="color"> / Услуги</div></div>
                            <div class="maintext">Ремонт</div>

                            <div class="products">

                                <div class="product">
                                    <img src="img/bike.jpg" alt="">
                                    <div class="text">Диагностика</div>
                                    <button  onclick="location.href='diagnostik.php';"> ПОДРОБНЕЕ</button>
                                </div>

                                <div class="product">
                                    <img src="img/suspersion.jpg" alt="">
                                    <div class="text">Подвеска</div>
                                    <button onclick="location.href='suspersion.php';">ПОДРОБНЕЕ</button>
                                </div>

                                <div class="product">
                                    <img src="img/collapse.jpg" alt="">
                                    <div class="text">Сход развал</div>
                                    <button onclick="location.href='collpase.php';">ПОДРОБНЕЕ</button>
                                </div>

                                <div class="product">
                                    <img src="img/card.png" alt="">
                                    <div class="text">замена масла</div>
                                    <button onclick="location.href='oil.php';">ПОДРОБНЕЕ</button>
                                </div>

                                <div class="product">
                                    <img src="img/tire.jpg" alt="">
                                    <div class="text">Шиномонтаж</div>
                                    <button onclick="location.href='tire.php';">ПОДРОБНЕЕ</button>
                                </div>

                                <div class="product">
                                    <img src="img/trow.jpg" alt="">
                                    <div class="text">Эвакуатор</div>
                                    <button onclick="location.href='truck.php';">ПОДРОБНЕЕ</button>
                                </div>

                           
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>


<?php
    include "foother.php";
?>