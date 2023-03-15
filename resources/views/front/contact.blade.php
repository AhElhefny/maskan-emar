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
                    <small>Get Every Updates </small>
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
