<x-frontend.layouts.master>
    <x-frontend.layouts.breadcrumb title="{{$service->name}}">
        <li class="breadcrumb-item"><a href="{{route('front.services')}}">{{__('dashboard.services')}}</a></li>
    </x-frontend.layouts.breadcrumb>

     <section class="apartment">
         <div class="container">
              <div class="row">
                 <div class="col-12">
                      <h2><span>{{$service->name}}</span></h2>
                      <h5>{{$service->description}}</h5>
                 </div>
                   @foreach($service->galary as $image)
                   <div class="col-md-4">
                        <figure><img src="{{asset('dashboardAssets/images/services/'.$image->photo)}}" alt="Image"></figure>
                    </div>
                   @endforeach
               </div>
           </div>
    </section>

 </x-frontend.layouts.master>
