<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- bootstrap css -->
<link rel="stylesheet" href="/css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" href="/css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="/css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="/images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">

  <!-- loader  -->
  {{-- <div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div> --}}
<!-- end loader -->
<!-- header -->
<header id="home">
    <!-- header inner -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            {{-- <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                
                                <ul class="menu-area-main">
                                
                                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="{{route('news')}}">News</a></li>
                                    <li><a href="{{route('posts')}}">Blog</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                     <li>
                                    <form class="2" id="search" action="{{route('search')}}" method="GΕΤ">
                                        <input class="" type="search" placeholder="Search" aria-label="Search" name="q">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>    
                                    </li>
                                @endguest
                                </ul>
                                
                            </nav>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->


<section class="slider_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="full">
                    <h1><strong class="cur">My</strong><br>Diary</h1>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature</p>
                        {{-- <div class="button_section"><a class="main_bt" href="#">Post Now</a></div> --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="full text_align_center">
                    <img class="slide_img" src="/images/apple.png" alt="#" /> 
                </div>
            </div>
        </div>
    </div>
</section>

        <main class="py-4">
         @yield('content')
        </main>


<section>
    <footer>
        <div class="footer layout_padding">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h3>Contact Us</h3>
                            <p>Healing Center, 176 W Street name, New York, NY<br><br>(+91) 987 654 3210<br><br>demo@gmail.com</p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h3>Pages</h3>
                            <p>
                              <a href="#home">Home</a><br>
                              <a href="#about">About Us</a><br>
                              <a href="#fruits">Fruits</a><br>
                              <a href="#blog">Blog</a><br>
                              <a href="#contact">Contact Us</a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h3>Recent Post</h3>
                            <p><span><img src="/images/f_b1.png"></span><span>consectetur adipisc elit,<br>sed do eiusmod</span></p>
                            <p class="margin_top_20"><span><img src="/images/f_b2.png"></span><span>consectetur adipisc elit,<br>sed do eiusmod</span></p>
                            <p class="margin_top_20"><span><img src="/images/f_b3.png"></span><span>consectetur adipisc elit,<br>sed do eiusmod</span></p>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h3>Newsletter</h3>
                            <p>
                                <form>
                                    <input type="text" name="email" placeholder="Enter Your Email" /> 
                                    <button>Subscribe</button>
                                </form>
                            </p>
                        </div>
                    </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright {{date('Y')}} All Right Reserved By D.Vortelinas</a></p>
            </div>
        </div>
    </footer>
    </section>
    <script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/jquery-3.0.0.min.js"></script>
<script src="/js/plugin.js"></script>


<!-- sidebar -->
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>
