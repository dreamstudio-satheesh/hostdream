@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-section banner-1">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="">
                                    <p class="mb-3 content-1 h5 text-white">Powerful <span class="tx-info-dark">Dedicated Servers</span></p>
                                    <p class="content-2 tx-18 mb-4">High-performance Servers for Faster Websites & Applications</p>
                                    <ul class="list-unstyled mb-4">
                                        <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Always-on, 24/7 fully-managed support.</li>
                                        <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Bare metal servers with root access for complete control.</li>
                                        <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Flexible server configurations with SSD/HDD storage.</li>
                                    </ul>
                                    <p class="mb-4 tx-18">Start your business at just<span class="h2 text-white"> $13.8</span><span class="op-5 tx-14"> / month</span></p>
                                </div>
                                <a href="#plans" class="btn btn-lg btn-secondary me-2"><i class="fe fe-arrow-right me-2"></i> Get Started</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-2"></i> Buynow</a>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/43.png')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/23.png')}}" alt="img" class="patterns-1 op-2">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 sub-pattern-1 op-1 filter-invert">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Maximum Performance, <span class="tx-primary">Total Control</span></div>
                            <div class="heading-description">Checkout Our Features</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-item mb-5 performance-item">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-danger">
                                                <img src="{{asset('build/assets/images/icons/4.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">Powerful Configurations</h5>
                                                <p class="mb-0">Our servers are powered by SSD storage, DDR4 Memory and Xenon D processors, and can smoothly handle any type of workload — from a critical business application to a high-traffic website.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-item mb-5">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-info">
                                                <img src="{{asset('build/assets/images/icons/5.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">Quick Provisioning</h5>
                                                <p class="mb-0">We get you online quickly. Your server is provisioned within minutes. Sed ut perspiciatis unde omnis iste natus error sit voluptatemDuo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-item mb-5 mb-lg-0">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-pink">
                                                <img src="{{asset('build/assets/images/icons/7.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">Easily Configurable</h5>
                                                <p class="mb-0">Choose from multiple Linux flavours and hosting panels. You can even add WHMCS add-on to have a complete billing solution. Duo takimata aliquyam takimata rebum magna sed sanctus est sit.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li class="list-item mb-5">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-warning">
                                                <img src="{{asset('build/assets/images/icons/2.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">Additional Storage</h5>
                                                <p class="mb-0">Our HDD servers come with the flexibility of additional storage. You can easily scale the storage as your business grows. Duo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua labore.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-item mb-5">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-primary">
                                                <img src="{{asset('build/assets/images/icons/3.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">Server Administration Panel</h5>
                                                <p class="mb-0">Never lose access to your server. Our Server Administration Panel gives you total control at all times. With features like Rebuild, Web-based VNC, Restart, Shutdown and Resource Monitoring you can manage your server easily.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-item mb-5 mb-lg-0">
                                        <div class="d-flex align-items-start">
                                            <div class="me-4 d-inline-block p-3 br-50 bg-success">
                                                <img src="{{asset('build/assets/images/icons/1.png')}}" alt="img" height="40">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="">99.99% uptime</h5>
                                                <p class="mb-0">Our servers are located a top-tier data centres which are backed by redundant ISP links and Neustar DDoS protection to ensure your site is up and available all the time. Duo takimata aliquyam.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="card feature-card-1 mb-0">
                            <div class="card-body p-5">
                                <p class="h2 mb-4 text-white">Money Back Guarantee</p>
                                <p class="mb-0">Duo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua labore vero consetetur stet est duo amet ea diam. Gubergren ipsum dolores dolor gubergren takimata at sit stet. Lorem amet diam rebum ipsum eirmod amet no et. Sadipscing dolor.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1" id="plans">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 filter-invert op-1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Your Plan</span></div>
                            <div class="heading-title">Select Your <span class="tx-primary">Plan</span></div>
                            <div class="heading-description">Best Suited For Visitors From World Over</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-pill me-2 active" data-bs-toggle="pill" data-bs-target="#pills-monthly" aria-selected="true" role="tab">Montly</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly" aria-selected="false" tabindex="-1" role="tab">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel">
                                <div class="card p-3">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card bg-primary-gradient text-white">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="text-white my-auto">Try 1 Month FREE</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-white-2 text-white ms-auto"><i class="bi bi-layers"></i></span>
                                                        </div>
                                                        <p class="mb-4 ">Lorem invidunt ea clita consetetur.</p>
                                                        <h3 class="text-white mb-4">$0<span class="tx-14 op-7">&nbsp; / month</span></h3>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-secondary">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Standard</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-activity"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur.</p>
                                                        <h6 class="mb-4 tx-28">$96.9<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Enhanced</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-airplane"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur</p>
                                                        <h6 class="mb-4 tx-28">$125.5<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Premium</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-gem"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur.</p>
                                                        <h6 class="mb-4 tx-28">$150.5<span class="tx-14 tx-muted op-7">&nbsp; / month</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly" role="tabpanel">
                                <div class="card p-3">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card bg-primary-gradient text-white">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="text-white my-auto">Try 1 Month FREE</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-white-2 text-white ms-auto"><i class="bi bi-layers"></i></span>
                                                        </div>
                                                        <p class="mb-4 ">Lorem invidunt ea clita consetetur.</p>
                                                        <h3 class="mb-4 text-white">$0<span class="tx-14 op-7">&nbsp; / month</span></h3>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-secondary">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Standard</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-activity"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur.</p>
                                                        <h6 class="mb-4 tx-28">$596.9<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Enhanced</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-airplane"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur</p>
                                                        <h6 class="mb-4 tx-28">$1125.5<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card pricing-card border">
                                                    <div class="card-body">
                                                        <div class="d-flex mb-3">
                                                            <h4 class="my-auto">Premium</h4>
                                                            <span class="avatar avatar-md rounded-circle bg-primary-transparent tx-primary border-0 ms-auto"><i class="bi bi-gem"></i></span>
                                                        </div>
                                                        <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur.</p>
                                                        <h6 class="mb-4 tx-28">$1150.5<span class="tx-14 tx-muted op-7">&nbsp; / year</span></h6>
                                                        <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">Intel® i5-4590 Server</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2.7 GHz CPU</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">16 GB DDR1 RAM</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">2x 128 SSD (96,000 IOPS) HDD</span>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-3">
                                                                <div class="d-flex align-items-center-start">
                                                                    <span class="me-2 tx-primary"><i class="bi bi-check2-circle"></i></span>
                                                                    <span class="flex-grow-1">	1,000 Mb/s Unlimited/MONTH</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="d-grid">
                                                            <a href="javascript:void(0);" class="btn btn-primary-transparent">Buy Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-2 bg-image2 text-white">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-title text-white">Power Packed Product With These Tools</div>
                            <div class="heading-description text-white op-8">50+ Plugins Available</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/7.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/19.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/8.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/20.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/9.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/21.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/10.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/22.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/11.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/23.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/12.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/24.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/13.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/25.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/14.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/26.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/apps/15.png')}}" alt="img" width="150" class="img-fluid tool-img">
                                        <img src="{{asset('build/assets/images/png/apps/27.png')}}" alt="img" width="150" class="img-fluid tool-img-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="section bg-pattern-1 bg-image1">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-7 op-1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/26.png')}}" alt="img" class="patterns-1 op-2 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Hosting</span></div>
                            <div class="heading-title">Why Dedicated <span class="tx-primary">Server Hosting?</span></div>
                            <div class="heading-description">Et et dolore aliquyam sed eos ut eos accusam erat, ipsum consetetur</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="row">
                                    <h4 class="mb-3">Performance and scalability with dedicated hosting</h4>
                                    <p class="mb-5">Calling all experienced developers, system admins or agencies seeking powerful server capabilities: our Dedicated Server Hosting provides high-performance server options with isolated resources to run mission-critical applications where latency and uptime matters.</p>
                                    <div class="col-sm-6">
                                        <div class="card border-start border-3 border-secondary">
                                            <div class="card-body">
                                                <h5 class="mb-0"><i class="bi bi-record-circle tx-16 tx-secondary me-2"></i>Scalability</h5>
                                            </div>
                                        </div>
                                        <div class="card border-start border-3 border-primary">
                                            <div class="card-body">
                                                <h5 class="mb-0"><i class="bi bi-record-circle tx-16 tx-primary me-2"></i>Performance</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card border-start border-3 border-success">
                                            <div class="card-body">
                                                <h5 class="mb-0"><i class="bi bi-record-circle tx-16 tx-success me-2"></i>Isolation</h5>
                                            </div>
                                        </div>
                                        <div class="card border-start border-3 border-danger">
                                            <div class="card-body">
                                                <h5 class="mb-0"><i class="bi bi-record-circle tx-16 tx-danger me-2"></i>Control</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center">
                                <img src="{{asset('build/assets/images/png/64.png')}}" class="img-fluid mt-5 mt-lg-0" alt="img">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span></div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <div class="accordion accordion-style-1" id="acc-style-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        Which hosting control panels do you offer?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You can buy Plesk or cPanel license during the server purchase, or at a later time when the need arises.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Which billing panels do you offer?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We offer WHMCS as a billing panel for your dedicated server. You can purchase the license from us at a minimal cost and install the application on your dedicated server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        What are the functions of the Server Administration Panel?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Every server comes with its Server Administration Panel by default. This panel allows you to carry out crucial server administration tasks and monitor resource consumption like GUI-based CPU, Memory, Storage & Inodes utilisation, IPs and Storage (for HDD servers only) details and functions to Rebuild, Restart, Web-based VNC and reset access credentials.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        Can I configure my own RAID for drives?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        <P>The Dedicated Servers come pre-configured with RAID 1. At present, we don’t allow customisation of RAID level.</P>
                                        <P>Would love to hear about such new features requests to help us serve you better.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What is the port speed of the server?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">The server uplink port speed is up to 1 Gbps.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                    How long does it take for the server to be ready?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">After the payment, your server will be provisioned in about 30 minutes and you can access it via SSH. The disk resize operation, however, may still run in the background for a while after provisioning.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        What is your backup policy?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You are responsible for your backups and web content. It is recommended that you keep copies of your content safe and make your own backups. You can take a backup from your cPanel or use a remote backup solution.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        What is the level of support that you provide with the server?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">To ensure high uptime and accessibility at all times, we are available 24x7 for any hardware, network, booting, O.S. or login issues. Our System Administration Support will also assist you with basic cPanel & Firewall setup and their issues.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Is Additional Storage available for all server configurations?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        <P>At present, the additional storage feature is only available with our HDD servers in the US data centre.</P>
                                        <P>Would love to hear about such new features requests to help us serve you better.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        Can I use a Dedicated Server for email marketing?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Dedicated Servers can be used for Websites, Databases, Custom Applications, Ecommerce, DNS, File Storage and Emails. Emails, however, must be restricted to personal, organisational or professional purposes. The use of Dedicated Servers to send out mass emails/marketing is NOT recommended and can attract penalties.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-11" aria-expanded="false" aria-controls="acc-11">
                                        Can I use virtualisation software on the server?
                                    </button>
                                </h2>
                                <div id="acc-11" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Dedicated Servers are virtualised (1:1). Thus, nested virtualisation will not work due to network restrictions on the host system.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-12" aria-expanded="false" aria-controls="acc-12">
                                        Can I use virtualisation software on the server?
                                    </button>
                                </h2>
                                <div id="acc-12" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We don’t have any backup solution at the moment. Yet, we strongly recommend that you maintain a remote backup to avoid any hassles during any ill-fated incident.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection