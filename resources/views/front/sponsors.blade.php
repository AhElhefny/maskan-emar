<x-frontend.layouts.master>


    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.sponsors')}}">
    </x-frontend.layouts.breadcrumb>


    <!-- Sponsors -->
    <section class="logos">
        <div class="container">
            <div class="row">
                @foreach ($sponsors as $sponsor)
                    <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
                        <figure> <img src="{{ $sponsor->image }}" alt="Image">
                            <h6>{{strtoupper($sponsor->title)}}</h6>
                        </figure>
                    </div>
                @endforeach
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
