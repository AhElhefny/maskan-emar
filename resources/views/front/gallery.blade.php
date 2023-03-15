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
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="two"><a href="{{ asset('frontAssets/images/gallery-thumb07.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb07.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="three"><a href="{{ asset('frontAssets/images/gallery-thumb02.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb02.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb04.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb04.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="two"><a href="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="three"><a href="{{ asset('frontAssets/images/gallery-thumb09.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb09.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="two"><a href="{{ asset('frontAssets/images/gallery-thumb10.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb10.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="three"><a href="{{ asset('frontAssets/images/gallery-thumb05.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb05.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb11.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb11.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="two"><a href="{{ asset('frontAssets/images/gallery-thumb12.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb12.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="three"><a href="{{ asset('frontAssets/images/gallery-thumb07.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb07.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="two"><a href="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb11.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb11.jpg') }}"
                                    alt="Image"></a></li>
                        <li class="one"><a href="{{ asset('frontAssets/images/gallery-thumb08.jpg') }}"
                                data-fancybox><img src="{{ asset('frontAssets/images/gallery-thumb08.jpg') }}"
                                    alt="Image"></a></li>
                    </ul>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

</x-frontend.layouts.master>
