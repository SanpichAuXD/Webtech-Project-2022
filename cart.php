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

<body >

    <div class="popup-screen">
        <div class="popup-cart">
            <div class="top">
                <h2><b>Cart</b></h2>
                <button type="submit" class="btn btn-danger close-btn"><i class="fa fa-close"></i></button>
            </div>
            <hr width="100%">
            <div class="text">
                <h5><b>รายการอาหาร</b></h5>
            </div>

            <div class="order-wrap" id="order">
                <div class="box">
                    <div class="row">
                        <div class="col-3"><img class="img-fluid" src="./img/cheese/Hawaiian_m.png"></div>
                        <div class="col-6">
                            <h4 style="font-size: 18px;">1 × EXTREME CHEESE LARGE</h4>
                            <p></p>
                            
                        </div>
                        <div class="col-3">
                            <h4>319</h4>
                        </div>
                    </div>
</div>
                </div>
                <div class="bbott">
                    <div class="row">
                        <div class="col-6" id="text"><b>ราคารวม</b></div>
                        <div class="col-6" id="value"><b>xxx ฿</b></div>
                    </div>
                </div>

                <div class="bott">
                    <button type="submit" class="btn btn-success px-5">ชำระเงิน</button>
                </div>
            </div>
        </div>
        <button class="btn btn-primary"
            onclick='addPizza("Havaiian",319,"./img/cheese/Hawaiian_m.png")'>Havaiian</button>
        <button class="btn btn-primary">Havaiian</button>
        <button class="btn btn-primary">Havaiian</button>


        <button type="submit" class="btn btn-success p-2 open-btn"><i class="fa fa-shopping-cart"
                style="font-size:24px"></i></button>
        <script src="script.js">
        </script>
</body>

</html>