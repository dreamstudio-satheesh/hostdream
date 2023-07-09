@extends('layouts.app')

@section('styles')

    <!-- CHOICES CSS-->
    <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-1 banner-section section">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <p class="mb-3 content-1 h5 text-white">Easy To Transfer <span class="tx-info-dark">Domain</span></p>
                                <p class="content-2 mb-4">Sadipscing at no et voluptua sit et. Clita elitr invidunt diam consetetur sed elitr eirmod sit ut. Diam nonumy dolor.</p>
                                <p class="tx-18">Domain Price Starting at Just<span class="h2 text-white"> $179</span><span class="op-5 tx-14"> / year</span></p>
                                <div class="row align-items-center my-4">
                                    <div class="col-xxl-9 col-sm-7 mb-3 mb-sm-0">
                                        <form action="javascript:void(0);" class="form">
                                            <div class="form-group custom-form-group">
                                                <input type="search" class="form-control form-control-lg" placeholder="Find your domain name...">
                                                <button class="custom-form-btn btn btn-lg btn-primary border-0" type="button">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-xxl-3 col-sm-5 mb-3 mb-sm-0">
                                        <span class="me-3 tx-13 exchange-icon"><i class="bi bi-arrow-left-right"></i></span>
                                        <button class="custom-form-btn btn btn-lg btn-secondary" type="button">Transfer</button>
                                    </div>
                                </div>
                                <div class="d-sm-flex">
                                    <div class="px-4 py-2 br-5 bg-white-1 me-sm-2 mb-3 mb-sm-0">
                                        <p class="mb-1 tx-20 fw-600">.com</p>
                                        <p class="tx-14 fw-600 mb-0 op-8">$&nbsp;1,131</p>
                                    </div>
                                    <div class="px-4 py-2 br-5 bg-white-1 me-sm-2 mb-3 mb-sm-0">
                                        <p class="mb-1 tx-20 fw-600">.net</p>
                                        <p class="tx-14 fw-600 mb-0 op-8">$&nbsp;1,444</p>
                                    </div>
                                    <div class="px-4 py-2 br-5 bg-white-1 me-sm-2 mb-3 mb-sm-0">
                                        <p class="mb-1 tx-20 fw-600">.in</p>
                                        <p class="tx-14 fw-600 mb-0 op-8">$&nbsp;686</p>
                                    </div>
                                    <div class="px-4 py-2 br-5 bg-white-1 me-sm-2 mb-3 mb-sm-0">
                                        <p class="mb-1 tx-20 fw-600">.org</p>
                                        <p class="tx-14 fw-600 mb-0 op-8">$&nbsp;1,479</p>
                                    </div>
                                    <div class="px-4 py-2 br-5 bg-white-1 me-sm-2 mb-3 mb-sm-0">
                                        <p class="mb-1 tx-20 fw-600">.online</p>
                                        <p class="tx-14 fw-600 mb-0 op-8">$&nbsp;1,479</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-lg-end text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/78.png')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 custom-bg">
                    <div class="container">
                        <img src="{{asset('build/assets/images/patterns/20.png')}}" alt="img" class="patterns-7 z-index-0">
                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 filter-invert op-1 z-index-0">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Domains</span></div>
                            <div class="heading-title">Domain Name <span class="tx-primary">Transfer</span> </div>
                            <div class="heading-description">Browse our step-by-step guide for domain transfers to ensure a quick and easy transfer. <a href="{{url('premium-domains')}}" class="plain-link">click here</a></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <form action="javascript:void(0);">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="form-label tx-16 fw-500">Domain Name</label>
                                                <input type="text" class="form-control mb-3 mb-lg-0" placeholder="Your Website">
                                            </div>
                                            <div class="col-lg-2 mt-auto">
                                                <select class="form-control" name="choices-single-no-search" id="choices-single-no-search" aria-label="Default select example">
                                                    <option selected>*.name</option>
                                                    <option value="5g.in">.5g.in</option>
                                                    <option value="6g.in">.6g.in</option>
                                                    <option value="academy">.academy</option>
                                                    <option value="accountant">.accountant</option>
                                                    <option value="accountants">.accountants</option>
                                                    <option value="actor">.actor</option>
                                                    <option value="adult">.adult</option>
                                                    <option value="ai.in">.ai.in</option>
                                                    <option value="am.in">.am.in</option>
                                                    <option value="app">.app</option>
                                                    <option value="archi">.archi</option>
                                                    <option value="army">.army</option>
                                                    <option value="art">.art</option>
                                                    <option value="asia">.asia</option>
                                                    <option value="associates">.associates</option>
                                                    <option value="auction">.auction</option>
                                                    <option value="audio">.audio</option>
                                                    <option value="auto">.auto</option>
                                                    <option value="band">.band</option>
                                                    <option value="best">.best</option>
                                                    <option value="bet">.bet</option>
                                                    <option value="bid">.bid</option>
                                                    <option value="bihar.in">.bihar.in</option>
                                                    <option value="biz">.biz</option>
                                                    <option value="biz.in">.biz.in</option>
                                                    <option value="blackfriday">.blackfriday</option>
                                                    <option value="blog">.blog</option>
                                                    <option value="business">.business</option>
                                                    <option value="business.in">.business.in</option>
                                                    <option value="buzz">.buzz</option>
                                                    <option value="ca">.ca</option>
                                                    <option value="ca.in">.ca.in</option>
                                                    <option value="camera">.camera</option>
                                                    <option value="car">.car</option>
                                                    <option value="career">.career</option>
                                                    <option value="cars">.cars</option>
                                                    <option value="casa">.casa</option>
                                                    <option value="cc">.cc</option>
                                                    <option value="christmas">.christmas</option>
                                                    <option value="city">.city</option>
                                                    <option value="cleaning">.cleaning</option>
                                                    <option value="cloud">.cloud</option>
                                                    <option value="cn.com">.cn.com</option>
                                                    <option value="cn.in">.cn.in</option>
                                                    <option value="co">.co</option>
                                                    <option value="co.com">.co.com</option>
                                                    <option value="co.in">.co.in</option>
                                                    <option value="co.za">.co.za</option>
                                                    <option value="coffee">.coffee</option>
                                                    <option value="college">.college</option>
                                                    <option value="com">.com</option>
                                                    <option value="com.co">.com.co</option>
                                                    <option value="com.de">.com.de</option>
                                                    <option value="com.in">.com.in</option>
                                                    <option value="com.mx">.com.mx</option>
                                                    <option value="company">.company</option>
                                                    <option value="consulting">.consulting</option>
                                                    <option value="cooking">.cooking</option>
                                                    <option value="cool">.cool</option>
                                                    <option value="coop.in">.coop.in</option>
                                                    <option value="country">.country</option>
                                                    <option value="coupons">.coupons</option>
                                                    <option value="courses">.courses</option>
                                                    <option value="credit">.credit</option>
                                                    <option value="cricket">.cricket</option>
                                                    <option value="cs.in">.cs.in</option>
                                                    <option value="dance">.dance</option>
                                                    <option value="date">.date</option>
                                                    <option value="delhi.in">.delhi.in</option>
                                                    <option value="dentist">.dentist</option>
                                                    <option value="design">.design</option>
                                                    <option value="dev">.dev</option>
                                                    <option value="diet">.diet</option>
                                                    <option value="doctor">.doctor</option>
                                                    <option value="dog">.dog</option>
                                                    <option value="download">.download</option>
                                                    <option value="dr.in">.dr.in</option>
                                                    <option value="email">.email</option>
                                                    <option value="energy">.energy</option>
                                                    <option value="er.in">.er.in</option>
                                                    <option value="family">.family</option>
                                                    <option value="fashion">.fashion</option>
                                                    <option value="feedback">.feedback</option>
                                                    <option value="firm.in">.firm.in</option>
                                                    <option value="fishing">.fishing</option>
                                                    <option value="flowers">.flowers</option>
                                                    <option value="fm">.fm</option>
                                                    <option value="forsale">.forsale</option>
                                                    <option value="fun">.fun</option>
                                                    <option value="game">.game</option>
                                                    <option value="games">.games</option>
                                                    <option value="garden">.garden</option>
                                                    <option value="gen.in">.gen.in</option>
                                                    <option value="gift">.gift</option>
                                                    <option value="global">.global</option>
                                                    <option value="group">.group</option>
                                                    <option value="gujarat.in">.gujarat.in</option>
                                                    <option value="guru">.guru</option>
                                                    <option value="health">.health</option>
                                                    <option value="help">.help</option>
                                                    <option value="homes">.homes</option>
                                                    <option value="horse">.horse</option>
                                                    <option value="hospital">.hospital</option>
                                                    <option value="host">.host</option>
                                                    <option value="hosting">.hosting</option>
                                                    <option value="in">.in</option>
                                                    <option value="in.net">.in.net</option>
                                                    <option value="ind.in">.ind.in</option>
                                                    <option value="info">.info</option>
                                                    <option value="info.in">.info.in</option>
                                                    <option value="int.in">.int.in</option>
                                                    <option value="internet.in">.internet.in</option>
                                                    <option value="io.in">.io.in</option>
                                                    <option value="jobs">.jobs</option>
                                                    <option value="kitchen">.kitchen</option>
                                                    <option value="law">.law</option>
                                                    <option value="lawyer">.lawyer</option>
                                                    <option value="life">.life</option>
                                                    <option value="live">.live</option>
                                                    <option value="loan">.loan</option>
                                                    <option value="loans">.loans</option>
                                                    <option value="love">.love</option>
                                                    <option value="ltd">.ltd</option>
                                                    <option value="luxury">.luxury</option>
                                                    <option value="market">.market</option>
                                                    <option value="markets">.markets</option>
                                                    <option value="me.in">.me.in</option>
                                                    <option value="men">.men</option>
                                                    <option value="mobi">.mobi</option>
                                                    <option value="name">.name</option>
                                                    <option value="navy">.navy</option>
                                                    <option value="net">.net</option>
                                                    <option value="net.co">.net.co</option>
                                                    <option value="net.in">.net.in</option>
                                                    <option value="news">.news</option>
                                                    <option value="ngo">.ngo</option>
                                                    <option value="ninja">.ninja</option>
                                                    <option value="nom.co">.nom.co</option>
                                                    <option value="one">.one</option>
                                                    <option value="ong">.ong</option>
                                                    <option value="online">.online</option>
                                                    <option value="org">.org</option>
                                                    <option value="org.in">.org.in</option>
                                                    <option value="page">.page</option>
                                                    <option value="party">.party</option>
                                                    <option value="pet">.pet</option>
                                                    <option value="pg.in">.pg.in</option>
                                                    <option value="photo">.photo</option>
                                                    <option value="photography">.photography</option>
                                                    <option value="physio">.physio</option>
                                                    <option value="pics">.pics</option>
                                                    <option value="plumbing">.plumbing</option>
                                                    <option value="post.in">.post.in</option>
                                                    <option value="press">.press</option>
                                                    <option value="pro">.pro</option>
                                                    <option value="pro.in">.pro.in</option>
                                                    <option value="promo">.promo</option>
                                                    <option value="property">.property</option>
                                                    <option value="protection">.protection</option>
                                                    <option value="pub">.pub</option>
                                                    <option value="racing">.racing</option>
                                                    <option value="rent">.rent</option>
                                                    <option value="rest">.rest</option>
                                                    <option value="review">.review</option>
                                                    <option value="reviews">.reviews</option>
                                                    <option value="rocks">.rocks</option>
                                                    <option value="sale">.sale</option>
                                                    <option value="sc">.sc</option>
                                                    <option value="science">.science</option>
                                                    <option value="security">.security</option>
                                                    <option value="sexy">.sexy</option>
                                                    <option value="shop">.shop</option>
                                                    <option value="shopping">.shopping</option>
                                                    <option value="site">.site</option>
                                                    <option value="social">.social</option>
                                                    <option value="software">.software</option>
                                                    <option value="solar">.solar</option>
                                                    <option value="solutions">.solutions</option>
                                                    <option value="space">.space</option>
                                                    <option value="store">.store</option>
                                                    <option value="studio">.studio</option>
                                                    <option value="study">.study</option>
                                                    <option value="systems">.systems</option>
                                                    <option value="tattoo">.tattoo</option>
                                                    <option value="tech">.tech</option>
                                                    <option value="tips">.tips</option>
                                                    <option value="today">.today</option>
                                                    <option value="tools">.tools</option>
                                                    <option value="top">.top</option>
                                                    <option value="toys">.toys</option>
                                                    <option value="trade">.trade</option>
                                                    <option value="trading">.trading</option>
                                                    <option value="travel">.travel</option>
                                                    <option value="travel.in">.travel.in</option>
                                                    <option value="tv.in">.tv.in</option>
                                                    <option value="uk.com">.uk.com</option>
                                                    <option value="uk.in">.uk.in</option>
                                                    <option value="up.in">.up.in</option>
                                                    <option value="us">.us</option>
                                                    <option value="us.com">.us.com</option>
                                                    <option value="us.in">.us.in</option>
                                                    <option value="video">.video</option>
                                                    <option value="vip">.vip</option>
                                                    <option value="website">.website</option>
                                                    <option value="wedding">.wedding</option>
                                                    <option value="win">.win</option>
                                                    <option value="works">.works</option>
                                                    <option value="world">.world</option>
                                                    <option value="xyz">.xyz</option>
                                                    <option value="yoga">.yoga</option>
                                                    <option value="zone">.zone</option>
                                                    <option value="भारत">.भारत</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mt-4 mt-lg-0">
                                                <label class="form-label tx-16 fw-500">Transfer Auth Code</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Epp code or Auth code">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Search</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Domains List</span></div>
                            <div class="heading-title">Domain Pricing <span class="tx-primary">List</span> </div>
                            <div class="heading-description">Checkout the all Domain prices</div>
                        </div>
                        <div class="row">
                            <div class="card p-0 shadow-none">
                                <div class="card-body p-0">
                                    <div class="table-responsive border br-7">
                                        <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th class="border-white-2">
                                                        <span class="avatar avatar-lg rounded-circle bg-white-1 text-white mb-3 tx-22"><i class="bi bi-box"></i></span>
                                                        <p class="h5 mb-1 text-white">Extensions (TLD)</p>
                                                        <small class="text-white op-9">TLD, gTLD, ccTLD, Etc.</small>
                                                    </th>
                                                    <th class="border-white-2">
                                                        <span class="avatar avatar-lg rounded-circle bg-white-1 text-white mb-3 tx-22"><i class="bi bi-person-plus"></i></span>
                                                        <p class="h5 mb-1 text-white">Domain Registration</p>
                                                        <small class="text-white op-9">For new registration</small>
                                                    </th>
                                                    <th class="border-white-2">
                                                        <span class="avatar avatar-lg rounded-circle bg-white-1 text-white mb-3 tx-22"><i class="bi bi-chevron-double-right"></i></span>
                                                        <p class="h5 mb-1 text-white">Domain Transfer</p>
                                                        <small class="text-white op-9">To tranfer from other registrar</small>
                                                    </th>
                                                    <th class="border-white-2">
                                                        <span class="avatar avatar-lg rounded-circle bg-white-1 text-white mb-3 tx-22"><i class="bi bi-gem"></i></span>
                                                        <p class="h5 mb-1 text-white">Domain Renewal</p>
                                                        <small class="text-white op-9">To renew your Domain</small>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pricing-feature">
                                                        <span class="tx-17 tx-default">.com</span>
                                                        <span class="badge badge-lg bg-danger me-1">Newest</span>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature"><span class="tx-17 tx-default">.info</span></td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature"><span class="tx-17 tx-default">.org</span></td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature">
                                                        <span class="tx-17 tx-default">.net</span>
                                                        <span class="badge badge-lg bg-primary me-1">Popular</span>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0"><span class="text-decoration-line-through tx-warning">$986.67</span> $567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0"><span class="text-decoration-line-through tx-warning">$986.67</span> $567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0"><span class="text-decoration-line-through tx-warning">$986.67</span> $567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature"><span class="tx-17 tx-default">.biz</span></td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature">
                                                        <span class="tx-17 tx-default">.online</span>
                                                        <span class="badge badge-lg bg-success me-1">Sale</span>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature"><span class="tx-17 tx-default">.store</span></td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pricing-feature"><span class="tx-17 tx-default">.ca</span></td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">$567.98</p>
                                                        <small class="tx-primary">1 Year</small>
                                                    </td>
                                                    <td>
                                                    <p class="mb-0">$567.98</p>
                                                    <small class="tx-primary">1 Year</small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <p class="mb-0 d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0 d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-2 bg-image2">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/13.png')}}" alt="img" class="patterns-4 sub-pattern-3">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="text-white tx-16 fw-semibold">Services</span></div>
                            <div class="heading-title text-white">Services We Offer </div>
                            <div class="heading-description text-white">Checkout Our Services</div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar bg-primary-gradient br-7">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 128 128">
                                                            <path fill-rule="evenodd" d="M113.823 104.595c-1.795-1.478-3.629-2.921-5.308-4.525-1.87-1.785-3.045-3.944-2.789-6.678.147-1.573-.216-2.926-2.113-3.452.446-1.154.864-1.928 1.033-2.753.188-.92.178-1.887.204-2.834.264-9.96-3.334-18.691-8.663-26.835-2.454-3.748-5.017-7.429-7.633-11.066-4.092-5.688-5.559-12.078-5.633-18.981-.036-3.166-.41-6.38-1.081-9.475-1.313-6.04-4.549-10.763-10.418-13.296-4.497-1.942-9.152-2.327-13.901-1.084-6.901 1.805-11.074 6.934-10.996 14.088.074 6.885.417 13.779.922 20.648.288 3.893-.312 7.252-2.895 10.34-2.484 2.969-4.706 6.172-6.858 9.397-1.229 1.844-2.317 3.853-3.077 5.931-2.07 5.663-3.973 11.373-7.276 16.5-1.224 1.9-1.363 4.026-.494 6.199.225.563.363 1.429.089 1.882-2.354 3.907-5.011 7.345-10.066 8.095-3.976.591-4.172 1.314-4.051 5.413.1 3.337.061 6.705-.28 10.021-.363 3.555.008 4.521 3.442 5.373 7.924 1.968 15.913 3.647 23.492 6.854 3.227 1.365 6.465.891 9.064-1.763 2.713-2.771 6.141-3.855 9.844-3.859 6.285-.005 12.572.298 18.86.369 1.702.02 2.679.653 3.364 2.199.84 1.893 2.26 3.284 4.445 3.526 4.193.462 8.013-.16 11.19-3.359 3.918-3.948 8.436-7.066 13.615-9.227 1.482-.619 2.878-1.592 4.103-2.648 2.231-1.922 2.113-3.146-.135-5zm-51.397-80.475c.758-2.601 2.537-4.289 5.243-4.801 2.276-.43 4.203.688 5.639 3.246 1.546 2.758 2.054 5.64.734 8.658-1.083 2.474-1.591 2.707-4.123 1.868-.474-.157-.937-.343-1.777-.652.708-.594 1.154-1.035 1.664-1.382 1.134-.772 1.452-1.858 1.346-3.148-.139-1.694-1.471-3.194-2.837-3.175-1.225.017-2.262 1.167-2.4 2.915-.086 1.089.095 2.199.173 3.589-3.446-1.023-4.711-3.525-3.662-7.118zm-12.75-2.251c1.274-1.928 3.197-2.314 5.101-1.024 2.029 1.376 3.547 5.256 2.763 7.576-.285.844-1.127 1.5-1.716 2.241l-.604-.374c-.23-1.253-.276-2.585-.757-3.733-.304-.728-1.257-1.184-1.919-1.762-.622.739-1.693 1.443-1.757 2.228-.088 1.084.477 2.28.969 3.331.311.661 1.001 1.145 1.713 1.916l-1.922 1.51c-3.018-2.7-3.915-8.82-1.871-11.909zm37.664 64.206c-.203 2.604-.5 2.713-3.118 3.098-1.859.272-2.359.756-2.453 2.964-.108 2.581-.101 5.171-.012 7.753.061 1.77-.537 3.158-1.755 4.393-6.764 6.856-14.845 10.105-24.512 8.926-4.17-.509-6.896-3.047-9.097-6.639.98-.363 1.705-.607 2.412-.894 3.122-1.27 3.706-3.955 1.213-6.277-1.884-1.757-3.986-3.283-6.007-4.892-1.954-1.555-3.934-3.078-5.891-4.629-1.668-1.323-2.305-3.028-2.345-5.188-.094-5.182.972-10.03 3.138-14.747 1.932-4.209 3.429-8.617 5.239-12.885.935-2.202 1.906-4.455 3.278-6.388 1.319-1.854 2.134-3.669 1.988-5.94-.084-1.276-.016-2.562-.016-3.843l.707-.352c1.141.985 2.302 1.949 3.423 2.959 4.045 3.646 7.892 3.813 12.319.67 1.888-1.341 3.93-2.47 5.927-3.652.497-.294 1.092-.423 1.934-.738 2.151 5.066 4.262 10.033 6.375 15 1.072 2.524 1.932 5.167 3.264 7.547 2.671 4.775 4.092 9.813 4.07 15.272-.012 2.83.137 5.67-.081 8.482z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">Linux Hosting</h5>
                                                <p class="mb-0 op-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiism expedita.</p>
                                                <a href="{{url('linux-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16 secondary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar br-7 bg-secondary-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                            <path d="M22,2L11.2,3.6v8L22,11.5V2z M10.2,12.5L2,12.4l0,6.8l8.1,1.1L10.2,12.5L10.2,12.5z M2,4.8l0,6.8l8.1,0l0-7.9L2,4.8z M11.1,12.5l0,7.9L22,22l0-9.4L11.1,12.5z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">Windows Hosting</h5>
                                                <p class="mb-0 op-8">Quas molestias excepturi sint occaecati cupiditate non provident placeat facere.</p>
                                                <a href="{{url('windows-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16 success">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar br-7 bg-success-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 100 100">
                                                            <path d="M5 50c0 24.855 20.145 45 45 45 24.85 0 45-20.145 45-45C95 25.151 74.85 5 50 5 25.146 5 5 25.151 5 50m3.467 0a41.445 41.445 0 0 1 3.598-16.903l19.811 54.278C18.024 80.65 8.467 66.438 8.467 50M50 91.531c-4.077 0-8.015-.594-11.733-1.687L50.73 53.639 63.496 88.61c.083.207.186.39.293.565A41.316 41.316 0 0 1 50 91.531m33.564-42.31c2.369-5.925 3.162-10.662 3.162-14.874 0-1.529-.103-2.948-.287-4.273a41.34 41.34 0 0 1 5.086 19.927c0 15.324-8.301 28.698-20.645 35.894l12.684-36.674zm-8.955-12.772c1.576 2.765 3.427 6.32 3.427 11.455 0 3.557-1.058 8.027-3.161 13.428L70.73 75.168 55.721 30.53c2.506-.136 4.752-.396 4.752-.396 2.238-.266 1.971-3.549-.261-3.426 0 0-6.729.531-11.071.531-4.082 0-10.936-.531-10.936-.531-2.24-.123-2.499 3.296-.266 3.426 0 0 2.123.26 4.361.396l6.465 17.729-9.086 27.251L24.55 30.53c2.506-.136 4.758-.396 4.758-.396 2.239-.266 1.966-3.549-.266-3.426 0 0-6.725.531-11.072.531-.778 0-1.694-.02-2.67-.048C22.729 15.916 35.495 8.469 50 8.469c10.812 0 20.657 4.136 28.043 10.908-.178-.014-.355-.035-.533-.035-4.088 0-6.977 3.551-6.977 7.367.001 3.426 1.974 6.321 4.076 9.74">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">WordPress Hosting</h5>
                                                <p class="mb-0 op-8">Similique sunt in culpa qui officia deserunt mollitia animi, id est omnis voluptas assumend.</p>
                                                <a href="{{url('wordpress-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16 danger">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar br-7 bg-danger-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 24 24"><g data-name="Server Upload">
                                                            <path d="M2 9h18a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2zm16-4.5a1 1 0 1 1-1 1 1 1 0 0 1 1-1zm-3 0a1 1 0 1 1-1 1 1 1 0 0 1 1-1zm-8 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm-2 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm-2 0a.5.5 0 0 1 1 0v2a.5.5 0 0 1-1 0zm12.17 6.43a.5.5 0 0 0-.26-.93H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h9.5a.5.5 0 0 0 .5-.5 6.45 6.45 0 0 1 3.17-5.57zM4 14.5a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zm2 0a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0zm2 0a.5.5 0 0 1-1 0v-2a.5.5 0 0 1 1 0z"/>
                                                            <path d="M18.5 11a5.5 5.5 0 1 0 5.5 5.5 5.51 5.51 0 0 0-5.5-5.5Zm2.35 4.85a.5.5 0 0 1-.71 0L19 14.71v4.79a.5.5 0 0 1-1 0v-4.79l-1.15 1.15a.5.5 0 0 1-.71-.71l2-2a.5.5 0 0 1 .71 0l2 2a.5.5 0 0 1 0 .7Z"/></g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">VPS Hosting</h5>
                                                <p class="mb-0 op-8">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.</p>
                                                <a href="{{url('virtualserver-linux-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16 info">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar bg-info-gradient br-7">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" viewBox="0 0 48 48">
                                                            <path class="cloud-icon" fill="none" d="M0 0h48v48h-48z"></path>
                                                            <path d="M38.71 20.07c-1.36-6.88-7.43-12.07-14.71-12.07-5.78 0-10.79 3.28-13.3 8.07-6.01.65-10.7 5.74-10.7 11.93 0 6.63 5.37 12 12 12h26c5.52 0 10-4.48 10-10 0-5.28-4.11-9.56-9.29-9.93zm-.71 15.93h-26c-4.42 0-8-3.58-8-8s3.58-8 8-8h1.42c1.31-4.61 5.54-8 10.58-8 6.08 0 11 4.92 11 11v1h3c3.31 0 6 2.69 6 6s-2.69 6-6 6z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">Cloud Hosting</h5>
                                                <p class="mb-0 op-8">Quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                                <a href="{{url('cloud')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-15 feature-card-16 warning">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-grow-1 text-center">
                                                <div class="mb-3">
                                                    <span class="avatar br-7 bg-warning-gradient">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" fill="#fff" enable-background="new 0 0 48 48" viewBox="0 0 48 48">
                                                            <path d="M39.9,33.8c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.5,0,2.8-1,3.3-2.4c0.3-0.9,0.5-1.9,0.5-2.9c0-4.8-3.6-8.9-8.4-9.5    c-0.9-0.1-1.7-0.9-1.7-1.8c-0.4-5-4.5-8.9-9.5-8.9c-5,0-9.1,3.9-9.5,8.9c-0.1,0.9-0.8,1.7-1.7,1.8c-4.8,0.6-8.4,4.6-8.4,9.5    c0,1,0.2,2,0.5,2.9c0.5,1.4,1.8,2.4,3.3,2.4c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2c-3.2,0-6-2.1-7-5.1c-0.4-1.3-0.7-2.7-0.7-4.2    c0-6.3,4.3-11.7,10.3-13.1c1.2-6.3,6.7-11,13.2-11c6.5,0,12,4.7,13.2,11c6,1.4,10.3,6.8,10.3,13.1c0,1.4-0.2,2.8-0.7,4.2    C45.9,31.8,43.1,33.8,39.9,33.8z">
                                                            </path>
                                                            <path d="M16.2,44.4c-1.1,0-2-0.9-2-2V23.3c0-1.1,0.9-2,2-2s2,0.9,2,2v19.1C18.1,43.5,17.2,44.4,16.2,44.4z">
                                                            </path>
                                                            <path d="M16.2 47.5L16.2 47.5c-.6 0-1.2-.3-1.6-.8l-4.9-6.5c-.6-.9-.5-2.1.4-2.7.9-.6 2.1-.5 2.7.4l3.3 4.4 3.3-4.4c.6-.9 1.9-1 2.7-.4.9.6 1 1.9.4 2.7l-4.9 6.5C17.4 47.2 16.8 47.5 16.2 47.5zM29.9 47.5c-1.1 0-2-.9-2-2V26.4c0-1.1.9-2 2-2s2 .9 2 2v19.1C31.8 46.6 31 47.5 29.9 47.5z">
                                                            </path>
                                                            <path d="M34.7,31.8c-0.6,0-1.2-0.3-1.6-0.8l-3.3-4.4L26.6,31c-0.6,0.9-1.9,1-2.7,0.4c-0.9-0.6-1-1.9-0.4-2.7l4.9-6.5     c0.7-1,2.4-1,3.1,0l4.9,6.5c0.6,0.9,0.5,2.1-0.4,2.7C35.6,31.6,35.1,31.8,34.7,31.8z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <h5 class="mb-2">Dedicated Server Hosting</h5>
                                                <p class="mb-0 op-8"> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
                                                <a href="{{url('dedicated-server')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-7 filter-invert z-index-0">
                    <img src="{{asset('build/assets/images/patterns/15.png')}}" alt="img" class="patterns-8 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Three Simple Steps To Transfer <span class="tx-primary">Your Domain</span> </div>
                            <div class="heading-description">Check This Out and Transfer</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card steps-card steps-content-1">
                                    <div class="card-body">
                                        <h5>Enter Your Website Name</h5>
                                        <p class="mb-0">Ipsum diam voluptua nonumy sit dolor diam nonumy stet, takimata voluptua magna eos accusam ea aliquyam magna, erat diam elitr.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card steps-card steps-content-2">
                                    <div class="card-body">
                                        <h5>Enter Authentication Code</h5>
                                        <p class="mb-0">Diam aliquyam sea sadipscing dolores accusam sit. Sed aliquyam lorem nonumy amet eirmod dolor. Et sed stet erat lorem diam.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card steps-card steps-content-3">
                                    <div class="card-body">
                                        <h5>Search and Transfer</h5>
                                        <p class="mb-0">Vero sit elitr dolores erat lorem sadipscing lorem stet ipsum kasd. Clita invidunt sit sit sadipscing elitr nonumy sit, et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner-pd-1 bg-pattern-2 bg-image1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-title text-white">Popular Top Level Domains Fit For You </div>
                            <div class="heading-description text-white op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy.</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/domain/1.png')}}" class="img-fluid mb-3" width="100" alt="img">
                                        <p>Est amet sit vero sanctus labore no sed ipsum ipsum nonumy nobis.</p>
                                        <p class="mb-2 op-7">Starts at</p>
                                        <p class="">
                                            <span><del class="tx-warning">$245.00</del></span>
                                            <span class="h4 ms-2">$147 <span class="tx-14 tx-muted op-7"> / year</span></span>
                                        </p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 mt-2">Transfer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/domain/2.png')}}" class="img-fluid mb-3 dark-invert" width="110" alt="img">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui.</p>
                                        <p class="mb-2 op-7">Starts at</p>
                                        <p class="">
                                            <span><del class="tx-warning">$542.00</del></span>
                                            <span class="h4 ms-2">$234 <span class="tx-14 tx-muted op-7"> / year</span></span>
                                        </p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 mt-2">Transfer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/domain/3.png')}}" class="img-fluid mb-3 dark-invert" width="120" alt="img">
                                        <p>Stet magna gubergren justo no et sit, duo eirmod et elitr diam at.</p>
                                        <p class="mb-2 op-7">Starts at</p>
                                        <p class="">
                                            <span><del class="tx-warning">$674.00</del></span>
                                            <span class="h4 ms-2">$456 <span class="tx-14 tx-muted op-7"> / year</span></span>
                                        </p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 mt-2">Transfer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/domain/4.png')}}" class="img-fluid mb-3" width="110" alt="img">
                                        <p>Et harum quidem rerum facilis est et expedita duo distinctio miu.</p>
                                        <p class="mb-2 op-7">Starts at</p>
                                        <p class="">
                                            <span><del class="tx-warning">$876.00</del></span>
                                            <span class="h4 ms-2">$654 <span class="tx-14 tx-muted op-7"> / year</span></span>
                                        </p>
                                    <a href="javascript:void(0);" class="btn btn-primary w-100 mt-2">Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <img src="{{asset('build/assets/images/patterns/24.png')}}" alt="img" class="patterns-8 sub-pattern-1 op-1 z-index-1 top-14p">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Benefits</span></div>
                            <div class="heading-title">Free Add-Ons With Every <span class="tx-primary">Domain Name</span> </div>
                            <div class="heading-description">Checkout Add-On Benefits</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-envelope-paper outline fade-in"></i>
                                                <i class="bi bi-envelope-paper-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Free Email Forwarding</h5>
                                        </div>
                                        <p class="mb-0">Amet ipsum justo no dolores lorem tempor clita elitr et ut, amet aliquyam et sed invidunt at kasd accusam, dolor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-nut outline fade-in"></i>
                                                <i class="bi bi-nut-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Bulk Tools</h5>
                                        </div>
                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-cpu outline fade-in"></i>
                                                <i class="bi bi-cpu-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">DNS Management</h5>
                                        </div>
                                        <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-menu-app outline fade-in"></i>
                                                <i class="bi bi-menu-app-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Easy To Use Control Panel</h5>
                                        </div>
                                        <p class="mb-0">Ut enim ad minima veniam, quis nostrum exercitationem corporis suscipit laboriosam, nisi ut aliquid commodi consequatur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-shield-exclamation outline fade-in"></i>
                                                <i class="bi bi-shield-fill-exclamation filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Domain Theft Protection</h5>
                                        </div>
                                        <p class="mb-0">Nam libero tempore, nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas est.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="card feature-card reveal">
                                    <div class="card-body">
                                        <div class="mb-2 d-flex align-items-center">
                                            <span class="tx-primary addons tx-28">
                                                <i class="bi bi-skip-forward outline fade-in"></i>
                                                <i class="bi bi-skip-forward-fill filled fade-in"></i>
                                            </span>
                                            <h5 class="flex-grow-1 mb-0 ms-3">Domain Forwarding</h5>
                                        </div>
                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti dolores.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section blob-bg-sec banner-pd-3">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img" class="patterns-5 transform-rotate-180 height-inherit bottom-0 op-1">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img" class="patterns-7 height-inherit bottom-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="heading-section text-start mb-4">
                                    <div class="heading-title text-white">Best Technical Support 24/7</div>
                                    <div class="heading-description text-white op-8">Support and Guidance</div>
                                </div>
                                <p class="mb-3 op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd, sed et et erat elitr consetetur et aliquyam. Et lorem ipsum Sit ipsum sanctus ea.</p>
                                <p class="tx-20 fw-500">Call Us : <a href="tel:123-789-7854" class="text-white me-1">123-789-7854</a> (Or) <a href="{{url('contact-us')}}" class="text-white ms-1">Chat Now</a></p>
                                <a href="{{url('contact-us')}}" class="btn btn-lg btn-secondary">Contact Now</a>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/57.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ's</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <div class="accordion accordion-style-1" id="acc-style-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        What is a Premium Domain?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Premium Domains are highly sought after domain names made up of important keywords and brand friendly words/phrases. They are usually privately owned and are sold at a much higher price than an ordinary domain name.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Why are Premium Domains so expensive?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Typically, Premium Domains are short, popular names that contain important keywords/keyphrases and hence command a higher value. Since they have been registered previously, they are well-established and boast of a higher page rank on the search engines. Hence, because they are well-geared to attract more traffic, they come at a higher price which is reflective of their value.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Will renewal rate for Premium Domains be as expensive?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No. In most cases, Premium Domains renew at the regular price of that TLD.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        How do I search for a Premium Domain?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We have a dedicated page that allows you to search for Premium Domains under the Domains Tab. Alternatively, when you perform a regular domain search, we will show you the best available Premium Domains that closely match the domain you've searched for. Finally, if the domain you searched for via our regular domain search happens to be a Premium Domain itself, it will be prominently highlighted on our results page as a Premium Domain.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What is the procedure to procure a Premium Domain?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">After you complete the purchase of a Premium Domain with us, we will proceed to complete the transfer of ownership. This may take upto 5-7 days. A confirmation email will be sent to your registered email address as soon as ownership of the domain has been transferred to your account. You can then proceed to manage the domain as you would manage a regular domain name.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

        <!-- CHOICES JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        @vite('resources/assets/js/choices.js')


@endsection