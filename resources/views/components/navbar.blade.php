<div class="header">
    <div class="container">
        <div class="col-sm-3 logo">
            <h1><a href="{{ route('home') }}"><span class="highlight">N</span>ucleons</a></h1>
        </div>
        <div class="col-sm-9 logo_right">
            <div class="social">
                <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
                <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
                <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
            </div>
            <!-- script for menu -->
            <span class="menu"></span>
            <div class="top-menu">
                <ul>
                    @guest
                        <li><a href="{{ route('login') }}" class="btn btn-default btn-default_2 pull-left" >Login</a></li>
                        <li><a href="{{ route('register') }}" class="btn btn-default btn-default_2 pull-left">Register</a></li>
                    @endguest

                    @auth
                        @component('components.navbar_user') @endcomponent
                    @endauth
                    <li><a href="#" class="btn btn-default btn-default_2 pull-left uls-trigger" data-toggle="modal" data-target="#applyModal_2">Select Language</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
                @component('components.select_language')

                @endcomponent
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<nav class="navbar nav_bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li class="current_page"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="classified.html">Classified Ads</a></li>
                <li><a href="classified_database.html">Database</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>
                    <ul class="dropdown-menu drop_menu" role="menu">
                        <li><a href="news.html">News</a></li>
                        <li><a href="shortcodes.html">Shortcodes</a></li>
                        <li><a href="faq.html">Faq</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="terms.html">Terms of use</a></li>
                        <li><a href="sitemap.html">Sitemap</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="grids.html">Grids</a></li>
                    </ul>
                </li>
                <li><a href="article.html">Articles</a></li>
                <li><a href="forum.html">Forum</a></li>
                <li><a href="videos.html">Video</a></li>
                <li><a href="advertise.html">Advertising</a></li>
                <li><a href="contact.html">Contacts</a></li>
            </ul>
            <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-8800904192</p></div></div>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>