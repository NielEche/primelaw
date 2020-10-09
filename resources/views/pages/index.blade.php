@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<!-- Content -->
<main class="content-row">
    <div class="slider-wrapp">
        <!-- START Home REVOLUTION SLIDER -->
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1_1" data-version="5.0">
                <ul>
                    <li data-transition="fade">
                        <img src="{{ asset('files/img/slider/slide1.jpg') }}" class="rev-slidebg" alt="" />
                       
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" id="slide-home11-title"
                            data-x="['left','left','left','left']" data-hoffset="['15','100','30','15']"
                            data-y="['top','top','middle','middle']" data-voffset="['281','280','-27','-23']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 15; font-family:Prata; white-space: nowrap; font-size: 72px; line-height: 70px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                            Competence, Dynamism <br> and Integrity</div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-btn" id="slide-home11-btn" data-x="['left','left','left','left']"
                            data-hoffset="['15','100','30','15']" data-y="['top','top','middle','middle']"
                            data-voffset="['490','490','161','141']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text"
                            data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"javascript:void(0);"}]'
                            data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(204, 189, 153, 1.00);bg:rgba(0, 0, 0, 0);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[25,25,25,25]"
                            data-paddingright="[34,34,34,34]" data-paddingbottom="[25,25,25,25]"
                            data-paddingleft="[34,34,34,34]"
                            style="z-index: 20; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(204, 189, 153, 1);border-color:rgba(204, 189, 153, 1);border-style:solid;border-width:1px;letter-spacing:1px;">
                            LEARN MORE</div>

                    </li>
                    <li data-transition="fade">
                        <img src="{{ asset('files/img/slider/slide2.jpg') }}" class="rev-slidebg" alt="" />

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" id="slide-home12-title"
                            data-x="['left','left','left','left']" data-hoffset="['15','100','30','15']"
                            data-y="['top','top','middle','middle']" data-voffset="['281','280','-27','-23']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 15; font-family:Prata; white-space: nowrap; font-size: 72px; line-height: 70px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                            We Appear<br>When You Can't</div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption rev-btn" id="slide-home12-btn" data-x="['left','left','left','left']"
                            data-hoffset="['15','100','30','15']" data-y="['top','top','middle','middle']"
                            data-voffset="['490','490','161','141']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="text"
                            data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"javascript:void(0);"}]'
                            data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"nothing"},{"frame":"hover","speed":"300","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(204, 189, 153, 1.00);bg:rgba(0, 0, 0, 0);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[25,25,25,25]"
                            data-paddingright="[34,34,34,34]" data-paddingbottom="[25,25,25,25]"
                            data-paddingleft="[34,34,34,34]"
                            style="z-index: 20; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(204, 189, 153, 1);border-color:rgba(204, 189, 153, 1);border-style:solid;border-width:1px;letter-spacing:1px;">
                            CHECK OUR EXPERTS</div>

                    </li>
                    <li data-transition="fade">
                        <img src="{{ asset('files/img/slider/slide3.jpg') }}" class="rev-slidebg" alt="" />
                        <!-- LAYER NR. 1 
                        <div class="tp-caption tp-resizeme with_shape" id="slide-home13-descr"
                            data-x="['left','left','left','left']" data-hoffset="['15','100','30','15']"
                            data-y="['top','top','middle','middle']" data-voffset="['225','225','-167','-128']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 10; font-family:Open Sans; white-space: nowrap; font-size: 22px; line-height: 30px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                            Prime Law Partnership. </div>-->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" id="slide-home13-title"
                            data-x="['left','left','left','left']" data-hoffset="['15','100','30','15']"
                            data-y="['top','top','middle','middle']" data-voffset="['281','280','-27','-23']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 15; font-family:Prata; white-space: nowrap; font-size: 72px; line-height: 70px; font-weight: 400; color: rgba(255, 255, 255, 1.00);">
                            We are A Voice<br>of Justice</div>

                    </li>
                </ul>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
        <div class="banner-02">
            <div class="banner-02__grid">
                <div class="banner-02__item">
                    <figure class="banner-02__item-img">
                        <img src="{{ asset('files/img/icon/icon_box_07.png') }}" alt="">
                    </figure>
                    <div class="banner-02__item-content">
                        <p class="banner-02__item-subtitle">Book An</p>
                        <h3 class="banner-02__item-title">Appointment</h3>
                    </div>
                </div>
            </div>
            <div class="banner-02__grid">
                <div class="banner-02__item">
                    <figure class="banner-02__item-img">
                        <img src="{{ asset('files/img/icon/icon_box_08.png') }}" alt="">
                    </figure>
                    <div class="banner-02__item-content">
                        <p class="banner-02__item-subtitle">Get Free Case</p>
                        <h3 class="banner-02__item-title">Evaluation</h3>
                    </div>
                </div>
            </div>
            <div class="banner-02__grid">
                <div class="banner-02__item">
                    <figure class="banner-02__item-img">
                        <img src="{{ asset('files/img/icon/icon_08.png') }}" alt="">
                    </figure>
                    <div class="banner-02__item-content">
                        <p class="banner-02__item-subtitle">Get In</p>
                        <h3 class="banner-02__item-title">Touch</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="color-block-02">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="indents-85"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <h2 class="content-title-01 content-title--06">Achieving excellence through competence, dynamism and integrity</h2>
                </div>
                <div class="col-lg-1">
                    <div class="content-divider"></div>
                </div>
                <div class="col-lg-4">
                    <p>
                        <span class="dropcap">O</span>ur firm has over the years built an active company, commercial, advisory and litigation Practice Group that has arisen in the main from advising clients on various aspects of Commercial law, Land Law, Company Law and related transactions, including </p>
                </div>
                <div class="col-lg-4">
                    <p>statutory provisions, different modes of acquisition, compensation, community/traditional relations and litigation. Ours is arguably one of the foremost of such practice groups in the entire South/South and South East Regions of the country presently.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="indents-80"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="practice-lists">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <h2 class="content-title-01">Practice Areas</h2>
                    <div class="practice-lists__text">
                        <p>The experience accumulated by the members of the Firm span through Commercial and Civil Litigation, Banking and Corporate Finance, Company and Investment Laws, Telecommunication and Technology Law, Oil and Gas Law, Environmental Law, Real Estate, Industrial and Labour Laws, Securities and Capital Market Issues</p>
                    </div>
                    <div class="indents-md-30"></div>
                </div>
                <div class="col-md-4 offset-lg-1">
                    <ul class="practice-lists__list">
                        <li>
                            <span>Company & Investment Laws</span>
                        </li>
                        <li>
                            <span>Telecomms, Patents and Trademarks</span>
                        </li>
                        <li>
                            <span>Commercial Law</span>
                        </li>
                        <li>
                            <span>Labour Law</span>
                        </li>
                        <li>
                            <span>Property & Real Estate</span>
                        </li>
                        <li>
                            <span>Company Secretarial</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="practice-lists__list">
                        <li>
                            <span>Oil & Gas</span>
                        </li>
                        <li>
                            <span>Foreign Investments and Divestments</span>
                        </li>
                        <li>
                            <span>Banking and Corporate Finance</span>
                        </li>
                        <li>
                            <span>Securities and Capital Market Issues</span>
                        </li>
                        <li>
                            <span>Litigation</span>
                        </li>
                        <li>
                            <a class="practice-lists__link" href="#">View All</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="counter-block-01">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col">
                            <div class="shortcode-counter">
                                <div class="counter-wrapper">
                                    <div class="counter-content">
                                        <div class="stat-count-wrapper">
                                            <p class="stat-count stat-count__dec" data-count="72">0</p>
                                            <p class="counter-title">Charges
                                                <br> Dropped</p>
                                        </div>
                                        <div class="stat-temp"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="shortcode-counter">
                                <div class="counter-wrapper">
                                    <div class="counter-content">
                                        <div class="stat-count-wrapper">
                                            <p class="stat-count" data-count="87">0</p>
                                            <p class="counter-title">Cases
                                                <br> Won</p>
                                        </div>
                                        <div class="stat-temp"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="shortcode-counter">
                                <div class="counter-wrapper">
                                    <div class="counter-content">
                                        <div class="stat-count-wrapper">
                                            <p class="stat-count" data-count="36">0</p>
                                            <p class="counter-title">Cases
                                                <br> Dismissed</p>
                                        </div>
                                        <div class="stat-temp"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="shortcode-counter">
                                <div class="counter-wrapper">
                                    <div class="counter-content">
                                        <div class="stat-count-wrapper">
                                            <p class="stat-count" data-count="24">0</p>
                                            <p class="counter-title">Countersuits
                                                <br> Filed</p>
                                        </div>
                                        <div class="stat-temp"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-03">
        <div class="banner-03__grid">
            <div class="banner-03__item">
                <figure class="banner-03__item-img">
                    <img src="{{ asset('files/img/icon/icon_box_10.png') }}" alt="">
                </figure>
                <div class="banner-03__item-text">
                    <p>Excellence</p>
                </div>
            </div>
        </div>
        <div class="banner-03__grid">
            <div class="banner-03__item">
                <figure class="banner-03__item-img">
                    <img src="{{ asset('files/img/icon/icon_box_11.png') }}" alt="">
                </figure>
                <div class="banner-03__item-text">
                    <p>Competence</p>
                </div>
            </div>
        </div>
        <div class="banner-03__grid">
            <div class="banner-03__item">
                <figure class="banner-03__item-img">
                    <img src="{{ asset('files/img/icon/icon_box_12.png') }}" alt="">
                </figure>
                <div class="banner-03__item-text">
                    <p>Dynamism</p>
                </div>
            </div>
        </div>
        <div class="banner-03__grid">
            <div class="banner-03__item">
                <figure class="banner-03__item-img">
                    <img src="{{ asset('files/img/icon/icon_box.png') }}" alt="">
                </figure>
                <div class="banner-03__item-text">
                    <p>Integrity</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="front-block bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <figure class="front-block__img">
                        <a href="#">
                            <img src="{{ asset('files/img/favicon/primelaw.png') }}" alt="">
                        </a>
                    </figure>
                    <p class="front-block__text-01">Call Us 24/7</p>
                    <p class="front-block__phone">+234 809 500 0600</p>
                    <p class="front-block__text-02">or</p>
                    <h2 class="front-block__text-03">Schedule a Consultation</h2>
                    <a class="button-02" href="#">MAKE AN APPOINTMENT</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <!--<div class="full-block-05 full-block-05--bg-02">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h3 class="full-block-05__title">What People Say</h3>
                    <blockquote class="full-block-05__blockquote">
                        It should go without saying that designers, now more than ever, have to design with a
                        mobile-first mentality.
                    </blockquote>
                    <div class="full-block-05__quote-author">
                        <figure class="full-block-05__quote-author-img">
                            <a href="#">
                                <img src="img/user_img/user_img_07.jpg" alt="">
                            </a>
                        </figure>
                        <p class="full-block-05__quote-author-text">by
                            <a href="#">John Doe</a>, Company CEO</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="color-block-01 color-block-01--02">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <h2 class="content-title-01">Meet Our Attorneys</h2>
                </div>
                <div class="col-xl-6">
                    <div class="content-text-01">
                        <p>We bring each client a combination of deep industry knowledge and expert perspectives from
                            other industries on the challenge at stake, to offer our clients fresh perspectives and
                            breakthrough business insights.</p>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="color-block-01__btn-wrapp">
                        <a href="#" class="button-01">Meet Our Team</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="indents-300 indents-xl-200 indents-md-100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="team-block team-block--01">
                    <div class="team-block__item">
                        <figure class="team-block__item-img">
                            <a href="#">
                                <img src="{{ asset('files/img/team_img/team1.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="team-block__item-content">
                            <h3 class="team-block__item-title">BILL UZOMA UKACHUKWU</h3>
                            <p class="team-block__item-subtitle">Senior Partner</p>
                        </div>
                    </div>
                    <div class="team-block__item">
                        <figure class="team-block__item-img">
                            <a href="#">
                                <img src="{{ asset('files/img/team_img/team3.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="team-block__item-content">
                            <h3 class="team-block__item-title">LILLY-TARIAH SOJIYE T</h3>
                            <p class="team-block__item-subtitle">Senior Partner</p>
                        </div>
                    </div>
                    <div class="team-block__item">
                        <figure class="team-block__item-img">
                            <a href="#">
                                <img src="{{ asset('files/img/team_img/team4.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="team-block__item-content">
                            <h3 class="team-block__item-title">OCHE SAMUEL ONAZI</h3>
                            <p class="team-block__item-subtitle">Senior Associate</p>
                        </div>
                    </div>
                    <div class="team-block__item">
                        <figure class="team-block__item-img">
                            <a href="#">
                                <img src="{{ asset('files/img/team_img/team2.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="team-block__item-content">
                            <h3 class="team-block__item-title">NWEZE NKECHI</h3>
                            <p class="team-block__item-subtitle">Associate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--<div class="color-block-02">
        <div class="att-logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="att-logo" src="img/att_logo/att_logo_01.png" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="att-logo" src="img/att_logo/att_logo_02.png" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="att-logo" src="img/att_logo/att_logo_03.png" alt="">
                    </div>
                    <div class="col-md-3">
                        <img class="att-logo" src="img/att_logo/att_logo_04.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="indents-59"></div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="content-title-02">Recent News</h2>
                <div class="content-subtitle-02">
                    <p>We offer our clients fresh perspectives and breakthrough business insights.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="recent-news-post">
                    <figure class="recent-news-post__img">
                        <img src="{{ asset('files/img/recent_news/recent_news_01.jpg') }}" alt="">
                    </figure>
                    <div class="recent-news-post__content">
                        <div class="recent-news-user">
                            <figure class="recent-news-user__img">
                                <a href="#">
                                    <img src="{{ asset('files/img/user_img/user_img_04.jpg') }}" alt="">
                                </a>
                            </figure>
                            <p class="recent-news-user__text">By
                                <a href="#">Ben Moss</a>
                            </p>
                        </div>
                        <div class="recent-news-post__text-wrapp">
                            <div class="recent-news-post__backend-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">US Sues California Over Immigration Laws</a>
                                </h4>
                                <div class="recent-news-post__text">
                                    <p>Our Company is the world’s leading manufacturer. We are also a leading financial
                                        services provider. We are in it for the long haul—for our customers and for our
                                        world. </p>
                                </div>
                            </div>
                            <div class="recent-news-post__front-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">US Sues California Over Immigration Laws</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-news-post__meta">
                            <a href="#" class="recent-news-post__meta-category">COMMENTARY</a>
                            <span class="recent-post-divider"></span>
                            <p class="recent-news-post__meta-date">12/01/2019</p>
                            <div class="share-icon-wrapp">
                                <span class="share-icon">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </span>
                                <ul class="share-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="recent-news-post">
                    <figure class="recent-news-post__img">
                        <img src="{{ asset('files/img/recent_news/recent_news_02.jpg') }}" alt="">
                    </figure>
                    <div class="recent-news-post__content">
                        <div class="recent-news-user">
                            <figure class="recent-news-user__img">
                                <a href="#">
                                    <img src="{{ asset('files/img/user_img/user_img_05.jpg') }}" alt="">
                                </a>
                            </figure>
                            <p class="recent-news-user__text">By
                                <a href="#">Ben Moss</a>
                            </p>
                        </div>
                        <div class="recent-news-post__text-wrapp">
                            <div class="recent-news-post__backend-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">Special Master Delays High-Stakes Report on $75M Class Action Fee
                                        Request</a>
                                </h4>
                                <div class="recent-news-post__text">
                                    <p>Our Company is the world’s leading manufacturer. We are also a leading financial
                                        services provider. We are in it for the long haul—for our customers and for our
                                        world. </p>
                                </div>
                            </div>
                            <div class="recent-news-post__front-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">Special Master Delays High-Stakes Report on $75M Class Action Fee
                                        Request</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-news-post__meta">
                            <a href="#" class="recent-news-post__meta-category">Musings</a>
                            <span class="recent-post-divider"></span>
                            <p class="recent-news-post__meta-date">12/01/2019</p>
                            <div class="share-icon-wrapp">
                                <span class="share-icon">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </span>
                                <ul class="share-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="recent-news-post">
                    <figure class="recent-news-post__img">
                        <img src="{{ asset('files/img/recent_news/recent_news_03.jpg') }}" alt="">
                    </figure>
                    <div class="recent-news-post__content">
                        <div class="recent-news-user">
                            <figure class="recent-news-user__img">
                                <a href="#">
                                    <img src="{{ asset('files/img/user_img/user_img_06.jpg') }}" alt="">
                                </a>
                            </figure>
                            <p class="recent-news-user__text">By
                                <a href="#">Carla Johnson</a>
                            </p>
                        </div>
                        <div class="recent-news-post__text-wrapp">
                            <div class="recent-news-post__backend-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">So You’ve Had a Compliance Breach—Now What?</a>
                                </h4>
                                <div class="recent-news-post__text">
                                    <p>Our Company is the world’s leading manufacturer. We are also a leading financial
                                        services provider. We are in it for the long haul—for our customers and for our
                                        world. </p>
                                </div>
                            </div>
                            <div class="recent-news-post__front-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">So You’ve Had a Compliance Breach—Now What?</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-news-post__meta">
                            <a href="#" class="recent-news-post__meta-category">News</a>
                            <span class="recent-post-divider"></span>
                            <p class="recent-news-post__meta-date">12/01/2019</p>
                            <div class="share-icon-wrapp">
                                <span class="share-icon">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </span>
                                <ul class="share-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-lg-none">
                <div class="recent-news-post">
                    <figure class="recent-news-post__img">
                        <img src="img/recent_news/recent_news_04.jpg" alt="">
                    </figure>
                    <div class="recent-news-post__content">
                        <div class="recent-news-user">
                            <figure class="recent-news-user__img">
                                <a href="#">
                                    <img src="img/user_img/user_img_06.jpg" alt="">
                                </a>
                            </figure>
                            <p class="recent-news-user__text">By
                                <a href="#">Carla Johnson</a>
                            </p>
                        </div>
                        <div class="recent-news-post__text-wrapp">
                            <div class="recent-news-post__backend-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                </h4>
                                <div class="recent-news-post__text">
                                    <p>Phasellus non justo quis leo sodales bibendum. Suspendisse potenti. Fusce ut
                                        varius tellus. Phasellus leo orci, gravida vel nulla a, tincidunt ornare purus.
                                    </p>
                                </div>
                            </div>
                            <div class="recent-news-post__front-block">
                                <h4 class="recent-news-post__title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur</a>
                                </h4>
                            </div>
                        </div>
                        <div class="recent-news-post__meta">
                            <a href="#" class="recent-news-post__meta-category">News</a>
                            <span class="recent-post-divider"></span>
                            <p class="recent-news-post__meta-date">12/01/2019</p>
                            <div class="share-icon-wrapp">
                                <span class="share-icon">
                                    <i class="fa fa-share-alt" aria-hidden="true"></i>
                                </span>
                                <ul class="share-list">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="indents-80"></div>
            </div>
        </div>
    </div>
    <div class="color-block-03 color-block-03--01">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <h4 class="subscribe-box-title">Stay Always In Touch</h4>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <form class="subscribe-box" action="./">
                        <input class="subscribe-box__text" type="text" placeholder="Enter Your Email Address">
                        <button class="subscribe-box__btn" type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection