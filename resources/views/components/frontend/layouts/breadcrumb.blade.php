<header class="page-header" data-background="{{asset('frontAssets/images/slide01.jpg')}}" data-stellar-background-ratio="1.15">
    <div class="container">
        <h1>{{$title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.home')}}">{{__('dashboard.home')}}</a></li>
                {{$slot}}
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </div>
</header>
