<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <ul class="nav-tabs " style="background-color: white;" >
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
                        <datalist id="datalistOptions" >
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
                                            <button  onclick="valid()" data-bs-dismiss="modal"  type="submit"  class="btn btn-primary" >Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </li>
                </div>

                <div class="nav navbar-links" style="margin-left: 10px;">
                    <ul class="nav" style="font-size: 16px;">
                        <!-- buy 1 get 1 -->
                        <li class="nav-item pizza-set" >
                            <a   class="nav-link  fw-bold m-auto h-100 see-nav" href="buy1get1.php">Buy 1 get 1 free</a>
                        </li>
                        <!-- value set -->
                        <li class="nav-item pizza-set" >
                            <a   class="nav-link  fw-bold m-auto h-100 see-nav" href="value_set.php">Value Set</a>
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
</body>

</html>