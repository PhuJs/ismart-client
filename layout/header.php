<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/phpmaster/project/ismart-client/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="./public/fonts/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./public/css/carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Ismart</title>
</head>

<body>
    <!-- ======== APPLICATION ========= -->
    <div id="apps">
        <!-- ====== HEADER ====== -->
        <header id="header">
            <section id="header_top" class="d-none d-md-block">
                <div class="container d-flex justify-content-between align-items-center">
                    <a href="?" id="payment_link">
                        <i class="fa-solid fa-link"></i>
                        Hình thức thanh toán
                    </a>
                    <nav>
                        <ul id="main_menu">
                            <li><a href="?">Trang chủ</a></li>
                            <li><a href="?page=product_cat">Sản phẩm</a></li>
                            <li><a href="?page=list_post">Blog</a></li>
                            <li><a href="?page=about">Giới thiệu</a></li>
                            <li><a href="?page=about">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            <section id="header_body">
                <div class="container d-flex justify-content-between align-items-center">
                    <a href="?" id="logo">
                        <img src="./public/images/logo.png" alt="">
                    </a>
                    <div id="form_search" class="d-none d-md-block">
                        <form action="">
                            <input type="text" name="input_search" placeholder="Nhập từ khóa tìm kiếm tại đây">
                            <input type="submit" name="submit_form" value="Tìm kiếm" class="submit_form">
                        </form>
                    </div>
                    <div class="header_body_right">
                        <div id="contact" class="d-none d-lg-block">
                            <i class="fa-solid fa-phone-volume"></i>
                            <p class="title">Tư vấn</p>
                            <span class="phone">0702.988.414</span>
                        </div>
                        <div id="cart">
                            <a href="?page=cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                            <span class="total_cart">
                                6
                            </span>
                            <div id="dropdown">
                                <p class="alert">Có <span class="text-danger">6 sản phẩm </span>trong giỏ hàng</p>
                                <ul class="list_cart">
                                    <li>
                                        <a href="" class="cart_thumb">
                                            <img src="./public/images/img-pro-01.png" alt="">
                                        </a>
                                        <div>
                                            <a href="" class="product_name">Iphone 11</a>
                                            <p class="price">20.000.000đ</p>
                                            <p class="qty">Số lượng <span>6</span></p>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="" class="cart_thumb">
                                            <img src="./public/images/img-pro-01.png" alt="">
                                        </a>
                                        <div>
                                            <a href="" class="product_name">Iphone 11</a>
                                            <p class="price">20.000.000đ</p>
                                            <p class="qty">Số lượng: <span>6</span></p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total_price">
                                    <p>Tổng:</p>
                                    <p>20.000.000đ</p>
                                </div>
                                <div class="action_cart">
                                    <a href="?page=cart" class="btn_cart">Giỏ hàng</a>
                                    <a href="?page=payment" class="btn_payment">Thanh toán</a>
                                </div>
                            </div>
                        </div>
                        <div id="navbar_responsive" class="d-lg-none">
                            <button class="toggle_menu_responsive">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </header>
