@php use App\Models\GeneralSetting; @endphp

<!-- Footer Bar -->
<section class="footer-bar">
    <div class="container">
        <div class="inner wow fadeIn">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                    <figure><img src="{{ asset('frontAssets/images/footer-icon01.png') }}" alt="Image"></figure>
                    <h3>{{ __('dashboard.table address') }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? GeneralSetting::getValueForKey('address_ar') : GeneralSetting::getValueForKey('address_en') }}
                    </p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.10s">
                    <figure><img src="{{ asset('frontAssets/images/footer-icon02.png') }}" alt="Image"></figure>
                    <h3>{{ __('dashboard.works time') }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? GeneralSetting::getValueForKey('worktime_ar') : GeneralSetting::getValueForKey('worktime_en') }}</strong>
                    </p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                    <figure><img src="{{ asset('frontAssets/images/footer-icon03.png') }}" alt="Image"></figure>
                    <h3>{{ __('dashboard.Sales Office') }}</h3>
                    <p>{{ app()->getLocale() == 'ar' ? GeneralSetting::getValueForKey('sales_office_address_ar') : GeneralSetting::getValueForKey('sales_office_address_en') }}
                    </p>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end container -->
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.05s"> <img
                    src="{{ asset('frontAssets/images/logo/' . GeneralSetting::getValueForKey('logo1')) }}"
                    alt="Image" class="logo">
                <p>{{ app()->getLocale() == 'ar' ? GeneralSetting::getValueForKey('pageHome_about_desc_ar') : GeneralSetting::getValueForKey('pageHome_about_desc_en') }}
                </p>
                <!-- end select-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.10s">
                <ul class="footer-menu">
                    <li
                        style=" color: #FFF; font-size: 20px; font-weight: 700; padding: 0; line-height: 1; margin-bottom: 20px; ">
                        {{ __('dashboard.links') }}</li>
                    <li><a href="{{ route('front.home') }}">{{ __('dashboard.home') }}</a></li>
                    <li><a href="{{ route('front.about') }}">{{ __('dashboard.about') }}</a></li>
                    <li><a href="{{ route('front.services') }}">{{ __('dashboard.services') }}</a></li>
                    <li><a href="{{ route('front.team') }}">{{ __('dashboard.team') }}</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.15s">
                <ul class="footer-menu">
                    <li
                        style=" color: #FFF; font-size: 20px; font-weight: 700; padding: 0; line-height: 1; margin-bottom: 20px; ">
                        {{ __('dashboard.links') }}</li>
                    <li><a href="{{ route('front.gallery') }}">{{ __('dashboard.gallery') }}</a></li>
                    <li><a href="{{ route('front.sponsors') }}">{{ __('dashboard.sponsors') }}</a></li>
                    <li><a href="{{ route('front.contact') }}">{{ __('dashboard.contact') }}</a></li>
                </ul>
            </div>
            <!-- end col-2 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.20s">
                <div class="contact-box">
                    <h5>{{ __('dashboard.call center') }}</h5>
                    <h3>+{{ GeneralSetting::getValueForKey('contact_number') }}</h3>
                    <p><a>{{ GeneralSetting::getValueForKey('contact_mail') }}</a></p>
                    <ul>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_facebook') }}"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_twitter') }}"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_linkedin') }}"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_google') }}"><i
                                    class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_youtube') }}"><i
                                    class="fab fa-youtube"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_whatsapp') }}"><i
                                    class="fab fa-whatsapp"></i></a></li>
                        <li><a href="{{ GeneralSetting::getValueForKey('contact_snapchat') }}"><i
                                    class="fab fa-snapchat"></i></a></li>
                    </ul>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-12"> <span class="copyright">© 2023 Maskan Emar For Real Estate Development.</span> <span
                    class="creation">Developed With Love By <a href="https://badee.com.sa/">Badee</a></span> </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</footer>
