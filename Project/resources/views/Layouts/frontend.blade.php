<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ url('/clientdashboard/images/favicon.png') }}" type="image/x-icon">

    <title>
        Address_Booking
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('/clientdashboard/css/bootstrap.css') }}" />

    <!-- Custom styles for this template -->
    <link href="{{ url('/clientdashboard/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ url('/clientdashboard/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>

    @php
        use App\Models\User;
        use Illuminate\Support\Facades\Session;
        
        $userName = '';
        if (Session::has('user')) {
            $user = Session::get('user');
            $userName = $user->name;
        }
    @endphp


    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ url('/clientdashboard/index.html') }}">
                <span>
                    Address_Booking
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/Product/Index') }}">
                            Shop
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/ContactUs') }}">Contact Us</a>
                    </li>
                </ul>
                @if (Session::has('user'))
                    <div class="user_option">
                        <a href="">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                {{ $userName }}
                            </span>
                        </a>
                    </div>
                    <div class="user_option">
                        <a href="{{ url('/LogOut') }}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span>
                                LogOut
                            </span>
                        </a>
                    </div>
                    @if (Session::get('user')->role == 1)
                        <div class="user_option">
                            <a href="{{ url('/Dashboard/Index') }}">
                                <i class="fa fa-dashboard" aria-hidden="true"></i>
                                <span>
                                    Dashboard
                                </span>
                            </a>
                        </div>
                    @endif
                @else
                    <div class="user_option">
                        <a href="{{ url('/Login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>
                    </div>
                    <div class="user_option">
                        <a href="{{ url('/SignUp') }}">
                            <i class="fa fa-sign-language" aria-hidden="true"></i>
                            <span>
                                Regsiter
                            </span>
                        </a>
                    </div>
                @endif

            </div>
        </nav>
    </header>



    @yield('front');




    <!-- footer section -->
    <footer class=" footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>

    </section>


    <script src="{{ url('/clientdashboard/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('/clientdashboard/js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ url('/clientdashboard/js/custom.js') }}"></script>

</body>

</html>
