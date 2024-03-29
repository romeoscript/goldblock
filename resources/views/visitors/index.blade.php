@extends('layouts.spacedcustomlayout')

@section('body')
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/stake.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">{{ $compd ? $compd->companyname : 'company name' }} Staking</h5>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">Stake</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">And Earn</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one mr-10">Create An Account</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">Stake & Earn</h5>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">Stake Your</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">USDT, BITCOIN, BUSD, LTC...</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one mr-10">Get Started</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-12.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">{{ $compd ? $compd->companyname : 'company name' }}</h5>
                        <h4 class="text-white" style="margin-bottom: 0px;">Celebrates</h4>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">100,000</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">Members Globally</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one mr-10">Create An Account</a>
                        </div>

                    </div>
                </div>
            </div>



            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">Take A Bold Step</h5>
                        <h1 class="mbt-1">To Change Your World</h1>
                        <h6 class="text-white mbt-1">You have dreams. We have a culturally diverse, forward thinking team
                            ready to help you achieve your dreams.</h6>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one mr-10">Create An Account</a>
                            <a href="{{ route('login') }}" class="banner-btn-two">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-12.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">{{ $compd ? $compd->companyname : 'company name' }}</h5>
                        <h4 class="text-white" style="margin-bottom: 0px;">Celebrates</h4>
                        <h1 class="text-custom" style="margin-top: 0px; margin-bottom: 0px;">100,000</h1>
                        <h1 class="text-white" style="margin-bottom: 0px; margin-top: 0px;">Members Globally</h1>
                        <br>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one mr-10">Create An Account</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">We are the Leaders</h5>
                        <h1 class="mbt-1">In Crytocurrency Trade</h1>
                        <h6 class="text-white mbt-1">We help our investors make the best out of cryptocurrency innovation
                            through our team of expert traders.</h6>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h5 class="text-custom">We are experts</h5>
                        <h1 class="mbt-1">In Real Estate</h1>
                        <h6 class="text-white mbt-1">Our vast experience in real estate over the years makes us one of the
                            best if not the best real estate agents to invest with.</h6>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn style-one">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="about-style-two about-section about-page-1 bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="alert alert-info">
                        <h3><i class="fa fa-info-circle"></i></h3>
                        The coronavirus shock is accelerating structural trends in inequality, globalization, macro policy
                        and sustainability. This is fundamentally reshaping the investment landscape and will key to
                        investor outcomes.
                    </div>
                </div>
                <div class="col-lg-7 col-md-5 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title right">
                                <h5>About {{ $compd ? $compd->companyname : 'company name' }}</h5>
                                <h2>We have been known to give investors the better choice</h2>
                            </div>
                            <div class="text">
                                <p>
                                    With over 153,000 investments under our management, $5 billion+ in assets under our
                                    administration, over 11 industry awards,
                                    we have made {{ $compd ? $compd->companyname : 'company name' }} the safe haven for
                                    investors who want to trust their financial partner to be capable of
                                    helping them reach their financial goals, and in due time, without the fear of
                                    disappointments.
                                </p>
                            </div>
                            <div class="tabs-box">

                                <div class="tabs-content">
                                    <div class="tab active-tab" id="tab-2">
                                        <div class="content-inner">
                                            <p>Our investors are confident in our ability to make a promise and fulfill that
                                                promise. We go beyond our promise
                                                to put smiles on the faces of our clients.
                                                We have investors from all over the world, who have been with us for over
                                                seven years now and counting.</p>
                                            <a href="{{ route('login') }}"><i class="fas fa-arrow-right"
                                                    style="color: steelblue;"></i><span>Read More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 video-column">
                    <div class="video-inner">
                        <figure class="image-box"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                data-caption="" style="background-image: url(assets/images/resource/btn-bg.png);"><i
                                    class="fas fa-play" style="color: steelblue;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="images/cov.png" alt=""></figure>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a
                                    href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener"
                                    target="_blank"><span class="blue-text">Cryptocurrency Markets</span></a> by
                                TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                {
                                    "width": "100%",
                                    "height": "100%",
                                    "defaultColumn": "overview",
                                    "screener_type": "crypto_mkt",
                                    "displayCurrency": "USD",
                                    "colorTheme": "light",
                                    "locale": "en"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title-two">
                            <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                            <h2>Our Response to COVID-19</h2>
                        </div>
                        <div class="text">
                            <p>During this unprecedented crisis, our conviction in our purpose – to help more and more
                                people
                                experience financial well-being – is stronger than ever.
                                {{ $compd ? $compd->companyname : 'company name' }} has taken action to continue
                                delivering for our clients, stay connected with our shareholders,
                                support employee well-being, and provide relief for the communities in which we operate.
                            </p>

                            <a href="{{ route('client') }}" class="mt-3 btn btn-custom">Read More <i
                                    class="fas fa-arrow-right text-white" style="color: steelblue;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-two p-t-10">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_three">
                        <div class="content-box">
                            <div class="sec-title style-two">
                                <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                                <h2>How you can join us</h2>
                            </div>
                            <div class="text">
                                <p>Here are few easy steps on how you can create an account with us and start investing
                                    right away!</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-user-plus"
                                                    style="color: steelblue;"></i></div>
                                            <h5><a href="{{ route('register') }}">CREATE AN ACCOUNT</a></h5>
                                            <p>Hit the 'OPEN ACCOUNT' button at the top of the page, fill in your details on
                                                the page that follows</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-database"
                                                    style="color: steelblue;"></i></div>
                                            <h5><a href="index-3.html">SELECT A PLAN</a></h5>
                                            <p>From your Dashboard, select the Deposit button to choose an investment plan
                                                that suits your financial goal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fab fa-bitcoin"
                                                    style="color: steelblue;"></i></div>
                                            <h5><a href="index-3.html">FUND YOUR ACCOUNT</a></h5>
                                            <p>Fund your investment account quickly and easily, using our Bitcoin payment
                                                system directly from your wallet</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="fas fa-share-alt"
                                                    style="color: steelblue;"></i></div>
                                            <h5><a href="index-3.html">INVITE OTHERS</a></h5>
                                            <p>While experiencing the amazing benefits of investing with us, you can also
                                                earn bonuses when you refer us to others</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="image_block_two">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/state-1.jpg" alt=""></figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-style-four">
        <div class="auto-container">
            <div class="title-inner clearfix">
                <div class="sec-title style-four right pull-left">
                    <h5>REAL ESTATE</h5>
                    <h2>Hot Deals From Real Estate</h2>
                </div>
                <div class="btn-box pull-right"><a href="{{ route('realestate') }}">View More</a></div>
            </div>
            <div class="two-column-carousel owl-carousel owl-theme owl-nav-none">
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$620,000</h3>
                                <p>Zak Hale 9 | Offered for $620,000 | 4 BR/ 4.5 BA | 2,460 sq. ft. Interior.</p>
                                <a class="btn btn-warning" style="margin-bottom: 5px;" href="{{ route('history') }}">
                                    View Details</a>
                                <br>
                                <a class="btn btn-primary"
                                    href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/3.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$1,450,000</h3>
                                <p>This stunning modern-styled townhome located within the private
                                    golf and ocean club community of Kohanaiki is a 4 BR/ 4.5 BA dream with a lounge pool,
                                    spa, and detached guest ohana</p>
                                <a class="btn btn-warning" style="margin-bottom: 5px;" href="estateb558.html?d=3"> View
                                    Details</a>
                                <br>
                                <a class="btn btn-primary"
                                    href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/1.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$350,000</h3>
                                <p>4/5.5/2 |5,472 sqft |8,060 sqft lot
                                    Location:Afton oaks</p>
                                <a class="btn btn-warning" style="margin-bottom: 5px;"
                                    href="{{ route('realestatetrade') }}"> View Details</a>
                                <br>
                                <a class="btn btn-primary"
                                    href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-block-three">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/hs/4.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h3>$26,430</h3>
                                <p> Bds | 1 Ba | 360 SQFT Location: 225 East 4th Street, Apt 18, New York. </p>
                                <a class="btn btn-warning" style="margin-bottom: 5px;"
                                    href="{{ route('landbanking') }}"> View Details</a>
                                <br>
                                <a class="btn btn-primary"
                                    href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}"> Make An Offer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="info-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="year-box">
                            <figure class="image-box"><img src="assets/images/icons/year-icon.png" alt="">
                            </figure>
                            <h2 style="font-size: 85px;">1338</h2>
                            <h3>DAYS</h3>
                        </div>
                        <div class="title">
                            <h2>Access <span>—</span> analytical market & price data</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                    <div class="text">
                        <p>

                            Our trading systems are setup with the best hands to take trade calls in investments, and we
                            combine this with analytics from our trading robots.
                            With over 140 trading setups and over 300 trading experts working together with our AI-powered
                            software,
                            analyses come in handy, and are doubly checked for accuracy and market timeliness before trades
                            are made.
                        </p>
                        <a href="{{ route('register') }}" class="btn btn-custom"><i
                                class="fas fa-arrow-right text-white" style="color: steelblue;"></i>Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="project-style-two">
        <div class="auto-container">
            <div class="sec-title style-three centred">
                <h5>SUCCEED WITH US</h5>
                <h2>Why Choose {{ $compd ? $compd->companyname : 'company name' }}</h2>
                <p>Here’s why thousands of investors trust and invest with
                    {{ $compd ? $compd->companyname : 'company name' }}, and why you should, too</p>
            </div>
            <div class="project-carousel-2 owl-carousel owl-theme owl-nav-none">
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/simple.jpg" alt=""></figure>
                        <div class="content-box">
                            <h3>Investing With Us Is Simple</h3>
                            <p>
                                Our investment solutions are so simple. Our platform is also simple and easy to use.
                            </p>
                            <a href="{{ route('register') }}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/innovation.png" alt=""></figure>
                        <div class="content-box">
                            <h3>We are Innovative</h3>
                            <p>{{ $compd ? $compd->companyname : 'company name' }} has been at the forefront of the digital
                                fintech revolution since her inception.</p>
                            <a href="{{ route('register') }}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/safe-02.jpg" alt=""></figure>
                        <div class="content-box">
                            <h3>We Take Responsibility</h3>
                            <p>
                                All trading involves risks, and {{ $compd ? $compd->companyname : 'company name' }} helps
                                its clients to make smart investment decisions.
                            </p>
                            <a href="{{ route('register') }}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>

                <div class="project-inner">
                    <div class="inner-box">
                        <figure class="image-box"><img src="images/secure-1.jpg" alt=""></figure>
                        <div class="content-box">
                            <h3>We Are Secure</h3>
                            <p>{{ $compd ? $compd->companyname : 'company name' }} takes necessary precaution to keep its
                                clients’ personal information and funds safe and secure.</p>
                            <a href="{{ route('register') }}" class="btn btn-custom">Start Investing</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="protect-form centred my-3">
        <div class="auto-container">
            <div class="inner-box" style='border-radius: 20px; background-color: #063c83;'>
                <h3 class="text-white">Our staking program enables you to earn a risk-free yield on your USDT, BITCOIN,
                    BUSD, LTC... When you subscribe
                    to this strategy, you stake your USDT, BITCOIN, BUSD, LTC... in the pool and earn additional USDT,
                    BITCOIN, BUSD, LTC... as the
                    staking yield from (USDT, BITCOIN, BUSD, LTC...) APY
                </h3>
                <form action="#" method="post" class="zip-form">
                    <div class="form-group clearfix text-center">
                        <a class="theme-btn style-two" href="{{ route('register') }}"><i class="far fa-wallet"></i>
                            Stake & Earn</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="pricing-section" style="background-image: url(assets/images/background/pricing-bg.jpg);">
        <div class="auto-container">
            <div class="tabs-box">
                <div class="upper-box">
                    <div class="title-inner clearfix">
                        <div class="sec-title style-three left pull-left">
                            <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                            <h2>Plans</h2>
                        </div>
                        <div class="text pull-left">
                            <p>
                                Choose between individual assets and portfolios to invest and start profiting.

                                See more plans in our <a href="{{ route('login') }}">Investment Plans</a>
                            </p>
                        </div>
                    </div>
                    <div class="tab-btn-box">
                        <ul class="tab-btns tab-buttons clearfix">
                            <li class="tab-btn active-btn" data-tab="#tab-6">CRYPTOCURRENCY</li>
                            <li class="tab-btn " data-tab="#tab-5">FOREX</li>
                        </ul>
                    </div>
                </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-6">
                        <div class="row clearfix">
                            @if ($investmentplans)
                                @foreach ($investmentplans as $price)
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                
                                <div class="pricing-block-one active-block">
                                    <div class="pricing-table">
                                        <div class="table-header" style="padding: 12px 0px 5px 0px; border: none;">
                                            <h3>{{ $price->name }}</h3>
                                            <div class="price-box" style="margin-bottom: 0px;">
                                                <span>Stake your USDT, BITCOIN, BUSD, LTC...</span>
                                                <h2>{{ $price->noofrepeat }}+</h2>
                                                <p>Duration</p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <ul class="clearfix">
                                                <li>Minimum Deposit <b class="text-primary">${{ $price->minimum }}</b></li>
                                                <li>Maximum Deposit <b class="text-primary">${{ $price->maximum }}</b></li>
                                                <li>Total Profit <b class="text-primary">{{ $price->percentage * $price->noofrepeat }}%</b></li>
                                                <li>Referral Bonus <b class="text-primary">{{ $price->refpercent}}%</b></li>
                                                <li>Withdrawal <b class="text-primary">Weekly</b></li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="{{ route('register') }}" class="theme-btn style-one border-0">Stake
                                                & Earn</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            @endforeach
                                @endif
                            {{-- <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one active-block">
                                    <div class="pricing-table">
                                        <div class="table-header" style="padding: 12px 0px 5px 0px; border: none;">
                                            <h3>Basic</h3>
                                            <div class="price-box" style="margin-bottom: 0px;">
                                                <span>Stake your USDT, BITCOIN, BUSD, LTC...</span>
                                                <h2>2.86%</h2>
                                                <p>Daily Profit</p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <ul class="clearfix">
                                                <li>Minimum Deposit <b class="text-primary">$5,000.00</b></li>
                                                <li>Maximum Deposit <b class="text-primary">$10,000.00</b></li>
                                                <li>Total Profit <b class="text-primary">20%</b></li>
                                                <li>Referral Bonus <b class="text-primary">15%</b></li>
                                                <li>Withdrawal <b class="text-primary">Weekly</b></li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="{{ route('register') }}" class="theme-btn style-one border-0">Stake
                                                & Earn</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one active-block">
                                    <div class="pricing-table">
                                        <div class="table-header" style="padding: 12px 0px 5px 0px; border: none;">
                                            <h3>Advanced</h3>
                                            <div class="price-box" style="margin-bottom: 0px;">
                                                <span>Stake your USDT, BITCOIN, BUSD, LTC...</span>
                                                <h2>3.36%</h2>
                                                <p>Daily Profit</p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <ul class="clearfix">
                                                <li>Minimum Deposit <b class="text-primary">$15,000.00</b></li>
                                                <li>Maximum Deposit <b class="text-primary">$100,000.00</b></li>
                                                <li>Total Profit <b class="text-primary">100.75%</b></li>
                                                <li>Referral Bonus <b class="text-primary">30%</b></li>
                                                <li>Withdrawal <b class="text-primary">Weekly</b></li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="{{ route('register') }}" class="theme-btn style-one border-0">Stake
                                                & Earn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="tab " id="tab-5">
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                <div class="pricing-block-one active-block">
                                    <div class="pricing-table">
                                        <div class="table-header" style="padding: 12px 0px 5px 0px; border: none;">
                                            <h3>{{ $price->name }}</h3>
                                            <div class="price-box" style="margin-bottom: 0px;">
                                                <span>Stake your USDT, BITCOIN, BUSD, LTC...</span>
                                                <h2>{{ $price->noofrepeat }}+</h2>
                                                <p>Duration</p>
                                            </div>
                                        </div>
                                        <div class="table-content">
                                            <ul class="clearfix">
                                                <li>Minimum Deposit <b class="text-primary">${{ $price->minimum }}</b></li>
                                                <li>Maximum Deposit <b class="text-primary">${{ $price->maximum }}</b></li>
                                                <li>Total Profit <b class="text-primary">{{ $price->percentage * $price->noofrepeat }}%</b></li>
                                                <li>Referral Bonus <b class="text-primary">{{ $price->refpercent}}%</b></li>
                                                <li>Withdrawal <b class="text-primary">Weekly</b></li>
                                            </ul>
                                        </div>
                                        <div class="table-footer">
                                            <a href="{{ route('register') }}" class="theme-btn style-one border-0">Stake
                                                & Earn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- project-section end -->

    <!--section class="project-section">
            <div class="fluid-container">
                <div class="project-carousel theme-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/project-1.jpg" alt=""></figure>
                            <div class="lower-content">
                                <p>Corporate Management</p>
                                <h2><a href="index.html">Global Management Apps</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/project-2.jpg" alt=""></figure>
                            <div class="lower-content">
                                <p>Financial Initiatives</p>
                                <h2><a href="index.html">Planning & Task Completion</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="project-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="assets/images/gallery/project-3.jpg" alt=""></figure>
                            <div class="lower-content">
                                <p>Corporate Management</p>
                                <h2><a href="index.html">Private Workshop Assistant</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section-->

    <!-- Section Team -->


    <!-- Section Features -->

    <section class="service-style-two bg-color-2" id="service">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
        <div class="auto-container">
            <div class="sec-title light centred">
                <h5>our PRODUCTS</h5>
                <h2>Access more investment options than ever before, not seen anywhere else</h2>
                <p>We are the new world of investing where you come first and the options are more.
                    Choose among a variety of investment products, and whether to pick a product only or a portfolio.
                    Trade a single asset or invest in a portfolio of assets.</p>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-company"></i></div>
                            <h4><a href="{{ route('register') }}">Trade An Asset</a></h4>
                            <p>We offer various assets ranging from Cryptocurrencies, Real Estate, Cannabis and Forex</p>
                            <div class="link">
                                <a class="btn btn-custom p-2" href="{{ route('register') }}">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 service-block">
                    <div class="service-block-two wow fadeInUp animated" data-wow-delay="300ms"
                        data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-line-chart"></i></div>
                            <h4><a href="{{ route('register') }}">Build A Portfolio</a></h4>
                            <p>We also offer portfolios which allow you to invest in more than one asset class at a time.
                                Portfolios are a great options if you want more.</p>
                            <div class="link">
                                <a class="btn btn-custom p-2" href="{{ route('register') }}">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Latest Transactions</h2>
            </div>
            <div style="width:80%; display:flex;justify-content:center;align-items:center;margin:auto">
                <iframe
                    src="https://www.btcwidget.info/widget/liveTx/%235dbcd2/%23ffffff/%235e2ead/%23042f66/%23042f66/800/400/10"
                    width="800" height="400" frameBorder="0" scrolling="no"></iframe> </iframe>
            </div>
        </div>
    </section>
    <section class="chart-section bg-color-3">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_eight">
                        <div class="content-box">
                            <div class="sec-title style-three left light">
                                <h5>Invest With Us</h5>
                                <h2>We combine strategy and insight with technology.</h2>
                            </div>
                            <div class="text">
                                <p>
                                    Our trading system combines proven strategy with modern technology to deliver best
                                    results for investors.
                                </p>
                            </div>
                            <div class="btn-box">
                                <a href="{{ route('register') }}">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 chart-column" style='text-align: center; height: 400px;'>
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "100%",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "dark",
                                "locale": "en",
                                "isTransparent": true
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-style-two">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>testimonials</h5>
                <h2>What Client’s Saying</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>I keep recommending to my friends and family because of their overwhelmingly impressive
                                financial services</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/ReYcirPHu3vhNI01614685871546.jpg" alt="">
                            </figure>
                            <h5>Nora Woodward</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>I feel like I got a new home.
                                Thanks to {{ $compd ? $compd->companyname : 'company name' }} and also to the
                                administration.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/BeJZ4LzIiQnXPhp1633981448208.jpg" alt="">
                            </figure>
                            <h5>Jennifer</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>Like many people, I spend the majority of my time planning for my business, but pay little or
                                no attention to my own finances.{{ $compd ? $compd->companyname : 'company name' }} (GBA)
                                has developed a personal plan for me that allows me to take much greater control of my
                                financial affairs, and plan for the future. Everything now makes much more sense, and I only
                                wish I had got in touch with GBA sooner!</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/eIyQYP3jH78wuFU1614695859816.jpg" alt="">
                            </figure>
                            <h5>Rodney wickman</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>I recommend every investors to join {{ $compd ? $compd->companyname : 'company name' }}, it
                                has been working and I have being making profits weekly....</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/0sTpnUAHGZN8yQB1614765974733.jpg" alt="">
                            </figure>
                            <h5>Beverly</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>Just to say many thanks for a very positive client satisfaction,me and my wife came away
                                feeling well satisfied that we are able to continue enjoying life without too much stress on
                                the old finances and should be able to carry on with our present lifestyles for some time to
                                come. Very satisfied with the way {{ $compd ? $compd->companyname : 'company name' }} are
                                managing affairs and hope this will continue into the future,</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/6Xer174i2GS8owP1614690302946.jpg" alt="">
                            </figure>
                            <h5>Mr and Mrs kelmo</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>Really...
                                I'm excited already ???a very big thanks to
                                {{ $compd ? $compd->companyname : 'company name' }}</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/xVl3J7SnoCTUMti1614696078778.jpg" alt="">
                            </figure>
                            <h5>Monica</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>At first, I doubted it but to my surprise
                                {{ $compd ? $compd->companyname : 'company name' }} started paying me at the due date</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/lWy7b3na5i6X1Nv1614696001686.jpg" alt="">
                            </figure>
                            <h5>Cynthia carl</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>We have been with GBA now for three years. His team have made an effort to get to know us and
                                so the service we receive feels very personal. They helped us to focus on what we want out
                                of life and is helping us realise our plans. The peace of mind we have from knowing our
                                finances are being so well managed is priceless.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/Cr1Jwyhdoc1D8kz1614766389810.jpg" alt="">
                            </figure>
                            <h5>Mark</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>GBA provides an excellent service be it on a business or on a personal level I have found the
                                company's advice regarding investment opportunities particularly helpful - everything is
                                explained fully no matter how complex the subject. I am pleased to see the results in
                                comparison to the experiences one reads or hears about I get the feeling that
                                {{ $compd ? $compd->companyname : 'company name' }} are ahead of the game.</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/GaNLeqO85WMcJ4m1614691346138.jpg" alt="">
                            </figure>
                            <h5>Michael former property loch of Scotland</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>I won't stop recommending this company to every investor out there,paying securely...</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/M1EFGuaHDtwpd2N1614696167493.jpg" alt="">
                            </figure>
                            <h5>Bruce</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>This is remarkably one of the best Investment company I have meet this year</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/VX9pAgkDrt1q8hu1614695934840.jpg" alt="">
                            </figure>
                            <h5>Alexandra lukas</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>A big thank you to {{ $compd ? $compd->companyname : 'company name' }}, I have been
                                receiving my payout every week, thanks once more</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/T1PV3oYzB20MvNg1614685705649.jpg" alt="">
                            </figure>
                            <h5>Mark bill</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>So happy about the truthfulness of the company, my withdrawal was approved and my btc sent to
                                my wallet under just few minutes after I requested for a withdrawal, I think you all should
                                invest with {{ $compd ? $compd->companyname : 'company name' }}</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/1gB4kVWZLbHyQxF1614696122840.jpg" alt="">
                            </figure>
                            <h5>Temara</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>{{ $compd ? $compd->companyname : 'company name' }} is one of the best platform ever, if you
                                are looking for the best company to invest,
                                {{ $compd ? $compd->companyname : 'company name' }} is the best platform to invest</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/ZFGD1QX6ixJBu2M1614685412136.jpg" alt="">
                            </figure>
                            <h5>Osman</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>Thank you so much {{ $compd ? $compd->companyname : 'company name' }}, I don't know how to
                                express my gratitude to you, now I can pay my debt thank you joy Patrick for introducing me
                                to this platform....</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/oUc2zKlgi9PuVb71614686152703.jpg" alt="">
                            </figure>
                            <h5>James Anderson</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>Finding a good and efficient company as {{ $compd ? $compd->companyname : 'company name' }}
                                is the best investment platform ever</p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/nA0hBpvim4TQEoD1614786892854.jpg" alt="">
                            </figure>
                            <h5>Dr Taylor</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="inner-box">
                        <div class="text">
                            <i class="fas fa-quote-right" style="color: steelblue;"></i>
                            <p>{{ $compd ? $compd->companyname : 'company name' }} is our third financial adviser, and a
                                huge improvement on the others in terms of advice and commitment. They are pro-active where
                                the others were not, and has made us focus on our plans for retirement - a huge achievement!
                            </p>
                        </div>
                        <div class="author-info">
                            <figure class="image-box"><img src="images/19sCyhlwSXpAacu1614765949638.jpg" alt="">
                            </figure>
                            <h5>Nicolas</h5>
                            <span class="designation">Investor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="info-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                <h2>Our Happy Clients</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video id="vid" controls autoplay style="width: inherit;">
                        <source src="cert/1.mp4" type="video/mp4">
                    </video>
                    <script>
                        document.getElementById('vid').play();
                    </script>




                </div>
                <div class="col-lg-4 col-md-6 col-sm-4  col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/2.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/3.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/4.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/5.mp4" type="video/mp4">
                    </video>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4 col-4 title-column">

                    <video controls style="width: inherit;">
                        <source src="cert/6.mp4" type="video/mp4">
                    </video>

                </div>
            </div>
        </div>
    </section><!-- Section Blog -->

    <!-- Section FAQ -->
    <section class="skills-section">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="anim-icon">
                            <div class="icon icon-1" style="background-image: url(assets/images/icons/anim-icon-2.png);">
                            </div>
                        </div>
                        <figure class="image wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: slideInLeft;">
                            <img src="images/faq.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="anim-icon">
                                <div class="icon icon-1 rotate-me"
                                    style="background-image: url(assets/images/icons/anim-icon-1.png);"></div>
                                <div class="icon icon-2 float-bob-y"
                                    style="background-image: url(assets/images/icons/anim-icon-3.png);"></div>
                            </div>
                            <div class="sec-title-two">
                                <h5>{{ $compd ? $compd->companyname : 'company name' }}</h5>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="">
                                <details open>
                                    <summary>how many times can i make a deposit?</summary>
                                    <div class="faq__content">
                                        <p>Yes you can make as many deposit as you want on any of our investment plans
                                            except the starter plan where you can only invest 3 times after which you make a
                                            choice to continue investing with us or not</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>How many years has it been functional?</summary>
                                    <div class="faq__content">
                                        <p>In September 2014 {{ $compd ? $compd->companyname : 'company name' }} was opened
                                            to public It has been operating since then and had it first IPO in 2018 where
                                            they earned USD76million on GDP They started trading for investors on Real
                                            estate Cannabis cryptocurrency oil and gas in 2017 Key traders were working
                                            since Administration was hired in the early months of the year 2017 to prepare
                                            to start accepting investments from individuals</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>How long does my deposit take before it can reflect on my Bluegate Investments
                                        account dashboard?</summary>
                                    <div class="faq__content">
                                        <p>Your deposit will be reflected immediately once it is confirmed on the blockchain
                                            network</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>How do I make a deposit?</summary>
                                    <div class="faq__content">
                                        <p>To deposit funds in your trading account is quick and simple For your convenience
                                            you may choose one of the several available deposit methods To make a successful
                                            deposit please follow the steps below Login to your account Click on the
                                            DEPOSITS button in the DASHBOARD section Choose the deposit option And follow
                                            the steps to complete your transaction</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>What is {{ $compd ? $compd->companyname : 'company name' }}?</summary>
                                    <div class="faq__content">
                                        <p>{{ $compd ? $compd->companyname : 'company name' }} is a company that provides a
                                            full investment services focused on the real estate cryptocurrency and cannabis
                                            our well trained Realtors earn substantial dividends for her investors upon
                                            completion of lifespan we are among the best platform to invest and grow your
                                            Bitcoin and other cryptocurrency</p>
                                    </div>
                                </details>
                                <details>
                                    <summary>Is this company properly registered?</summary>
                                    <div class="faq__content">
                                        <p>we are officially registered and well regulated by SEC with the united kingdom
                                            company house our company registration number is R2335443</p>
                                    </div>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-information centred">
        <div class="auto-container">
            <div class="sec-title right">
                <h5>Contact Us</h5>
                <h2>We’re Ever Ready <br>To Help You</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-map"></i></div>
                            <h3>Visit Us</h3>
                            <p>Flat 41 Brookfield Farm, Curzon St, Lbstock, United Kingddom, LE67 6LA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                    <div class="single-item wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms"
                        style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="inner-box">
                            <div class="icon-box"><i class="far fa-envelope-open"></i></div>
                            <h3>Email Us</h3>
                            <p><a
                                    href="mailto:{{ $compd ? $compd->companyemail : 'company email' }}">{{ $compd ? $compd->companyemail : 'company email' }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-style-two" style="background-image: url(assets/images/background/contact-3.jpg);">
        <div class="auto-container">
            <div class="col-xl-8 col-lg-12 col-md-12 inner-column">
                <div class="sec-title left light">
                    <h5>need assistance?</h5>
                    <h2>Drop Us a Line</h2>
                    <p>Our customer care agents are ever ready to guide you. Drop us a message</p>
                </div>
                <form method="post" action="https://trustbund.com/contact.php" class="default-form"
                    novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required=""
                                aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email address" required=""
                                aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="phone" placeholder="Phone" required=""
                                aria-required="true">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <input type="text" name="subject" placeholder="Subject" required=""
                                aria-required="true">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="msg" placeholder="Message"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                            <button class="theme-btn style-one" type="submit" name="send">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-1.png" alt=""></a></figure>
                    <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-2.png" alt=""></a></figure>
                    <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-3.png" alt=""></a></figure>
                    <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-4.png" alt=""></a></figure>
                    <figure class="client-logo"><a href="index.html"><img src="assets/images/clients/clients-5.png" alt=""></a></figure>
                </div>
            </div>
        </section-->

    <section class="cta-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="title pull-left">
                    <h2>Open account for free and start investing!</h2>
                </div>
                <div class="btn-box pull-right">
                    <a href="{{ route('register') }}">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- fun-fact -->
    <section class="fun-fact centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box" style="font-size: 35px;">
                            <span class="count-text" data-speed="1500" data-stop="100253">0</span>
                        </div>
                        <p>Active Users</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box" style="font-size: 35px;">
                            <span class="count-text" data-speed="1500" data-stop="1338">0</span>
                        </div>
                        <p>Running Days</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box" style="font-size: 35px;">
                            <img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT
                            <span class="count-text" data-speed="1500" data-stop="300021142.336">0</span>
                        </div>
                        <p>DEPOSIT</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-column">
                    <div class="counter-block-one wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="count-outer count-box" style="font-size: 35px;">
                            <img src="images/coins/usdt.html" style="width: 30px; height: auto;" alt=""> USDT
                            <span class="count-text" data-speed="1500" data-stop="303452266721.39">0</span>
                        </div>
                        <p>WITHDRAWALS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
