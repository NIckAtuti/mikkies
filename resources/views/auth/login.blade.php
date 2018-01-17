@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
                            <li><a href="{{ route('register') }}">Register</a></li> 
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
                <h4><span>Login</span></h4>
            </section>          
            <section class="main-content">              
                <div class="row">
                    <div class="span5" 
                    >                 
                        <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                        <form class="form-stacked" method="POST" action="{{ route('login') }}" >
                             {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                          @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                          @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label">Password</label>
                                    <div class="controls">
                                        <input id="password" type="password" class="form-control" name="password" required">
                                         @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                      <button type="submit" class="mybutton">
                                    Login
                                </button>

                                    <hr>
                                     <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                                    <p class="reset">Recover your <a tabindex="4" href="{{ route('password.request') }}" title="Recover your username or password">username or password</a></p>
                                </div>
                            </fieldset>
                        </form>             
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
        
        <style type="text/css">
        .mybutton{
            background-color: white; 
            color: black;
            border: solid 1px;
            border-color: black;        
        }
        .mybutton:hover{
            background-color: black; 
            color: white;
        }
    </style>
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
@endsection