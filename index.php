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

<body onload="retrieve(); count();">
    <?php include 'cart.php'; ?>
    <?php include 'background.php'; ?>
    <!--แทบ logo--------TH/EN--------deli-take-------selectAdd---------buy1get1-ValueSet------START---->
    <!-- navbar -->
    <?php include 'nav.php'; ?>
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

    <section id="sec2">
        <!-- <div class="d-flex justify-content-center align-items-center">
            <a href="buy1get1.php" onclick="rec_select(5)" role="button" class='btn btn-light text-white mx-2'>Buy now</a>
        </div> -->

    </section>
    <section id="sec2">
        <!-- <div class="d-flex justify-content-center align-items-center">
            <a href='buy1get1.php' class='btn btn-light text-white mx-2'>Buy now</a>
        </div> -->
    </section>
    <br><br><br>
    <div style="display: flex; justify-content: center;
    align-items: center; ">
        <img src="img/soon.png" width="40%" style="background:hsl(0, 55%, 47%); border-radius: 20%;">
        <h1 style="position:absolute;">coming soon</h1>
    </div>
    <br>
    <!-- footer -->

    <?php include 'footer.php'; ?>
    <script src="pizza.js"></script>
</body>

</html>