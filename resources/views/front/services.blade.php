@php
    use App\Models\GeneralSetting;
@endphp
<x-frontend.layouts.master>
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.services')}}">
    </x-frontend.layouts.breadcrumb>

    <section class="facilities">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>{{__('dashboard.services')}}</span></h4>
                    <small>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('services_title_ar'):GeneralSetting::getValueForKey('services_title_en')}}</small>
                </div>
            </div>
             <div class="row">
                 @foreach($services as $service)
                 <div class="col-lg-4 col-md-6">
                      <figure>
                         <img src="{{ $service->image }}" alt="Image">
                            <figcaption>
                                 <a href="{{route('front.services.show',$service->id)}}">
                                     <h5>{{ $service->name }}</h5>
                                 </a>
                              <p>{{$service->description}}</p>
                           </figcaption>
                     </figure>
                 </div>
                 @endforeach
            </div>
        </div>
    </section>

</x-frontend.layouts.master>
