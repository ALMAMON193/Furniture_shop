<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Anil z" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Shopwise is Powerful features and You Can Use The Perfect Build this Template For Any eCommerce Website. The template is built for sell Fashion Products, Shoes, Bags, Cosmetics, Clothes, Sunglasses, Furniture, Kids Products, Electronics, Stationery Products and Sporting Goods.">
    <meta name="keywords"
        content="ecommerce, electronics store, Fashion store, furniture store,  bootstrap 4, clean, minimal, modern, online store, responsive, retail, shopping, ecommerce store">

    <!-- SITE TITLE -->
    <title>Shopwise - eCommerce Bootstrap 5 HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/images/favicon.png">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="frontend/css/animate.css">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="frontend/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="frontend/css/all.min.css">
    <link rel="stylesheet" href="frontend/css/ionicons.min.css">
    <link rel="stylesheet" href="frontend/css/themify-icons.css">
    <link rel="stylesheet" href="frontend/css/linearicons.css">
    <link rel="stylesheet" href="frontend/css/flaticon.css">
    <link rel="stylesheet" href="frontend/css/simple-line-icons.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="frontend/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="frontend/owlcarousel/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="frontend/css/magnific-popup.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="frontend/css/slick.css">
    <link rel="stylesheet" href="frontend/css/slick-theme.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="stylesheet" href="frontend/css/responsive.css">

</head>

<body>

    <!-- LOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Home Popup Section -->
    <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                    </button>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="popup_content">
                                <div class="popup-text">
                                    <div class="heading_s3 text-center">
                                        <h4>Subscribe and Get 25% Discount!</h4>
                                    </div>
                                    <p>Subscribe to the newsletter to receive updates about new products.</p>
                                </div>
                                <form method="post" class="rounded_input">
                                    <div class="form-group mb-3">
                                        <input name="email" required type="email" class="form-control"
                                            placeholder="Enter Your Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <button class="btn btn-fill-line btn-block text-uppercase btn-radius"
                                            title="Subscribe" type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox"
                                            id="exampleCheckbox3" value="">
                                        <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this
                                                popup again!</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top header_with_topbar">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="lng_dropdown me-2">
                                <select name="countries" class="custome_select">
                                    <option value='en' data-image="frontend/images/eng.png" data-title="English">
                                        English</option>
                                    <option value='fn' data-image="frontend/images/fn.png" data-title="France">
                                        France</option>
                                    <option value='us' data-image="frontend/images/us.png"
                                        data-title="United States">United States</option>
                                </select>
                            </div>
                            <div class="me-3">
                                <select name="countries" class="custome_select">
                                    <option value='USD' data-title="USD">USD</option>
                                    <option value='EUR' data-title="EUR">EUR</option>
                                    <option value='GBR' data-title="GBR">GBR</option>
                                </select>
                            </div>
                            <ul class="contact_detail text-center text-lg-start">
                                <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-end">
                            <ul class="header_list">
                                <li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a>
                                </li>
                                <li><a href="wishlist.html"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                                <li><a href="login.html"><i class="ti-user"></i><span>Login</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_header dark_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="frontend/images/logo_light.png" alt="logo" />
                        <img class="logo_dark" src="frontend/images/logo_dark.png" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-expanded="false">
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="dropdown">
                                <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle active"
                                    href="#">Home</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="index.html">Fashion 1</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="index-2.html">Fashion
                                                2</a></li>
                                        <li><a class="dropdown-item nav-link nav_item active"
                                                href="index-3.html">Furniture 1</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="index-4.html">Furniture
                                                2</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="index-5.html">Electronics
                                                1</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="index-6.html">Electronics
                                                2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#"
                                    data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="contact.html">Contact
                                                Us</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error
                                                Page</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="login.html">Login</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="signup.html">Register</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item"
                                                href="term-condition.html">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="#"
                                    data-bs-toggle="dropdown">Products</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Woman's</li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-list.html">Curabitur tempus</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-load-more.html">Vivamus in tortor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Men's</li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-cart.html">Donec vitae ante ante</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="checkout.html">Etiam ac rutrum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="wishlist.html">Quisque condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="compare.html">Curabitur laoreet</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="order-completed.html">Vivamus in tortor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Kid's</li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-left-sidebar.html">Quisque
                                                        condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-right-sidebar.html">Etiam ac
                                                        rutrum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-thumbnails-left.html">Donec vitae
                                                        ante ante</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-thumbnails-left.html">Donec
                                                        porttitor</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <ul>
                                                <li class="dropdown-header">Accessories</li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-left-sidebar.html">Quisque
                                                        condimentum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-right-sidebar.html">Etiam ac
                                                        rutrum</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-thumbnails-left.html">Donec vitae
                                                        ante ante</a></li>
                                                <li><a class="dropdown-item nav-link nav_item"
                                                        href="shop-product-detail-thumbnails-left.html">Donec
                                                        porttitor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="d-lg-flex menu_banners row g-3 px-3">
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="frontend/images/menu_banner11.jpg" alt="menu_banner1">
                                                <div class="banne_info">
                                                    <h6>10% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="frontend/images/menu_banner22.jpg" alt="menu_banner2">
                                                <div class="banne_info">
                                                    <h6>15% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="frontend/images/menu_banner33.jpg" alt="menu_banner3">
                                                <div class="banne_info">
                                                    <h6>23% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu dropdown-reverse">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler"
                                                href="#">Grids</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-three-columns.html">3 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-four-columns.html">4 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-right-sidebar.html">right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-standard-left-sidebar.html">Standard Left
                                                            Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-standard-right-sidebar.html">Standard right
                                                            Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler"
                                                href="#">Masonry</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-masonry-three-columns.html">3 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-masonry-four-columns.html">4 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-masonry-right-sidebar.html">right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler" href="#">Single
                                                Post</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-single.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-single-left-sidebar.html">left sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-single-slider.html">slider post</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-single-video.html">video post</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-single-audio.html">audio post</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler"
                                                href="#">List</a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-list-left-sidebar.html">left sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item"
                                                            href="blog-list-right-sidebar.html">right sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">Shop</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-9">
                                            <ul class="d-lg-flex">
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Shop Page Layout</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list.html">shop List view</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list-left-sidebar.html">shop List Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-list-right-sidebar.html">shop List Right
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-load-more.html">Shop Load More</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Other Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-cart.html">Cart</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="checkout.html">Checkout</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="my-account.html">My Account</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="wishlist.html">Wishlist</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="compare.html">compare</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="order-completed.html">Order Completed</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Product Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail.html">Default</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-left-sidebar.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-right-sidebar.html">Right
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item"
                                                                href="shop-product-detail-thumbnails-left.html">Thumbnails
                                                                Left</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <div class="header_banner">
                                                <div class="header_banner_content">
                                                    <div class="shop_banner">
                                                        <div class="banner_img overlay_bg_40">
                                                            <img src="frontend/images/shop_banner1.jpg"
                                                                alt="shop_banner" />
                                                        </div>
                                                        <div class="shop_bn_content">
                                                            <h5 class="text-uppercase shop_subtitle">New Collection
                                                            </h5>
                                                            <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                            <a href="#"
                                                                class="btn btn-white rounded-0 btn-sm text-uppercase">Shop
                                                                Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="javascript:;" class="nav-link search_trigger"><i
                                    class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control"
                                        id="search_input">
                                    <button type="submit" class="search_icon"><i
                                            class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            <div class="search_overlay"></div>
                            <div class="search_overlay"></div>
                        </li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                                data-bs-toggle="dropdown"><i class="linearicons-cart"></i><span
                                    class="cart_count">2</span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="frontend/images/cart_thamb1.jpg"
                                                alt="cart_thumb1">Variable product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>78.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="frontend/images/cart_thamb2.jpg"
                                                alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                    class="price_symbole">$</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                                class="price_symbole">$</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="#"
                                            class="btn btn-fill-line btn-radius view-cart">View Cart</a><a
                                            href="#" class="btn btn-fill-out btn-radius checkout">Checkout</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START SECTION BANNER -->
    <div class="banner_section slide_wrap shop_banner_slider staggered-animation-wrap">
        <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active background_bg" data-img-src="frontend/images/banner8.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                    <div class="banner_content2">
                                        <h6 class="mb-2 mb-sm-3 staggered-animation text-uppercase"
                                            data-animation="fadeInDown" data-animation-delay="0.2s">New Tranding</h6>
                                        <h2 class="staggered-animation" data-animation="fadeInDown"
                                            data-animation-delay="0.3s">Sofa Collection</h2>
                                        <p class="staggered-animation" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id
                                            varius nunc.</p>
                                        <a class="btn btn-line-fill btn-radius staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="fadeInUp"
                                            data-animation-delay="0.5s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="frontend/images/banner7.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                    <div class="banner_content2">
                                        <h5 class="mb-2 mb-sm-3 staggered-animation font-weight-light"
                                            data-animation="fadeInDown" data-animation-delay="0.2s">Get up to 50% off
                                            Today Only!</h5>
                                        <h2 class="staggered-animation" data-animation="fadeInDown"
                                            data-animation-delay="0.3s">Wooden Chair Collection</h2>
                                        <a class="btn btn-border-fill btn-radius staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item background_bg" data-img-src="frontend/images/banner9.jpg">
                    <div class="banner_slide_content banner_content_inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-8 col-sm-9 col-10">
                                    <div class="banner_content2">
                                        <h5 class="mb-2 mb-sm-3 staggered-animation font-weight-light"
                                            data-animation="fadeInDown" data-animation-delay="0.2s">Taking your
                                            Viewing Experience to Next Level</h5>
                                        <h2 class="staggered-animation" data-animation="fadeInDown"
                                            data-animation-delay="0.3s">Living Room Collection</h2>
                                        <a class="btn btn-border-fill btn-radius staggered-animation text-uppercase"
                                            href="shop-left-sidebar.html" data-animation="fadeInUp"
                                            data-animation-delay="0.4s">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators indicators_style2">
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            </ol>
        </div>
    </div>
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    <div class="main_content">

        <!-- START SECTION SHIPPING INFO -->
        <div class="section small_pb">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_box icon_box_style3">
                            <div class="icon">
                                <i class="flaticon-shipped"></i>
                            </div>
                            <div class="icon_box_content">
                                <h6>Free Delivery</h6>
                                <p>Worldwide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_box icon_box_style3">
                            <div class="icon">
                                <i class="flaticon-money-back"></i>
                            </div>
                            <div class="icon_box_content">
                                <h6>Money Returns</h6>
                                <p>30 Days money return</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_box icon_box_style3">
                            <div class="icon">
                                <i class="flaticon-support"></i>
                            </div>
                            <div class="icon_box_content">
                                <h6>27/4 Online Support</h6>
                                <p>Customer Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="icon_box icon_box_style3">
                            <div class="icon">
                                <i class="flaticon-lock"></i>
                            </div>
                            <div class="icon_box_content">
                                <h6>Payment Security</h6>
                                <p>Safe Payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START SECTION SHIPPING INFO -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb_20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s3 text-center">
                            <h2>Exclusive Products</h2>
                        </div>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row shop_container">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img1.jpg" alt="furniture_img1">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">enim expedita sed</a>
                                </h6>
                                <div class="product_price">
                                    <span class="price">$45.00</span>
                                    <del>$55.25</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img2.jpg" alt="furniture_img2">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">adipisci officia
                                        libero</a></h6>
                                <div class="product_price">
                                    <span class="price">$55.00</span>
                                    <del>$95.00</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:68%"></div>
                                    </div>
                                    <span class="rating_num">(15)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img3.jpg" alt="furniture_img3">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">Internet tend to
                                        repeat</a></h6>
                                <div class="product_price">
                                    <span class="price">$68.00</span>
                                    <del>$99.00</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:87%"></div>
                                    </div>
                                    <span class="rating_num">(25)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img4.jpg" alt="furniture_img4">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">Many desktop
                                        publishing</a></h6>
                                <div class="product_price">
                                    <span class="price">$69.00</span>
                                    <del>$89.00</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:70%"></div>
                                    </div>
                                    <span class="rating_num">(22)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img5.jpg" alt="furniture_img5">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">injected humour
                                        repetition</a></h6>
                                <div class="product_price">
                                    <span class="price">$45.00</span>
                                    <del>$55.25</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:80%"></div>
                                    </div>
                                    <span class="rating_num">(21)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img6.jpg" alt="furniture_img6">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">randomised humour
                                        words</a></h6>
                                <div class="product_price">
                                    <span class="price">$55.00</span>
                                    <del>$95.00</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:68%"></div>
                                    </div>
                                    <span class="rating_num">(15)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img7.jpg" alt="furniture_img7">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">expedita distinctio
                                        rerum</a></h6>
                                <div class="product_price">
                                    <span class="price">$68.00</span>
                                    <del>$99.00</del>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:87%"></div>
                                    </div>
                                    <span class="rating_num">(25)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="product_box text-center">
                            <div class="product_img">
                                <a href="shop-product-detail.html">
                                    <img src="frontend/images/furniture_img8.jpg" alt="furniture_img8">
                                </a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="shop-compare.html" class="popup-ajax"><i
                                                    class="icon-shuffle"></i></a></li>
                                        <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                    class="icon-magnifier-add"></i></a></li>
                                        <li><a href="#"><i class="icon-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6 class="product_title"><a href="shop-product-detail.html">Itaque earum rerum</a>
                                </h6>
                                <div class="product_price">
                                    <span class="price">$69.00</span>
                                    <del>$89.00</del>
                                    <div class="on_sale">
                                        <span>20% Off</span>
                                    </div>
                                </div>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width:70%"></div>
                                    </div>
                                    <span class="rating_num">(22)</span>
                                </div>
                                <div class="pr_desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa
                                        enim. Nullam id varius nunc id varius nunc.</p>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#" class="btn btn-fill-out btn-radius"><i
                                            class="icon-basket-loaded"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION BANNER -->
        <div class="section pb_20 small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single_banner">
                            <img src="frontend/images/furniture_banner1.jpg" alt="furniture_banner1">
                            <div class="fb_info">
                                <h5 class="single_bn_title1">Super Sale</h5>
                                <h3 class="single_bn_title">New Collection</h3>
                                <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single_banner">
                            <img src="frontend/images/furniture_banner2.jpg" alt="furniture_banner2">
                            <div class="fb_info2">
                                <h3 class="single_bn_title">New Season</h3>
                                <h4 class="single_bn_title1">Sale 40% Off</h4>
                                <a href="shop-left-sidebar.html" class="single_bn_link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION BANNER -->

        <!-- START SECTION SHOP -->
        <div class="section small_pt pb_20">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="heading_s3 text-center">
                            <h2>Trending items</h2>
                        </div>
                        <div class="small_divider clearfix"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product_slider carousel_slider owl-carousel owl-theme nav_style4" data-loop="true"
                            data-dots="false" data-nav="true" data-margin="30"
                            data-responsive='{"0":{"items": "1"}, "481":{"items": "2"}, "768":{"items": "3"}, "1199":{"items": "4"}}'>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img1.jpg" alt="furniture_img1">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">enim expedita
                                                sed</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img2.jpg" alt="furniture_img2">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">adipisci officia
                                                libero</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img3.jpg" alt="furniture_img3">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Internet tend to
                                                repeat</a></h6>
                                        <div class="product_price">
                                            <span class="price">$68.00</span>
                                            <del>$99.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:87%"></div>
                                            </div>
                                            <span class="rating_num">(25)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img4.jpg" alt="furniture_img4">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">Many desktop
                                                publishing</a></h6>
                                        <div class="product_price">
                                            <span class="price">$69.00</span>
                                            <del>$89.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:70%"></div>
                                            </div>
                                            <span class="rating_num">(22)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img5.jpg" alt="furniture_img5">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">injected humour
                                                repetition</a></h6>
                                        <div class="product_price">
                                            <span class="price">$45.00</span>
                                            <del>$55.25</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="rating_num">(21)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="product_box text-center">
                                    <div class="product_img">
                                        <a href="shop-product-detail.html">
                                            <img src="frontend/images/furniture_img6.jpg" alt="furniture_img6">
                                        </a>
                                        <div class="product_action_box">
                                            <ul class="list_none pr_action_btn">
                                                <li><a href="shop-compare.html" class="popup-ajax"><i
                                                            class="icon-shuffle"></i></a></li>
                                                <li><a href="shop-quick-view.html" class="popup-ajax"><i
                                                            class="icon-magnifier-add"></i></a></li>
                                                <li><a href="#"><i class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_info">
                                        <h6 class="product_title"><a href="shop-product-detail.html">randomised humour
                                                words</a></h6>
                                        <div class="product_price">
                                            <span class="price">$55.00</span>
                                            <del>$95.00</del>
                                        </div>
                                        <div class="rating_wrap">
                                            <div class="rating">
                                                <div class="product_rate" style="width:68%"></div>
                                            </div>
                                            <span class="rating_num">(15)</span>
                                        </div>
                                        <div class="pr_desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                                blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#" class="btn btn-fill-out btn-radius"><i
                                                    class="icon-basket-loaded"></i> Add To Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION SHOP -->

        <!-- START SECTION INSTAGRAM IMAGE -->
        <div class="section small_pt small_pb">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">

                        <div class="follow_box">
                            <i class="ti-instagram"></i>
                            <h3>instagram</h3>
                            <span>@shoppingzone</span>
                        </div>
                        <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false"
                            data-margin="0" data-loop="true" data-autoplay="true"
                            data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "6"}}'>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta1.jpg" alt="furniture_insta1" />
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta2.jpg" alt="furniture_insta2" />
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta3.jpg" alt="furniture_insta3" />
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta4.jpg" alt="furniture_insta4" />
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta5.jpg" alt="furniture_insta5" />
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="instafeed_box">
                                    <a href="#">
                                        <img src="frontend/images/furniture_insta6.jpg" alt="furniture_insta6" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION INSTAGRAM IMAGE -->

        <!-- START SECTION CLIENT LOGO -->
        <div class="section small_pt">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="client_logo carousel_slider owl-carousel owl-theme" data-dots="false"
                            data-margin="30" data-loop="true" data-autoplay="true"
                            data-responsive='{"0":{"items": "2"}, "480":{"items": "3"}, "767":{"items": "4"}, "991":{"items": "5"}}'>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo1.png" alt="cl_logo" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo2.png" alt="cl_logo" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo3.png" alt="cl_logo" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo4.png" alt="cl_logo" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo5.png" alt="cl_logo" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="cl_logo">
                                    <img src="frontend/images/cl_logo6.png" alt="cl_logo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CLIENT LOGO -->

    </div>
    <!-- END MAIN CONTENT -->

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Contact info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, NewYork, USA</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <ul class="social_icons rounded_social">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a>
                                </li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a>
                                </li>
                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a>
                                </li>
                                <li><a href="#" class="sc_youtube"><i
                                            class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i
                                            class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Subscribe Our Newsletter</h6>
                            <p>If you want to get an email from us every time we have a new special offer, then sign up
                                here!</p>
                            <div class="newsletter_form rounded_input">
                                <form>
                                    <input type="text" required="" class="form-control"
                                        placeholder="Enter Email Address">
                                    <button type="submit" class="btn-send" name="submit" value="Submit"><i
                                            class="icon-envelope-letter"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer border-top-tran">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-start">© 2020 All Rights Reserved by Bestwebcreator</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-md-end">
                            <li><a href="#"><img src="frontend/images/visa.png" alt="visa"></a></li>
                            <li><a href="#"><img src="frontend/images/discover.png" alt="discover"></a></li>
                            <li><a href="#"><img src="frontend/images/master_card.png"
                                        alt="master_card"></a>
                            </li>
                            <li><a href="#"><img src="frontend/images/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="frontend/images/amarican_express.png"
                                        alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

    <!-- Latest jQuery -->
    <script src="frontend/js/jquery-3.7.1.min.js"></script>
    <!-- popper min js -->
    <script src="frontend/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="frontend/bootstrap/js/bootstrap.min.js"></script>
    <!-- owl-carousel min js  -->
    <script src="frontend/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- magnific-popup min js  -->
    <script src="frontend/js/magnific-popup.min.js"></script>
    <!-- waypoints min js  -->
    <script src="frontend/js/waypoints.min.js"></script>
    <!-- parallax js  -->
    <script src="frontend/js/parallax.js"></script>
    <!-- countdown js  -->
    <script src="frontend/js/jquery.countdown.min.js"></script>
    <!-- imagesloaded js -->
    <script src="frontend/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js -->
    <script src="frontend/js/isotope.min.js"></script>
    <!-- jquery.dd.min js -->
    <script src="frontend/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="frontend/js/slick.min.js"></script>
    <!-- elevatezoom js -->
    <script src="frontend/js/jquery.elevatezoom.js"></script>
    <!-- scripts js -->
    <script src="frontend/js/scripts.js"></script>

</body>

</html>
