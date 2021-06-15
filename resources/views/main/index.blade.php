@extends('main.template')

@section('main')
     <!-- hero slider section start -->
     <section class="hero-slider d-flex align-items-center">
        <span class="shape-1"><img src="{{asset('template/img/shape/shape-1.png')}}" alt="shape-img"></span>
        <span class="shape-2"><img src="{{asset('template/img/shape/shape-2.png')}}" alt="shape-img"></span>
        <span class="shape-dot-1"><img src="{{asset('template/img/shape/shape-dot-1.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-6">
                    <div class="hero-slider-content">
                        <h1 class="hero-slider-title">Ultra Low  <span>Spread</span></h1>
                        <p class="hero-slider-desc">Start from 0 Bid And Ask Price </p>
                        {{-- <p class="hero-slider-desc">looking at its layout. The point of using Lorem psum is that it has a digital</p> --}}
                        <a class="hero-slider-btn" href="about.html">ABOUT MORE <span>|||</span></a>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="hero-slider-thumb text-center text-lg-right">
                        {{-- <img src="{{asset('template/img/slider/slider-thumb1.png')}}" alt="slider thumb1"> --}}
                        <img src="{{asset('/img/main-banner.png')}}" alt="slider thumb1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero slider section end -->

    <!-- service section start -->
    <section class="service-area section-padding ptsm-0 position-relative">
        <span class="shape-3"><img src="{{asset('template/img/shape/shape-3.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row mtn-30">
                <!-- single service item start -->
                <div class="col-md-4">
                    <div class="service-item text-center mt-30">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/Cashflow.png')}}" alt="icon">
                        </div>
                        <h4 class="service-title">
                            <a href="#">Deposit & Withdrawal</a>
                        </h4>
                        <p>Fast Deposit & Withdrawal</p>
                    </div>
                </div>
                <!-- single service item end -->
                <!-- single service item start -->
                <div class="col-md-4">
                    <div class="service-item text-center mt-30">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/Microloan.png')}}" alt="icon">
                        </div>
                        <h4 class="service-title">
                            <a href="#">Leverage</a>
                        </h4>
                        <p>Leverage Up To 1:500</p>
                    </div>
                </div>
                <!-- single service item end -->
                <!-- single service item start -->
                <div class="col-md-4">
                    <div class="service-item text-center mt-30">
                        <div class="service-icon">
                            <img src="{{asset('img/icon/Personalguarantee.png')}}" alt="icon">
                        </div>
                        <h4 class="service-title">
                            <a href="#">Expertise</a>
                        </h4>
                        <p>Over 10 Years Of Expertise</p>
                    </div>
                </div>
                <!-- single service item end -->
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- about section start -->
    <section class="about-area position-relative section-padding--ptb_40 ptsm-0">
        <span class="shape-dot-2"><img src="{{asset('template/img/shape/shape-dot-2.png')}}" alt="shape-img"></span>
        <span class="shape-4"><img src="{{asset('template/img/shape/shape-4.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-inner">
                        <h2 class="title">Take a Risk <br> And Keep <span>Testing...</span></h2>
                        <p>looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution of agency, as opposed The point of using Lorem psum is that it has a digital or less normal azer duskam</p>
                        <p>looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution</p>
                    </div>
                    <div class="fun-fact">
                        <div class="row">
                            <div class="col-6">
                                <div class="counterup-item mt-30">
                                    <span><span class="odometer" data-count="27"></span>K+</span>
                                    <h3>Done Project</h3>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counterup-item mt-30">
                                    <span><span class="odometer" data-count="35"></span>K+</span>
                                    <h3>Running Project</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-thumb text-center text-lg-right">
                        <img src="{{asset('img/main-banner2.png')}}" alt="about thumb">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- pricing section start -->
    <section class="pricing-area section-padding--ptb_120 pb-100 pbsm-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title position-relative mb-60">
                        <h2 class="title"><span>Account</span> Type</h2>
                        {{-- <h6 class="subtitle">looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution of agency, as opposed</h6> --}}
                        <span class="shape-title">
                            <img src="{{asset('template/img/shape/shape-title.png')}}" alt="shape title">
                       </span>
                    </div>
                </div>
            </div>
            <div class="row mtn-30">
                <!-- single pricing item start -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-header">
                                <h6 class="pricing-plan">Account Type</h6>
                                <h4 class="pricing-title">Demo Account</h4>
                            </div>
                            <ul class="pricing-list">
                                <li>Spread Start from 27</li>
                                <li>Commission Start From 0 USD</li>
                                <li>Free Swap</li>
                                <li>Up to 1:200 Leverage</li>
                                <li>No Deposit</li>
                            </ul>
                            <div class="pricing-value">
                                <span>$10</span>
                            </div>
                        </div>
                        <button class="pricing-btn">Register Now</button>
                    </div>
                </div>
                <!-- single pricing item end -->

                <!-- single pricing item start -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-header">
                                <h6 class="pricing-plan">Account Type</h6>
                                <h4 class="pricing-title">Premier Account</h4>
                            </div>
                            <ul class="pricing-list">
                                <li>Spread Start from 27</li>
                                <li>Commission Start From 0 USD</li>
                                <li>Free Swap</li>
                                <li>Up to 1:200 Leverage</li>
                                <li>Deposit Requirement as low as $50</li>
                            </ul>
                            <div class="pricing-value">
                                <span>$60</span>
                            </div>
                        </div>
                        <button class="pricing-btn">Register Now</button>
                    </div>
                </div>
                <!-- single pricing item end -->

                <!-- single pricing item start -->
                <div class="col-md-4">
                    <div class="pricing-item">
                        <div class="pricing-inner">
                            <div class="pricing-header">
                                <h6 class="pricing-plan">Cooming Soon</h6>
                                <h4 class="pricing-title"></h4>
                            </div>
                            {{-- <ul class="pricing-list">
                                <li>Unlimited Storage</li>
                                <li>Contrary to popular belief</li>
                                <li>Unlimited download</li>
                                <li>500 Gb harddisk space</li>
                                <li>24/7 live support</li>
                            </ul> --}}
                            {{-- <div class="pricing-value">
                                <span>$120</span>
                            </div> --}}
                        </div>
                        {{-- <button class="pricing-btn">BUY NOW</button> --}}
                    </div>
                </div>
                <!-- single pricing item end -->
            </div>
        </div>
    </section>
    <!-- pricing section end -->

    <!-- video description section start -->
    <section class="video-description-area position-relative mt-30">
        <span  class="shape-5"><img src="{{asset('template/img/shape/shape-5.png')}}" alt="shape img"></span>
        <span class="shape-dot-3"><img src="{{asset('template/img/shape/shape-dot-3.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-inner video-content">
                        <h2 class="title">Take a Risk <br> And Keep <span>Testing...</span></h2>
                        <p>looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution of agency, as opposed The point of using Lorem psum is that it has a digital or less normal azer duskam</p>
                        <p>looking at its layout. The point of using Lorem psum is that it has a digital or less normal eistribution</p>
                        <a class="btn btn-arrow" href="about.html">ABOUT MORE
                            <img class="btn-arrow-primary" src="{{asset('template/img/icon/shape-arrow.png')}}" alt="btn arrow">
                            <img class="btn-arrow-secondary" src="{{asset('template/img/icon/shape-arrow-hover.png')}}" alt="btn arrow">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="video-thumb text-center text-lg-right position-relative">
                        <img src="{{asset('template/img/video/video-thumb.png')}}" alt="video thumb">
                        <div class="video-play-btn">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                            <a class="play-btn" href="https://www.youtube.com/watch?v=4qNHr0W6F0o">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video description section end -->

    <!-- newsletter section start -->
    {{-- <section class="newsletter-area section-padding--ptb_110 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-wrapper text-center bg-secondary">
                        <h2 class="newsletter-title">Contact US</h2>
                        <p class="newsletter-desc">injected humour, or randomised words which don't look even slightly believable.</p>
                        <form class="newsletter-inner">
                            <input type="text" class="text-field" placeholder="Your email...">
                            <button class="btn-newsletter">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- newsletter section end -->

    <!-- faq section start -->
    <section class="faq-area section-padding position-relative">
        <span><img class="shape-6" src="{{asset('template/img/shape/shape-6.png')}}" alt="shape img"></span>
        <span class="shape-dot-4"><img src="{{asset('template/img/shape/shape-dot-4.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-thumb text-center text-lg-left">
                        <img src="{{asset('img/main-banner3.png')}}" alt="thumbnail">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-inner">
                        <div class="accordion" id="general-question">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How To Sign Up For The Real Account In Zandbox?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#general-question">
                                    <div class="card-body">
                                        "Please go to the main page of our website, you will find a link to open a real account. You need to complete all the details needed online. Please fill in completely and correctly to hasten the account entry process.For further details, please contact the sales team." <a href="https://premiere.gozandbox.com">https://premiere.gozandbox.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-controls="collapseTwo">
                                            Will I Get The Transaction Account Report That Confirms My Transaction History?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#general-question">
                                    <div class="card-body">
                                        Yes, you will. You will get an email once a month from Universal Innovation Center that contains your transaction report in a month
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseThree" aria-controls="collapseThree">
                                            Will I Get Charged If I Hold My Account When There Is No Transaction Activity?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#general-question">
                                    <div class="card-body">
                                        No, you can hold your trading account without any charges regardless of your activity.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseFour" aria-controls="collapseFour">
                                            How To Deposit/Withdraw?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#general-question">
                                    <div class="card-body">
                                        Please visit our website gozandbox.com , you can find the deposit and withdrawal on the Menu Trading.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseFive" aria-controls="collapseFive">
                                            How Long It Takes For Deposit/Withdraw?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#general-question">
                                    <div class="card-body">
                                        It will take approximately 1x24 hours
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <h5 class="mb-0">
                                        <button class="accordio-heading" type="button" data-toggle="collapse" data-target="#collapseSix" aria-controls="collapseSix">
                                            When I Have Problem For The Order. What Should I Do?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="collapseSix" data-parent="#general-question">
                                    <div class="card-body">
                                        You can contact us via Live Chat or send us an email at support@p-cash.id. Our customer support team is available 12/5. Monday to Friday at 02:00 AM UTC to 02:00 PM UTC.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq section end -->

    <!-- latest news section start -->
    <section class="latest-news-area pb-100 position-relative">
        <span class="shape-7"><img src="{{asset('template/img/shape/shape-7.png')}}" alt="shape img"></span>
        <span class="shape-dot-5"><img src="{{asset('template/img/shape/shape-dot-5.png')}}" alt="shape-img"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <div class="section-title position-relative mb-60">
                            <h2 class="title"><span>LIQUIDITY</span> PROVIDERS</h2>
                            <h6 class="subtitle">Our Primary Liquidity Providers</h6>
                            <span class="shape-title">
                                <img src="{{asset('template/img/shape/shape-title.png')}}" alt="shape title">
                            </span>
                        </div>
                        <div class="slick-append slick-arrow-style"></div>
                    </div>
                </div>
            </div>
            <div class="row blog-post-carousel slick-active slick-shadow">
                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/partner1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->

                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/Partner-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->

                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/City-Bank-Logo1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->

                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/Partner-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->

                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/UBS-Logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->

                <!-- blog single item start -->
                <div class="col">
                    <div class="blog-post">
                        <div class="blog-post__content">
                            <img src="{{asset('/img/logo/Partner-3.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <!-- blog single item end -->
            </div>
        </div>
    </section>
    <!-- latest news section end -->
@endsection
