<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Behzad_تست</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/fonts.css')}}">
        <!-- to search from root directory-->
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}">

     <script src="{{URL::asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
      
    
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
           

           <header>
    <section id="top-area">
        <p> ایمیل: <a href="mailto:office@shop.com">office@shop.com</a> | تلفن سفارش: 1-800-0000 </p>
    </section><!-- end top-area -->
    <section id="action-bar">
        <div id="logo">
            <a href="#"><span id="logo-accent">e</span> فروشگاه</a>
        </div><!-- end logo -->

        <nav class="dropdown">
            <ul>
                <li>
                    <a href="#">گروه ها <img src="{{URL::asset('img/down-arrow.gif')}}" alt="Shop by Category" /></a>
                    <ul>
                        <li><a href="#">لپ تاپ</a></li>
                        <li><a href="#">دسکتاپ</a></li>
                        <li><a href="#">موبایل</a></li>
                        <li><a href="#">تبلت</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="search-form">
            <form action="#" method="get">
                <input type="submit" value="جستجو" class="search submit">
                <input type="search" name="search" class="search">
                
            </form>
        </div><!-- end search-form -->

        <div id="user-menu">
            <!--
            <nav id="signin" class="dropdown">
                <ul>
                    <li>
                        <a href="#"><img src="{{URL::asset('img/user-icon.gif')}}" alt="Sign In" /> Sign In <img src="{{URL::asset('img/down-arrow.gif')}}" alt="Sign In" /></a>
                        <ul>
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Sign Up</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>-->

            <nav class="dropdown">
                <ul>
                    <li>
                        <a href="#"><img src="{{URL::asset('img/user-icon.gif')}}" alt="Andrew Perkins" /> آقای پرکینز <img src="{{URL::asset('img/down-arrow.gif')}}" alt="Andrew Perkins" /></a>
                        <ul>
                            <li><a href="#">سفارشات</a></li>
                            <li><a href="#">خروج</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div><!-- end user-menu -->

        <div id="view-cart">
            <a href="#"><img src="{{URL::asset('img/blue-cart.gif')}}" alt="View Cart"> سبد خرید</a>
        </div><!-- end view-cart -->
    </section><!-- end action-bar -->
</header>


            <hr />

            <section id="main-content" class="clearfix">
              @if(session('massage'))
                <p class="alert">{{session('massage')}}</p>
                @endif
                @yield('content')
            </section><!-- end main-content -->

            <hr />





            <footer>
    <section id="contact">
        <h3>برای سفارش تلفنی با شماره 123456789 <br> یا با ایمیل <a href="mailto:office@shop.com">office@shop.com</a> تماس بگیرید </h3>
    </section><!-- end contact -->

    <hr />

    <section id="links">
        <div id="my-account">
            <h4>حساب من</h4>
            <ul>
                <li><a href="#">ورود</a></li>
                <li><a href="#">خروج</a></li>
                <li><a href="#">سفارشات</a></li>
                <li><a href="#">سبد خرید</a></li>
            </ul>
        </div><!-- end my-account -->
        <div id="info">
            <h4>اطلاعات</h4>
            <ul>
                <li><a href="#">مرامنامه</a></li>
                <li><a href="#">قوانین</a></li>
            </ul>
        </div><!-- end info -->
        <div id="extras">
            <h4>سایر</h4>
            <ul>
                <li><a href="#">درباره ما</a></li>
                <li><a href="#">تماس با ما</a></li>
            </ul>
        </div><!-- end extras -->
    </section><!-- end links -->

    <hr />

    <section class="clearfix">
        <div id="copyright">
            <div id="logo">
                <a href="#"><span id="logo-accent"> e </span>فروشگاه </a>
            </div><!-- end logo -->
            <p id="store-desc">توضیح فروشگاه خوب ما</p>
            <p id="store-copy">&copy; 2014 eCommerce. طراحی شده توسط آدی پوردیلا.</p>
        </div><!-- end copyright -->
        <div id="connect">
            <h4>تماس با ما</h4>
            <ul>
                <li class="twitter"><a href="#">Twitter</a></li>
                <li class="fb"><a href="#">Facebook</a></li>
            </ul>
        </div><!-- end connect -->
        <div id="payments">
            <h4>درگاه های پرداخت</h4>
            <img src="{{URL::asset('img/payment-methods.gif')}}" alt="Supported Payment Methods">
        </div><!-- end payments -->
    </section>
</footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="{{URL::asset('js/plugins.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        
   

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>