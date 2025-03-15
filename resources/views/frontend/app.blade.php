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
    <title>@yield('title')</title>
    @include('frontend.partials.style')
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
    @include('frontend.partials.home_popup')
    <!-- End Screen Load Popup Section -->

    <!-- START HEADER -->
    @include('frontend.partials.header')
    <!-- END HEADER -->

    <!-- START SECTION BANNER -->
    @include('frontend.partials.banner')
    <!-- END SECTION BANNER -->

    <!-- END MAIN CONTENT -->
    @yield('content')
    <!-- END MAIN CONTENT -->

    <!-- START FOOTER -->
    @include('frontend.partials.footer')
    <!-- END FOOTER -->

    <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
    <!-- js all file-->
    @include('frontend.partials.script')

</body>

</html>
