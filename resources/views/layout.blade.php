<!DOCTYPE html>
<html lang="en">
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- css file import start here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- css file import end here -->
</head>

<body>

    <!-- Navbar Section Start Here -->
    <section class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="container">
                        <!-- navbar start here -->
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
                            <div class="container-fluid ">
                                <a class="navbar-brand" href="#">
                                    <img src="assets/images/favicon.ico" alt="" width="30" height="24" class="d-inline-block align-text-top">
                                    Doctor's Appointment
                                </a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse me-2 justify-content-end" id="navbarSupportedContent">
                                    <ul class="navbar-nav mb-2 mb-lg-0">
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/doctorarea')}}">Doctor</a></li>
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/assistantarea')}}">Assistant</a></li>
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/about')}}">About</a></li>
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('/contact')}}">Contact</a></li>
                                        @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        @else
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a></li>
                                        @if (Route::has('register'))
                                        <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                        @endauth
                                        @endif
                                        <button class="btn mx-2 btn-outline-info btn-sm btn-appointment" type="button" onclick="window.location='{{url('/makeanappointment')}}'">Make an Appointment</button>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- navbar end here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Navbar Section End Here -->

    <!-- Slider Section Start Here -->
    {{-- <section class="slider-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="slider-content">
                        <h1>Make an Appointment</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, quia doloribus quibusdam tempore quas eos eaque aperiam ipsum voluptas in. Quae ratione amet deleniti aut ullam. Quisquam, quod. Ducimus, doloribus.</p>
                        <button type="button" class="btn btn-info btn-slider" onclick="window.open('makeanappointment.html','_self')">Make an Appointment</button>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="slider-image">
                        <img src="assets/images/Doctor.jpg" alt="doctor">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Slider Section End Here -->

    <!-- =========================================================================================== -->
    <!-- =========================================================================================== -->
    <!-- These parts will be changed - Start Here -->
    @yield('content')

    <!-- These parts will be changed - Start Here -->
    <!-- =========================================================================================== -->
    <!-- =========================================================================================== -->

    <!-- Footer Area Start Here -->
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 copyright-info">
                    Copyright &copy; 2021 Doctor's Appointment
                </div>
                <div class="col-xl-6 designer-info">
                    Designed and developed by <a href="https://www.alinsworld.com">Alinsworld</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Area End Here -->




    <!-- js file import start here -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- js file import end here -->
</body>

</html>