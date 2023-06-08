<x-frontend.layouts.master>


    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{ __('dashboard.gallery') }}">
    </x-frontend.layouts.breadcrumb>

    <!-- Gallery Page -->
    <section class="photo-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul
                        style="width: 100%;display: flex;flex-wrap: wrap;margin-bottom: 50px;">
                        <li style ="{{app()->getLocale() == 'ar'? 'margin-left :30px;':'margin-right:30px;'}}"><a href="{{ url()->current()}}"
                                class="{{!request('filter')?'badge bg-success':''}}">{{ __('dashboard.all area') }}</a></li>
                        @foreach ($cats as $cat)
                            <li style ="{{app()->getLocale() == 'ar'? 'margin-left :30px;':'margin-right:30px;'}}">
                                <a class="{{request('filter')==$cat->name_en?'badge bg-success':''}}" href="{{ url()->current() . '?filter=' . $cat->name_en }}">{{ $cat->name }}</a></li>
                        @endforeach

                        {{-- <li><a href="javascript:void(0);" data-filter=".one">{{__('dashboard.interior')}}</a></li>
                        <li><a href="javascript:void(0);" data-filter=".two">{{__('dashboard.building')}}</a></li>
                        <li><a href="javascript:void(0);" data-filter=".one">{{__('dashboard.spaces')}}</a></li> --}}
                    </ul>
                    <ul class="gallery">
                        @foreach ($galleries as $gallery)
                            <li
                                class="{{ $gallery->name_en == 'interior' ? 'one' : ($gallery->name_en == 'building' ? 'two' : 'three') }}">
                                <a href="{{ $gallery->image }}" data-fancybox><img src="{{ $gallery->image }}"
                                        alt="Image"></a>
                            </li>
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
