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
        .modal-backdrop {
        z-index: -1;
    }
        <?php include 'style.css'; ?>
    </style>

</head>

<body onload="retrieve(); count();">
<?php include 'cart.php'; ?>
<?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <header style="position: sticky ; top:0; z-index:100;">
        <ul class="nav-tabs " style="background-color: white;">
            <div class="container-fluid nav">
                <!-- logo -->
                <a id="logo" class="navbar-brand" class="nav-a" href="index.php">
                    <img id="logo-img" src="img/home/Logo.png" alt="Logo" class="d-inline-block">
                </a>

                <div class="nav-item nav-delivery">
                    <!-- delivery takaway -->
                    <li class="deliver nav-item text-center d-flex fw-semibold">
                        <a id="switch-deli" class="nav-link text-dark d-inline m-auto nav-a deli-take " href="#" style="border-top-left-radius: 10px; border-top-right-radius: 0; border-bottom-left-radius: 10px;" onclick="take_deli(0)">Delivery</a>
                        <div class="line"></div>
                        <a id="switch-take" class="nav-link  d-inline m-auto nav-a deli-take bg-secondary text-light" href="#" style="border-top-left-radius: 0; border-top-right-radius: 10px; border-bottom-right-radius: 10px;" onclick="take_deli(1)">Takeaway</a>
                    </li>
                    <!-- select address -->
                    <li class="deliver nav-item text-center" id="take" style="height: 30px; width: 100%;">

                        <input class="fw-semibold" id="select-address" list="datalistOptions" type="search" class="search-data " placeholder="Select Address" required style="width:100%; height: 37px;">
                        <datalist id="datalistOptions">
                            <?php
                            $url = "pizza.json";
                            $response = file_get_contents($url);
                            $result = json_decode($response);
                            for ($i = 0; $i < count($result->branch->eng_branch); $i++) {
                                echo '<option value="' . $result->branch->eng_branch[$i] . '">';
                            }
                            ?>
                        </datalist>
                    </li>
                    <li>
                        <div class="d-none" id="deli">
                            <div class="dropdown w-100 ">
                                <button class="btn  dropdown-toggle align-text-center " style=" width:106%; background-color:#D9D9D9; border-radius:10px;" id="drop-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Your Address
                                </button>
                                <ul class="dropdown-menu" id="drop" style=" width:350px;">
                                    <li><a class="dropdown-item " href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">New Address</a></li>
                                    <li><a class="dropdown-item " href="#">Current Address</a></li>
                                </ul>
                            </div>
                            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header d-block">
                                            <button type="button" class="btn-close d-flex p-2 float-right" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Add new address</h1>

                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="name" placeholder="ชื่อ-นามสกุลของคุณ">
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="address" placeholder="ที่อยู่ของคุณ" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" class="form-control" id="phone" placeholder="เบอร์โทรของคุณ">
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-item-center">
                                            <button onclick="valid()" data-bs-dismiss="modal" type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                </div>

                <div class="nav navbar-links" style="margin-left: 10px;">
                    <ul class="nav" style="font-size: 16px;">
                        <!-- buy 1 get 1 -->
                        <li class="nav-item pizza-set" id="b1g1">
                            <a class="nav-link  fw-bold m-auto h-100 see-nav see-nav-b1g1" href="buy1get1.php">Buy 1 get 1 free</a>
                        </li>
                        <!-- value set -->
                        <li class="nav-item pizza-set">
                            <a class="nav-link  fw-bold m-auto h-100 see-nav ms-4 me-4" href="value_set.php">Value Set</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            </div>
        </ul>
    </header>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div>
        <!-- ปุ่ม back -->
        <a href="index.php"><i class="bi bi-arrow-left" id="back"></i></a>
        <br>
        <!-- ชื่อ เมนู -->
        <h3 id="name_value_set">Special DealBuy 1 Get 1</h3><br>
        <!-- เลือกพิซซ่า-->
        <br><br>
        <div class="btn-group" role="group" id="pom_select">
            <a class="btn" id="pom_select_1" role="button" onclick="hidNshopizza(2,2)">เลือกพิซซ่าถาด1</a>
            <a class="btn" id="pom_select_2" role="button" onclick="hidNshopizza(1,2)">เลือกพิซซ่าถาด2</a>
        </div>
    </div>
    <!-- ถาด1 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded " id="pizza1">

        <p class="text-center pt-5" style="font-size: 20px;">เลือกพิซซ่าถาดที่1</p>
        <img src="./img/pan/Seafood_Cocktail_m.png" id="pizzapic1" width="50%" class="mx-auto d-block">

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
                        <option id="testkuy" value="0">Pan Medium</option>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,0)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top0">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,0)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,1)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top1">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,1)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,2)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top2">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,2)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,3)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top3">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,3)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
        <img src="./img/pan/Seafood_Cocktail_m.png" width="50%" id="pizzapic2" class="mx-auto d-block">
        <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
        <div class="btn-group" id="choose_dropdown">
            <div class="row">
                <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                    <select id="selectpizza2" class="text-center form-select form-select-md mb-3 me-3 ms-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(2);">
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
                    <select style="width: 100%;" id="selectcrust2" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(2)" style="width: 100%;" aria-label=".form-select-md ">
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
        <div style="margin-left:15%; margin-right:15%;">
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
                                <a href="#-" class="col-2" onclick="num_topping(0,4)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top4">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,4)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,5)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top5">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,5)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,6)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top6">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,6)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
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
                                <a href="#-" class="col-2" onclick="num_topping(0,7)"><i class="bi bi-dash-circle" id="icon-dash-circle"></i></a>
                                <p class="col-8 text-center mb-0" id="top7">0</p>
                                <a href="#+" class="col-2" onclick="num_topping(1,7)"><i class="bi bi-plus-circle" id="icon-plus-circle"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ปุ่ม ใส่ตะกร้า -->
    <div class="text-center mt-2   ">
        <a href="#pizza2" class="btn btn-info w-25  mt-5 mb-5 " onclick="hidNshopizza(1,2); keepprice(0); reset(0); changePizza(2)" id="next1"> Next </a>
    </div>
    <div class="text-center mt-2 ">
        <a href="index.php" class="btn p-2 mt-5 w-25 mb-5 btn-success d-none" id="last" onclick=" keepprice(1); addToCart(1);"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i> </a>
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>
<script src="pizza.js"></script>

</html>