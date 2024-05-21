=
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lạc Lạc</title>
    <!-- font gg -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="./index.php">
                <img src="../img/logo_1.png" alt="img_logo.jpg" id="img_logo">
                <span id="img_logo-name">Lạc Lạc</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link "  aria-current="page" href="./index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-item-active" href="./product123.php">Thực đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Hoạt động</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Liên hệ</a>
                    </li>
                    <li href="#" class="btn btn-warning">
                        Đặt món
                    </li>
                    <li class="ms-auto d-lg-none d-md-block mx-auto my-3" id="cart">
                        <span>0 <sup>đ</sup></span>
                        <i class="fa-solid fa-cart-shopping sm-warning">
                            <div id="cart-number">
                                <p>0</p>
                            </div>
                        </i>
                    </li>
                </ul>
                <div class="ms-auto d-lg-block d-none  me-3" id="cart">
                    <span>0 <sup>đ</sup></span>
                    <i class="fa-solid fa-cart-shopping sm-warning">
                        <div id="cart-number">
                            <p>0</p>
                        </div>
                    </i>
                </div>
            </div>
        </div>
    </nav>

