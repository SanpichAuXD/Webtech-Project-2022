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
    <!-- <script src="pizza.js"></script> -->
</head>

<body>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <?php include 'nav.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div>
        <!-- ปุ่ม back -->
        <a href="value_set.php"><i class="bi bi-arrow-left" id="back"></i></a>
        <br>
        <!-- ชื่อ เมนู -->
        <div >
            <h3 id="name_value_set">Koom Ju Jai Set</h3><br>
            <h5 id="text_value_set">Super Deal! Enjoy medium extreme curst pizza with classic topping, medium pan pizza with classic topping, BBQ chicken wing 4 pcs., spaghetti 129.-, fish finger and waffle fries.</h5>
        </div>
        <!-- เลือกพิซซ่า | เลือกไก่ป๊อป -->
        <br><br>
        <div class="btn-group row" role="group" id="pom_select">
            <a onclick="hidNshopizza46(1,6)" class="btn col-4 bg-warning text-light " id="pom_select_1" role="button">Select 1st Pizza</a>
            <a onclick="hidNshopizza46(2,6)" class="btn col-4" id="pom_select_2" role="button">Select 2nd Pizza</a>
            <a onclick="hidNshopizza46(3,6)" class="btn col-4" id="pom_select_3" role="button">Select Pasta</a>
            <a onclick="hidNshopizza46(4,6)" class="btn col-4" id="pom_select_4" role="button">Select Chicken Wings</a>
            <a onclick="hidNshopizza46(5,6)" class="btn col-4" id="pom_select_5" role="button">Select Fish Finger</a>
            <a onclick="hidNshopizza46(6,6)" class="btn col-4" id="pom_select_6" role="button">Select Waffle Fries</a>
        </div>
    </div>
    <!-- ถาด1 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded " id="pizza1">
        <p class="text-center pt-5" style="font-size: 20px;">เลือกพิซซ่าถาดที่1</p>
        <img src="https://cdn.1112.com/1112/public//images/products/pizza/Oct2021/102208_MP.png" id="pizzapic1" width="50%" class="mx-auto d-block">
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row ">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza1" class="text-center form-select form-select-md mb-3 ms-3 me-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(1);">
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
                    <select style="width: 100%;" id="selectcrust1" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(1)" style="width: 250px;" aria-label=".form-select-md ">
                        <option selected value="0">Pan Medium</option>
                        <option value="1">Crispy Thin Medium</option>
                        <option value="2">Extreme Cheese Medium</option>
                        <option value="3">Pan Large</option>
                        <option value="4">Crispy Thin Large</option>
                        <option value="5">Extreme Cheese Large</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="text-start" style="margin-left:15%; margin-right:15%;">
        <p class="text-start" id="desc1">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce</p>
            <br>
            <h3 class="text-end" id="pprice1">379 ฿</h3>
        </div>
        <br>
        <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
        <div>
            <p id="topping"><i>Customiza Pizza</i></p>
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
                            <p id="name-topping">Mozzarella Cheese (+ 39฿)</p>
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
                            <p id="name-topping">Pineapple (+ 39฿)</p>
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
                            <p id="name-topping">Sliced Bacon (+ 39฿)</p>
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
                            <p id="name-topping">Sliced Ham (+ 39฿)</p>
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
    <!-- ถาด2 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded d-none" id="pizza2">
        <p class="text-center pt-5" style="font-size: 20px;">เลือกพิซซ่าถาดที่2</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034103058067636224/unknown.png" width="50%" id="pizzapic2" class="mx-auto d-block">
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza2" class="text-center form-select form-select-md mb-3 me-3 ms-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(2); ">
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
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select style="width: 100%;" id="selectcrust2" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(2)" style="width: 250px;" aria-label=".form-select-md ">
                        <option selected value="0">Pan Medium</option>
                        <option value="1">Crispy Thin Medium</option>
                        <option value="2">Extreme Cheese Medium</option>
                        <option value="3">Pan Large</option>
                        <option value="4">Crispy Thin Large</option>
                        <option value="5">Extreme Cheese Large</option>
                    </select>
                </div>
            </div>
        </div>
        <br><div style="margin-left:15%; margin-right:15%;">
        <p class="text-start" id="desc2">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce</p>
            <br>
            <h3 class="text-end" id="pprice2">379 ฿</h3>
        </div><br>
        <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
        <div>
            <p id="topping"><i>ปรับแต่งพิซซ่าด้วยตัวเอง</i></p>
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
                            <p id="name-topping">Mozzarella Cheese (+ 39฿)</p>
                            <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,4)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top4">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,4)"><i class="bi bi-plus-circle"
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
                            <p id="name-topping">Pineapple (+ 39฿)</p>
                            <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,5)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top5">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,5)"><i class="bi bi-plus-circle"
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
                            <p id="name-topping">Sliced Bacon (+ 39฿)</p>
                            <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,6)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top6">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,6)"><i class="bi bi-plus-circle"
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
                            <p id="name-topping">Sliced Ham (+ 39฿)</p>
                            <div class="row">
                            <a href="#-" class="col-2" onclick="num_topping(0,7)"><i class="bi bi-dash-circle"
                                    id="icon-dash-circle"></i></a>
                                    <p class="col-8 text-center mb-0" id="top7">0</p>
                            <a href="#+" class="col-2"onclick="num_topping(1,7)"><i class="bi bi-plus-circle"
                                    id="icon-plus-circle"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ถาด2 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded d-none" id="pizza2">
        <p class="text-center pt-5" style="font-size: 20px;">Select 2nd Pizza</p>
        <img id="pizzapic2" src="https://cdn.discordapp.com/attachments/1012625488482680942/1034103058067636224/unknown.png" width="50%" class="mx-auto d-block">
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row ">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza1" class="text-center form-select form-select-md mb-3" style="width: 200px;" aria-label=".form-select-md " onchange="changePizza(1)">
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
                    <select style="width: 200px;" id="selectcrust1" class="text-center form-select form-select-md mb-3" onchange="changePizza(1)" style="width: 250px;" aria-label=".form-select-md ">
                        <option selected value="0">Pan Medium</option>
                        <option value="1">Crispy Thin Medium</option>
                        <option value="2">Extreme Cheese Medium</option>
                        <option value="3">Pan Large</option>
                        <option value="4">Crispy Thin Large</option>
                        <option value="5">Extreme Cheese Large</option>
                    </select>
                </div>
            </div>
        </div>
        <br><div style="margin-left:15%; margin-right:15%;">
        <p class="text-start" id="desc2">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce</p>
            <br>
            <h3 class="text-end" id="pprice2">379 ฿</h3>
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
                            <p id="name-topping">Mozzarella Cheese (+ 39฿)</p>
                            <a href="#-" onclick="num_topping()"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                            <a href="#+" onclick="num_topping()"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>

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
                            <p id="name-topping">Pineapple (+ 39฿)</p>
                            <a href="#-" onclick="num_topping()"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                            <a href="#+" onclick="num_topping()"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>

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
                            <p id="name-topping">Sliced Bacon (+ 39฿)</p>
                            <a href="#-" onclick="num_topping()"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                            <a href="#+" onclick="num_topping()"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>

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
                            <p id="name-topping">Sliced Ham (+ 39฿)</p>
                            <a href="#-" onclick="num_topping()"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                            <a href="#+" onclick="num_topping()"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- เลือกพาสต้า -->
    <div class="rounded pb-5 d-none" id="pizza3">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Pasta</p>
        <img id="spaimg" src="https://cdn.discordapp.com/attachments/1012625488482680942/1034726186162597958/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <div id="choose_dropdown">
            <div class="dropdown">
                <select id="selectspa" class="text-center form-select form-select-md mb-3" style="width: 200px;" aria-label=".form-select-md " onchange="changeSpa()">
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

    <!-- เลือกปีกไก่ -->
    <div class="rounded pb-5 d-none" id="pizza4">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Chicken Wings</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034729468373254204/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>BBQ Chicken Wings 4 pcs</button>
    </div>

    <!-- เลือกปลาชุบเกร็ดขนมปังทอด -->
    <div class="rounded pb-5 d-none" id="pizza5">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Fish Finger</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034729468901740604/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>Fish Finger 4 pcs</button>
    </div>

    <!-- เลือกวาฟเฟิล ฟรายส์ -->
    <div class="rounded pb-5 d-none" id="pizza6">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Waffle Fries</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034726186967900221/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>Waffle Fries</button>
    </div>

    <!-- ปุ่ม ใส่ตะกร้า -->
    <div class="text-center mt-2   ">
        <a href="#pizza2" class="btn btn-info w-25  mt-5 mb-5 " onclick="hidNshopizza(1,6); keepprice(); reset(0);" id="next1"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza3" class="btn btn-info w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(2,6); keepprice();" id="next2"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza4" class="btn btn-info w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(3,6)" id="next3"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza5" class="btn btn-info w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(4,6)" id="next4"> Next </a>
    </div>
    <div class="text-center mt-2   ">
        <a href="#pizza6" class="btn btn-info w-25  mt-5 mb-5 d-none" onclick="hidNshopizza(5,6)" id="next5"> Next </a>
    </div>
    <div class="text-center mt-2 ">
        <a class="btn p-2 mt-5 w-25 mb-5 btn-success d-none" id="last"><i class="bi bi-cart">&nbsp&nbspAdd to Cart  </i> </a>
    </div>
    <!-- footer -->
    <div id="footer">
    </div>
    <script src="pizza.js"></script>
</body>


</html>