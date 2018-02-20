<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    {{--<script src="E:\ProektLaravel\prvProekt\info\js\jquery.js"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {{--<script src="E:\ProektLaravel\prvProekt\info\js\bootstrap.js"></script>--}}
<!-- Custom styles for this template -->
    {{--<link href="E:\ProektLaravel\prvProekt\css\shop-homepage.css" rel="stylesheet">--}}

    <style>

        body {
            font-family: 'Varela';font-size: 15px;
        }

        /* ADvertisment box Top CSS */
        .adbox-img {
            padding:8px;
            border: 1px solid #ababab;
            background-color : #e2e2e2;
        }
        .adbox-img img {
            border: 1px solid #ababab;
        }


        /* Top Filter Box */

        .tfilter-box {
            padding:8px;
            border: 1px solid #ababab;
            background-color : #e2e2e2;
        }

        .form-control, select {
            display: block;
            width: 100%;
            height: 44px;
            border: 1px solid #ededed;
            border-radius: 0;
            background-color: #fff;
            background-image: none;
            box-shadow: none;
            color: #000;
            font-size: 14px;
            line-height: 1.42857143;
        }
        /* Card Box */
        .price{
            font-size: 30px;
            margin: 0 auto;
            color: #333;
        }
        .right{
            float:right;
            border-bottom: 2px solid green;
        }
        .thumbnail{
            opacity:0.80;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            padding:15px;
            margin-bottom:25px;
        }
        .thumbnail:hover{
            opacity:1.00;
            box-shadow: 0px 0px 10px #e8500e;
        }
        .line{
            margin-bottom: 5px;

        }
        .ratings {
            color:green;
        }
        @media screen and (max-width: 770px) {
            .right{
                float:left;
                width: 100%;
            }
        }


        /* Generic CSS */

        .bg-grey {
            border-top: 1px solid rgba(0, 0, 0, .1);
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            background-color: #f5f5f5;
        }
        .bg-dgrey {
            border-top: 1px solid rgba(0, 0, 0, .1);
            border-bottom: 1px solid rgba(0, 0, 0, .1);
            background-color: #414551;
            color:#fff;
        }


        .TBpadding10 {
            padding-top:10px;
            padding-bottom:10px;
        }

        .paddingTB60{
            padding-top:60px;
            padding-bottom:60px;
        }
        .paddingTLR35 {
            padding: 15px 15px 15px;
        }
        .margin-b-30 {
            margin-bottom: 30px;
        }
        .margin-t-40 {
            margin-top: 90px;
            margin-bottom:2px;

        }
        .margin-b-20 {
            margin-bottom: 20px;
        }


        .margin-TB-30 {
            margin-bottom: 40px;
            margin-top:30px;
        }
        .icon {
            color : #e6e6e6;
            font-size:45px;
            padding-bottom:15px;
        }
        .icon2 {
            color : #ff8500;
            font-size:35px;
            padding-right:10px;
        }
        .border {
            background: #e2e2e2 none repeat scroll 0 0;
            border-radius: 2px;
            display: inline-block;
            height: 1px;
            position: relative;
            width: 20%;
            margin-bottom:35px;

        }
        .site-btn1 {
            background-color: #e8500e;
            height: 55px;
            line-height: 55px;
            border: none;
            padding: 0 55px 0 50px;
            border-radius: 3px;
            color: #ffffff;

        }
        .site-btn1:hover {
            background-color: #cb202d;
            height: 55px;
            line-height: 55px;
            border: none;
            padding: 0 55px 0 50px;
            border-radius: 3px;
            color: #ffffff;
            transition: all .5s ease-in;
        }
        .site-btn2 {
            padding: 10px 25px;
            font-size: 14px;
            color: #fff;
            background: #696969;
            cursor: pointer;
            border-radius: 3px;
            text-transform: uppercase;
            font-weight: 700;
            border: none;
        }
        .site-btn2:hover {
            background-color: #e8500e;
            border-radius: 3px;
            transition: all .25s ease-in;
        }

        .site-btn3 {
            font-size: 14px;
            color: #fff;
            background: #696969;
            cursor: pointer;
            border-radius: 3px;
            text-transform: uppercase;
            font-weight: 700;
            border: none;
        }
        .site-btn3:hover {
            background-color: #e8500e;
            border-radius: 3px;
            transition: all .25s ease-in;
        }

        a:hover, a:active, a:focus {
            outline: 0;
            text-decoration: none;
            color: #0d9de5;
        }
        a {
            color: #666666;
        }
        /***************************************** */
        /* Site-Heading */
        .site-heading h3 {
            font-size: 30px;
            margin-bottom: 17px;
            font-weight: 400;
            text-shadow:3px 4px 6px #90a4ae;
        }
        /* Span Text Class */
        .p-color {
            color: #e53031;
        }
        /* List Group CSS */
        .list-group-item {
            background-color: #e2e2e2;
        }
        .list-group-item a {
            color:#878787;
        }
        .list-group-item:hover {
            background: #e8500e;
            color:#878787;
        }
        .list-group-item a:hover {
            color: #878787;
        }

        .list-group-item.active {
            background: #696969;
            border-color: #fff;

        }

        .list-group-item.active:hover {
            background: #e8500e;
            border-color: #fff;
        }
        .list-group-item.active a {
            color: #fff;
            font-weight:400;
        }
        .list-group {
            border-radius : 0px;
            font-weight:400;


        }
        .list-group li a > i {
            color: #999;
            margin-right: 5px;
            font-size:8px;
        }
        .right-content-bg {
            margin-bottom: 1.875rem;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            border: 1px solid #ddd;
            background-color: #fff;

        }

        /*Navigation CSS */
        .navbar-default {
            background-color: #ffffff;
            border-color: #ffffff;
            letter-spacing: 0.8px;
            font-weight:500;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            padding-top:10px;
            padding-bottom:10px;
        }
        .navbar-default .navbar-brand {
            color: #454647;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
            color: #01509a;
        }
        .navbar-default .navbar-text {
            color: #454647;
        }
        .navbar-default .navbar-nav > li > a {
            color: #454647;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
            color: #01509a;
        }
        .navbar-default .navbar-nav > li > .dropdown-menu {
            background-color: #ffffff;
        }
        .navbar-default .navbar-nav > li > .dropdown-menu > li > a {
            color: #454647;
        }
        .navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
        .navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
            color: #01509a;
            background-color: #ffffff;
        }
        .navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
            background-color: #ffffff;
        }
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
        .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #01509a;
            background-color: #ffffff;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
            color: #01509a;
            background-color: #ffffff;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
            color: #01509a;
            background-color: #ffffff;
        }
        .navbar-default .navbar-toggle {
            border-color: #ffffff;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
            background-color: #ffffff;
        }
        .navbar-default .navbar-toggle .icon-bar {
            background-color: #454647;
        }
        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border-color: #454647;
        }
        .navbar-default .navbar-link {
            color: #454647;
        }
        .navbar-default .navbar-link:hover {
            color: #01509a;
        }

        /* footer section */

        /* footer-top */
        .footer-top {
            position: relative;
            background-color: #e2e2e2 ;
            color: #c5c5c5;
            padding: 55px 0 55px;
            border-top : 1px solid #c5c5c5;
            border-bottom : 1px solid #c5c5c5;
        }
        /* Footer */
        .footer {
            position: relative;
            background-color: #e2e2e2;
            color: #696969;
            padding: 55px 0 40px;
        }
        .footer h5 {
            font-size: 18px;
            font-weight: 700;
            font-family: 'Open Sans', sans-serif;
            color: #696969;
            position: relative;
            padding-bottom: 16px;
        }
        .footer h5:after {
            content: '';
            display: block;
            margin: 5px 0 0;
            width: 40%;
            height: 1px;
            background-color: #696969;
        }
        .footer ul {
            list-style: none;
            line-height: 2.2em;
            padding-left:0px;
        }
        .footer ul a {
            color:#696969;
        }
        .footer ul a:hover {
            color:#e8500e;;
        }
        /*footer bottom */
        .footer-bottom {
            padding-top: 5px;
            padding-bottom: 5px;
            border-top: 1px solid #e8500e;
            background: #d1d1d1;

        }
        .copyright-text p {
            color: #696969;
            margin-top: 18px;
            margin-bottom: 0;
            font-size:12px;
        }

        /*footer-social icon */
        .bigpixi-footer-social {
            margin-left: auto;
            margin-top: 8px;
        }

        .bigpixi-footer-social__list-item {
            display: inline-block;
            margin-left: 10px;
        }
        .bigpixi-footer__icon-link {
            display: inline-block;
            -webkit-transition: 0.1s cubic-bezier(0.39, 0.575, 0.565, 1);
            transition: 0.1s cubic-bezier(0.39, 0.575, 0.565, 1);
            -webkit-transition-property: opacity, -webkit-transform;
            transition-property: opacity, -webkit-transform;
            transition-property: opacity, transform;
            transition-property: opacity, transform, -webkit-transform;
        }
        .bigpixi-footer-social__icon {
            display: inline-block;
            height: 32px;
            width: 32px;
            padding:5px;
            border : 1px solid #696969;
            border-radius:20px;

        }

        .bigpixi-footer-social__icon:hover {
            display: inline-block;
            padding: 2px;
            transition : .75s;
            background: #fff;
        }




    </style>
    {{--<script>--}}
    {{--$(document).ready( function() {--}}
    {{--$('#myCarousel').carousel({--}}
    {{--interval:   4000--}}
    {{--});--}}

    {{--var clickEvent = false;--}}
    {{--$('#myCarousel').on('click', '.nav a', function() {--}}
    {{--clickEvent = true;--}}
    {{--$('.nav li').removeClass('active');--}}
    {{--$(this).parent().addClass('active');--}}
    {{--}).on('slid.bs.carousel', function(e) {--}}
    {{--if(!clickEvent) {--}}
    {{--var count = $('.nav').children().length -1;--}}
    {{--var current = $('.nav li.active');--}}
    {{--current.removeClass('active').next().addClass('active');--}}
    {{--var id = parseInt(current.data('slide-to'));--}}
    {{--if(count == id) {--}}
    {{--$('.nav li').first().addClass('active');--}}
    {{--}--}}
    {{--}--}}
    {{--clickEvent = false;--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}
</head>

<body>

<link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet'>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Finki e-shop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            {{--главна навигација --}}
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Почетна</a></li>
                <li><a href="#">За нас </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li><a href="#">Призводи</a></li>
                <li><a href="#">Контакт</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-collapse -->
</nav>
<div class="ad-sektion-top margin-t-40">
    <div class="container-fluid text-center">
        <div class="row">



        </div>
    </div>
</div>

{{--Stranicen del za navigacija!--}}
<div class="listingview-sidebar-sektion">
    <div class="container">
        <div class="col-md-3 sidebar">
            <ul class="list-group">
                <li class="list-group-item active"> <a href="/"><i class="glyphicon glyphicon-play"></i>Почетна</a></li>
                @foreach($allCategories as $c)
                    <li class="list-group-item">  <a href="/categories/{{$c->slug}}"><i class="glyphicon glyphicon-play"></i> {{$c->ime}}</a></li>
                @endforeach
                {{--<li class="list-group-item"> <a href="user-dashboard-settings.html"><i class="glyphicon glyphicon-play"></i> Account Settings</a></li>--}}
                {{--<li class="list-group-item"> <a href="#"><i class="glyphicon glyphicon-play"></i> Log Out</a></li>--}}
            </ul>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 content">


            <!-- BEGIN PRODUCTS -->


            @foreach($product as $p)
                <div class="col-md-6 col-sm-6 ">
    		<span class="thumbnail">
      			<img src='http://127.0.0.1:8000/produkti-sliki/{{$p->slika}}' alt="..." class="img-fluid" style="height: 200px; width:200px;">
      			<h4><a href="products/{{$p->slug}}">{{$p->ime}}</a></h4>


      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">{{$p->cena}} ден.</p>
      				</div>



      			</div>
    		</span>
                </div>
        @endforeach

        {{--<ul class="pagination">--}}
        {{--<li class="page-item"><a class="page-link" href="#">Previous</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">4</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">5</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">6</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">7</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">8</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">9</a></li>--}}
        {{--<li class="page-item"><a class="page-link" href="#">Next</a></li>--}}
        {{--</ul>--}}


        <!-- END PRODUCTS -->
        </div>
        <div class="row">
            <div class="text-center">
                {!! $product->links(); !!}
            </div>
        </div>



    </div>
</div>
</div>



<div class="footer-section">

    <div class="footer">
        <div class="container">
            <div class="col-md-3 footer-one">
                <h5>За нас </h5>
                <p>Оваа web страница е изработена врз основа на барањата по предметот Бази на податоци.</p>
            </div>
            <div class="col-md-3 footer-two">
                <h5>Информации </h5>
                <ul>
                    <li><a href="maintenance.html">Почетна</a></li>
                    <li><a href="contact.html">Акција</a></li>
                    <li><a href="about.html">Пијалоци</a></li>
                    <li><a href="about.html">Млечни производи</a></li>
                    <li><a href="about.html">Контакт</a></li>
                </ul>
            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="copyright-text">
                        <p>Сите права се задржани © 2018 </p>
                    </div>
                </div> <!-- End Col -->
                <div class="col-sm-6 ">
                    <div class="bigpixi-footer-social pull-right">
                        <ul>
                            <li class="bigpixi-footer-social__list-item">
                                <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://twitter.com/">
                                    <img class="bigpixi-footer-social__icon" alt="Twitter" title="Twitter" src="http://simpleicons.org/icons/twitter.svg">
                                </a>          </li>
                            <li class="bigpixi-footer-social__list-item">
                                <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.facebook.com/">
                                    <img class="bigpixi-footer-social__icon" alt="Facebook" title="Facebook" src="http://simpleicons.org/icons/facebook.svg">
                                </a>          </li>
                            <li class="bigpixi-footer-social__list-item">
                                <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.youtube.com/">
                                    <img class="bigpixi-footer-social__icon" alt="YouTube" title="YouTube" src="http://simpleicons.org/icons/youtube.svg">
                                </a>          </li>
                            <li class="bigpixi-footer-social__list-item">
                                <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.instagram.com/">
                                    <img class="bigpixi-footer-social__icon" alt="Instagram" title="Instagram" src="http://simpleicons.org/icons/instagram.svg">
                                </a>          </li>
                            <li class="bigpixi-footer-social__list-item">
                                <a class="bigpixi-footer__icon-link" rel="nofollow" href="https://www.pinterest.com/">
                                    <img class="bigpixi-footer-social__icon" alt="Pinterest" title="Pinterest" src="http://simpleicons.org/icons/pinterest.svg">
                                </a>          </li>
                        </ul>
                    </div>

                </div> <!-- End Col -->
            </div>
        </div>
    </div>
</div>




</body>

</html>
