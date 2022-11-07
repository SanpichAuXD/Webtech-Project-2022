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

<body onload="changePizza(1,2); retrieve(); count(); is_empty();">
<?php include 'cart.php'; ?>
<?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <?php include 'nav.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div>
        <!-- ปุ่ม back -->
        <a href="value_set.php"><i class="bi bi-arrow-left" id="back"></i></a>
        <br>
        <!-- ชื่อ เมนู -->
        <div>
            <h3 id="name_value_set">Koom Yok Gang Set</h3><br>
            <h5 id="text_value_set">Enjoy with group with medium extreme crust pizza with classic topping, spaghetti 129.-, chicken stick and waffle fries.</h5>
        </div>
        <!-- เลือกพิซซ่า | เลือกไก่ป๊อป -->
        <br><br>
        <div class="btn-group row" role="group" id="pom_select">
            <a onclick="hidNshopizza46(1,4)" class="col-3 btn" id="pom_select_1" role="button">Select Pizza</a>
            <a onclick="hidNshopizza46(2,4)" class="col-3 btn" id="pom_select_2" role="button">Select Pasta</a>
            <a onclick="hidNshopizza46(3,4)" class="col-3 btn" id="pom_select_3" role="button">Select Chicken Sticks</a>
            <a onclick="hidNshopizza46(4,4)" class="col-3 btn" id="pom_select_4" role="button">Select  Waffle Fries</a>
        </div>
    </div>
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded  " id="pizza1">
        <p class="text-center pt-5" style="font-size: 20px;">Select Pizza</p>
        <img id="pizzapic1" src="https://cdn.discordapp.com/attachments/1012625488482680942/1034103058067636224/unknown.png" width="50%" class="mx-auto d-block" >
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row ">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza1" class="text-center form-select form-select-md mb-3 me-3 ms-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(1,2);">
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
                    <select style="width: 100%;" id="selectcrust1" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(1,2)" style="width: 250px;" aria-label=".form-select-md ">
                        <option value="2" selected>Extreme Cheese Medium</option>
                        <option value="5">Extreme Cheese Large</option>
                    </select>
                </div>
            </div>
        </div>
        <br> <div style="margin-left:15%; margin-right:15%;">
            <p class="text-start" id="desc1">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce</p>
            <br>
            <h3 class="text-end" id="pprice1">379 ฿</h3>
        </div><br>
        <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
        <div>
                <p id="topping"><i>Customize Pizza</i></p>
                <!-- บรรทัด 1 -->
                <div class="row">
                    <!-- ชีส -->
                    <div class="col-12 col-md-6   ">
                        <div class="  card m-3" id="card-topping" style="background-color: hsla(0, 0%, 100%,.7); ">
                            <div class="card-body">
                                <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034689297313452072/unknown.png" style="width: 80%; 
                            height: 70px; 
                            object-fit: cover; 
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            border-radius: 50px">
                                <!--    ชื่อ topping ชีส-->
                                <p class="m-3" id="name-topping">Mozzarella Cheese (+ 39฿)</p>
                                <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,0)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top0">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,0)"><i class="bi bi-plus-circle"
                                    id="icon-plus-circle"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- สับปะรด -->
                    <div class="col-12 col-md-6 ">
                        <div class="card m-3" id="card-topping" style="background-color: hsla(0, 0%, 100%,.7);">
                            <div class="card-body">
                                <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034689386215915570/unknown.png" style="width: 80%; 
                            height: 70px; 
                            object-fit: cover; 
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            border-radius: 50px">
                                <!--    ชื่อ topping สับปะรด-->
                                <p class="m-3" id="name-topping">Pineapple (+ 39฿)</p>
                                <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,1)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top1">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,1)"><i class="bi bi-plus-circle"
                                    id="icon-plus-circle"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- บรรทัด 2 -->
                <div class="row mt-0 pb-3">
                    <!-- เบคอนแผ่น -->
                    <div class="col-12 col-md-6 ">
                        <div class="card m-3" id="card-topping" style="background-color: hsla(0, 0%, 100%,.7);">
                            <div class="card-body">
                                <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034689386626945024/unknown.png" style="width: 80%; 
                            height: 70px; 
                            object-fit: cover; 
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            border-radius: 50px">
                                <!--    ชื่อ topping เบคอนแผ่น-->
                                <p class="m-3" id="name-topping">Sliced Bacon (+ 39฿)</p>
                                <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,2)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top2">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,2)"><i class="bi bi-plus-circle"
                                    id="icon-plus-circle"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- แฮมแผ่น -->
                    <div class="col-12 col-md-6 ">
                        <div class="card m-3" id="card-topping" style="background-color: hsla(0, 0%, 100%,.7);">
                            <div class="card-body">
                                <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034689387075743764/unknown.png" style="width: 80%; 
                            height: 70px; 
                            object-fit: cover; 
                            display: block;
                            margin-left: auto;
                            margin-right: auto;
                            border-radius: 50px">
                                <!--    ชื่อ topping แฮมแผ่น-->
                                <p class="m-3" id="name-topping">Sliced Ham (+ 39฿)</p>
                                <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,3)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top3">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,3)"><i class="bi bi-plus-circle"
                                    id="icon-plus-circle"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- เลือกพาสต้า -->
    <div class="rounded pb-5 d-none" id="pizza2">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Pasta</p>
        <img id="spaimg" src="https://cdn.discordapp.com/attachments/1012625488482680942/1034726186162597958/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <div id="choose_dropdown">
            <div class="dropdown ">
                <select id="selectspa" class="text-center form-select form-select-md mb-3" style="width:80%; margin:auto;" aria-label=".form-select-md " onchange="changeSpa()">
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
    </div>

    <!-- เลือกชิคเก้นสติ๊กส์ -->
    <div class="rounded pb-5 d-none " id="pizza3">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Chicken Sticks</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034726186548482048/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>Chicken Stick</button>
    </div>

    <!-- เลือกวาฟเฟิล ฟรายส์ -->
    <div class="rounded pb-5 d-none" id="pizza4">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Waffle Fries</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034726186967900221/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>Waffle Fries</button>
    </div>

    <!-- ปุ่ม ใส่ตะกร้า -->
    <div class="text-center mt-2   ">
        <a href="#pizza2" class="btn btn-success w-25  mt-5 mb-5 " onclick="hidNshopizza(1,4)" id="next1"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza3" class="btn btn-success w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(2,4)" id="next2"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza4" class="btn btn-success w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(3,4)" id="next3"> Next </a>
    </div>
    <div class="text-center mt-2 ">
        <a href="value_set.php" class="btn p-2 mt-5 w-25 mb-5 btn-success d-none" id="last" onclick="count(); keepprice(0); addToCart(4);"><i class="bi bi-cart"> Add To Cart</i> </a>
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
    <script src="pizza.js"></script>
</body>

</html>