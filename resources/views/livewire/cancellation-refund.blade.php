@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="section banner-1 banner-section banner-arrow-down">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="">
                                    <p class="mb-3 content-1 h5 text-white">Cancellation & Refund <span class="tx-info-dark">Policy</span></p>
                                    <p class="mb-0 tx-26">Everything you need to know about the Cancellation & Refund policy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div>
                            <h2>Cancellation & Refund Policy</h2>
                            <p>Our Cancellation and refund policy shall be only considered if you have opted for a refund before 15 days from the date you have purchased. Further, you shall be only eligible for the cancellation and refund if your cancellation request falls under the below-mentioned guidelines else our company has the complete rights reserved to reject your cancellation and refund request.</p>

                            <h3>Refund Policy</h3>
                            <ol>
                                <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                            </ol>

                            <h3>Cancellation Policy</h3>
                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                            <ol>
                                <li>
                                    Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.
                                    <ol class="mt-2" style="list-style:upper-alpha">
                                        <li class="mb-2"><a href="#">Privacy Notice</a></li>
                                        <li class="mb-2"><a href="#">Acceptable Use Policy</a></li>
                                        <li class="mb-2"><a href="#">Copyright Infringement Policy</a></li>
                                    </ol>
                                </li>
                                <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor.</li>
                            </ol>

                            <h3>Non-Refundable Products and Services</h3>
                            <p class="mb-0">Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1 bg-gray-100 overflow-hidden">
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
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button" id="btn-addon">Subscribe</button>
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