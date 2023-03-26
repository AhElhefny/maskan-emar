@php use App\Models\GeneralSetting; @endphp
<x-frontend.layouts.master>

    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.about')}}">
    </x-frontend.layouts.breadcrumb>


    <!-- About Us Section Page -->
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{__('dashboard.welcome to')}} <span>{{app()->getLocale() == 'ar'?GeneralSetting::getValueForKey('website_name_ar'):GeneralSetting::getValueForKey('website_name_en')}}</span></h2>
                    <h5>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('page_about_desc_ar'):GeneralSetting::getValueForKey('page_about_desc_en')}}</h5>
                </div>
                <!-- Our Vision -->
                <div class="property-calculator">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <figure>
                                    <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                                    <!-- end pattern-bg -->
                                    <div class="holder" data-stellar-ratio="1.07"> <img
                                            src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_vision_image')) }}" alt="Image">
                                    </div>
                                    <!-- end holder -->
                                </figure>
                            </div>
                            <!-- end col-6 -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="content-box"> <b>02</b>
                                    <h4><span>{{__('dashboard.Our vision')}}</span></h4>
                                    <h3>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('our_vision_desc_ar'):GeneralSetting::getValueForKey('our_vision_desc_en')}}</h3>
{{--                                    <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"--}}
{{--                                          alt="Image">Discover More</a>--}}
                                </div>
                                <!-- end content-box -->
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>

                <div class="col-12">
                    <div class="gallery-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('about_slider_1')) }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('about_slider_2')) }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('about_slider_3')) }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('about_slider_4')) }}"
                                    alt="Image"></div>
                        </div>
                        <!-- add swiper-wrapper -->
                        <div class="gallery-pagination"></div>
                        <!-- end gallery-pagination -->
                    </div>

                </div>
                <!-- en col-12 -->

                <!-- Our Message -->
                <div class="property-calculator pb-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <figure>
                                    <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                                    <!-- end pattern-bg -->
                                    <div class="holder" data-stellar-ratio="1.07"> <img
                                            src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_message_image')) }}" alt="Image">
                                    </div>
                                    <!-- end holder -->
                                </figure>
                            </div>
                            <!-- end col-6 -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="content-box"> <b>04</b>
                                    <h4><span>{{__('dashboard.Our Message')}}</span></h4>
                                    <h3>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('our_message_desc_ar'):GeneralSetting::getValueForKey('our_message_desc_en')}}</h3>
{{--                                    <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"--}}
{{--                                            alt="Image">Discover More</a>--}}
                                </div>
                                <!-- end content-box -->
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>


            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
