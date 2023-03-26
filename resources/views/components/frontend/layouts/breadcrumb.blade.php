@php use App\Models\GeneralSetting; @endphp
<header class="page-header" data-background="{{asset('frontAssets/images/header/'.GeneralSetting::getValueForKey('pages_header_image4'))}}" data-stellar-background-ratio="1.15">
    <div class="container">
        <h1>{{$title}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('front.home')}}">{{__('dashboard.home')}}</a></li>
                {{$slot}}
            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
        </ol>
    </div>
</header>
