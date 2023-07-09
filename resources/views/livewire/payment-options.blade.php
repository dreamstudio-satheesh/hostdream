@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="section banner-1 banner-section">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="">
                                    <p class="mb-3 content-1 h5 text-white">Payment <span class="tx-info-dark">Methods</span></p>
                                    <p class="mb-0 tx-26">Accepting more payment methods helps your business expand its global reach and improve checkout.</p>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="banner-bg mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/25.png')}}" class="reseller-img img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image3 bg-gray-100">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Options</span></div>
                            <div class="heading-title">Payment <span class="tx-primary">Options</span></div>
                            <div class="heading-description">Check out our payment methods</div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <h4>Payment Methods</h4>
                                <p class="mb-4">We accepts the payments from you in the following different ways.</p>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="me-3">
                                        <span class="avatar text-bg-primary rounded-circle tx-20"><i class="bi bi-credit-card"></i></span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 tx-18">Credit and Debit Cards</h5>
                                        <p class="mb-0">Justo aliquyam duo vero clita aliquyam vero eirmod stet
                                            amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing.
                                            <a href="#credit-cards" class="tx-primary tx-14">View Details</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="me-3">
                                        <span class="avatar text-bg-secondary rounded-circle tx-20"><i class="bi bi-bank"></i></span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 tx-18">Bank Transfer</h5>
                                        <p class="mb-0">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                                            aut odit aut fugit, sed quia consequuntur magni.
                                            <a href="#bank-transfer" class="tx-primary tx-14">View Details</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-4">
                                    <div class="me-3">
                                        <span class="avatar text-bg-success rounded-circle tx-20"><i class="bi bi-wallet2"></i></span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 tx-18">E-Wallets</h5>
                                        <p class="mb-0">Dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                                            qui dolorem ipsum quia dolor sit amet, consectetur.
                                            <a href="#wallets" class="tx-primary tx-14">View Details</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="me-3">
                                        <span class="avatar bg-warning text-white rounded-circle tx-20"><i class="bi bi-cash"></i></span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 tx-18">Other Offline Payment Options</h5>
                                        <p class="mb-0">Adipisci velit, sed quia non numquam eius modi tempora
                                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                            <a href="#offline" class="tx-primary tx-14">View Details</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                                <img src="{{asset('build/assets/images/png/24.png')}}" class="reseller-img img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <div class="container">
                        <div class="row" id="credit-cards">
                            <div class="heading-section">
                                <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Cards</span></div>
                                <div class="heading-title">Credit and Debit <span class="tx-primary">Cards</span></div>
                                <div class="heading-description">Check out our card payments options</div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/4.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Mastercard</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/10.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Visa Debit Card</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/1.png')}}" alt="img" class="img-fluid payment-options dark-invert">
                                        </a>
                                        <p class="mb-0 fw-500">Discover Network</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/3.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Maestro</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 bg-gray-100">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-6 op-1 top-0">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-5 op-1 transform-rotate-180 bottom-0">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 op-1">
                    <div class="container">
                        <div class="row" id="bank-transfer">
                            <div class="heading-section">
                                <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Tranfers</span></div>
                                <div class="heading-title">Bank  <span class="tx-primary">Tranfers</span></div>
                                <div class="heading-description">Check out our bank transfers options</div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/9.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Unified Payment Interface </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/12.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">American Express</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/5.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Net Banking</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/11.png')}}" alt="img" class="img-fluid payment-options dark-invert">
                                        </a>
                                        <p class="mb-0 fw-500">Direct Debit</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <div class="container">
                        <div class="row" id="wallets">
                            <div class="heading-section">
                                <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Wallets</span></div>
                                <div class="heading-title">E-Wallets  <span class="tx-primary">Tranfers</span></div>
                                <div class="heading-description">Check out our E-Wallets transfers options</div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/7.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Paytm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/6.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Paypal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/8.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Phonepe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('build/assets/images/payment/2.png')}}" alt="img" class="img-fluid payment-options">
                                        </a>
                                        <p class="mb-0 fw-500">Google Pay</p>
                                    </div>
                                </div>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                        How do you ensure payments are secure?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Payment security is our top priority. Encrypted payment details are stored in an external vault separate from our system.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        What is your refund policy?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We offer a 30-day money back guarantee. For more information, please view our <a href="#">Refund Policy</a></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        I still have query regarding Billing or Payment issue?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">You can submit ticket in Billing department with your query: <a href="#">Submit Ticket</a></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        What happen if i can't make payment for my hosting account on the same day?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        <P>Don't worry you have the grace period of 7 days from due date. Your account will be automatically suspended by billing software after 7 days.</P>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        I mistakenly made payment two times and payment is also deducted through my account. What can i do now?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body"> In this case you have to submit a support ticket to our support team with all the details of payment. They will respond you soon and refund your money or add it in your client area.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 bg-gray-100">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-6 op-1 top-0">
                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-5 op-1 transform-rotate-180">
                    <img src="{{asset('build/assets/images/patterns/11.png')}}" alt="img" class="patterns-3 op-1">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-5">
                                <p class="h2">Join 1000+ Subscribers</p>
                                <p class="mb-0">Stay in the loop with everything you need to know</p>
                            </div>
                            <div class="col-lg-6 col-md-7">
                                <form action="javascript:void(0);" class="mb-2 mt-3 mt-md-0">
                                    <div class="form-group custom-form-group">
                                        <input type="text" class="form-control form-control-lg rounded-pill" placeholder="Your Email Address">
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button">Subscribe</button>
                                    </div>
                                </form>
                                <p class="text-center">We can take care your data with our <a href="{{url('privacy-policy')}}" class="tx-primary">privacy policy</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection