<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital shop</title>
    <!--Bootstrap link    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--Custom css   -->
    <link rel="stylesheet" href="./scss/main.css">
</head>
<body>
    <header class="site-header">
        <div class="container-fluid">
            <div id="header" class="header">
                <div class="left-header">
                    <div class="logo">
                        <a href="./">
                            <img src="./images/logo.svg" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="right-header">
                    <div class="menu">
                        <div id="toggle" class="menu-icon">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                        <div id="overlay" class="overlay">
                            <nav class="overlay-menu">
                                <ul class="menu-content">
                                    <li class="menu-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Service</a>
                                    </li>
                                    <li class="menu-item active">
                                        <a href="#">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Blog</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Contact</a>
                                    </li>
                                    <li class="menu-item cart">
                                        <a href="#">
                                            <img style="width: 20px ;height: 20px" src="./images/cart.svg" alt="Cart">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="site-body mt-md-100" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div id="sidebar" class="sidebar">
                        <div id="sidebar-icon" class="s-layout__sidebar">
                            <img src="./images/arrow-more-yellow.svg" alt="Image">
                        </div>
                        <div class="sidebar-content">
                            <div class="input-search">
                                <form action="./">
                                    <input name="q" type="text" placeholder="Search">
                                    <input type="submit" value="">
                                </form>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 15px" src="./images/star.svg" alt="Icon">
                                <a href="#">Branding and Design</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 15px" src="./images/icon_1.svg" alt="Icon">
                                <a href="#">Content Marketing</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 8.4px" src="./images/icon_2.svg" alt="Icon">
                                <a href="#">Web Developing</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 16px" src="./images/icon_3.svg" alt="Icon">
                                <a href="#">Advertising</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 15px" src="./images/star.svg" alt="Icon">
                                <a href="#">Branding and Design</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 15px" src="./images/icon_1.svg" alt="Icon">
                                <a href="#">Content Marketing</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 8.4px" src="./images/icon_2.svg" alt="Icon">
                                <a href="#">Web Developing</a>
                            </div>
                            <div class="item">
                                <img style="width: 16px;height: 16px" src="./images/icon_3.svg" alt="Icon">
                                <a href="#">Advertising</a>
                            </div>
                            <div class="item budget">
                                <h6 class="title">Budget</h6>
                                <hr>
                                <ul>
                                    <li><a href="#">100k - 500k</a></li>
                                    <li><a href="#">500k - 1 million</a></li>
                                    <li><a href="#">1 million - 5 million</a></li>
                                    <li><a href="#">5 million - 50 million</a></li>
                                    <li><a href="#">50 million +</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="banner">
                        <img class="img-bg" src="./images/img_1.png" alt="Image">
                        <div class="content">
                            <h3 class="title">The total marketing solution for your business.</h3>
                            <p class="subtitle">Professional. Efficient. Indespensible.</p>
                            <a class="more" href="#">Learn more</a>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_2.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">
                                                    Premium Logo
                                                </a></h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Branding and Design</h3>
                            <div class="see-all">
                                <a href="#">
                                    See all
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">
                                                    Premium Logo
                                                </a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_6.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_7.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_8.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Content Marketing</h3>
                            <div class="see-all">See all</div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_6.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_7.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_8.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Web Developing</h3>
                            <div class="see-all">
                                <a href="#">See all</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_6.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_7.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_8.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">Premium Logo</h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Advertising</h3>
                            <div class="see-all">
                                <a href="#">See all</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_6.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_7.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_8.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="list-branding">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <div class="box_1">
                                        <a href="#">
                                            <div class="img-bg">
                                                <img src="./images/img_10.png" alt="Image">
                                            </div>
                                            <div class="box-body">
                                                <h4 class="title"><a href="#">
                                                        Branding & Graphic Design
                                                    </a></h4>
                                                <a class="more" href="#">Learn more</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="box_1">
                                        <a href="#">
                                            <div class="img-bg">
                                                <img src="./images/img_10.png" alt="Image">
                                            </div>
                                            <div class="box-body">
                                                <h4 class="title"><a href="#">
                                                        Branding & Graphic Design
                                                    </a></h4>
                                                <a class="more" href="#">Learn more</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="box_1">
                                        <a href="#">
                                            <div class="img-bg">
                                                <img src="./images/img_10.png" alt="Image">
                                            </div>
                                            <div class="box-body">
                                                <h4 class="title"><a href="#">
                                                        Branding & Graphic Design
                                                    </a></h4>
                                                <a class="more" href="#">Learn more</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="box_1">
                                        <a href="#">
                                            <div class="img-bg">
                                                <img src="./images/img_10.png" alt="Image">
                                            </div>
                                            <div class="box-body">
                                                <h4 class="title"><a href="#">
                                                        Branding & Graphic Design
                                                    </a></h4>
                                                <a class="more" href="#">Learn more</a>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Promotion</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_9.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_9.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title"><a href="#">Premium Logo</a></h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_9.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">Combo</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="site-content">
                        <div class="brand-title">
                            <h3 class="title">You’ve checked this out recently</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_5.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title"><a href="#">
                                                    Premium Logo
                                                </a></h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_3.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="box">
                                    <div class="img-top">
                                        <img src="./images/img_4.png" alt="Image">
                                    </div>
                                    <div class="brand">
                                        <a href="#">Branding Design</a>
                                    </div>
                                    <div class="box-body">
                                        <div class="b-left">
                                            <h4 class="title">
                                                <a href="#">Premium Logo</a>
                                            </h4>
                                            <p class="price">20.000.000đ</p>
                                        </div>
                                        <div class="cart">
                                            <a href="#">
                                                <img style="width: 30px;height: 30px" src="./images/cart_gray.svg" alt="Cart">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="site-footer">
        <div class="container-fluid">

            <div class="footer">
                <div class="copyright">
                    <p>©2018 with love and passion by Van Tay Media.</p>
                </div>
                <div class="social-media">
                    <a href="#">
                        <img style="width: 40px; height: 40px" src="./images/fb.svg" alt="Facebook">
                    </a>
                    <a href="#">
                        <img style="width: 40px; height: 40px" src="./images/twitter.svg" alt="Twitter">
                    </a>
                    <a href="#">
                        <img style="width: 40px; height: 40px" src="./images/youtube.svg" alt="Youtube">
                    </a>
                    <a href="#">
                        <img style="width: 40px; height: 40px" src="./images/instagram.svg" alt="Instagram">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>