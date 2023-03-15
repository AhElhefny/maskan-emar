<nav class="navbar">
    <div class="container">
        <div class="upper-side">
            <div class="logo"> <a href="{{route('front.home')}}"><img src="{{asset('frontAssets/images/logo-light.png')}}" alt="Image"></a> </div>
            <!-- end logo -->
            <div class="phone-email"> <img src="{{asset('frontAssets/images/icon-phone.png')}}" alt="Image">
                <h4>+966126280222</h4>
                <small><a href="#">maskanemaar@gmail.com</a></small>
            </div>
            <!-- end phone -->
            <div class="language"> <a href="{{route('front.home')}}">EN</a> <a href="{{route('front.home')}}">AR</a> </div>
            <!-- end language -->
            <div class="hamburger"> <span></span> <span></span> <span></span><span></span> </div>
            <!-- end hamburger -->
        </div>
        <!-- end upper-side -->
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
    </div>
    <!-- end container -->
</nav>
