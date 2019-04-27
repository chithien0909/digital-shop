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
                    <div class="single-post">
                        <h4 class="brand">Branding & Design</h4>
                        <div class="top-title">
                            <h2 class="title">Premium Logo and Branding Identity Package Design Service</h2>
                            <div class="action">
                                <button class="btn btn-primary">Add to cart</button>
                                <button class="btn btn-light">
                                    <img src="./images/bookmark.svg" alt="Boomark">
                                </button>
                            </div>
                        </div>
                        <p class="price">20.000.000đ</p>
                        <hr>
                        <div class="content">
                            <h4>Lorem ipsum</h4>
                            <p>
                                Dolor sit amet, consectetur adipiscing elit. Cras accumsan turpis magna, id dignissim orci
                                volutpat et. Praesent id urna accumsan, vestibulum est et, convallis nisi. Integer
                                cursus lorem accumsan massa pulvinar mattis. Aenean et sodales tellus, at lacinia eros.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor, neque et
                                vulputate scelerisque, risus mauris tristique nisi, vehicula convallis velit mi non
                                elit. Sed in urna eu massa pulvinar luctus. Curabitur placerat leo at elit convallis
                                pretium. Morbi urna sem, elementum a ligula eget, aliquam finibus quam. Nullam dictum
                                vestibulum elit. Praesent ipsum nulla, placerat sit amet viverra in, finibus eget metus.
                                Duis finibus velit purus. Sed quis erat vel massa venenatis faucibus. Maecenas condimentum
                                rhoncus purus sit amet ullamcorper. Phasellus pretium neque ac justo tempor, id rhoncus
                                turpis consectetur. Nam vitae pharetra justo, sed maximus risus.
                            </p>
                            <h4>Sed finibus</h4>
                            <p>
                                Dignissim enim, pretium auctor nunc tincidunt in. Cras suscipit eros et lacus placerat, sed
                                iaculis turpis feugiat. In sit amet tristique enim. Aliquam aliquam non libero quis tincidunt.
                                Phasellus vulputate risus justo, ut mattis velit mollis non. Duis quis mi congue, lobortis
                                dolor ac, iaculis felis. Sed quis leo varius, venenatis felis vitae, consequat dui. Sed quis
                                tempor tellus. Donec placerat lectus quis mi vestibulum, in molestie mauris aliquet. In dapibus
                                lacus ac lorem tincidunt, sit amet semper diam faucibus. Fusce ut tristique ex. Aliquam mollis
                                malesuada ligula, a dignissim velit ornare at. Sed gravida metus ut arcu varius, eu interdum
                                tortor vestibulum. Donec pulvinar lobortis porttitor. Proin ornare efficitur turpis vel dictum.
                                Vestibulum vestibulum, libero et aliquet iaculis, massa augue tristique massa, nec hendrerit
                                nisl sapien sed sapien.
                                Pellentesque at tristique metus
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                Mauris sit amet urna sed velit volutpat pellentesque. Nullam sapien enim, congue a auctor et,
                                commodo sed leo. Donec porta efficitur elit, eu tincidunt augue luctus eu. Phasellus sed odio
                                orci. Fusce mollis eget nulla non laoreet. Donec sed massa felis. Phasellus eu tincidunt turpis.
                                Phasellus sollicitudin mattis purus, quis egestas libero rutrum in. Pellentesque mattis nec urna
                                ac euismod. Curabitur fermentum rhoncus purus, in convallis sem feugiat nec. Nullam quis est vitae
                                neque fermentum tristique. Nulla ultricies felis in leo pellentesque tempor. Phasellus malesuada
                                leo orci, id auctor velit molestie sit amet. Proin quis nunc nisi.</p>
                        </div>
                    </div>
                </div>

                <div class="site-content">
                    <div class="brand-title">
                        <h3 class="title">Similar products</h3>
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