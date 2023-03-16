<x-frontend.layouts.master>


    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="Our Gallery">
    </x-frontend.layouts.breadcrumb>

    <!-- Gallery Page -->
    <section class="photo-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="gallery-filter">
                        <li><a href="javascript:void(0);" data-filter="*" class="current">ALL AREA</a></li>
                        <li><a href="javascript:void(0);" data-filter=".one">INTERIOR</a></li>
                        <li><a href="javascript:void(0);" data-filter=".two">BUILDING</a></li>
                        <li><a href="javascript:void(0);" data-filter=".three">SPACES</a></li>
                    </ul>
                    <ul class="gallery">
                        @foreach ($galleries as $gallery)
                            <li class="{{$gallery->name_en == 'interior' ? 'one':($gallery->name_en == 'building' ? 'two' : 'three')}}"><a href="{{ $gallery->image }}"
                                    data-fancybox><img src="{{ $gallery->image }}"
                                        alt="Image"></a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
