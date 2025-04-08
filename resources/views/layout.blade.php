<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xaydung293 - @yield('title')</title>
    <link rel="icon" href="{{ asset("manager/assets/images/brand-logos/favicon.ico") }}" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

 
    <link rel="shortcut icon" href="{{ asset("assets/img/logo.svg") }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset("style.css") }}">

    <!-- open graph -->
    <!-- Informations -->
    <meta property="og:description"
        content="@yield('description')">
    <meta property="og:title" content="xaydung293">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://xaydung293.com/">

    <!-- Image -->
    <meta property="og:image" content="{{ asset("assets/img/logo.svg") }}">
    <meta property="og:image:alt"
        content="@yield('description')">
    <meta property="og:image:height" content="80">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="80">
    <meta property="og:locale" content="en_GB">

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="@yield('description')">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="author" content="xaydung293">


    <meta http-equiv="Cache-control" content="public">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keyword')">

</head>

<body class="front-page no-sidebar site-layout-full-width @yield('body-class') menu-has-search menu-has-cart">

<div id="wrapper" class="animsition">
<div id="page" class="clearfix">

<div id="site-header-wrap" >
    <!-- Top Bar -->
    <div id="top-bar" class="style-2">
        <div id="top-bar-inner" class="container">
            <div class="top-bar-inner-wrap">
                
                <div class="top-bar-socials">
                    <div class="inner">
                        <span class="icons">
                            <a href="#" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                            <a href="#" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                            <a href="#" title="Google Plus"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                            <a href="#" title="Pinterest"><span class="fa fa-pinterest" aria-hidden="true"></span></a>
                            <a href="#" title="Dribbble"><span class="fa fa-dribbble" aria-hidden="true"></span></a>
                        </span>
                    </div>
                </div><!-- /.top-bar-socials -->

                <div class="top-bar-content">
                    <span id="top-bar-text">
                        <i class="fa fa-phone-square"></i>0383 311 368
                        <i class="fa fa-envelope"></i>xaydung293@gmail.com
                        <i class="fa fa-clock-o"></i>Mon-Fri: 7:00 - 17:00
                    </span><!-- /#top-bar-text -->
                </div><!-- /.top-bar-content -->
            </div>
        </div>
    </div><!-- /#top-bar -->

    <!-- Header -->
    <header id="site-header" class="@yield('header-class')">
        <div id="site-header-inner" class="container">
            <div class="wrap-inner">          
                <div id="site-logo" class="clearfix">
                    <div id="site-logo-inner">
                        <a href="/" title="Construction" rel="home" class="main-logo logo-header">
                            <img src="assets/img/logo.svg" alt="Construction" data-retina="assets/img/logo.svg" data-width="200" data-height="30" >
                            <div class="">
                                <p class="logo-name">293 IADC CO., LTD</p> 
                            </div>
                        </a>
                    </div>
                </div><!-- /#site-logo -->

                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                    <ul class="menu">
                        <li class="menu-item"><a href="/">Trang chủ</a></li>
                        <li class="menu-item"><a href="/dich-vu">Dịch vụ</a></li>
                        <li class="menu-item"><a href="#">Dự án</a></li>
                        <li class="menu-item"><a href="#">Liên hệ</a></li> 
                    </ul>
                </nav><!-- /#main-nav --> 
            </div>
        </div><!-- /#site-header-inner -->
    </header><!-- /#site-header -->
</div><!-- /#site-header-wrap -->

@yield('body')

<!-- Footer -->
<footer id="footer">
    <div id="footer-widgets" class="container style-1">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_text">
                    <h2 class="widget-title"><span>VỀ CHÚNG TÔI</span></h2>
                    <div class="textwidget">
                        <img src="assets/img/logo-light@2x.png" width="200" height="30" alt="image" class="margin-top-5 margin-bottom-25" />
                        <p>Xaydung293 là đơn vị chuyên thiết kế, thi công và cải tạo công trình với hơn 15 năm kinh nghiệm. Chúng tôi cam kết mang đến các giải pháp xây dựng chất lượng cao, an toàn và bền vững.</p> 
                        <p>Chúng tôi không chỉ xây dựng công trình mà còn xây dựng niềm tin và giá trị bền vững cho khách hàng.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_links">
                    <h2 class="widget-title"><span>COMPANY LINKS</span></h2>
                    <ul class="wprt-links clearfix col2">
                        <li class="style-2"><a href="#">History</a></li>
                        <li class="style-2"><a href="#">Services</a></li>
                        <li class="style-2"><a href="#">Team & Awards</a></li>
                        <li class="style-2"><a href="#">Delivery Methods</a></li>
                        <li class="style-2"><a href="#">Community</a></li>
                        <li class="style-2"><a href="#">Safety</a></li>
                        <li class="style-2"><a href="#">News & Events</a></li>
                        <li class="style-2"><a href="#">Sustainability</a></li>
                        <li class="style-2"><a href="#">FAQ</a></li>
                        <li class="style-2"><a href="#">Portfolio</a></li>
                        <li class="style-2"><a href="#">Contact Us</a></li>
                        <li class="style-2"><a href="#">Shop</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="widget widget_information">
                    <h2 class="widget-title"><span>CONTACT INFO</span></h2>
                    <ul class="style-2">
                        <li class="address clearfix">
                            <span class="hl">Địa chỉ:</span>
                            <span class="text">Văn Phòng Đại Diện: Kiot 62-64 chợ mới Yên Mỹ Hưng Yênv</span>
                        </li>
                        <li class="phone clearfix">
                            <span class="hl">Điện thoại:</span> 
                            <span class="text">0383 311 368</span>
                        </li>
                        <li class="email clearfix">
                            <span class="hl">E-mail:</span>
                            <span class="text">xaydung293@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_spacer">
                    <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                </div>

                <div class="widget widget_socials">
                    <div class="socials">
                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                        <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Bottom -->
<div id="bottom" class="clearfix style-1">
    <div id="bottom-bar-inner" class="wprt-container">
        <div class="bottom-bar-inner-wrap">
        
            <div class="bottom-bar-content">
                <div id="copyright">CONSTRUCTION TEMPLATE &copy; DESIGN BY BLOGWP.
                </div><!-- /#copyright -->
            </div><!-- /.bottom-bar-content -->

            <div class="bottom-bar-menu">
                <ul class="bottom-nav">
                    <li><a href="#/">HISTORY</a></li>
                    <li><a href="#/">FAQ</a></li>
                    <li><a href="#/">EVENTS</a></li>
                </ul>       
            </div><!-- /.bottom-bar-menu -->
        </div>
    </div>
</div>
</div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="{{ asset("assets/js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/animsition.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/plugins.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/countTo.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/fitText.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/flexslider.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/vegas.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/cube.portfolio.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/main.js") }}"></script>

</body>
</html>
