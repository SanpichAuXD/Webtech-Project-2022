<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>value_set</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!---icon--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--style-->
    <style>
    <?php include 'style.css'; ?>   
    </style>
    
</head>

<body>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <?php include 'nav.php';?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div>
        <a href="index.php"><i class="bi bi-arrow-left" id="back"></i></a>
        <br>
        <h1 class="text-center">Value set</h1><br>
    </div>

    <!---menu 1--->
    <div class="container ">
        <div class="row m-5">
            <div class="col-4 rounded-start" id="pic-bg">
                <img src="img/home/value_set_1.png"
                    width="100%" class="mt-2 mb-2 rounded">
            </div>
            <div class="col-8 rounded-end " id="text-bg">
                <!--แก้ไข---ชื่อเมนู---->
                <br>
                <h3>Aroi Koom Set A</h3><br>
                <!--แก้ไข---บรรยาย---->
                <span>Set for one enjoy with small pan pizza with deluxe topping and chicken pop.</span><br>
                <div class="float-end p-4"><a href="value_set_1.php" id="plus" class="btn rounded pt-1 pb-1 ps-4 pe-4">179 ฿<i
                            class="bi bi-cart-plus"></i></a></div>
            </div>
        </div>
    </div>
    <!---menu 2--->

    <div class="container ">
        <div class="row m-5">
            <div class="col-4 rounded-start" id="pic-bg">
                <img src="img/home/value_set_2.png"
                    width="100%" class="mt-2 mb-2 rounded">
            </div>
            <div class="col-8 rounded-end" id="text-bg">
                <!--แก้ไข---ชื่อเมนู---->
                <br>
                <h3>Aroi Koom Set B</h3><br>
                <!--แก้ไข---บรรยาย---->
                <span>Duo combination with small pan pizza with deluxe topping and garlic bread.</span><br>
                <div class="float-end p-4"><a href="value_set_2.php" id="plus" class="btn rounded pt-1 pb-1 ps-4 pe-4">179 ฿<i
                            class="bi bi-cart-plus"></i></a></div>
            </div>
        </div>
    </div>
    <!---menu 3--->

    <div class="container ">
        <div class="row m-5">
            <div class="col-4 rounded-start" id="pic-bg">
                <img src="img/home/value_set_3.png"
                    width="100%" class="mt-2 mb-2 rounded">
            </div>
            <div class="col-8 rounded-end" id="text-bg">
                <!--แก้ไข---ชื่อเมนู---->
                <br>
                <h3>Koom Yok Gang Set</h3><br>
                <!--แก้ไข---บรรยาย---->
                <span>Enjoy with group with medium extreme crust pizza with classic topping, spaghetti 129.-, chicken stick and waffle fries.</span><br>
                <div class="float-end p-4"><a href="value_set_3.php" id="plus" class="btn rounded pt-1 pb-1 ps-4 pe-4">499 ฿<i
                            class="bi bi-cart-plus"></i></a></div>
            </div>
        </div>
    </div>
    <!---menu 4--->

    <div class="container">
        <div class="row m-5">
            <div class="col-4 rounded-start" id="pic-bg">
                <img src="img/home/value_set_4.png"
                    width="100%" class="mt-2 mb-2 rounded">
            </div>
            <div class="col-8 rounded-end" id="text-bg">
                <!--แก้ไข---ชื่อเมนู---->
                <br>
                <h3>Koom Ju Jai Set</h3><br>
                <!--แก้ไข---บรรยาย---->
                <span>Super Deal! Enjoy medium extreme curst pizza with classic topping, medium pan pizza with classic topping, BBQ chicken wing 4 pcs., spaghetti 129.-, fish finger and waffle fries.</span><br>
                <div class="float-end p-4"><a href="value_set_4.php" id="plus" class="btn rounded pt-1 pb-1 ps-4 pe-4">699 ฿<i
                            class="bi bi-cart-plus"></i></a></div>
            </div>
        </div>
    </div>
</body>
<script src="pizza.js"></script>

</html>