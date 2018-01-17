<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>Mikkie's</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
        <!-- bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        
        <link href="themes/css/bootstrappage.css" rel="stylesheet"/>
        
        <!-- global styles -->
        <link href="themes/css/flexslider.css" rel="stylesheet"/>
        <link href="themes/css/main.css" rel="stylesheet"/>

        <!-- scripts -->
        <script src="themes/js/jquery-1.7.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>               
        <script src="themes/js/superfish.js"></script>  
        <script src="themes/js/jquery.scrolltotop.js"></script>
        <!--[if lt IE 9]>           
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <div id="top-bar" class="container">
            <div class="row">
                <div class="span8">
                    <a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
                </div>
                <div clss="account pull-right">
                        <ul class="user-menu">
                         @if (Route::has('login'))             
                            <li><a href="cart.html">Your Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>                   
                            <li><a href="contact.html">Contact us</a></li>
                            @auth
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            @else  
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li> 
                    </ul>
                </div>  
                   
                    @endauth
                </div>
            @endif
    </div>
            </div>
        </div>
        <div id="wrapper" class="container">
            <section class="navbar main-menu">
                <div class="navbar-inner main-menu">
                <div class="span 8" style="margin-top: 4px;">
                    <form method="POST" class="search_form">
                        <input type="text" class="input-block-level search-query" Placeholder="eg. T-shirt">
                    </form>
                </div>              
                    
                    <nav id="menu" class="pull-right">
                        <ul>
                            <li><a href="#">Woman</a>                   
                                <ul>
                                    <li><a href="./products.html">Handbag</a></li>                                  
                                    <li><a href="./products.html">Shoes</a></li>
                                    <li><a href="./products.html">Dresses</a></li>                                  
                                </ul>
                            </li>
                                <li><a href="#">Man</a>                 
                                <ul>
                                    <li><a href="./products.html">Shoes</a></li>                                    
                                    <li><a href="./products.html">Trousers</a></li>
                                    <li><a href="./products.html">Shirts</a></li>                                   
                                </ul>
                            </li>               
                            <li><a href="#">General</a>
                                <ul>                                    
                                    <li><a href="./products.html">Hats and Caps</a></li>
                                    <li><a href="./products.html">Marvins</a></li>
                                    <li><a href="./products.html">Gloves</a></li>
                                </ul>
                            </li>                           
                            <li><a href="#">Popular</a></li>
                            <li><a href="#">Recommended</a></li>
                        </ul>
                    </nav>
                </div>
            </section>
            <section  class="homepage-slider" id="home-slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="themes/images/carousel/banner-1.jpg" alt="" />
                            <div class="intro">
                                <h1>Fashion</h1>
                                <p><span>content here</span></p>
                                <p><span>content here</span></p>
                            </div>
                            </li>
                        <li>
                            <img src="themes/images/carousel/banner-2.jpg" alt="" />
                            <div class="intro">
                                <h1>Photography</h1>
                                <p><span>content here</span></p>
                                <p><span>content here</span></p>
                            </div>
                        </li>
                    </ul>
                </div>          
            </section>
            <section class="header_text">
                 Buy Clothes ,Beauty Products,Shoes,Jewelry,Designer Perfumes,Makeup and much more online.
            </section>
            <section class="main-content">
                <div class="row">
                    <div class="span12">                                                    
                        <div class="row">
                            <div class="span12">
                                <h4 class="title">
                                    <span class="pull-left"><span class="text"><span class="line">RECENT <strong>Products</strong></span></span></span>
                                    <span class="pull-right">
                                        <a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
                                    </span>
                                </h4>
                                <div id="myCarousel" class="myCarousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <ul class="thumbnails">                                             
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>                                                                                                                                   
                                            </ul>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                      
                        </div>
                        <br/>
                        <div class="row">
                            <div class="span12">
                                <h4 class="title">
                                    <span class="pull-left"><span class="text"><span class="line">MOST BOUGHT<strong> Products</strong></span></span></span>
                                    <span class="pull-right">
                                        <a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
                                    </span>
                                </h4>
                                <div id="myCarousel-2" class="myCarousel carousel slide">
                                    <div class="carousel-inner">
                                        <div class="active item">
                                            <ul class="thumbnails">                                             
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <span class="sale_tag"></span>
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware6.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware5.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00 </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware4.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">Item</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">ITEM</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="product-box">
                                                        <p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
                                                        <a href="product_detail.html" class="title">ITEM</a><br/>
                                                        <a href="products.html" class="category">Description</a>
                                                        <p class="price">Ksh 0.00</p>
                                                    </div>
                                                </li>                                                                                                                                   
                                            </ul>
                                        </div>
                                    </div>                          
                                </div>
                            </div>                      
                        </div>
                        <div class="row feature_box">                       
                            <div class="span4">
                                <div class="service">
                                    <div class="responsive">    
                                        <img src="themes/images/feature_img_2.png" alt="" />
                                        <h4>MODERN <strong>DESIGN</strong></h4>
<!--                                        <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>                                  -->
                                    </div>
                                </div>
                            </div>
                            <div class="span4"> 
                                <div class="service">
                                    <div class="customize">         
                                        <img src="themes/images/feature_img_1.png" alt="" />
                                        <h4><h4>CASH ON<strong> DELIVERY</strong></h4></h4>
<!--                                        <p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>-->
                                    </div>
                                </div>
                            </div>
                            <div class="span4">
                                <div class="service">
                                    <div class="support">   
                                        <img src="themes/images/feature_img_3.png" alt="" />
                                        <h4>24/7 LIVE <strong>SUPPORT</strong></h4>
                                        <!--<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>-->
                                    </div>
                                </div>
                            </div>  
                        </div>      
                    </div>              
                </div>
            </section>
            <section class="our_client">
                <h4 class="title"><span class="text">Manufactures</span></h4>
                <div class="row">                   
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/14.png"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/35.png"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/1.png"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/2.png"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/3.png"></a>
                    </div>
                    <div class="span2">
                        <a href="#"><img alt="" src="themes/images/clients/4.png"></a>
                    </div>
                </div>
            </section>
            <section id="footer-bar">
                <div class="row">
                    <div class="span4">
                        <h4>Terms and conditions apply</h4>
                        <ul class="nav">
                            <li><a href="./index.html">How to buy.</a></li>  
                            <li><a href="./about.html">Ways on receiving your product</a></li>
                            <li><a href="./cart.html">Our Stores</a></li>                       
                        </ul>                   
                    </div>
                    <div class="span4">
                            <h5>ADDITIONAL INFORMATION</h5>
                            <p><strong>Phone:</strong>&nbsp;(123) 456-7890<br>
                            <strong>Fax:</strong>&nbsp;+04 (123) 456-7890<br>
                            <strong>Email:</strong>&nbsp;<a href="#">vietcuong_it@yahoo.com</a>                             
                            </p>
                            <br/>
                        </div>
                    <div class="span4">
                        <p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
                        <p>Mpesa Online Payment Coming Soon.</p>
                        <br/>
                        <span class="social_icons">
                            <a class="facebook" href="#">Facebook</a>
                            <a class="twitter" href="#">Twitter</a>
                            <a class="skype" href="#">Skype</a>
                            <a class="vimeo" href="#">Vimeo</a>
                        </span>
                    </div>                  
                </div>  
            </section>
            <section id="copyright">
                <span>Copyright 2018 Mikkie's  All right reserved.</span>
            </section>
        </div>
        <script src="themes/js/common.js"></script>
        <script src="themes/js/jquery.flexslider-min.js"></script>
        <script type="text/javascript">
            $(function() {
                $(document).ready(function() {
                    $('.flexslider').flexslider({
                        animation: "fade",
                        slideshowSpeed: 4000,
                        animationSpeed: 600,
                        controlNav: false,
                        directionNav: true,
                        controlsContainer: ".flex-container" // the container that holds the flexslider
                    });
                });
            });
        </script>
    </body>
</html>
