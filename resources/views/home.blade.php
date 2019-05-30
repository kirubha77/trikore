@extends('layouts.master')
@section('title')
<title>Best Web Design Company | Ecommerce Development Company</title>
@endsection
@section('content')
    <div role="main" class="main">

                <div class="slider-container rev_slider_wrapper" style="height: 670px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': false }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                        <ul>
                            {{-- <li class="slide-overlay" data-transition="fade">
                                <img src="{{ asset('themes/porto/asset/img/banner/slide-01.jpg') }}"  
                                    alt=""
                                    data-bgposition="center center" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    class="rev-slidebg">

                                <div class="tp-caption"
                                    data-x="center" data-hoffset="['-145','-145','-145','-320']"
                                    data-y="center" data-voffset="['-80','-80','-80','-130']"
                                    data-start="1000"
                                    data-transform_in="x:[-300%];opacity:0;s:500;"
                                    data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('themes/porto/asset/img/slides/slide-title-border.png') }}" alt=""></div>

                                <div class="tp-caption text-color-light font-weight-normal"
                                    data-x="center"
                                    data-y="center" data-voffset="['-80','-80','-80','-130']"
                                    data-start="700"
                                    data-fontsize="['16','16','16','40']"
                                    data-lineheight="['25','25','25','45']"
                                    data-transform_in="y:[-50%];opacity:0;s:500;">WE ARE INVENTIVE, WE ARE YOUR</div>

                                <div class="tp-caption"
                                    data-x="center" data-hoffset="['145','145','145','320']"
                                    data-y="center" data-voffset="['-80','-80','-80','-130']"
                                    data-start="1000"
                                    data-transform_in="x:[300%];opacity:0;s:500;"
                                    data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('themes/porto/asset/img/slides/slide-title-border.png') }}" alt=""></div>

                            <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['-155','-155','-155','-255']"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">O</div>

                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['-80','-80','-80','-130']"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">N</div>

                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">L</div>

                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['65','65','65','115']"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">I</div>

                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['139','139','139','240']"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">N</div>

                                <div class="tp-caption font-weight-extra-bold text-color-light"
                                    data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['200','200','200','380']"
                                    data-y="center"
                                    data-fontsize="['145','145','145','250']"
                                    data-lineheight="['150','150','150','260']">E</div> 



                                <div class="tp-caption font-weight-light text-color-light"
                                    data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                    data-x="center"
                                    data-y="center" data-voffset="['85','85','85','140']"
                                    data-fontsize="['18','18','18','40']"
                                    data-lineheight="['26','26','26','45']">Solutions</div>
                                
                            </li> --}}
                            <li class="slide-overlay" data-transition="fade">
                                <img src="{{ asset('themes/porto/asset/img/banner/slide-02.jpg') }}"  
                                    alt=""
                                    data-bgposition="right" 
                                    data-bgfit="cover" 
                                    data-bgrepeat="no-repeat" 
                                    class="rev-slidebg"
                                    >

                                <h1 class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                                    data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center"
                                    data-y="center" data-voffset="['-55','-55','-55','-55']"
                                    data-fontsize="['50','50','50','90']"
                                    data-lineheight="['55','55','55','95']"
                                    data-letterspacing="-1">THINKING FORWARD</h1>

                                <div class="tp-caption font-weight-light text-color-light"
                                    data-frames='[{"from":"opacity:0;","speed":300,"to":"o:0.8;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                    data-x="center"
                                    data-y="center" data-voffset="['-5','-5','-5','15']"
                                    data-fontsize="['18','18','18','35']"
                                    data-lineheight="['20','20','20','40']">The idea isn’t to build a website. The idea is to build your business.</div>

                                <a class="tp-caption btn btn-light font-weight-bold text-color-purple"
                                    href="#"
                                    data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['-120','-120','-120','-195']"
                                    data-y="center" data-voffset="['65','65','65','105']"
                                    data-paddingtop="['15','15','15','30']"
                                    data-paddingbottom="['15','15','15','30']"
                                    data-paddingleft="['33','33','33','50']"
                                    data-paddingright="['33','33','33','50']"
                                    data-fontsize="['13','13','13','25']"
                                    data-lineheight="['20','20','20','25']">LEARN MORE</a>

                                <a class="tp-caption btn btn-purple font-weight-bold"
                                    href="#"
                                    data-frames='[{"delay":3000,"speed":2000,"frame":"0","from":"y:50%;opacity:0;","to":"y:0;o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                                    data-x="center" data-hoffset="['90','90','90','165']"
                                    data-y="center" data-voffset="['65','65','65','105']"
                                    data-paddingtop="['15','15','15','30']"
                                    data-paddingbottom="['15','15','15','30']"
                                    data-paddingleft="['33','33','33','50']"
                                    data-paddingright="['33','33','33','50']"
                                    data-fontsize="['13','13','13','25']"
                                    data-lineheight="['20','20','20','25']">GET STARTED NOW <i class="fas fa-arrow-right ml-1"></i></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="home-intro mb-0" id="home-intro">
                    <div class="container">

                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <p>
                                    We will help you to achieve your goals and to grow your  <span class="highlighted-word highlighted-word-animation-1  font-weight-semibold text-5" style="color: #282a75">Business</span>
                                    <span>Let’s Get Started building your business.</span>
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="get-started text-left text-lg-right">
                                    <a href="{{route('request_a_quote')}}" class="btn btn-purple btn-lg text-3 font-weight-semibold px-4 py-3">Request a Quote</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <section class="section section-parallax section-height-3 border-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 7, 'parallaxHeight': '150%', 'offset': 100}" data-image-src="{{ asset('themes/porto/asset/img/cover-image/cover_pic_2.png') }}" >
                    <div class="container pb-5 mb-5">
                        <div class="row text-center pb-5 mb-5">
                            <div class="col-md-10 mx-md-auto pb-5 mb-5">
                                <h1 class="word-rotator slide font-weight-bold text-8 mb-3 appear-animation" data-appear-animation="fadeInUpShorter">
                                    <span>We Create</span>
                                    <span class="word-rotator-words" style="background: #282a75">
                                    <b class="is-visible" style="color: white">Strong</b>
                                        <b style="color: white">Extremely</b>
                                        
                                    </span>
                                    <span> Responsive Websites.</span>
                                </h1>

                                <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                    Our main focus is to improve your business by creating incredible web solutions for you. We believe that website is the main and initial identity of your business and we are here to make sure that has done right.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 class="font-weight-normal text-center text-6 pb-3">Our <strong class="font-weight-extra-bold">Services</strong></h2>
                                <div class="row text-center pb-4 mb-4">
                                    <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                                        The Primary purpose of Trikore is to offer service using the latest technologies and trends. The process contains providing IT solutions and building online presence for your products and services.  The following are our three main expertise.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-lg-4">
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icon-globe icons text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Website Development</h4>
                                        <p>We offer a full range of custom Website Development Services.We provide affordable website development services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="icon-basket-loaded icons text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">E-Commerce Solutions</h4>
                                        <p>Create an online store in minutes. For any kind of Online store, we provide complete E-Commerce Solutions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <i class="fas fa-chart-bar text-color-primary"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-bold mb-2">Digital Marketing</h4>
                                        <p>Our specialized marketing teams work to increase your conversions, repeat traffic, and expand your online visibility.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                <section class="section section-primary border-0 mb-0 appear-animation"     data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
                    <div class="container">
                        <div class="row counters counters-sm pb-4 pt-3">
                            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="counter">
                                    <i class="icons icon-badge text-color-light"></i>
                                    <strong class="text-color-light font-weight-extra-bold" data-to="99" data-append="%">0</strong>
                                    <label class="text-4 mt-1 text-color-light">SATISFIED CUSTOMERS</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                                <div class="counter">
                                    <i class="icons icon-trophy text-color-light"></i>
                                    <strong class="text-color-light font-weight-extra-bold" data-to="18">0</strong>
                                    <label class="text-4 mt-1 text-color-light">WINNING AWARDS</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                                <div class="counter">
                                    <i class="icons icon-basket-loaded text-color-light"></i>
                                    <strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
                                    <label class="text-4 mt-1 text-color-light">E-COMMERCE
                            </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="counter">
                                    <i class="icons icon-user text-color-light"></i>
                                    <strong class="text-color-light font-weight-extra-bold" data-to="300">0</strong>
                                    <label class="text-4 mt-1 text-color-light">HAPPY CLIENTS
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                                </section>



                <div class="container">
                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/web_development.jpg') }}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Website Development</strong></h2>
                            <p class="text-4">A website is a collection of related web pages, including multimedia content, typically identified with a common domain name, and published on at least one web server.</p>
                            <p class="text-4">A website can be a personal website, commercial website for a company, a government website or a no-profit organization website.</p>

                            <p class="text-4"><a href="{{ route('websiteDevelopment') }}"><button class="btn btn-modern btn-purple">View More</button></a> </p>

                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Ecommerce Solutions</strong></h2>
                            <p class="text-4">E-commerce is buying and selling of goods and services, or the transmitting of funds or data, over an electronic network, primarily the internet. </p>

                            <p class="text-4">These business transactions occur either as business-to-business, business-to-customer, consumer-to-consumer or consumer-to-business. These terms e-commerce and e-business are often used interchangeably.</p>

                            <p class="text-4"><a href="{{ route('eCommerce') }}"><button class="btn btn-modern btn-purple">View More</button></a> </p>

                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/e-commerce.jpg') }}" alt="style switcher" />
                        </div>
                    </div>
                    

                    <hr class="solid my-5">

                    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('themes/porto/asset/img/services/digital_marketing.jpg') }}" alt="layout styles" />
                        </div>
                        <div class="col-md-8 pl-md-5">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Digital Marketing</strong></h2>
                            <p class="text-4">Digital Marketing refers to the techniques available to business to market, promote and advertise their products, services or brand on the World Wide Web.  </p>

                            <p class="text-4">Digital Marketing includes a wide range of marketing elements than traditional business marketing due to the extra channels and marketing mechanisms available on the internet.</p>

                            <p class="text-4"><a href="{{ route('digital_marketing') }}"><button class="btn btn-modern btn-purple">View More</button></a> </p>

                        </div>
                    </div>

                    <hr class="solid my-5">

                    <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">
                        <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                            <h2 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">Why choose trikore?</strong></h2>
                            <ul class="list list-icons list-primary">
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0"><i class="fas fa-check"></i>We provide high quality flexible solution with Latest Technologies.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300"><i class="fas fa-check"></i> We build responsive websites that auto adapt to device screens.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600"><i class="fas fa-check"></i>We have tied up with world class technology vendors.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="900"><i class="fas fa-check"></i>We maintain long term relationship with all our clients.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>Our Proven expertise to provide quality work in proposed time.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>We so far designed and delivered more than 500+ web projects.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>Extensive project management experience.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>Delivering services and solutions right for your business.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>We’re quick to response to the clients need.</li>
                                        <li class="appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="1200"><i class="fas fa-check"></i>The Websites we make are search engine optimized.</li>
                                    </ul>
                        </div>
                        <div class="col-md-4 px-5 px-md-3">
                            <img class="img-fluid scale-2 my-4" src="{{ asset('themes/porto/asset/img/services/why_choose_trikore.jpg') }}" alt="style switcher" />
                        </div>
                </div>

                <hr>
                    <div class="row text-center">
                        <div class="col">
                            <h2 class="font-weight-normal text-6 mt-4">Our <strong class="font-weight-extra-bold">Portfolio</strong></h2>
                        </div>
                    </div>
                </div>

                <div class="image-gallery sort-destination full-width mb-0">
                    <div class="isotope-item">
                        <div class="image-gallery-item mb-0">
                            <a href="{{route('portfolio')}}">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('themes/porto/asset/img/portfolio/MOP.jpg') }}" class="img-fluid" alt="" >
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">MOP Vaishnav College</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="isotope-item">
                        <div class="image-gallery-item mb-0">
                            <a href="{{route('portfolio')}}">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('themes/porto/asset/img/portfolio/velukkudi.jpg') }}" class="img-fluid" alt="" >
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Velukkudi Discourses</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="isotope-item">
                        <div class="image-gallery-item mb-0">
                            <a href="{{route('portfolio')}}">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('themes/porto/asset/img/portfolio/shasun_jain_college.jpg') }}" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Shasun Jain College</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="isotope-item">
                        <div class="image-gallery-item mb-0">
                            <a href="{{route('portfolio')}}">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('themes/porto/asset/img/portfolio/madurai_travel_club.jpg') }}" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Nanofold India</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="isotope-item">
                        <div class="image-gallery-item mb-0">
                            <a href="{{route('portfolio')}}">
                                <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                    <span class="thumb-info-wrapper">
                                        <img src="{{ asset('themes/porto/asset/img/portfolio/nanofold_india.jpg') }}" class="img-fluid" alt="">
                                        <span class="thumb-info-title">
                                            <span class="thumb-info-inner">Madurai Travel Club</span>
                                            <span class="thumb-info-type">Project Type</span>
                                        </span>
                                        <span class="thumb-info-action">
                                            <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <hr>

                <section class="section section-height-3 section-background section-text-light section-center overlay overlay-show overlay-op-9 overlay-color-primary m-0 appear-animation" data-appear-animation="fadeIn" style="background-image: url(themes/porto/asset/img/background/testimonals_background.jpg); background-size: cover; background-position: center;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                                <div class="owl-carousel owl-theme nav-bottom rounded-nav dots-light mb-0" data-plugin-options="{'items': 1, 'loop': false, 'autoHeight': true}">
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/velukkudi.jpg') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>This is good news. Congratulations for the good work to all of you in Trikore.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Velukkudi krishnan</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/afaj.jpg') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>Thanks for your fast job and support. I&#039;m very much satisfied with the work and online promotion.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Abdul</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/ff.png') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>After partnering with Trikore, we have increased our social visibility and exposure dramatically.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Srivas</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/ananya.png') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>I thank you for all your best efforts in launching our website in spite of hard situation and time. Hurray to Tri Kore</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Narashimhaan. V.R</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/mecline.png') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>I am Extremely happy to see the website, which is completed as per my expectation. Thanks</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Kandasamy.S</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col">
                                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                                <div class="testimonial-author">
                                                    <img src="{{ asset('themes/porto/asset/img/testimonals/sms.png') }}" class="img-fluid rounded-circle" alt="">
                                                </div>
                                                <blockquote>
                                                    <p>Thanks for your fast job and support. I'm very much satisfied with the work.</p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p><strong class="text-2 opacity-10">- Rakesh Radhakrishnan</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="container">
                    <div class="row text-center pt-4 mt-5">
                        <div class="col">
                            <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                                <span>Our</span>
                                <span class="word-rotator-words "style="background: #282a75">
                                    <b class="is-visible" style="color: white">Happy</b>
                                    <b style="color: white">Satisfied</b>
                                    <b style="color: white">Excited</b>
                                </span>
                                <span>Clients</span>
                            </h2>
                        </div>
                    </div>

                    <div class="row text-center mt-5 pb-5 mb-5">
                        <div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/17.png') }}" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/21.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/15.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/3.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/40.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/1.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/52.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/53.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/34.png') }}"  alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('themes/porto/asset/img/logos/8.png') }}"  alt="">
                            </div>
                            

                        </div>
                    </div>
                </div>

                <section class="call-to-action call-to-action-strong-grey content-align-center call-to-action-in-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-9">
                                <div class="call-to-action-content">
                                    <h2 class="font-weight-normal text-6 mb-0"><strong>Let’s Get Started building your business </strong></h2>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="call-to-action-btn">
                                    <a href="{{ route('request_a_quote') }}" target="_blank" class="btn btn-modern btn-purple">Request a quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            
    </div>
@endsection