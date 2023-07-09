@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-1 banner-section">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <div class="">
                                        <img src="{{asset('build/assets/images/png/40.png')}}" class="mb-3" alt="img" width="200">
                                        <p class="mb-3 content-1 h5 text-white">Secure your website and <span class="tx-info-dark">Customer Data</span></p>
                                        <p class="mb-2">All SSL Certificates provide the baseline encryption needed to keep
                                            your data & your customers safe. Beyond encryption, choose the SSL solution that
                                            aligns best with your company goals & needs.
                                        </p>
                                        <p class="mb-4 tx-20">Start your business at just<span class="h2 text-white"> $13.8</span><span class="op-5 tx-14"> / month</span></p>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary"><i class="fe fe-eye me-2"></i> View Plans</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" target="_blank" class="btn btn-lg btn-white"><i class="fe fe-shopping-cart me-2"></i> Buy Now</a>
                                </div>
                                <div class="col-lg-4">
                                    <div class="banner-bg mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/61.png')}}" class="reseller-img" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="section overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/16.png')}}" alt="img" class="patterns-7 op-1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/23.png')}}" alt="img" class="patterns-1 op-1 z-index-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Why SSL <span class="tx-primary">Certificates?</span></div>
                            <div class="heading-description">Optionally, you can choose a Control Panel for easy Server Management. Here the available add-ons</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="card border-top border-primary">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                                            <span
                                                class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                                <i class="bi bi-shield-check"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Rock-solid security</h5>
                                            <p class="mb-0">Comodo's SSL certificates provide upto 128 or 256-bit encryption
                                                for maximum security of your website visitors' data
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top border-primary mb-0">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                                            <span
                                                class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                                <i class="bi bi-award"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Boost customer confidence</h5>
                                            <p class="mb-0">Many customers actively look for the SSL lock icon before
                                                handing over sensitive data.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 text-center my-5">
                                <img src="{{asset('build/assets/images/png/58.png')}}" alt="img" width="300">
                            </div>
                            <div class="col-lg-4">
                                <div class="card border-top border-primary">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                                            <span
                                                class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                                <i class="bi bi-bar-chart"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Better SEO rankings</h5>
                                            <p class="mb-0">Which means SSL certificates are critical if you're serious
                                                about your online business.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-top border-primary mb-0">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="p-2 bg-primary-transparent rounded-circle feature-avatar-icon-1 me-4">
                                            <span
                                                class="avatar feature-avatar all-ease-03 avatar-lg rounded-circle bg-primary-gradient tx-24">
                                                <i class="bi bi-lock"></i>
                                            </span>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">Comodo Secure Seal</h5>
                                            <p class="mb-0">Your certificate comes with Comodo Secure Seal that serves as a
                                                constant reminder to customer site is protected.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-gray-100 bg-pattern-1" id="plans">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <div class="heading-section">
                                    <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Products</span></div>
                                    <div class="heading-title">Which product is better compare to <span class="tx-primary">Other Products?</span></div>
                                    <div class="heading-description">Features Overview</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-0">
                                        <div class="table-responsive border br-7">
                                            <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                                <thead>
                                                    <tr>
                                                        <th class="w-20p bg-primary-02 border-end border-white-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar rounded-circle bg-primary-transparent tx-primary tx-22"><i class="bi bi-gift"></i></span>
                                                                </div>
                                                                <div class="flex-grow-1 text-start">
                                                                    <p class="h5 mb-0 tx-primary">Contact Us</p>
                                                                    <a href="{{url('contact-us')}}" class="tx-primary op-8">Proceed <i class="bi bi-arrow-right ms-1"></i></a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="bg-primary-04 border-end border-white-2">
                                                            <p class="h5 mb-1 text-white">Encrypt Free SSL</p>
                                                            <p class="h5 tx-28 text-white mb-0">$36<span class="tx-13 op-8 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary-06 border-end border-white-2">
                                                            <p class="h5 mb-1 text-white">Positive SSL</p>
                                                            <p class="h5 tx-28 text-white mb-0">$58<span class="tx-13 op-6 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary-08 border-end border-white-2">
                                                            <p class="h5 mb-1 text-white">Comodo SSL</p>
                                                            <p class="h5 tx-28 text-white mb-0">$65<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary">
                                                            <p class="h5 mb-1 text-white">Positive SSL Wildcard</p>
                                                            <p class="h5 tx-28 text-white mb-0">$74<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">OwnerShip/Validation</td>
                                                        <td>Only Domain Ownership</td>
                                                        <td>Supply Domain Validated</td>
                                                        <td>Supply Domain Validated</td>
                                                        <td>Supply Domain Validated</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Certificate tenure</td>
                                                        <td>80 days</td>
                                                        <td>Upto 2 years</td>
                                                        <td>Upto 2 years</td>
                                                        <td>Upto 2 years</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Miss-issuance/misuse protection</td>
                                                        <td>None</td>
                                                        <td>Not Possible</td>
                                                        <td>Not Possible</td>
                                                        <td>Not Possible</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">No of Domains</td>
                                                        <td>Only domains pointing to the hosting server</td>
                                                        <td>Validated domain name</td>
                                                        <td>Validated domain name</td>
                                                        <td>Validated domain name</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Warranty</td>
                                                        <td>None</td>
                                                        <td>$9000</td>
                                                        <td>$19000</td>
                                                        <td>$29000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Trust Logo Site Seal</td>
                                                        <td>None</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                        <td>Yes</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Address Bar Display</td>
                                                        <td>Secure</td>
                                                        <td>Secure</td>
                                                        <td>Secure</td>
                                                        <td>Secure</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">
                                                            Support
                                                        </td>
                                                        <td>Only community support</td>
                                                        <td>Support from Distributor as well as provider</td>
                                                        <td>Support from Distributor as well as provider</td>
                                                        <td>Support from Distributor as well as provider</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="p-4">
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td class="p-4">
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section blob-bg-sec banner-pd-3">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img"
                        class="patterns-5 transform-rotate-180 height-inherit bottom-0 op-1">
                    <img src="{{asset('build/assets/images/patterns/18.png')}}" alt="img" class="patterns-7 height-inherit bottom-0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="heading-section text-start mb-4">
                                    <div class="heading-title text-white">Best Technical Support 24/7</div>
                                    <div class="heading-description text-white op-8">Support and Guidance</div>
                                </div>
                                <p class="mb-3 op-8">Est amet sit vero sanctus labore no sed ipsum ipsum nonumy. Sit ipsum
                                    sanctus ea magna est. Aliquyam sed amet. Kasd diam rebum sit ipsum ipsum erat et kasd,
                                    sed et et erat elitr consetetur et aliquyam. Et lorem ipsum Sit ipsum sanctus ea.
                                </p>
                                <p class="tx-20 fw-500">Call Us :
                                    <a href="tel:123-789-7854" class="text-white me-1">123-789-7854</a> (Or)
                                    <a href="{{url('contact-us')}}" class="text-white ms-1">Chat Now</a>
                                </p>
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

                <section class="section bg-gray-100 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-2 filter-invert op-1 z-index-0">
                    <img src="{{asset('build/assets/images/patterns/21.png')}}" alt="img" class="patterns-5 op-1 z-index-0 bottom-0">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">With & Without</span></div>
                            <div class="heading-title">How Visitors See Your Site <span class="tx-primary">With & Without SSL</span></div>
                            <div class="heading-description">Connection between browser and server.</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="card border-danger border">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/41.png')}}" class="img-fluid" alt="img" width="350">
                                        <h5 class="mb-2 tx-danger">Without SSL</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-danger"><i class="bi bi-check-circle"></i></span>
                                                    <span>Connection is not encrypted</span>
                                                </div>
                                            </li>
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-danger"><i class="bi bi-check-circle"></i></span>
                                                    <span>Browsers like Chrome mark all HTTP pages as not secure%</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card border-success border">
                                    <div class="card-body">
                                        <img src="{{asset('build/assets/images/png/42.png')}}" class="img-fluid" alt="img" width="350">
                                        <h5 class="mb-2 tx-success">With SSL</h5>
                                        <ul class="list-unstyled mb-0">
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-success"><i class="bi bi-check-circle"></i></span>
                                                    <span>Secure connection between browser and server</span>
                                                </div>
                                            </li>
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-success"><i class="bi bi-check-circle"></i></span>
                                                    <span>Trusted environment for website visitors</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">SSL Certificate</span></div>
                            <div class="heading-title">Why SSL <span class="tx-primary">Certificate?</span></div>
                            <div class="heading-description">Establishes a secure connection between a browser and a server</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <p class="h4 mb-3">Why SSL Certificate Needed ?</p>
                                        <p>SSL Certificates are fundamental to internet security. They are used to establish
                                            an encrypted connection and allow data to be transmitted securely between a
                                            browser or user's computer and a server or website.
                                        </p>
                                        <ul class="list-unstyled mb-4">
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-secondary"><i class="bi bi-check-circle"></i></span>
                                                    <span class="fw-500">Establishes a secure connection between a browser and a server</span>
                                                </div>
                                            </li>
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-secondary"><i class="bi bi-check-circle"></i></span>
                                                    <span class="fw-500">Encrypts communication to protect your sensitive information</span>
                                                </div>
                                            </li>
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-secondary"><i class="bi bi-check-circle"></i></span>
                                                    <span class="fw-500">Places a padlock next to your web address in the browser</span>
                                                </div>
                                            </li>
                                            <li class="list-item mb-2">
                                                <div class="d-flex align-items-start">
                                                    <span class="me-2 tx-secondary"><i class="bi bi-check-circle"></i></span>
                                                    <span class="fw-500">Authenticates an organization's identity</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-12">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-lg">Get Started</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center">
                                <img src="{{asset('build/assets/images/png/53.png')}}" class="img-fluid mt-5 mt-lg-0" alt="img">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner-pd-1 bg-pattern-2 bg-image1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0">
                                <div class="d-flex align-items-xl-center justify-content-xl-center">
                                    <span class="bi bi-credit-card text-white bg-white-2 avatar avatar-lg br-style tx-20"></span>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Make</p>
                                        <a href="{{url('payment-options')}}" class="text-white h5 fw-semibold">Payment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-4 mb-xl-0">
                                <div class="d-flex align-items-xl-center justify-content-xl-center">
                                    <span class="bi bi-headset text-white bg-white-2 avatar avatar-lg br-style tx-20"></span>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Call us</p>
                                        <a href="tel:00012345678" class="text-white h5 fw-semibold">000 1234 5678 (24/7)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6 mb-4 mb-sm-0">
                                <div class="d-flex align-items-xl-center justify-content-xl-center">
                                    <span class="bi bi-chat-text text-white bg-white-2 avatar avatar-lg br-style tx-20"></span>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Chat with us</p>
                                        <a href="#" class="text-white h5 fw-semibold">Live Chat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="d-flex align-items-xl-center justify-content-xl-center">
                                    <span class="bi bi-envelope text-white bg-white-2 avatar avatar-lg br-style tx-20"></span>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Email to our</p>
                                        <a href="mailto:support@sample.com" class="text-white h5 fw-semibold">Support Team</a>
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
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span></div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <div class="accordion accordion-style-1" id="acc-style-1">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        What is an SSL Certificate?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">An SSL (Secure Sockets Layer) Certificate is a digital
                                        certificate that verifies the identity of your website and encrypts information sent
                                        to and from your website.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        What is the benefit of SSL?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">An SSL encrypts your customers' sensitive information such
                                        as their identity, personal address, debit/credit card details, password, etc. by
                                        encrypting the data from their computer to your web server.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Does SSL work in all web browsers?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        Yes, Comodo SSL Certificates are compatible with all major browsers.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        How do I apply for an SSL?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        After purchase of SSL Certificate, you need to complete the verification process
                                        with the certificate authority. To apply for an SSL, kindly follow the steps
                                        mentioned here.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        How do I generate a Certificate Signing Request (CSR)?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        You need to generate a CSR from your control panel by providing your website and
                                        organization details.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        How do I install an SSL?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">After your certificate has been issued, it will be available
                                        in your control panel. In order to install the certificate</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        When do I need to reissue an SSL?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You would need to reissue the certificate if the
                                        organization details need to be updated.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Can I upgrade my SSL?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">At the moment, you cannot upgrade/downgrade the certificate.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        Do I need technical knowledge to set up an SSL?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No, you do not need to have any technical knowledge.
                                        However, you do need to follow a few steps before the successful installation of the
                                        certificate. For more informatio</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
             
@endsection

@section('scripts')

@endsection