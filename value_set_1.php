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

<body onload="setPrice(2); retrieve();">
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
            <h3 id="name_value_set">Aroi Koom Set A</h3><br>
            <h5 id="text_value_set">Set for one enjoy with small pan pizza with deluxe topping and chicken pop.</h5>
        </div>
        <!-- เลือกพิซซ่า | เลือกไก่ป๊อป -->
        <br><br>
        <div class="btn-group row " role="group" id="pom_select">
            <a onclick="hidNshopizza(2,2)" class="col-6 btn " id="pom_select_1" role="button">Select Pizza</a>
            <a onclick="hidNshopizza(1,2)" class="col-6 btn" id="pom_select_2" role="button">Select Chicken Pop(M)</a>
        </div>
    </div>
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded " id="pizza1">
        <p class="text-center pt-5" style="font-size: 20px;">Select Pizza</p>
        <img id="pizzapic1" src="https://cdn.1112.com/1112/public//images/products/pizza/Oct2021/102208_MP.png" width="50%" class="mx-auto d-block">
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row ">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza1" class="text-center form-select form-select-md mb-3 me-3 ms-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(1,1);">
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
                    <select style="width: 100%;" id="selectcrust1" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(1,1)" style="width: 250px;" aria-label=".form-select-md ">
                    <option selected value="0">Small Pizza</option>
                    </select>
                </div>
            </div>
        </div>
        <br><div style="margin-left:15%; margin-right:15%;">
        <p class="text-start" id="desc1">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce</p>
        <br>
        <h3 class="text-end" id="pprice1">179 ฿</h3>
    </div><br>
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
    <!-- เลือกไก่ป๊อป -->
    <div class="rounded pb-5 d-none" id="pizza2">
        <p class="text-center pt-5 " style="font-size: 20px;">Select Chicken Pop</p>
        <img src="https://cdn.discordapp.com/attachments/1012625488482680942/1034712366803320833/unknown.png" width="50%" class="mx-auto d-block">
        <!-- disabled -->
        <button type="button" class="btn" id="button_choose_part" disabled>Chicken Pop(M)</button>
    </div>

    <!-- ปุ่ม ใส่ตะกร้า -->
    <div class="text-center mt-2   ">
        <a href="#pizza2" class="btn btn-info w-25  mt-5 mb-5 " onclick="hidNshopizza(1,2)" id="next1"> Next </a>
    </div>
    <div class="text-center mt-2 ">
        <a href="#pizza1" class="btn p-2 mt-5 w-25 mb-5 btn-success d-none" id="last" onclick="keepprice(0); addToCart(2);"><i class="bi bi-cart">&nbsp&nbspXXX ฿ </i> </a>
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>
<script src="pizza.js"></script>

</html>