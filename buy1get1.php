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

        <?php include 'style.css';
        ?>
    </style>

</head>

<body onload="retrieve(); count(); is_empty();">
    <?php include 'cart.php'; ?>
    <?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <header style="  z-index:100;">
        <ul class="nav-tabs " style="background-color: var(--dark_brown); ">
            <div class="container-fluid nav">

                <div class="nav-item nav-delivery">
                    <!-- delivery takaway -->
                    <li class="deliver nav-item text-center d-flex fw-semibold">
                        <a id="switch-deli" class="nav-link  d-inline m-auto nav-a deli-take " href="#" style="background-color:var(--red); color:white; border-top-left-radius: 10px; border-top-right-radius: 0; border-bottom-left-radius: 10px;" onclick="take_deli(0)">Delivery</a>
                        <div class="line"></div>
                        <a id="switch-take" class="nav-link  d-inline m-auto nav-a deli-take " href="#" style="background-color:var(--yellow) ; color:black; border-top-left-radius: 0; border-top-right-radius: 10px; border-bottom-right-radius: 10px;" onclick="take_deli(1)">Takeaway</a>
                    </li>
                    <!-- select address -->
                    <li class="deliver nav-item text-center" id="take" style="height: 30px; width: 100%;">

                        <input class="fw-semibold text-light" id="select-address" list="datalistOptions" type="search" class="search-data " placeholder="Select Address" required style="width:100%; height: 31px;">
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
                                <button id="deli-address" class="fw-semibold btn dropdown-toggle align-text-center text-light" style=" width:103%; height:31px; background-color:var(--red); border-radius:10px; font-size: 14px;" id="drop-text" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Your Address
                                </button>
                                <ul class="dropdown-menu fw-semibold" id="drop" style=" width:100%; background-color:var(--red); font-size: 14px;">
                                    <li><a class="dropdown-item mt-1 mb-1 text-center p-0 text-light" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">New Address</a></li>
                                    <hr class="m-0 text-light fs-5">
                                    <li><a class="dropdown-item mt-1 mb-1 text-center p-0 text-light" href="#">Current Address</a></li>
                                </ul>
                            </div>
                            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content" style="background-color: var(--dark_brown);  box-shadow: 0 5px 25px;  backdrop-filter: blur(10px);">
                                        <div class="modal-header d-block">
                                            <button type="button" class="btn-close d-flex p-2 float-right" data-bs-dismiss="modal" aria-label="Close" style="background-color: var(--yellow) ;"></button>
                                            <h1 class="modal-title fs-5 text-center text-light" id="exampleModalLabel">Add New
                                                Address</h1>

                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                            <div class="mb-3">
                                                <textarea class="form-control" id="address" placeholder="Your Address" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="number" class="form-control" id="phone" placeholder="Your Phone">
                                            </div>
                                        </div>
                                        <div class="modal-footer d-flex justify-content-center align-item-center">
                                            <button onclick="valid()" data-bs-dismiss="modal" type="submit" class="btn " style="background-color: var(--yellow);">Save Address</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>

                <!-- logo -->
                <a id="logo" class="navbar-brand text-center" class="nav-a" href="index.php">
                    <img id="logo-img" src="img/home/Logo.png" alt="Logo" class="d-inline-block">
                </a>
                
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="nav navbar-links" style="margin-left: 10px;">
                    <ul class="nav" style="font-size: 16px;">
                        <!-- buy 1 get 1 -->
                        <li class="nav-item pizza-set" id="b1g1">
                            <a class="nav-link  fw-bold m-auto h-100 see-nav" href="buy1get1.php">Buy 1 get 1 Free</a>
                        </li>
                        <!-- value set -->
                        <li class="nav-item pizza-set">
                            <a class="nav-link  fw-bold m-auto h-100 see-nav ms-4 me-4" href="value_set.php">Value
                                Set</a>
                        </li>
                    </ul>
                </div>
            </div>
        </ul>
    </header>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->

    <div class="container">
        <!-- ปุ่ม back -->
        <a href="index.php"><i class="bi bi-arrow-left " id="back"></i></a>
        <!-- ชื่อ เมนู -->
        <h3 id="name_value_set" class="text-center m-0 mb-4">Special Deal Buy 1 Get 1</h3>
        <!-- เลือกพิซซ่า-->
        <div class="btn-group" role="group" id="pom_select">
            <a class="btn" id="pom_select_1" role="button" onclick="hidNshopizza(2,11)">Select First Pizza</a>
            <a class="btn" id="pom_select_2" role="button" onclick="hidNshopizza(1,11)">Select Second Pizza</a>
        </div>
    </div>
    <!-- ถาด1 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->

    <div class="rounded d-flex" id="pizza1">
        <div class="order-wrap p-3 w-100 ">
            <div class="row ">
                <div class="col-8">
                    <p class="text-center pt-2" style="font-size: 20px;">Select First Pizza</p>
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
                        <p class="text-start mb-0" id="desc1">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce
                        </p>
                        <br>
                        <h3 class="text-end" id="pprice1">379 ฿</h3>
                    </div>
                </div>
                <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
                <div class="col-4  ">
                    <p id="topping"><i>Customize Pizza</i></p>
                    <!-- บรรทัด 1 -->
                    <div class="topping-wrap ">
                        <div class="row justify-content-center">
                            <!-- ชีส -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
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
                                    <div class="text-center text-dark" id="top0">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- สับปะรด -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
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
                                    <div class="text-center text-dark" id="top1">0</div>
                                </div>
                            </div>
                        </div>
                        <!-- บรรทัด 2 -->
                        <div class="row justify-content-center">
                            <!-- เบคอนแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
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
                                    <div class="text-center text-dark" id="top2">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- แฮมแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
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
                                    <div class="text-center text-dark" id="top3">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center mt-2  justify-content-center">
                                <a  class="btn  " style="width:85%;" onclick="hidNshopizza(1,11); keepprice(0); reset(0); changePizza(2)" id="next1">
                                    Next </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>

    </div>
    <!-- ถาด2 -->
    <!-- หน้าต่างเลือกขอบ และ หน้า -->
    <div class="rounded d-none" id="pizza2">
        <div class="order-wrap p-3 w-100">
            <div class="row ">
                <div class="col-8">
                    <p class="text-center pt-2" style="font-size: 20px;">Select Second Pizza</p>
                    <img src="./img/pan/Seafood_Cocktail_m.png" id="pizzapic2" width="50%" class="mx-auto d-block">

                    <!-- dropdown เลือกขอบและขนาด & เลือกหน้าอื่น -->
                    <div class="btn-group" id="choose_dropdown">
                        <div class="row ">
                            <div class="col-12 col-sm-6 d-flex justify-content-center align-item-center ">
                                <select id="selectpizza2" class="text-center form-select form-select-md mb-3 ms-3 me-3" style="width: 100%;" aria-label=".form-select-md " onchange="reset(1); changePizza(2);">
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
                                <select style="width: 100%;" id="selectcrust2" class="text-center form-select form-select-md mb-3 me-3 ms-3" onchange="changePizza(2)" style="width: 250px;" aria-label=".form-select-md ">
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
                        <p class="text-start mb-0" id="desc2">Shrimp, Crab Sticks, Ham, Pineapple and Thousand Island Sauce
                        </p>
                        <br>
                        <h3 class="text-end" id="pprice2">379 ฿</h3>
                    </div>
                </div>
                <!-- ปรับแต่งพิซซ่าด้วยตัวเอง -->
                <div class="col-4  ">
                    <p id="topping"><i>Customize Pizza</i></p>
                    <!-- บรรทัด 1 -->
                    <div class="topping-wrap ">
                        <div class="row justify-content-center">
                            <!-- ชีส -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
                                <div class="card-body p-0 ">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,4)">
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
                                            <a href="#+" class="col-2" onclick="num_topping(1,4)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!--    ชื่อ topping ชีส-->
                                    <div id="name-topping">Mozzarella Cheese (+ 39฿)</div>
                                    <div class="text-center text-dark" id="top4">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- สับปะรด -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,5)">
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
                                            <a href="#+" class="col-2" onclick="num_topping(1,5)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping สับปะรด-->
                                    <div id="name-topping">Pineapple (+ 39฿)</div>
                                    <div class="text-center text-dark" id="top5">0</div>
                                </div>
                            </div>
                        </div>
                        <!-- บรรทัด 2 -->
                        <div class="row justify-content-center">
                            <!-- เบคอนแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,6)">
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
                                            <a href="#+" class="col-2" onclick="num_topping(1,6)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping เบคอนแผ่น-->
                                    <div id="name-topping">Sliced Bacon (+ 39฿)</div>
                                    <div class="text-center text-dark" id="top6">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- แฮมแผ่น -->
                            <div class="card m-1" id="card-topping" style="width: 80%; background-color: hsl(8, 100%, 75%)">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-1 mt-3">
                                            <a href="#-" class="col-2" onclick="num_topping(0,7)">
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
                                            <a href="#+" class="col-2" onclick="num_topping(1,7)">
                                                <i class="bi bi-plus-circle" id="icon-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!--    ชื่อ topping แฮมแผ่น-->
                                    <div id="name-topping">Sliced Ham (+ 39฿)</div>
                                    <div class="text-center text-dark" id="top7">0</div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="text-center mt-2 ">
                                <a href="index.php" class="btn p-2 d-none" style="width:85%;" id="last" onclick=" keepprice(1); addToCart(1);"><i class="bi bi-cart">&nbsp&nbspAdd to Cart</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>
    </div>
    <!-- footer -->
    <?php include 'footer.php'; ?>
</body>
<script src="pizza.js"></script>

</html>