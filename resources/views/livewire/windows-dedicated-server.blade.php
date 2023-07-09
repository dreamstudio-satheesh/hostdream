@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-2 banner-section">
                        <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                        <div class="container">
                            <div class="row align-items-stretch">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white">Windows Dedicated <span class="tx-info-dark">Servers</span></p>
                                        <p class="mb-4 content-2 tx-18">
                                            Get The Ultimate In Power And Control With Our Windows Dedicated Server Hosting
                                        </p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Fully managed and unlimited bandwidth</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Based on SSD space and latest intel cpu</li>
                                            <li class="list-item"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>24/7 free online premium support and phone support</li>
                                        </ul>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary me-2"><i class="fe fe-eye me-2"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-2"></i> Buynow</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg banner-img1 mt-5 mt-lg-0">
                                        <div class="price-main text-start">
                                            <p class="mb-1 op-7">Starts at</p>
                                            <h1 class="mb-2 tx-50 text-white">$9.25 <span class="tx-14 op-7">/ month</span></h1>
                                            <p class="tx-14 mb-0">30 Days Money Return Available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <img src="{{asset('build/assets/images/patterns/19.png')}}" alt="img" class="patterns-7 op-1">
                    <img src="{{asset('build/assets/images/patterns/15.png')}}" alt="img" class="patterns-8 op-2">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Easy Steps</span></div>
                            <div class="heading-title">Buy a Dedicated Server in <span class="tx-primary">4 easy Steps !</span></div>
                            <div class="heading-description">Windows Dedicated Server Steps</div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card windows-server-animate mb-5 overflow-hidden">
                                    <div class="window-server-steps"><span>01</span></div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <span class="avatar avatar-lg rounded-circle bg-primary text-white tx-24">
                                                <i class="bi bi-hdd-network"></i>
                                            </span>
                                        </div>
                                        <h5 class="mb-3">Select Server</h5>
                                        <p class="mb-0">Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-5 windows-server-animate overflow-hidden">
                                    <div class="window-server-steps tx-secondary"><span>02</span></div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <span class="avatar avatar-lg rounded-circle bg-secondary text-white tx-24">
                                                <i class="bi bi-diagram-3"></i>
                                            </span>
                                        </div>
                                        <h5 class="mb-3">Configure Server</h5>
                                        <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-5 windows-server-animate overflow-hidden">
                                    <div class="window-server-steps tx-success"><span>03</span></div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <span class="avatar avatar-lg rounded-circle bg-success text-white tx-24">
                                                <i class="bi bi-layout-text-window"></i>
                                            </span>
                                        </div>
                                        <h5 class="mb-3">Pick a Domain Name</h5>
                                        <p class="mb-0">Sed eos kasd ea dolore justo et, diam amet clita stet dolor, sit consetetur clita.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mb-5 windows-server-animate overflow-hidden">
                                    <div class="window-server-steps tx-danger"><span>04</span></div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <span class="avatar avatar-lg rounded-circle bg-danger text-white tx-24">
                                                <i class="bi bi-bag-check"></i>
                                            </span>
                                        </div>
                                        <h5 class="mb-3">Checkout</h5>
                                        <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 bg-pattern-1 bg-image3" id="plans">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Your Plan</span></div>
                            <div class="heading-title">Select Your <span class="tx-primary">Plan</span></div>
                            <div class="heading-description">Best Suited For Visitors From World Over</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill me-2 active" data-bs-toggle="pill" data-bs-target="#pills-monthly">Montly</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Standard</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$79.9<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1240v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">3.12 GHz Quad Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">6 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M19 6H5a3 3 0 0 0-3 3v2.72L8.837 14h6.326L22 11.72V9a3 3 0 0 0-3-3z"/>
                                                    <path fill="#5885e4" d="M10 6V5h4v1h2V5a2.002 2.002 0 0 0-2-2h-4a2.002 2.002 0 0 0-2 2v1h2zm-1.163 8L2 11.72V18a3.003 3.003 0 0 0 3 3h14a3.003 3.003 0 0 0 3-3v-6.28L15.163 14H8.837z"/>
                                                </svg>
                                                <h4 class="mb-3">Business</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28 ">$96.9<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1275v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2.50 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">16 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Pro</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$125.5<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1285v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2.80 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">24 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">4 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-primary border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Elite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$150.5<span class="tx-14 tx-muted op-7"> / month</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1291v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">3.80 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">30 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">4 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#bccef4" d="M12,14.19531c-0.17551-0.00004-0.34793-0.04618-0.5-0.13379l-9-5.19726C2.02161,8.58794,1.85779,7.97612,2.13411,7.49773C2.22187,7.34579,2.34806,7.2196,2.5,7.13184l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653C21.77813,8.65031,21.65194,8.7765,21.5,8.86426l-9,5.19726C12.34793,14.14913,12.17551,14.19527,12,14.19531z"/>
                                                    <path fill="#9ab5ee" d="M21.5,11.13184l-1.96411-1.13337L12.5,14.06152c-0.30947,0.17839-0.69053,0.17839-1,0L4.46411,9.99847L2.5,11.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,12.65031,2.34806,12.7765,2.5,12.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,11.34579,21.65194,11.2196,21.5,11.13184z"/>
                                                    <path fill="#5885e4" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152c-0.30947,0.17838-0.69053,0.17838-1,0l-7.03589-4.06305L2.5,15.13184c-0.47839,0.27632-0.64221,0.88814-0.36589,1.36653C2.22187,16.65031,2.34806,16.7765,2.5,16.86426l9,5.19726c0.30947,0.17838,0.69053,0.17838,1,0l9-5.19726c0.4784-0.27632,0.64221-0.88814,0.36589-1.36653C21.77813,15.34579,21.65194,15.2196,21.5,15.13184z"/>
                                                </svg>
                                                <h4 class="mb-3">Standard</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$179.9<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1240v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">3.12 GHz Quad Core</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">6 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M19 6H5a3 3 0 0 0-3 3v2.72L8.837 14h6.326L22 11.72V9a3 3 0 0 0-3-3z"/>
                                                    <path fill="#5885e4" d="M10 6V5h4v1h2V5a2.002 2.002 0 0 0-2-2h-4a2.002 2.002 0 0 0-2 2v1h2zm-1.163 8L2 11.72V18a3.003 3.003 0 0 0 3 3h14a3.003 3.003 0 0 0 3-3v-6.28L15.163 14H8.837z"/>
                                                </svg>
                                                <h4 class="mb-3">Business</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$196.9<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1275v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2.50 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">16 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">1500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-center-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-light border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                    <path fill="#9ab5ee" d="M21.951 9.67a1 1 0 0 0-.807-.68l-5.699-.828-2.548-5.164A.978.978 0 0 0 12 2.486v16.28l5.097 2.679a1 1 0 0 0 1.451-1.054l-.973-5.676 4.123-4.02a1 1 0 0 0 .253-1.025z"/>
                                                    <path fill="#5885e4" d="M11.103 2.998 8.555 8.162l-5.699.828a1 1 0 0 0-.554 1.706l4.123 4.019-.973 5.676a1 1 0 0 0 1.45 1.054L12 18.765V2.503c-.356.001-.703.167-.897.495z"/>
                                                </svg>
                                                <h4 class="mb-3">Pro</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$1125.5<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1285v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2.80 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">24 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">4 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
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
                                        <div class="card pricing-card border-top border-primary border-5">
                                            <div class="card-body">
                                                <svg class="pricing-icon" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                                    <path fill="#5885e4" d="m17.737 14.622-2.426 2.23a11.603 11.603 0 0 1-4.299 2.37l.644 3.004a1 1 0 0 0 1.469.661l3.905-2.202a3.035 3.035 0 0 0 1.375-3.304zM7.266 8.776l2.088-2.48-2.604-.628a2.777 2.777 0 0 0-3.387 1.357l-2.2 3.9a1 1 0 0 0 .661 1.469l3.073.659a12.887 12.887 0 0 1 2.369-4.277zm9.468.04a1.5 1.5 0 1 0-1.5-1.5 1.5 1.5 0 0 0 1.5 1.5z"/>
                                                    <path fill="#9ab5ee" d="M22.601 2.062a1 1 0 0 0-.713-.713A11.249 11.249 0 0 0 10.47 4.972L7.266 8.776a12.936 12.936 0 0 0-2.924 6.71 1 1 0 0 0 .284.837l3.1 3.1a1 1 0 0 0 .708.293c.028 0 .057-.001.086-.004a11.847 11.847 0 0 0 6.79-2.86l3.664-3.368A11.204 11.204 0 0 0 22.6 2.062Zm-5.867 6.754a1.5 1.5 0 1 1 1.5-1.5 1.5 1.5 0 0 1-1.5 1.5Z"/>
                                                </svg>
                                                <h4 class="mb-3">Elite</h4>
                                                <p class="mb-4 14 tx-gray-600">Lorem invidunt ea clita consetetur ea rebum sit accusam ipsum,.</p>
                                                <h6 class="mb-4 tx-28">$1150.5<span class="tx-14 tx-muted op-7"> / year</span></h6>
                                                <ul class="list-unstyled tx-14 fw-600 mb-4">
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">Intel E2-1291v3</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">3.80 GHz Quad Core w/HT</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">30 GB DDR3 RAM</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2500 GB HDD in RAID 1</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">4 TB Bandwidth</span>
                                                        </div>
                                                    </li>
                                                    <li class="list-item">
                                                        <div class="d-flex align-items-start">
                                                            <span class="me-2 tx-primary"><i class="bi bi-check-circle"></i></span>
                                                            <span class="flex-grow-1">2 Free IPs <a href="javascript:void(0);" data-bs-toggle="tooltip" title="2 Free IPs" class="ms-1 op-4 all-ease-03 tx-primary"><i class="bi bi-info-circle-fill tx-14"></i></a></span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="d-grid">
                                                    <a href="javascript:void(0);" class="btn btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-10 op-1 filter-invert z-index-0">
                    <img src="{{asset('build/assets/images/patterns/24.png')}}" alt="img" class="patterns-8 sub-pattern-1 op-2 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Windows Dedicated <span class="tx-primary">Servers Features</span></div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle d-inline-block me-3">
                                                <span class="avatar avatar-lg bg-primary-transparent rounded-circle tx-24"><i class="bi bi-lightning tx-primary"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="">SuperMicro Blade Servers</h4>
                                                <p class="mb-0">Duo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua labore vero consetetur stet est duo amet ea diam. Gubergren ipsum dolores dolor.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle d-inline-block me-3">
                                                <span class="avatar bg-secondary-transparent avatar-lg rounded-circle tx-24"><i class="bi bi-window-desktop tx-secondary"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="">Multiple OS Options</h4>
                                                <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil.At vero eos et accusamus et.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle d-inline-block me-3">
                                                <span class="avatar bg-success-transparent avatar-lg rounded-circle tx-24"><i class="bi bi-shield-check tx-success"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="">99.99% Uptime</h4>
                                                <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.Neque porro quisquam est.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card shadow-none">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start">
                                            <div class="rounded-circle d-inline-block me-3">
                                                <span class="avatar bg-danger-transparent avatar-lg bg-gray-100 rounded-circle tx-24"><i class="bi bi-robot tx-danger"></i></span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h4 class="">Configure your server as per your needs</h4>
                                                <p class="mb-0">Sed eos kasd ea dolore justo et, diam amet clita stet dolor, sit consetetur clita sanctus dolor, ea amet diam. Clita consetetur sanctus eirmod amet duo diam.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="">
                    <div class="container">
                        <div class="card feature-card-1">
                            <div class="card-body p-5">
                                <p class="h2 mb-4 text-white">Money Back Guarantee</p>
                                <p class="mb-0">Duo takimata aliquyam takimata rebum magna sed sanctus est sit. Voluptua labore vero consetetur stet est duo amet ea diam. Gubergren ipsum dolores dolor gubergren takimata at sit stet. Lorem amet diam rebum ipsum eirmod amet no et. Sadipscing dolor.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Hosting</span></div>
                            <div class="heading-title">Windows Dedicated <span class="tx-primary">Server Hosting</span></div>
                            <div class="heading-description">Et et dolore aliquyam sed eos ut eos accusam erat, ipsum consetetur</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p class="h4">Our Servers </p>
                                        <p>We take great pride in the hardware we use for our dedicated servers. We only use the latest and thoroughly tested Blade servers manufactured by SuperMicro.To take the greatest care of your data, all our servers come with two hard disks by default with RAID1 enabled.</p>
                                        <p>Making sure, even when one hard disk completely breaks down, your data is still intact and your server will remain online.</p>
                                    </div>
                                    <div class="col-xl-12">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg mt-3">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                                <img src="{{asset('build/assets/images/png/46.png')}}" class="img-fluid" alt="img">
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
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span> </div>
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
                                        Which billing panels do you offer??
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We offer WHMCS as a billing panel for your dedicated server. You can purchase the license from us at a minimal cost and install the application on your dedicated server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        What are the functions of the Server Administration Panel??
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