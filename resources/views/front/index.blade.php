<x-frontend.layouts.master>
    <!-- Slider -->
    <header class="slider">
        <div class="slider-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url({{ asset('frontAssets/images/slide01.jpg') }});">
                    <div class="container">
                        <h1>Welcome to <span>Maskan Emar</span></h1>
                        <h2>The Future of House Design & Building</h2>
                        <a href="#about">Let's Start <i class="fas fa-caret-right"></i></a>
                        <figure><img src="{{ asset('frontAssets/images/services-icon01.png') }}" alt="Image"></figure>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide" style="background-image: url({{ asset('frontAssets/images/slide02.jpg') }});">
                    <div class="container">
                        <h1>Welcome to <span>Maskan Emar</span></h1>
                        <h2>The Future of House Design & Building</h2>
                        <a href="#about">Let's Start <i class="fas fa-caret-right"></i></a>
                        <figure><img src="{{ asset('frontAssets/images/services-icon08.png') }}" alt="Image">
                        </figure>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide" style="background-image: url({{ asset('frontAssets/images/slide03.jpg') }});">
                    <div class="container">
                        <h1>Welcome to <span>Maskan Emar</span></h1>
                        <h2>The Future of House Design & Building</h2>
                        <a href="#about">Let's Start <i class="fas fa-caret-right"></i></a>
                        <figure><img src="{{ asset('frontAssets/images/services-icon07.png') }}" alt="Image">
                        </figure>
                    </div>
                    <!-- end container -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- Add Pagination -->
            <div class="inner-elements">
                <div class="container">
                    <div class="pagination"></div>
                    <!-- end pagination -->
                    <div class="button-prev">PREV</div>
                    <!-- end button-prev -->
                    <div class="button-next">NEXT</div>
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
                                src="{{ asset('frontAssets/images/side-image01.jpg') }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>About Us</b>
                        <h4><span>Planning</span> & Designing Your House</h4>
                        <h3>We Have More Than 20 Years Experiences To Handle Many High Class Building Project</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">Discover More</a>
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
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0s">
                    <figure> <img src="{{ asset('frontAssets/images/logo01.jpg') }}" alt="Image">
                        <h6>VIRA</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
                    <figure> <img src="{{ asset('frontAssets/images/logo02.jpg') }}" alt="Image">
                        <h6>ROSLANDA</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.10s">
                    <figure> <img src="{{ asset('frontAssets/images/logo03.jpg') }}" alt="Image">
                        <h6>GISR</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.15s">
                    <figure> <img src="{{ asset('frontAssets/images/logo04.jpg') }}" alt="Image">
                        <h6>Taif Safari</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.20s">
                    <figure> <img src="{{ asset('frontAssets/images/logo05.jpg') }}" alt="Image">
                        <h6>Quezzam Restaurants</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.05s">
                    <figure> <img src="{{ asset('frontAssets/images/logo02.jpg') }}" alt="Image">
                        <h6>ROSLANDA</h6>
                    </figure>
                </div>
                <!-- end col-2 -->
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
                    <h4><span>Our Services</span></h4>
                    <small>Our Services Provide</small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon03.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Property Management</h5>
                            </a>
                            <p>Starting with the management of our property and over the course of twenty years we have
                                expanded to manage the property.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon01.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Real Estate Development</h5>
                            </a>
                            <p>Considering real estate development as part of the package of services provided by Maskan
                                Emar</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4 col-md-6">
                    <figure>
                        <img src="{{ asset('frontAssets/images/services-icon02.png') }}" alt="Image">
                        <figcaption>
                            <a href="{{route('front.services.show',0)}}">
                                <h5>Real Estate Marketing</h5>
                            </a>
                            <p>Considering our expertise in the real estate market, and the extension of our business to
                                the western region market in general.</p>
                        </figcaption>
                    </figure>
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Gallery -->
    <section class="recent-gallery pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 wow fadeInUp"> <b>01</b>
                    <h4><span>Our Gallery</span></h4>
                    <h3>Lets Discover Our Work</h3>
                    <a href="{{route('front.gallery')}}" class="link">SEE ALL GALLERY <i class="fas fa-caret-right"></i></a>
                </div>
                <!-- end col-5 -->
                <div class="col-lg-7">
                    <div class="row inner">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a
                                    href="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}" data-fancybox><img
                                        src="{{ asset('frontAssets/images/gallery-thumb01.jpg') }}"
                                        alt="Image"></a> </figure>
                        </div>
                        <!-- end col-4 -->
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.05s">
                            <figure data-stellar-ratio="1.15"> <a
                                    href="{{ asset('frontAssets/images/gallery-thumb02.jpg') }}" data-fancybox><img
                                        src="{{ asset('frontAssets/images/gallery-thumb02.jpg') }}"
                                        alt="Image"></a> </figure>
                        </div>
                        <!-- end col-4 -->
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.10s">
                            <figure data-stellar-ratio="1.04"> <a
                                    href="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}" data-fancybox><img
                                        src="{{ asset('frontAssets/images/gallery-thumb03.jpg') }}"
                                        alt="Image"></a> </figure>
                        </div>
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
                                src="{{ asset('frontAssets/images/side-image02.jpg') }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>02</b>
                        <h4><span>Our vision</span></h4>
                        <h3>That Maskan Emar Company be the first in the western region in real estate development.</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">Discover More</a>
                    </div>
                    <!-- end content-box -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <!-- Rate US -->
    <section class="property-customization">
        <div class="video-bg">
            <video src="{{ asset('frontAssets/videos/video01.mp4') }}" loop autoplay muted></video>
        </div>
        <!-- end video-bg -->
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp"> <b>03</b>
                    <h4><span>Rate US</span></h4>
                </div>
                <!-- end col-12 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon01.png') }}" alt="Image">
                        <figcaption>the speed</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon02.png') }}" alt="Image">
                        <figcaption>confidentiality</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.10s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon03.png') }}" alt="Image">
                        <figcaption>the responsibility</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.15s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon04.png') }}" alt="Image">
                        <figcaption>societal</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.20s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon05.png') }}" alt="Image">
                        <figcaption>the quality</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.25s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon06.png') }}" alt="Image">
                        <figcaption>exclusivity</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon07.png') }}" alt="Image">
                        <figcaption>excellence</figcaption>
                    </figure>
                </div>
                <!-- end col-2 -->
                <div class="col-md-3 col-md-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.05s">
                    <figure data-toggle="tooltip" data-placement="top" title="Rate US"> <img
                            src="{{ asset('frontAssets/images/services-icon08.png') }}" alt="Image">
                        <figcaption>effective communication</figcaption>
                    </figure>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
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
                                src="{{ asset('frontAssets/images/side-image01.jpg') }}" alt="Image"></div>
                        <!-- end holder -->
                    </figure>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6 wow fadeInUp">
                    <div class="content-box"> <b>04</b>
                        <h4><span>Our Message</span></h4>
                        <h3>We strive to provide quality and luxury in Saudi real estate development.</h3>
                        <a href="{{route('front.about')}}"> <img src="{{ asset('frontAssets/images/icon-m2.png') }}"
                                alt="Image">Discover More</a>
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
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1855.735609881844!2d39.2402563!3d21.5284224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d346727010b1%3A0x6bb8546070278fc!2z2LTYsdmD2Kkg2YXYs9mD2YYg2KXYudmF2KfYsSDZhNmE2KrYt9mI2YrYsSDYp9mE2LnZgtin2LHZig!5e0!3m2!1sar!2seg!4v1678873711913!5m2!1sar!2seg"
                                allowfullscreen></iframe>
                        </div>
                        <!-- end holder -->
                    </div>
                    <!-- end map -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" name="contact" method="post">
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" required>
                                <span>Your name</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" required>
                                <span>Your e-mail</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off" required>
                                <span>Subject</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="message" id="message" autocomplete="off" required></textarea>
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
                            <div id="success" class="alert alert-success wow fadeInUp" role="alert"> Your message
                                was sent successfully! We will be in touch as soon as we can. </div>
                            <!-- end success -->
                            <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Something
                                went wrong, try refreshing and submitting the form again. </div>
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
