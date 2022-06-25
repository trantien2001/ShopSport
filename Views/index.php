<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta property="og:type" content="website" />
    <!-- <meta property="og:url" content="https://alla.com.vn/kien-thuc" /> -->
    <meta property="og:title" content="Kiến thức thiết kế website" />
    <meta property="og:description" content="Hãy cùng nhau chia sẻ kiến thức website" />
    <meta property="og:image" content="URL_IMAGE" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="fb:app_id" content="1172254123182317" />

    <title>ShopSport</title>
    <link rel="stylesheet prefetch" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">

    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="./library/font/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./library/css/structure.css">
    <link rel="stylesheet" href="./library/css/main.css">
    <link rel="stylesheet" href="./library/css/base.css">
    <link rel="stylesheet" href="./library/css/responsive.css">
    <link rel="stylesheet" href="./library/css/grid.css">

    <!-- <script src="./library/jquery-3.6.0.min.js"></script> -->


</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div id="app">
        <div id="header">
            <?php require_once("Views/structure/header.php"); ?>
        </div>
        <div id="nav">
            <?php require_once("Views/structure/navigation.php"); ?>
        </div>
        <div id="content">
            <?php require_once("Views/directional.php"); ?>
        </div>
        <div id="footer-top">
            <ul>
                <li>
                    <h1 class="fas fa-truck">&nbsp;&nbsp;MIỄN PHÍ VẬN CHUYỂN</h1>
                    <p>Nội thành Đà Nẵng >= 300.000 VNĐ</p>
                </li>
                <div class="thanh"></div>
                <li>
                    <h1 class="fas fa-cog">&nbsp;&nbsp;GIAO HÀNG TẬN NƠI</h1>
                    <p>Thanh toán tại nhà</p>
                </li>
                <div class="thanh"></div>
                <li>
                    <h1 class="fas fa-phone-alt">&nbsp;&nbsp;ĐẶT HÀNG TRỰC TUYẾN</h1>
                    <p>0912686868</p>
                </li>
                <div class="thanh"></div>
                <li>
                    <h1 class="fab fa-servicestack">&nbsp;&nbsp;DỊCH VỤ</h1>
                    <p>Làm cúp - cờ - huy chương - in ấn</p>
                </li>
            </ul>
        </div>
        <div id="footer">
            <?php require_once("Views/structure/footer.php"); ?>
        </div>
    </div>
</body>
</html>