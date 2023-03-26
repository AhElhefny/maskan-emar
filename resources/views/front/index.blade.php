@php use App\Models\GeneralSetting; @endphp
<x-frontend.layouts.master>
    <!-- Slider -->
    <header class="slider">
        <div class="slider-container">
            <div class="swiper-wrapper">
                @for($i=1;$i<=3;$i++)
                    <div class="swiper-slide" style="background-image: url({{ asset('frontAssets/images/header/'.GeneralSetting::getValueForKey('slider'.$i)) }});">
                        <div class="container">
                            <h1>{{__('dashboard.welcome to')}}
                                <span>{{app()->getLocale()=='ar'? GeneralSetting::getValueForKey('website_name_ar'):GeneralSetting::getValueForKey('website_name_en')}}</span></h1>
                            <h2>{{app()->getLocale()=='ar'? GeneralSetting::getValueForKey('slider_title_ar'):GeneralSetting::getValueForKey('slider_title_en')}}
                                </h2>
                            <a href="#about">{{__('dashboard.start')}} <i class="fas fa-caret-right"></i></a>
                            <figure><img src="{{ asset('frontAssets/images/services-icon0'.$i.'.png') }}" alt="Image"></figure>
                        </div>
                        <!-- end container -->
                    </div>
                @endfor


                <!-- end swiper-slide -->
            </div>
            <!-- Add Pagination -->
            <div class="inner-elements">
                <div class="container">
                    <div class="pagination"></div>
                    <!-- end pagination -->
                    <div class="button-prev">{{__('dashboard.PREV')}}</div>
                    <!-- end button-prev -->
                    <div class="button-next">{{__('dashboard.NEXT')}}</div>
                    <!-- end button-next -->
                    <!-- <div class="social-media">
                            <h6>SOCIAL MEDIA</h6>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div> -->
                    <!-- end social-media -->
                </div>
                <!-- end container -->
            </div>
            <!-- end inner-elements -->
        </div>
        <!-- end slider-container -->
    </header>

    <!-- About Us -->
    <section class="intro" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure>
                        <div class="pattern-bg" data-stellar-ratio="1.07"></div>
                        <!-- end pattern-bg -->
                        <div class="holder" data-stellar-ratio="1.10"> <img
                                src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('pageHome_about_image3')) }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <?php
                    $title = app()->getLocale()=='ar'?GeneralSetting::getValueForKey('pageHome_about_title_ar'):GeneralSetting::getValueForKey('pageHome_about_title_en');
                    $fullTitle = explode(' ',$title);
                    $firstSec = $fullTitle[0];
                    unset($fullTitle[0]);
                    $title = implode(" ",$fullTitle);
                ?>
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>{{__('dashboard.about-us')}}</b>
                        <h4><span>{{$firstSec}}</span> {{$title}}</h4>
                        <h3>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('pageHome_about_desc_ar'):GeneralSetting::getValueForKey('pageHome_about_desc_en')}}</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">{{__('dashboard.Discover More')}} </a>
                    </div>
                    <!-- end content-box -->
                </div>
                <!-- edn col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>


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

    <!-- Services -->
    <section class="facilities  pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>{{__('dashboard.Our Services')}}</span></h4>
                    <small>{{app()->getLocale() == 'ar'?GeneralSetting::getValueForKey('services_title_ar'):GeneralSetting::getValueForKey('services_title_en')}}</small>
                </div>
            </div>
            <div class="row">
               @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                     <figure>
                         <img src="{{ $service->image }}" alt="Image">
                             <figcaption>
                                 <a href="{{route('front.services.show',$service->id)}}">
                                     <h5>{{$service->name}}</h5>
                                 </a>
                               <p>{{$service->description}}</p>
                           </figcaption>
                    </figure>
                </div>
               @endforeach
           </div>
     </div>
</section>

    <!-- Gallery  -->
    <section class="recent-gallery pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInUp"> <b>01</b>
                    <h4><span>{{__('dashboard.Our Gallery')}}</span></h4>
                    <h3>{{app()->getLocale() == 'ar'?GeneralSetting::getValueForKey('gallery_title_ar'):GeneralSetting::getValueForKey('gallery_title_en')}}</h3>
                    <a href="{{route('front.gallery')}}" class="link">{{__('dashboard.SEE ALL GALLERY')}} <i class="fas fa-caret-right"></i></a>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="row inner">
                        @foreach($randomGallery as $gallery)
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a
                                    href="{{ $gallery->image }}" data-fancybox><img
                                        src="{{ $gallery->image }}" style="min-height: 220px"
                                        alt="Image"></a> </figure>
                        </div>
                        @endforeach
                        <!-- end col-4 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col-7 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Our Vision -->
    <section class="property-calculator">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure>
                        <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                        <!-- end pattern-bg -->
                        <div class="holder" data-stellar-ratio="1.07"> <img
                                src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_vision_image')) }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>02</b>
                        <h4><span>{{__('dashboard.Our vision')}}</span></h4>
                        <h3>{{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('our_vision_desc_ar'):GeneralSetting::getValueForKey('our_vision_desc_en')}}</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">{{__('dashboard.Discover More')}}</a>
                    </div>
                    <!-- end content-box -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Rate US TODO-->
    <section class="property-customization">
        <div class="video-bg">
            <video src="{{ asset('frontAssets/videos/'.GeneralSetting::getValueForKey('rate_video')) }}" loop autoplay muted></video>
        </div>
        <!-- end video-bg -->
         <div class="container">
              <div class="row">
                   <div class="col-12 wow fadeInUp"> <b>03</b>
                      <h4><span>{{__('dashboard.rateus')}}</span></h4>
                  </div>
                     @foreach($rates as $rate)
                    <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s">
                         <figure data-toggle="tooltip" data-placement="top" title="{{__('dashboard.rateus')}}"> <img
                                src="{{$rate->image}}" alt="Image">
                          <figcaption>{{$rate->name}}</figcaption>
                      </figure>
                  </div>
                    @endforeach
                 </div>
           </div>
    </section>

    <!-- Our Message -->
    <section class="property-calculator">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure>
                        <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                        <!-- end pattern-bg -->
                        <div class="holder" data-stellar-ratio="1.07"> <img
                                src="{{ asset('frontAssets/images/about/'.GeneralSetting::getValueForKey('our_message_image')) }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>04</b>
                        <h4><span>{{__('dashboard.Our Message')}}</span></h4>
                        <h3>{{app()->getLocale() == 'ar'? GeneralSetting::getValueForKey('our_message_desc_ar'):GeneralSetting::getValueForKey('our_message_desc_en')}}</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">{{__('dashboard.Discover More')}}</a>
                    </div>
                    <!-- end content-box -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Contact -->
    <section class="contact pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="map">
                        <div class="pattern-bg" data-stellar-ratio="1.03"></div>
                        <!-- end pattern-bg -->
                        <div class="holder" data-stellar-ratio="1.07">
                            <iframe
                                src="{{GeneralSetting::getValueForKey('contact_map_iframe')}}"
                                allowfullscreen></iframe>
                        </div>
                        <!-- end holder -->
                    </div>
                    <!-- end map -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" name="contact" method="post" action="{{route('contactUs.store')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" value="{{old('name')}}" required>
                                <span>{{__('dashboard.table name')}}</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" value="{{old('email')}}" required>
                                <span>{{__('dashboard.table email')}}</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off"  value="{{old('subject')}}" required>
                                <span>{{__('dashboard.subject')}}</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="feedBack" id="message" autocomplete="off" required>{{old('feedBack')}}</textarea>
                                <span>{{__('dashboard.message')}}</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    {{__('dashboard.submit')}}
                                </button>
                            </div>
                            <!-- end form-group -->
                        </form>
                        <!-- end form -->
                        <div class="form-group">
                            @if(session()->has('success'))
                                <div class="alert alert-success wow fadeInUp" role="alert"> Your message
                                    was sent successfully! We will be in touch as soon as we can. </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger wow fadeInUp" role="alert">
                                    <ul>
                                        @foreach($errors->all() as $e)
                                            <li>{{$e}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <!-- end success -->
                            <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something went
                                wrong, try refreshing and submitting the form again. </div>
                            <!-- end error -->
                        </div>
                        <!-- end form-group -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>



</x-frontend.layouts.master>
