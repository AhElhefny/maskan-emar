@php use App\Models\GeneralSetting; @endphp
<nav class="navbar">
    <div class="container">
        <div class="upper-side">
            <div class="logo"> <a href="{{route('front.home')}}"><img src="{{asset('frontAssets/images/logo/'.GeneralSetting::getValueForKey('logo1'))}}" alt="Image"></a> </div>
            <!-- end logo -->
            <div class="phone-email"> <img src="{{asset('frontAssets/images/icon-phone.png')}}" alt="Image">
                <h4>+{{GeneralSetting::getValueForKey('contact_number')}}</h4>
                <small><a>{{GeneralSetting::getValueForKey('contact_mail')}}</a></small>
            </div>
            <!-- end phone -->
            <div class="language"> <a href="{{LaravelLocalization::getLocalizedURL('en')}}">EN</a> <a href="{{LaravelLocalization::getLocalizedURL('ar')}}">AR</a> </div>
            <!-- end language -->
            <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
            <!-- end hamburger -->
        </div>
        <!-- end upper-side -->
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
    </div>
    <!-- end container -->
</nav>
