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


<!-- Header -->
<style>
.navbar-static-top {
margin-bottom:20px;
}

i {
font-size:16px;
}

.nav > li > a {
color:#787878;
}

footer {
margin-top:20px;
padding-top:20px;
padding-bottom:20px;
background-color:#efefef;
}

/* count indicator near icons */
.nav>li .count {
position: absolute;
bottom: 12px;
right: 6px;
font-size: 10px;
font-weight: normal;
background: rgba(51,200,51,0.55);
color: rgba(255,255,255,0.9);
line-height: 1em;
padding: 2px 4px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
-ms-border-radius: 10px;
-o-border-radius: 10px;
border-radius: 10px;
}

/* indent 2nd level */
.list-unstyled li > ul > li {
margin-left:10px;
padding:8px;
}
</style>


</head>

<body>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <span class="navbar-brand" >Dashboard</span>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" ><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><span>My Profile</span></li>
                    </ul>
                </li>
                <li><a href="/logout"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- Left column -->
            <span><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></span>

            <hr>

        </div><!-- /col-3 -->
        <div class="col-md-9">

            <!-- column 2 -->

            <span><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></span>

            <hr>
            @yield('dodadenProdukt')

        </div><!--/col-span-6-->

        </div><!--/row-->
    <div class="row">
        <div class="col-md-2">
            <nav class="navbar" role="navigation">
                <ul class="nav nav-pills nav-stacked ">
                    <li><a class="btn btn-success" href="#"><i class="fa fa-star-o"></i> News</a> </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="create">Add Product</a></li>
                            <li><a href="delete">Delete Product</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Category</a></li>
                            <li><a href="#">Delete Category</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Suppliers
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Suppliers</a></li>
                            <li><a href="#">Delete Suppliers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manufacturers
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Manufacturer</a></li>
                            <li><a href="#">Delete Manufacturer</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">User
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Delete User</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Promotions
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Add Promotion Produt</a></li>
                            <li><a href="#">Delete Promotion Product</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    </div><!--/col-span-9-->

>



<script>
$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
// toggle icon
$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});
</script>

