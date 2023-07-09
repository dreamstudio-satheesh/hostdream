@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-1 banner-section banner-arrow-down">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="">
                                    <p class="mb-4 content-1 h5 text-white">Get the domain you always <span class="tx-info-dark"> wanted!</span></p>
                                    <p class="content-2 mb-5">1000s of new domains are coming soon. Pre-register your preferred domains to get them before others do</p>
                                    <div class="row align-items-center mt-4">
                                        <div class="col-xxl-9 col-sm-7 mb-3 mb-sm-0">
                                            <form action="javascript:void(0);" class="form">
                                                <div class="form-group custom-form-group">
                                                    <input type="search" class="form-control form-control-lg" placeholder="Find your domain name...">
                                                    <button class="custom-form-btn btn btn-lg btn-primary border-0" type="button">Search</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xxl-3 col-sm-5 mb-3 mb-sm-0">
                                            <span class="me-3 exchange-icon"><i class="bi bi-arrow-left-right"></i></span>
                                            <a href="{{url('domain-transfer')}}" class="custom-form-btn btn btn-lg btn-secondary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="text-lg-end text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/6.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-4 sub-pattern-2 filter-invert">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Domains List</span></div>
                            <div class="heading-title">Start to get your <span class="tx-primary">New Domain</span> </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15 mb-xl-0">
                                    <div class="card-body">
                                        <div class="ribbone"><span class="bg-danger">25% Offer</span></div>
                                        <h3 class="tx-primary">.audio</h3>
                                        <p>Est amet sit vero sanctus.</p>
                                        <p class="tx-secondary mb-2">Starts at</p>
                                        <p class=""><span class="h4">$ 147 <span class="tx-14 tx-muted op-7"> / year</span></span></p>
                                        <a href="{{url('register-domain')}}" class="btn btn-primary bg-primary-gradient w-100 mt-2">Register</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15 mb-xl-0">
                                    <div class="card-body">
                                        <h3 class="tx-primary">.gov</h3>
                                        <p>Est amet sit vero sanctus.</p>
                                        <p class="tx-secondary mb-2">Starts at</p>
                                        <p class=""><span class="h4 ms-2">$ 234 <span class="tx-14 tx-muted op-7"> / year</span></span></p>
                                        <a href="{{url('register-domain')}}" class="btn btn-primary bg-primary-gradient w-100 mt-2">Register</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15 mb-xl-0">
                                    <div class="card-body">
                                        <h3 class="tx-primary">.co.uk</h3>
                                        <div class="ribbone tx-primary"><span class="bg-danger">New</span></div>
                                        <p>Est amet sit vero sanctus.</p>
                                        <p class="tx-secondary mb-2">Starts at</p>
                                        <p class=""><span class="h4 ms-2">$ 456 <span class="tx-14 tx-muted op-7"> / year</span></span></p>
                                        <a href="{{url('register-domain')}}" class="btn btn-primary bg-primary-gradient w-100 mt-2">Register</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-center feature-card-15 mb-xl-0">
                                    <div class="card-body">
                                        <h3 class="tx-primary">.edu</h3>
                                        <p>Est amet sit vero sanctus.</p>
                                        <p class="tx-secondary mb-2">Starts at</p>
                                        <p class=""><span class="h4 ms-2">$ 654 <span class="tx-14 tx-muted op-7"> / year</span></span></p>
                                        <a href="{{url('register-domain')}}" class="btn btn-primary bg-primary-gradient w-100 mt-2">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 sub-pattern-1 filter-invert z-index-0 op-1">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Know</span></div>
                            <div class="heading-title">Know <span class="tx-primary">More</span> </div>
                            <div class="heading-description">Takimata kasd kasd amet consetetur tempor clita at amet, tempor.</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card shadow-none border">
                                    <div class="card-body">
                                        <span class="avatar avatar-lg rounded-circle bg-primary text-white mb-4 tx-24"><i class="bi bi-cloud-haze2"></i></span>
                                        <h5>Why new domain extensions being introduced?</h5>
                                        <p class="mb-0">Today, it's hard for businesses and individuals to find domains that are both relevant and available. With over a hundred new domain extensions like .guru, .photography and .clothing being introduced.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card shadow-none border">
                                    <div class="card-body">
                                        <span class="avatar avatar-lg rounded-circle bg-secondary text-white mb-4 tx-24"><i class="bi bi-pencil-square"></i></span>
                                        <h5>How does the pre-registration process work?</h5>
                                        <p class="mb-0">Pre-registration lets you place an order for a domain before its made available to the general public. Once it was placed, the moment we attempt to purchase it on your behalf if that domain is available.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card shadow-none border">
                                    <div class="card-body">
                                        <span class="avatar avatar-lg rounded-circle bg-success text-white mb-4 tx-24"><i class="bi bi-gift"></i></span>
                                        <h5>When new domain extensions will available?</h5>
                                        <p class="mb-0">The new domain extensions will become available for purchase over the course of the next 12-14 months.You can use our pre-registration service to make sure that you get your domain as soon as it becomes available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-2 bg-image1">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-title text-white">Best Seller Domains </div>
                            <div class="heading-description text-white op-8">Est amet sit vero sanctus.</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.audio</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$987.98</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.gov</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$453.76</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.co.uk</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$235.72</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.edu</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$567.23</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.co.uk</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$167.89</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card feature-card-15">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="tx-primary">.edu</h3>
                                            <small>Starts at : <span class="badge badge-lg bg-danger">$678.56</span></small>
                                        </div>
                                        <p>Takimata kasd kasd amet consetetur tempor clita at amet, tempor Est amet sit vero sanctu.</p>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="{{url('register-domain')}}" class="btn btn-primary">Register</a>
                                            <a href="{{url('domain-transfer')}}" class="btn btn-outline-primary">Transfer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-gray-100">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Services</span></div>
                            <div class="heading-title">Services We <span class="tx-primary">Offer</span> </div>
                            <div class="heading-description">Checkout Our Services</div>
                        </div>
                        <div class="row ">
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-primary hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-hdd"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">Linux Hosting</h5>
                                            <p class="mb-0 op-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiism expedita.</p>
                                            <a href="{{url('linux-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-secondary hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-hdd-stack"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">Windows Hosting</h5>
                                            <p class="mb-0 op-8">Quas molestias excepturi sint occaecati cupiditate non provident placeat facere.</p>
                                            <a href="{{url('windows-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-success hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-boxes"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">WordPress Hosting</h5>
                                            <p class="mb-0 op-8">Similique sunt in culpa qui officia deserunt mollitia animi, id est omnis voluptas assumend.</p>
                                            <a href="{{url('wordpress-shared-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-danger hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-gear"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">VPS Hosting</h5>
                                            <p class="mb-0 op-8">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore.</p>
                                            <a href="{{url('virtualserver-linux-hosting')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-info hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-clouds"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">Cloud Hosting</h5>
                                            <p class="mb-0 op-8">Quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
                                            <a href="{{url('cloud')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card feature-card-4 feature-card-4-warning hover mt-5">
                                    <div class="card-body p-0">
                                        <div class="p-4 text-start mt-lg--13p">
                                            <div class="icon p-2 br-5 transform-rotate-45 d-inline-block mb-4">
                                                <span class="avatar feature-avatar all-ease-03 rounded-circle transform-rotate--45 tx-20">
                                                    <i class="bi bi-bounding-box"></i>
                                                </span>
                                            </div>
                                            <h5 class="mb-2">Dedicated Server Hosting</h5>
                                            <p class="mb-0 op-8">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
                                            <a href="{{url('dedicated-server')}}" class="tx-primary tx-12">View More <i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
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
                                        What is Shared Web hosting?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">In Shared Web Hosting, multiple clients are hosted on a single server i.e. the clients share the server's resources. This helps reduce the cost, since the cost of the server and its resources are spread over all the clients/packages hosted on the server. Shared Hosting is perfect for personal websites, small and mid-sized businesses that do not require all the resources of a server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Can I host multiple Web sites within one Shared Hosting plan?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes! Our Pro and Business shared hosting plans allow you to host more than one Website, by adding secondary domains through your hosting control panel i.e. cPanel.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Is there a Money Back Guarantee?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we offer a 100% Risk Free, 30 day Money Back Guarantee.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                    Is Email hosting included in my package?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, all our Hosting packages come with Unlimited Email Hosting.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        Can I upgrade to a higher plan?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can easily upgrade to one of our higher plans at any time.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        Is my data safe? Do you take backups?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, your data is a 100% secure and is backed-up every 5 days.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        Do you include protection from viruses?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, all our servers are protected by Clam AV.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Can I divide my Shared Hosting package and resell it?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">While a Shared Hosting package cannot be used for this purpose, you can easily resell custom packages with our Reseller Hosting. To view our Reseller Hosting plans, <a href="{{url('linux-reseller-hosting')}}" class="plain-link">click here</a>.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Do you offer SSH access?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, we provide SSH access to your domain. Because this is a shared environment, you will not get root access. However, you will be able to achieve most of your requirements by having the rights to access only the files relevant to your domain.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        Who do I get in touch with if I need help?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Our Support team is always at hand to assist you. You can take a look at all our contact details <a href="{{url('contact-us')}}" class="plain-link">here</a>.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection