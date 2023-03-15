<x-frontend.layouts.master>

    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="About US">
    </x-frontend.layouts.breadcrumb>


    <!-- About Us Section Page -->
    <section class="about-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Welcome to <span>Maskan Emar</span></h2>
                    <h5>From the lips of Taif to the coast of Jeddah, a story of a real estate association that lasted
                        more than twenty years, starting with small residential complexes, up to major resorts, through
                        which we presented a model of elegant architecture and exceptional quality implementation. In
                        Maskan Emar, we adhered to quality as an approach, so we took a pledge to make every project a
                        bright flower in its place.</h5>
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
                                            src="{{ asset('frontAssets/images/side-image02.jpg') }}" alt="Image">
                                    </div>
                                    <!-- end holder -->
                                </figure>
                            </div>
                            <!-- end col-6 -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="content-box"> <b>02</b>
                                    <h4><span>Our vision</span></h4>
                                    <h3>That Maskan Emar Company be the first in the western region in real estate
                                        development.</h3>
                                    <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                            alt="Image">Discover More</a>
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
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/blog01.jpg') }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/blog02.jpg') }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/blog03.jpg') }}"
                                    alt="Image"></div>
                            <div class="swiper-slide"><img src="{{ asset('frontAssets/images/blog04.jpg') }}"
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
                                            src="{{ asset('frontAssets/images/side-image01.jpg') }}" alt="Image">
                                    </div>
                                    <!-- end holder -->
                                </figure>
                            </div>
                            <!-- end col-6 -->
                            <div class="col-lg-6 wow fadeInUp">
                                <div class="content-box"> <b>04</b>
                                    <h4><span>Our Message</span></h4>
                                    <h3>We strive to provide quality and luxury in Saudi real estate development.</h3>
                                    <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                            alt="Image">Discover More</a>
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
