<!doctype html>
<html lang="en">

<x-frontend.layouts.head />

<body>
    <!-- Pre Loader -->
    <div class="preloader">
        <div class="layer"></div>
        <!-- end layer -->
        <div class="inner">
            <figure><img src="{{asset('frontAssets/images/preloader.gif')}}" alt="Image"></figure>
            <p><span class="text-rotater" data-text="Loading">Loading</span></p>
        </div>
        <!-- end inner -->
    </div>

    <!-- Transition -->
    <div class="transition-overlay">
        <div class="layer"></div>
    </div>

    <!-- Side Navigation -->
    <div class="side-navigation">
        <div class="menu">
            <ul>
                <li><a href="{{route('front.home')}}">Home</a></li>
                <li><a href="{{route('front.about')}}">About US</a></li>
                <li><a href="{{route('front.services')}}">Services</a></li>
                <li><a href="{{route('front.gallery')}}">Gallery</a></li>
                <li><a href="{{route('front.team')}}">Team</a></li>
                <li><a href="{{route('front.sponsors')}}">Sponsors</a></li>
                <li><a href="{{route('front.contact')}}">Contact</a></li>
            </ul>
        </div>
        <!-- end menu -->
        <div class="side-content">
            <figure> <img src="{{asset('frontAssets/images/logo-light.png')}}" alt="Image"> </figure>
            <p>We Have More Than 20 Years Experiences To Handle Many High Class Building Project</p>
            <ul class="gallery">
                <li><a href="{{asset('frontAssets/images/gallery-thumb01.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb01.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('frontAssets/images/gallery-thumb02.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb02.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('frontAssets/images/gallery-thumb03.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb03.jpg')}}" alt="Image"></a></li>
            </ul>
            <address>Saudi Arabia, Jeddah, Al-Naseem</address>
            <h6>+966126280222</h6>
            <p><a href="#">maskanemaar@gmail.com</a></p>
            <ul class="social-media">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
            <small>© 2023 Maskan Emar For Real Estate Development.</small>
        </div>
        <!-- end side-content -->
    </div>
    <!-- Navbar -->
    <x-frontend.layouts.topnav />

    {{$slot}}
    <!-- Footer -->
    <x-frontend.layouts.footer />
    <!-- JS FILES -->
    <script src="{{asset('frontAssets/js/plugin.js')}}"></script>
    <script src="{{asset('frontAssets/js/scripts.js')}}"></script>
</body>

</html>
