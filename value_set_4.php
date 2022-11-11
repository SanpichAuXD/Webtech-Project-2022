<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>value_set_1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!---icon--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>

<body onload=" changePizza(1,2); retrieve(); count(); is_empty();">
    <?php include 'cart.php'; ?>
    <?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <?php include 'nav.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div class="container">
        <!-- ปุ่ม back -->
        <a href="value_set.php"><i class="bi bi-arrow-left" id="back"></i></a>
        <br>
        <!-- ชื่อ เมนู -->
        <div>
            <h3 id="name_value_set">Koom Yok Gang Set</h3><br>
            <h5 id="text_value_set">Enjoy with group with medium extreme crust pizza with classic topping, spaghetti 129.-, chicken stick and waffle fries.</h5>
        </div>
        <!-- เลือกพิซซ่า | เลือกไก่ป๊อป -->
        <br>
        <div class="btn-group row" role="group" id="pom_select">
            <a onclick="hidNshopizza46(1,4)" class="col-3 btn" id="pom_select_1" role="button">Select Pizza</a>
            <a onclick="hidNshopizza46(2,4)" class="col-3 btn" id="pom_select_2" role="button">Select Pasta</a>
            <a onclick="hidNshopizza46(3,4)" class="col-3 btn" id="pom_select_3" role="button">Select Chicken Sticks</a>
            <a onclick="hidNshopizza46(4,4)" class="col-3 btn" id="pom_select_4" role="button">Select Waffle Fries</a>
        </div>
    </div>
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded d-flex" id="pizza1">
        <div class="order-wrap p-3 w-100">
            <div class="row ">
                <div class="col-8">
                    <p class="text-center pt-2" style="font-size: 20px;">Select first pizza</p>
                    <img src="./img/cheese/Seafood_Cocktail_m.png" id="pizzapic1" width="50%" class="mx-auto d-block">

                    <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
                    <div class="btn-group" id="choose_dropdown">
                        <div class="row ">
                            <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                                <select id="selectpizza1" class="text-center form-select form-select-md mb-3 ms-3 me-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(1,2);">
                                    <?php
                                    $url = "pizza.json";
                                    $response = file_get_contents($url);
                                    $result = json_decode($response);

                                    for ($i = 0; $i < count($result->menu) - 1; $i++) {
                                        echo '<option value="' . $result->menu[$i]->eng_name . '">' . $result->menu[$i]->eng_name . '</option>';
                                    }

                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center">
                                <select style="width: 100%;" id="selectcrust1" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(1,2);" style="width: 250px;" aria-label=".form-select-md ">
                                <option value="2" selected>Extreme Cheese Medium</option>
                        <option value="5">Extreme Cheese Large</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="text-start" style="margin-left:15%; margin-right:15%;">
                        <p class="text-start" id="desc1">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce
                        </p>
                        <br>
                        <h3 class="text-end" id="pprice1">499 ฿</h3>
                    </div>
                </div>
                <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
                <div class="col-4  ">
                    <p id="topping"><i>Customize Pizza</i></p>
                    <!-- บรรทัด 1 -->
                    <div class="topping-wrap ">
                        <div class="row justify-content-center">
                            <!-- ชีส -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsla(0, 0%, 100%, .7);">
                                <div class="card-body p-0 ">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,0)">
                                                <i class="bi bi-dash-circle" id="icon-dash-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col m-2">
                                            <img src="./img/topping/cheese.png" style="width: 90%; 
                                            height: 40px; 
                                            object-fit: cover; 
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            border-radius: 50px">
                                        </div>
                                        <div class="col-1 mt-3">
                                            <a href="#+" class="col-2" onclick="num_topping(1,0)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--    ชื่อ topping ชีส-->
                                    <div id="name-topping">Mozzarella Cheese (+ 39฿)</div>
                                    <div class="text-center" id="top0">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- สับปะรด -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsla(0, 0%, 100%, .7);">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,1)">
                                                <i class="bi bi-dash-circle" id="icon-dash-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col m-2">
                                            <img src="./img/topping/pineapple.png" style="width: 90%; 
                                            height: 40px; 
                                            object-fit: cover; 
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            border-radius: 50px">
                                        </div>
                                        <div class="col-1 mt-3">
                                            <a href="#+" class="col-2" onclick="num_topping(1,1)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping สับปะรด-->
                                    <div id="name-topping">Pineapple (+ 39฿)</div>
                                    <div class="text-center" id="top1">0</div>
                                </div>
                            </div>
                        </div>
                        <!-- บรรทัด 2 -->
                        <div class="row justify-content-center">
                            <!-- เบคอนแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsla(0, 0%, 100%, .7);">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,2)">
                                                <i class="bi bi-dash-circle" id="icon-dash-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col m-2">
                                            <img src="./img/topping/bacon.png" style="width: 90%; 
                                            height: 40px; 
                                            object-fit: cover; 
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            border-radius: 50px">
                                        </div>
                                        <div class="col-1 mt-3">
                                            <a href="#+" class="col-2" onclick="num_topping(1,2)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping เบคอนแผ่น-->
                                    <div id="name-topping">Sliced Bacon (+ 39฿)</div>
                                    <div class="text-center" id="top2">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- แฮมแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsla(0, 0%, 100%, .7);">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,3)">
                                                <i class="bi bi-dash-circle" id="icon-dash-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col m-2"><img src="./img/topping/ham.png" style="width: 90%; 
                                            height: 40px; 
                                            object-fit: cover; 
                                            display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            border-radius: 50px">
                                        </div>
                                        <div class="col-1 mt-3">
                                            <a href="#+" class="col-2" onclick="num_topping(1,3)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping แฮมแผ่น-->
                                    <div id="name-topping">Sliced Ham (+ 39฿)</div>
                                    <div class="text-center" id="top3">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center    ">
                                <a  class="btn btn-success   mt-2 mb-5 " style="width:85%;" onclick="hidNshopizza(1,4)" id="next1"> Next </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>

    </div>
    <!-- เลือกพาสต้า -->
    <div class="rounded pb-5 d-none" id="pizza2">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Pasta</p>
        <img id="spaimg" src="./img/pasta/pasta_1.png" width="30%" class="mx-auto d-block">
        <!-- disabled -->
        <div id="choose_dropdown">
            <div class="dropdown ">
                <select id="selectspa" class="text-center form-select form-select-md" style="width:82%; margin:auto;" aria-label=".form-select-md " onchange="changeSpa()">
                    <?php
                    $url = "pizza.json";
                    $response = file_get_contents($url);
                    $result = json_decode($response);
                    for ($i = 0; $i < count($result->spaghetti); $i++) {
                        echo '<option value="' . $i + 1 . '">' . $result->spaghetti[$i]->spa_name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="text-center    ">
            <a  class="btn btn-success w-25  mt-2 mb-5 d-none" onclick="hidNshopizza(2,4)" id="next2"> Next </a>
        </div>
    </div>

    <!-- เลือกชิคเก้นสติ๊กส์ -->
    <div class="rounded pb-5 d-none " id="pizza3">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Chicken Sticks</p>
        <img src="./img/home/chick_stick.png" width="30%" class="mx-auto d-block">
        <!-- disabled -->
        <div class="text-center">
            <button type="button" class="btn w-25 d-flex justify-content-center align-item-center" id="button_choose_part" disabled>Chicken Stick</button>
        </div>
        <div class="text-center   ">
            <a  class="btn btn-success w-25  mt-2 mb-5 d-none" onclick="hidNshopizza(3,4)" id="next3"> Next </a>
        </div>
    </div>

    <!-- เลือกวาฟเฟิล ฟรายส์ -->
    <div class="rounded pb-5 d-none" id="pizza4">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Waffle Fries</p>
        <img src="./img/home/waffle.png" width="31%" class="mx-auto d-block">
        <!-- disabled -->
        <div class="text-center">
        <button type="button" class="btn w-25 d-flex justify-content-center align-item-center" id="button_choose_part" disabled>Waffle Fries</button>
                </div>
        <div class="text-center  ">
            <a href="value_set.php" class="btn p-2 mt-2 w-25 mb-5 btn-success d-none" id="last" onclick="count(); keepprice(0); addToCart(4);"><i class="bi bi-cart"> Add To Cart</i> </a>
        </div>
    </div>

    <!-- ปุ่ม ใส่ตะกร้า -->
    <!-- footer -->
    <?php include 'footer.php'; ?>
    <script src="pizza.js"></script>
</body>

</html>