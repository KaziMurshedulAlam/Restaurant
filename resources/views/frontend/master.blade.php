<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/Fontend/assets/') }}/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('/Fontend/assets/') }}/style.css">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="{{ asset('/Fontend/assets/') }}/img/core-img/salad.png" alt="">
</div>

<!-- Search Wrapper -->
<div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Type any keywords...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
@include('frontend.include.header')
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
@yield('content')
<!-- ##### Follow Us Instagram Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('frontend.include.footer')
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('/Fontend/assets/') }}/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="{{ asset('/Fontend/assets/') }}/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="{{ asset('/Fontend/assets/') }}/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="{{ asset('/Fontend/assets/') }}/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="{{ asset('/Fontend/assets/') }}/js/active.js"></script>
</body>

</html>
