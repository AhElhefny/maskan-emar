<x-frontend.layouts.master>



    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="Property Management">
        <li class="breadcrumb-item"><a href="{{route('front.services')}}">Services</a></li>
    </x-frontend.layouts.breadcrumb>

    <!-- Services -->
    <section class="apartment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2><span>Property Management</span></h2>
                    <h5>Starting with our property management and over the course of twenty years, we expanded to manage
                        the properties of our success partners, given our experience in hotel, leasing and negotiation,
                        in addition to our legal arm (Al-Faisal Law Firm and Legal Consultancy).</h5>
                </div>
                <!-- end col-5 -->
                <div class="col-md-4">
                    <figure><img src="{{ asset('frontAssets/images/blog01.jpg') }}" alt="Image"></figure>
                </div>
                <!-- end col-4 -->
                <div class="col-md-4">
                    <figure><img src="{{ asset('frontAssets/images/blog02.jpg') }}" alt="Image"></figure>
                </div>
                <!-- end col-4 -->
                <div class="col-md-4">
                    <figure><img src="{{ asset('frontAssets/images/blog03.jpg') }}" alt="Image"></figure>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    </x-frontend.layouts.master>
