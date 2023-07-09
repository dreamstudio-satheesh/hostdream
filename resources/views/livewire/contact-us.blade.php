@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="section banner-1 banner-section">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12 text-center">
                                    <div class="">
                                        <p class="mb-3 content-1 h5 text-white">Contact <span class="tx-info-dark">Us</span></p>
                                        <p class="mb-0 tx-28">Easily accessible customer service is crucial in today's 24-hour</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image3">
                    <div class="container">
                        <div class="heading-section mb-0">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Contact Us</span></div>
                            <div class="heading-title">Get In Touch <span class="tx-primary">With Us</span></div>
                            <div class="heading-description">Et et dolore aliquyam sed eos ut eos accusam erat, ipsum consetetur</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="reveal my-5">
                                    <div class="row text-center">
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-lg bg-secondary-gradient text-white tx-24 br-style"><i class="bi bi-geo-alt"></i></span>
                                                    </div>
                                                    <h5 class="mb-1">Main Branch</h5>
                                                    <p class="mb-0">San Francisco, CA </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-lg bg-pink-gradient br-style text-white tx-24"><i class="bi bi-telephone"></i></span>
                                                    </div>
                                                    <h5 class="mb-1">Phone</h5>
                                                    <p class="mb-0">+125 254 3562 </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-lg bg-purple-gradient br-style text-white tx-24"><i class="bi bi-envelope-plus"></i></span>
                                                    </div>
                                                    <h5 class="mb-1">Email</h5>
                                                    <p class="mb-0">georgeme@abc.com</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <span class="avatar avatar-lg bg-teal-gradient br-style text-white tx-24"><i class="bi bi-clock-history"></i></span>
                                                    </div>
                                                    <h5 class="mb-1">Working Hours</h5>
                                                    <p class="mb-0">Mon - Fri : 9am - 6pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-11">
                                <div class="card border">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="card feature-client-bg shadow-none">
                                                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-9 sub-pattern-2 filter-invert op-1 z-index--1">
                                                    <div class="card-body pb-0">
                                                        <h4 class="mb-4">Drop a Message To Us</h4>
                                                        <form class="form-horizontal">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="mb-3">
                                                                        <input class="form-control" type="text" required=""
                                                                            placeholder="Username*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="mb-3">
                                                                        <input class="form-control" type="email" required=""
                                                                            placeholder="Email*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <input class="form-control" type="number" required=""
                                                                            placeholder="Phone*">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <input class="form-control" type="text"
                                                                            placeholder="Text">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <textarea class="form-control"
                                                                            rows="5">Your Message</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="">
                                                                <a href="javascript:void(0)" class="btn btn-secondary btn-lg bg-secondary-gradient">Send Message</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="card bg-transparent shadow-none ">
                                                    <div class="card-body pb-0">
                                                        <h4 class="mb-4">Looking for a Support?</h4>
                                                        <p class="mb-4">Day or night, rain or shine, anytime 24 / 7 / 365 our team is here for you!</p>
                                                        <ul class="list-unstyled">
                                                            <li class="list-item mb-4">
                                                                <div class="d-flex">
                                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-geo-alt"></i></span>
                                                                    <div>
                                                                        <h6 class="mb-0">Main Branch</h6>
                                                                        <p class="mb-0">San Francisco, CA </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-4">
                                                                <div class="d-flex">
                                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-headset"></i></span>
                                                                    <div>
                                                                        <h6 class="mb-0">Phone</h6>
                                                                        <p class="mb-0">+125 254 3562 </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item mb-4">
                                                                <div class="d-flex">
                                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-envelope-plus"></i></span>
                                                                    <div>
                                                                        <h6 class="mb-0">Email</h6>
                                                                        <p class="mb-0">georgeme@abc.com </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-item">
                                                                <div class="d-flex">
                                                                    <span class="tx-primary tx-20 me-3 avatar bg-primary-01 rounded-circle my-auto"><i class="bi bi-clock-history"></i></span>
                                                                    <div>
                                                                        <h6 class="mb-0">Working Hours</h6>
                                                                        <p class="mb-0">Mon - Fri : 9am - 6pm </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <img src="{{asset('build/assets/images/patterns/7.png')}}" alt="img" class="patterns-8 sub-pattern-3 z-index-0 op-1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection