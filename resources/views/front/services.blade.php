<x-frontend.layouts.master>
    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.services')}}">
    </x-frontend.layouts.breadcrumb>


    <!-- Services -->
    <section class="facilities">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>Our Services</span></h4>
                    <small>Our Services Provide</small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon03.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Property Management</h5>
                            </a>
                            <p>Starting with the management of our property and over the course of twenty years we have
                                expanded to manage the property.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon01.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Real Estate Development</h5>
                            </a>
                            <p>Considering real estate development as part of the package of services provided by Maskan
                                Emar</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon03.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Real Estate Marketing</h5>
                            </a>
                            <p>Considering our expertise in the real estate market, and the extension of our business to
                                the western region market in general.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
