<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testcart</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link accesskey="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Thai:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body onload="retrieve(); count();">
    <div class="popup-screen">
        <div class="popup-cart">
            <div class="top">
                <h2><b>Cart</b></h2>
                <button type="submit" class="btn btn-danger close-btn"><i class="fa fa-close"></i></button>
            </div>
            <hr width="100%">
            <div class="text">
                <h5><b>รายการอาหาร</b></h5>
            </div><br>

            <div class="order-wrap" id="order">

            </div>
            <div class="bbott">
                <div class="row">
                    <div class="col-4 text-center" id="text"><b>ราคารวม</b></div>
                    <div class="col-4 text-center" id="cost"><b>0</b></div>
                    <div class="col-4 text-center" id="cost"><b>฿</b></div>
                </div><br>
                <div class="text-center">
                    <!-- <button type="submit" class="btn btn-danger px-5" onclick="count()">show count</button> -->
                    <button type="submit" class="btn btn-danger px-5" onclick="del()">Clear Your Cart</button>
                </div>
            </div>


            <div class="bott">
                <button onclick="del()" type="submit" class="btn btn-success px-5">ชำระเงิน</button>
            </div>

        </div>
    </div>
    <div>

        <button type="submit" class="btn btn-success p-2 open-btn"><i class="fa fa-shopping-cart" style="font-size:24px"></i>
            <div  id="count_cart" style="background-color: red; position:absolute; top:-10px; left:-15px; font-size:18px; border-radius:50%; width:70%;">0</div>
        </button>
    </div>

</body>
<script src="script.js"></script>

</html>