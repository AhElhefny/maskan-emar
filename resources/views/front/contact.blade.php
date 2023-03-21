@php use App\Models\GeneralSetting; @endphp
<x-frontend.layouts.master>
    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="{{__('dashboard.contact')}}">
    </x-frontend.layouts.breadcrumb>

    <!-- Header Page -->
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>{{__('dashboard.contact')}}</span></h4>
                    <small> {{app()->getLocale()=='ar'?GeneralSetting::getValueForKey('contact_title_ar'):GeneralSetting::getValueForKey('contact_title_en')}}</small>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>{{__('dashboard.visit us')}}</strong>
                        <p>Kristiatik 15th Street, Floot 17<br>Kiev, Ukraine 78692</p>
                    </address>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>{{__('dashboard.say hello')}}</strong>
                        <p><a >+{{GeneralSetting::getValueForKey('contact_number')}}</a></p>
                        <p><a >{{GeneralSetting::getValueForKey('contact_mail')}}</a></p>
                    </address>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
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
