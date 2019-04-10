<?php
use Illuminate\Support\Facades\Auth;
?>
<header id="navbar-spy" class="header header-1 header-transparent">
    <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light navbar-bordered">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img class="logo logo-light" src="{{asset('assets/images/logo/logo-light.png')}}" alt="Consultivo Logo">
                <img class="logo logo-dark" src="{{asset('assets/images/logo/logo-dark.png')}}" alt="Consultivo Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Home Menu-->
                    <li class="has-dropdown active">
                        <a href="#" data-toggle="dropdown" name="home" class="dropdown-toggle menu-item">@lang('menu.main')</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{asset('home-consulting.html')}}">Home Consulting</a>
                            </li>
                            <li>
                                <a href="{{asset('home-consulting.html')}}">Home advisor</a>
                            </li>
                            <li>
                                <a href="{{asset('home-investment.html')}}">Home investment</a>
                            </li>
                            <li>
                                <a href="{{asset('home-advisory.html')}}">Home advisory</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- Pages Menu -->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item"
                           data-hover="pages">@lang('menu.about')</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{asset('about')}}">@lang('menu.about')</a>
                            </li>
                            <li>
                                <a href="{{asset('ourteam')}}">@lang('menu.team')</a>
                            </li>
                            <li>
                                <a href="{{asset('gallery')}}">@lang('menu.gallery')</a>
                            </li>
                            <li>
                                <a href="{{asset('contact')}}">@lang('menu.contacts')</a>
                            </li>
                            <li>
                                <a href="{{asset('faq')}}">@lang('menu.faq')</a>
                            </li>
                            <li>
                                <a href="page-consultation.html">consultation</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->
                    <!-- Services Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">@lang('menu.services')</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="page-services.html">services grid</a>
                            </li>
                            <li>
                                <a href="page-services-single.html">services single</a>
                            </li>
                            <li>
                                <a href="page-pricing.html">pricing</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->
                    <!-- Studies Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Case Studies</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="case-studies-grid.html">case grid</a>
                            </li>
                            <li>
                                <a href="case-studies-standard.html">case standard</a>
                            </li>
                            <li>
                                <a href="case-study-single.html">case single</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- Blog Menu-->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">Blog</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-grid.html">blog grid</a>
                            </li>
                            <li>
                                <a href="blog-standard.html">blog standard</a>
                            </li>
                            <li>
                                <a href="blog-single.html">blog single</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- shop Menu -->
                    <li class="has-dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="shop">shop</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="shop-4columns.html">shop 4columns</a>
                            </li>
                            <li>
                                <a href="shop-with-sidebar.html">shop sidebar</a>
                            </li>
                            <li>
                                <a href="shop-single.html">shop single</a>
                            </li>
                        </ul>
                    </li>
                    <!-- li end -->

                    <!-- user Menu -->
                    <li class="has-dropdown">

                        <? if (Auth::user()) {?>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="shop">
                            <?=Auth::user()->name;?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{asset('home')}}">@lang('menu.cabinet')</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    @lang('auth.logout')
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li>--}}
                                {{--<a href="{{asset('home')}}">User cabinet</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        <?}
                        else {
                        ?>

                        <a href="/fessese" data-toggle="dropdown" class="dropdown-toggle menu-item" data-hover="shop">Register
                            | Log in</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{asset('register')}}">Register</a>
                            </li>
                            <li>
                                <a href="{{asset('login')}}">Log in</a>
                            </li>
                        </ul>
                        <?}?>

                    </li>


                </ul>
                <div class="module-container">
                    <!-- Module Consultation  -->
                    <div class="module module-consultation pull-left">
                        <a class="btn" href="{{asset('page-contact')}}">Consultation</a>
                    </div>                <!-- Module Search -->
                    <div class="module module-search pull-left">
                        <div class="module-icon search-icon">
                            <i class="lnr lnr-magnifier"></i>
                            <span class="title">search</span>
                        </div>
                        <div class="module-content module-fullscreen module--search-box">
                            <div class="pos-vertical-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                                            <form class="form-search">
                                                <input type="text" class="form-control" placeholder="Search...">
                                            </form><!-- .form-search end -->
                                        </div><!-- .col-md-8 end -->
                                    </div><!-- .row end -->
                                </div><!-- .container end -->
                            </div>
                            <a class="module-cancel" href="#"><i class="fa fa-close"></i></a>
                        </div>
                    </div><!-- .module-search end -->                <!-- Module Cart -->
                    <div class="module module-cart pull-left">
                        <div class="module-icon cart-icon">
                            <i class="lnr lnr-cart"></i>
                            <span class="title">shop cart</span>
                            <label class="module-label">2</label>
                        </div>
                        <div class="module-content module-box cart-box">
                            <div class="cart-overview">
                                <ul class="list-unstyled">
                                    <li>
                                        <img class="img-fluid" src="{{asset('assets/images/shop/thumb/1.png')}}"
                                             alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">How to Build Habit </h5>
                                            <p class="product-price">1 x $ 18.00</p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                    <li>
                                        <img class="img-fluid" src="{{asset('assets/images/shop/thumb/2.png')}}"
                                             alt="product"/>
                                        <div class="product-meta">
                                            <h5 class="product-title">Personal Branding</h5>
                                            <p class="product-price">1 x $ 17.00</p>
                                        </div>
                                        <a class="cart-cancel" href="#">cancel</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cart-total">
                                <div class="total-desc">
                                    Subtotal:
                                </div>
                                <div class="total-price">
                                    $35.00
                                </div>
                            </div>
                            <div class="clearfix">
                            </div>
                            <div class="cart--control">
                                <a class="btn btn--primary btn--rounded" href="#">view cart</a>
                                <a class="btn btn--white btn--bordered btn--rounded" href="#">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- .module-cart end -->                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</header>
