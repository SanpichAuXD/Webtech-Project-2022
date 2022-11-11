<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!---icon--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>

<body onload="retrieve(); count(); is_empty();">
    <?php include 'cart.php'; ?>
    <?php include 'nav.php'; ?>
    <?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <!-- โฆษณา -->
    <section id="sec1">
        <div id="ad-container">
            <!-- อันซ้าย -->
            <div class="advertising" id="card1">
                <a href="value_set_1.php"><img id="img1" class="ad-img" style="width: 100%; height: 100%;" src="img/home/value_set_1.png" alt=""></a>
                <a onclick="left('1')" class="arrow arrow-left" id="btleft1">
                    <img style="width: 100%; height: 100%;" src="img/home/left.png" alt="">
                </a>
                <a onclick="right('1')" class="arrow arrow-right" id="btright1">
                    <img style="width: 100%; height: 100%;" src="img/home/right.png" alt="">
                </a>
            </div>
            <!-- อันกลาง -->
            <div class="advertising" id="card2">
                <a href="value_set_2.php"><img id="img2" class="ad-img card-hov" style="width: 100%; height: 100%;" src="img/home/value_set_2.png" alt=""></a>
                <a onclick="left('2')" class="arrow arrow-left" id="btleft2">
                    <img style="width: 100%; height: 100%;" src="img/home/left.png" alt="">
                </a>
                <a onclick="right('2')" class="arrow arrow-right" id="btright2">
                    <img style="width: 100%; height: 100%;" src="img/home/right.png" alt="">
                </a>
            </div>
            <!-- อันขวา -->
            <div class="advertising" id="card3">
                <a href="value_set_3.php"><img id="img3" class="ad-img" style="width: 100%; height: 100%;" src="img/home/value_set_3.png" alt=""></a>
                <a onclick="left('3')" class="arrow arrow-left" id="btleft3">
                    <img style="width: 100%; height: 100%;" src="img/home/left.png" alt="">
                </a>
                <a onclick="right('3')" class="arrow arrow-right" id="btright3">
                    <img style="width: 100%; height: 100%;" src="img/home/right.png" alt="">
                </a>
            </div>
            <!-- อันข้างหลัง -->
            <div class="advertising" id="card4">
                <a href="value_set_4.php"><img id="img4" class="ad-img" style="width: 100%; height: 100%;" src="img/home/value_set_4.jpg" alt=""></a>
                <a onclick="left('4')" class="arrow arrow-left" id="btleft4">
                    <img style="width: 100%; height: 100%;" src="img/home/left.png" alt="">
                </a>
                <a onclick="right('4')" class="arrow arrow-right" id="btright4">
                    <img style="width: 100%; height: 100%;" src="img/home/right.png" alt="">
                </a>
            </div>
        </div>
    </section><br><br>
    <br><hr><br>

    <!-- recommend menu -->
    <div id="sec2">
        <div class="d-flex justify-content-center align-item-center">
        <h2 class="text-center" style=" color:white;  border-radius: 20px; padding:5px; width:max-content; font-size:28px;">Recommend Menu</h2>
        </div><br>
        <div class="container">
            <div class="row">
                <!-- recommend 1 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="./img/home/rec_1.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Chocolate Chip Ice Cream</h6>
                            <h6 class="card-title" style="float: right;">219฿</h6><br>

                            <a  class="btn btn-success" onclick="addPizza('Chocolate Chip Ice Cream', '', '219', './img/home/rec_1.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 2 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="./img/home/rec_2.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Caesar Salad</h6>
                            <h6 class="card-title" style="float: right;">149฿</h6><br>

                            <a  class="btn btn-success" onclick="addPizza('Caesar Salad', '', '149', './img/home/rec_2.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 3 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="img/home/rec_3.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">BBQ Pork Ribs</h6>
                            <h6 class="card-title" style="float: right;">359฿</h6><br>

                            <a  class="btn btn-success"  onclick="addPizza('BBQ Pork Ribs', '', '359', './img/home/rec_3.png')"  id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 4 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem; margin:auto; ">
                        <img class="card-img-top" src="img/home/rec_4.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Calamari</h6>
                            <h6 class="card-title" style="float: right;">99฿</h6><br>
                            <a  class="btn btn-success" onclick="addPizza('Calamari', '', '99', './img/home/rec_4.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <!-- recommend 5 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="img/home/rec_5.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Chip & Cheese Dip</h6>
                            <h6 class="card-title" style="float: right;">109฿</h6><br>

                            <a  class="btn btn-success" onclick="addPizza('Chip & Cheese Dip', '', '109', './img/home/rec_5.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 6 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="img/home/rec_6.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Cheese Sticks</h6>
                            <h6 class="card-title" style="float: right;">89฿</h6><br>
                            <a  class="btn btn-success"  onclick="addPizza('Cheese Sticks', '', '89', './img/home/rec_6.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 7 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="img/home/rec_7.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Coke 510 ml.</h6>
                            <h6 class="card-title" style="float: right;">24฿</h6><br>

                            <a  class="btn btn-success" onclick="addPizza('Coke 510 ml.', '', '24', './img/home/rec_7.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
                <!-- recommend 8 -->
                <div class="col-sm-3 home_c">
                    <div class="card" id="c_recommend_menu" style="width: 13rem;  margin:auto;">
                        <img class="card-img-top" src="img/home/rec_8.png" alt="Card image cap">
                        <div class="card-body">
                            <h6 class="card-title" id="name_recommend_menu">Egg Tart 2 Pcs.</h6>
                            <h6 class="card-title" style="float: right;">39฿</h6><br>

                            <a  class="btn btn-success" onclick="addPizza('Egg Tart 2 Pcs.', '', '39', './img/home/rec_8.png')" id="get_cart"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><hr><br>
    <div style="display: flex; justify-content: center;
align-items: center; ">
        <img src="./img/home/soon.jpg" width="60%" style="background:#E3C696c3; border-radius: 20%;">
        <h1 style="position:absolute; color:#E3C696c3">coming soon</h1>
    </div>
    <br>
    <!-- footer -->
    <?php include 'footer.php'; ?>
    <script src="pizza.js"></script>
</body>

</html>