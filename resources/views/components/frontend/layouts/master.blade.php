@php use App\Models\GeneralSetting; @endphp
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
                <li><a href="{{route('front.home')}}">{{__('dashboard.home')}}</a></li>
                <li><a href="{{route('front.about')}}">{{__('dashboard.about')}}</a></li>
                <li><a href="{{route('front.services')}}">{{__('dashboard.services')}}</a></li>
                <li><a href="{{route('front.gallery')}}">{{__('dashboard.gallery')}}</a></li>
                <li><a href="{{route('front.team')}}">{{__('dashboard.team')}}</a></li>
                <li><a href="{{route('front.sponsors')}}">{{__('dashboard.sponsors')}}</a></li>
                <li><a href="{{route('front.contact')}}">{{__('dashboard.contact')}}</a></li>
            </ul>
        </div>
        <!-- end menu -->
        <div class="side-content">
            <figure> <img src="{{asset('frontAssets/images/logo/'.GeneralSetting::getValueForKey('logo1'))}}" alt="Image"> </figure>
            <p>We Have More Than 20 Years Experiences To Handle Many High Class Building Project</p>
            <ul class="gallery">
                <li><a href="{{asset('frontAssets/images/gallery-thumb01.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb01.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('frontAssets/images/gallery-thumb02.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb02.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('frontAssets/images/gallery-thumb03.jpg')}}" data-fancybox><img src="{{asset('frontAssets/images/gallery-thumb03.jpg')}}" alt="Image"></a></li>
            </ul>
            <address>Saudi Arabia, Jeddah, Al-Naseem</address>
            <h6>+{{GeneralSetting::getValueForKey('contact_number')}}</h6>
            <p><a >{{GeneralSetting::getValueForKey('contact_mail')}}</a></p>
            <ul class="social-media">
                <li><a href="{{GeneralSetting::getValueForKey('contact_facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{GeneralSetting::getValueForKey('contact_twitter')}}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{GeneralSetting::getValueForKey('contact_linkedin')}}"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="{{GeneralSetting::getValueForKey('contact_google')}}"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="{{GeneralSetting::getValueForKey('contact_youtube')}}"><i class="fab fa-youtube"></i></a></li>
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
