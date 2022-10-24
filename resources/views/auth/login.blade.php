@extends('cliente.cliente_master')

@section('cliente')

    <body class="inner-pages hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
                                                ================================================== -->
            @include('cliente.body.header')
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <br>
            <br>
            <br>
            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>Login</h1>
                        <h2><a href="{{ url('/') }}">Home </a> &nbsp;/&nbsp; login</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION LOGIN -->
            <div id="login">
                <div class="login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="access_social">
                            {{-- <a href="{{ url('auth/facebook') }}" class="social_bt facebook">Login with Facebook</a> --}}
                            <a href="{{ url('auth/google') }}" class="social_bt google">Login with Google</a>
                        </div>
                        <div class="divider"><span>Or</span></div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
                            <i class="icon_lock_alt"></i>
                        </div>
                        <div class="fl-wrap filter-tags clearfix add_bottom_30">
                            <div class="checkboxes float-left">
                                <div class="filter-tags-wrap">
                                    <input id="check-b" type="checkbox" name="check">
                                    <label for="check-b">Remember me</label>
                                </div>
                            </div>
                            <a class="float-right mt-1"><a id="forgot" href="{{route('password.request2')}}">Forgot
                                    Password?</a></a>
                        </div>
                        <button type="submit" href="#0" class="btn_1 rounded full-width">Accesar a BanPro</button>
                        <div class="text-center add_top_10">Nuevo en nuestro sitio? <strong><a
                                    href="{{ route('register') }}">Registrate Aquí!</a></strong></div>
                    </form>
                </div>
            </div>
            <!-- END SECTION LOGIN -->

            <!-- START FOOTER -->
            {{-- <footer class="first-footer">
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="netabout">
                                    <a href="index.html" class="logo">
                                        <img src="images/logo-footer.svg" alt="netcom">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto
                                        soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                                </div>
                                <div class="contactus">
                                    <ul>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="in-p">95 South Park Avenue, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="in-p">+456 875 369 208</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="in-p ti">support@findhouses.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="navigation">
                                    <h3>Navigation</h3>
                                    <div class="nav-footer">
                                        <ul>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                            <li><a href="properties-full-list.html">Properties List</a></li>
                                            <li><a href="properties-details.html">Property Details</a></li>
                                            <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                        </ul>
                                        <ul class="nav-right">
                                            <li><a href="agent-details.html">Agents Details</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog.html">Blog Default</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="widget">
                                    <h3>Twitter Feeds</h3>
                                    <div class="twitter-widget contuct">
                                        <div class="twitter-area">
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said
                                                        inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said
                                                        inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said
                                                        inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="newsletters">
                                    <h3>Newsletters</h3>
                                    <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive
                                        news in your inbox.</p>
                                </div>
                                <form class="bloq-email mailchimp form-inline" method="post">
                                    <label for="subscribeEmail" class="error"></label>
                                    <div class="email">
                                        <input type="email" id="subscribeEmail" name="EMAIL"
                                            placeholder="Enter Your Email">
                                        <input type="submit" value="Subscribe">
                                        <p class="subscription-success"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer">
                    <div class="container">
                        <p>2021 © Copyright - All Rights Reserved.</p>
                        <ul class="netsocials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer> --}}

            <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
            <!-- END FOOTER -->

        </div>
        <!-- Wrapper / End -->
    </body>
    @include('cliente.body.footer')
@endsection
