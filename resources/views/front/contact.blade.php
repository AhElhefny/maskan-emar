@php use App\Models\GeneralSetting; @endphp
<x-frontend.layouts.master>
    <!-- Header Page -->
    <x-frontend.layouts.breadcrumb title="Contact US">
    </x-frontend.layouts.breadcrumb>

    <!-- Header Page -->
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>Contact Us</span></h4>
                    <small> {{GeneralSetting::getValueForKey('contact_title_en')}}</small>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>Visit Us</strong>
                        <p>Kristiatik 15th Street, Floot 17<br>Kiev, Ukraine 78692</p>
                    </address>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <strong>Say Hello</strong>
                        <p><a href="#">+966126280222</a></p>
                        <p><a href="#">maskanemaar@gmail.com</a></p>
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
                                <span>Your name</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" value="{{old('email')}}" required>
                                <span>Your e-mail</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off"  value="{{old('subject')}}" required>
                                <span>Subject</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="feedBack" id="message" autocomplete="off" required>{{old('feedBack')}}</textarea>
                                <span>Your message</span>
                            </div>

                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    Submit
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
