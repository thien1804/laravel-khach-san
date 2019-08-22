<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cozy - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('cozy/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('cozy/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('cozy/css/style.css')}}">
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Cozy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="room.html">Rooms</a>
                        <a class="dropdown-item" href="room.html">Superior Room Twin</a>
                        <a class="dropdown-item" href="room.html">Premier Suite</a>
                        <a class="dropdown-item" href="room.html">Family Room</a>
                    </div>
                </li>
                <li class="nav-item"><a href="dining-bar.html" class="nav-link">Dining &amp; Bar</a></li>
                <li class="nav-item"><a href="amenities.html" class="nav-link">Amenities</a></li>
                <li class="nav-item"><a href="reservation.html" class="nav-link">Booking</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img width="50rem" class="img-profile rounded-circle"
                                 src="
                                        @if(Auth::user()->avatar == null)
                                            {{asset('images/default-avatar.png')}}
                                         @else
                                            {{asset(Auth::user()->avatar)}}
                                        @endif
                                    ">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalLoginAvatar">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<!--Modal: Profile with Avatar Form-->
<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-avatar modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header justify-content-center">
                <img width="200rem" src="
                            @if(Auth::user()->avatar == null)
                                {{asset('images/default-avatar.png')}}
                            @else
                                {{Auth::user()->avatar}}
                            @endif
                        ">
            </div>
            <!--Body-->
            <div class="modal-body text-center mb-1">
                <h5 class="mt-1 mb-2">@auth{{Auth::user()->name}}@endauth</h5>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="email" value="@auth{{Auth::user()->email}}@endauth">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bird-day" class="col-sm-2 col-form-label">Bird day</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control-plaintext" id="birth-day" value="@auth{{Auth::user()->birth_day}}@endauth" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="address" value="@auth{{Auth::user()->address}}@endauth" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone-number" class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control-plaintext" id="phone-number" value="@auth{{Auth::user()->phone_number}}@endauth" readonly>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-link"><a href="{{route('user.edit')}}">Edit</a></button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Profile with Avatar Form-->

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Cozy</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Opening Hours</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Monday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Tuesday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Wednesday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Thursday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Friday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Saturday: <span>08: - 22:00</span></a></li>
                        <li><a href="#" class="py-2 d-block">Sunday: <span>08: - 22:00</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Contact Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                        <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                        <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                        <li><a href="#" class="py-2 d-block">email@email.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>
                    <form action="#" class="subscribe-form">
                        <div class="form-group">
                            <span class="icon icon-paper-plane"></span>
                            <input type="text" class="form-control" placeholder="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@include('sweetalert::alert')
<script src="{{asset('cozy/js/jquery.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('cozy/js/popper.min.js')}}"></script>
<script src="{{asset('cozy/js/bootstrap.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('cozy/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('cozy/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('cozy/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('cozy/js/aos.js')}}"></script>
<script src="{{asset('cozy/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('cozy/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('cozy/js/jquery.timepicker.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('cozy/js/google-map.js')}}"></script>
<script src="{{asset('cozy/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
@yield('script')
</body>
</html>
