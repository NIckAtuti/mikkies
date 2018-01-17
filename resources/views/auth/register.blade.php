@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register</title>
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
                            <!-- <li><a href="#">Whatsapp : 0790065826</a></li> -->
                            <li><a href="cart.html">Your Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>                   
                        <li><a href="contact.html">Contact us</a></li>
                            <li><a href="register.html">Login</a></li>  
                    </ul>
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
            <section class="header_text sub">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
                <h4><span>Login or Regsiter</span></h4>
            </section>          
            <section class="main-content">              
                <div class="row">
                    <div class="span7">                 
                        <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                        <div class="container">
    <div class="row">
        <div class="span5">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-stacked" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
                        
                </div>
            </section>          
            <section id="footer-bar">
                <div class="row">
                    <div class="span7">
                        <h4>Terms and conditions apply</h4>
                        <ul class="nav">
                            <li><a href="./index.html">How to buy.</a></li>  
                            <li><a href="./about.html">Ways on receiving your product</a></li>
                            <li><a href="./cart.html">Our Stores</a></li>                       
                        </ul>                   
                    </div>
                    <div class="span5">
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
            <section id="copyright">
                <span>Copyright 2013 bootstrappage template  All right reserved.</span>
            </section>
        </div>
        <script src="themes/js/common.js"></script>
        <script>
            $(document).ready(function() {
                $('#checkout').click(function (e) {
                    document.location.href = "checkout.html";
                })
            });
        </script>   

    </body>
</html>

