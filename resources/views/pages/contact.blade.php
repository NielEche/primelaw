@extends('layouts.app')

@section('title')
Contact Us
@endsection

@section('content')
<!-- Content -->
<main class="content-row">
    <div class="page-header page-header-09 mb-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts_wrap contacts_fullwidth">
        <div class="row">
            <div class="col-md-6">
                <div class="contacts_fw_column">
                    <h2 class="full-block-03__title">Get in touch</h2>
                    <p>Primelaw Partnership is committed to providing a high level of service to our customers. We are
                        proud of our level of service and experience. We stand up for the little person and we treat
                        each individual with dignity and respect. If your legal need is time sensitive, then you should
                        contact our firm by the details given below.</p>
                    <h4>Address</h4>
                    <p class="mb-0">PrimeLaw Partnership (Barristers+Solicitors+Notaries) Sterling Bank Building (2nd Floor) Plot 013,
                        Trans Amadi Industrial Layout </p>
                    <p class="mb-0">Port Harcourt </p>
                    <p class="">Rivers State Nigeria</p>
                    <h5 class="mb-0">Lagos Office</h5>
                    <p class="mb-0">Plot 5, Chief Yusuf Abiodun WayOniru Estate </p>
                    <p class="mb-0">Victoria Island</p>
                    <p class="mb-0">Lagos</p>
                    <h4>Phones</h4>
                    <p><a href="tel:234-809-500-0600">+234 809 500 0600</a><br><a href="tel:818-220-8643‎">+818 220
                            8643‎</a><br><a>+2348033094220</a></p>
                    <h4>Email</h4>
                    <p><a href="mailto:info@primelawng.com">info@primelawng.com</a></p>
                    <div class="gt3_social">
                        <a class="gt3_icon_link" href="#"><i class="fa fa-twitter">&nbsp;</i></a>&nbsp;<a
                            class="gt3_icon_link" href="#"><i class="fa fa-facebook">&nbsp;</i></a>&nbsp;<a
                            class="gt3_icon_link" href="#"><i class="fa fa-linkedin">&nbsp;</i></a>&nbsp;<a
                            class="gt3_icon_link" href="#"><i class="fa fa-instagram">&nbsp;</i></a>
                    </div>
                    <div class="contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <form id="ajax-contact-form" action="#">
                                <div class="row">
                                    <div class="col-md-6"><input type="text" name="name" value=""
                                            placeholder="Your Name *" /></div>
                                    <div class="col-md-6"><input type="text" name="email" value=""
                                            placeholder="Your Email *" /></div>
                                    <div class="col-md-12">
                                        <textarea name="message" placeholder="Message *"></textarea>
                                        <input type="submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.9481002665902!2d-73.82045698419901!3d40.67511247933593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQwJzMwLjQiTiA3M8KwNDknMDUuOCJX!5e0!3m2!1sen!2sua!4v1575971583584!5m2!1sen!2sua"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
