@extends('layouts.app')

@section('styles')

        <!-- SWIPER CSS-->
        <link rel="stylesheet" href="{{asset('build/assets/libs/swiper/swiper-bundle.min.css')}}">

@endsection

@section('content')

            <div class="main-content app-content">
                <section class="banner-1 banner-section">
                    <img src="{{asset('build/assets/images/patterns/1.png')}}" alt="img" class="patterns-2">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-6">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p class="mb-3 content-1 h5 text-white">Design Your Website With <span class="tx-info-dark">Weebly</span></p>
                                <p class="content-2 mb-4">Elitr lorem clita et sadipscing eirmod takimata justo erat et, ut labore et ut sit kasd clita tempor diam sanctus,.</p>
                                <a href="#domain" class="btn btn-lg btn-secondary me-2">Get Started<i class="bi bi-arrow-right ms-1"></i></a>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-lg-end text-center mt-5 mt-lg-0">
                                    <img src="{{asset('build/assets/images/png/7.png')}}" class="img-fluid" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image2" id="domain">
                    <img src="{{asset('build/assets/images/patterns/5.png')}}" alt="img" class="patterns-8 left-auto z-index-0 op-1 right-10p">
                    <img src="{{asset('build/assets/images/patterns/13.png')}}" alt="img" class="patterns-4 sub-pattern-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="heading-section">
                                    <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Importance</span></div>
                                    <div class="heading-title">Focus More On What's Important - <span class="tx-primary">Your Business!</span> </div>
                                    <div class="heading-description">Accusam takimata diam ipsum et eirmod nonumy diam rebum tempor et</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="feature-card-5 feature-card-5-primary position-relative">
                                    <div class="card border shadow-none">
                                        <div class="card-body">
                                            <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                                <img src="{{asset('build/assets/images/png/9.png')}}" alt="img" width="250" class="img-fluid">
                                            </div>
                                            <h4 class="mb-3">Easy drag & drop editor</h4>
                                            <p>No tech skills needed - Pick a template, drag and drop elements, add images, text, videos and get online instantly for the easy to use section.</p>
                                            <a href="javascript:void(0);" class="btn btn-primary me-2">Read More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-card-5 feature-card-5-success position-relative">
                                    <div class="card border shadow-none">
                                        <div class="card-body">
                                            <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                                <img src="{{asset('build/assets/images/png/27.png')}}" alt="img" width="350" class="img-fluid">
                                            </div>
                                            <h4 class="mb-3">Secure and Free hosting</h4>
                                            <p >Focus on what's important. Manage and grow your business without worrying about downtimes and load speeds. Elitr lorem clita et sadipscing eirmod takimata justo erat et, ut labore et ut sit.</p>
                                            <a href="javascript:void(0);" class="btn btn-success me-2">Read More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="feature-card-5 feature-card-5-secondary position-relative">
                                    <div class="card border shadow-none">
                                        <div class="card-body">
                                            <div class="p-3 bg-gray-100 br-5 text-center mb-5">
                                                <img src="{{asset('build/assets/images/png/10.png')}}" alt="img" width="250" class="img-fluid">
                                            </div>
                                            <h4 class="mb-3">Powerful Tools & Plugins</h4>
                                            <p>Show off your photos/videos, SEO optimise your site and even edit CSS/HTML. Weebly's tools give you full control of your site.</p>
                                            <a href="javascript:void(0);" class="btn btn-secondary me-2">Read More<i class="bi bi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-3 filter-invert sub-pattern-3 op-2">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Choose Plan</span></div>
                            <div class="heading-title">Pricing <span class="tx-primary">Plans</span></div>
                            <div class="heading-description">Choose A Suitable Plan</div>
                        </div>
                        <div class="text-center mb-4">
                            <div class="tab-style-1 border p-1 rounded-pill d-inline-block">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill active" data-bs-toggle="pill" data-bs-target="#pills-monthly">Montly</button>
                                    </li>
                                    <li class="nav-item">
                                        <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#pills-yearly">Yearly</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-monthly">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-0">
                                        <div class="table-responsive border br-7">
                                            <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-lg rounded-circle bg-white-1 tx-24"><i class="bi bi-headset"></i></span>
                                                                </div>
                                                                <div class="flex-grow-1 text-start">
                                                                    <p class="h4 mb-0 text-white">Contact Us!</p>
                                                                    <a href="{{url('contact-us')}}" class="text-white op-8">Proceed <i class="bi bi-arrow-right ms-1"></i></a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Newest</p>
                                                            <p class="h4 mb-0 text-white">Free</p>
                                                            <p class="h2 text-white mb-0">$0<span class="tx-13 op-5 ms-1">/ month</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Popular</p>
                                                            <p class="h4 mb-0 text-white">Starter</p>
                                                            <p class="h2 text-white mb-0">$9<span class="tx-13 op-5 ms-1">/ month</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-secondary br-5 fw-600 mb-2">Recommended</p>
                                                            <p class="h4 mb-0 text-white">Pro</p>
                                                            <p class="h2 text-white mb-0">$15<span class="tx-13 op-5 ms-1">/ month</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Most Used</p>
                                                            <p class="h4 mb-0 text-white">Business</p>
                                                            <p class="h2 text-white mb-0">$29<span class="tx-13 op-5 ms-1">/ month</span></p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border">
                                                        <td colspan="5" class="pricing-feature text-center">Site Features</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Drag and Drop Builder</td>
                                                        <td>1</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">No of Pages</td>
                                                        <td>1</td>
                                                        <td>Unlimited</td>
                                                        <td>Unlimited</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Customizable footer</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Your Own Favicon</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">HD Video & Audio Players</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Password Protect Pages</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Site Search</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">SSL Security</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Membership</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr class="border">
                                                        <td colspan="5" class="pricing-feature text-center">Ecommerce</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">No of Products</td>
                                                        <td>Upto 5</td>
                                                        <td>Upto 10</td>
                                                        <td>Upto 25</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Weebly Transaction Fee</td>
                                                        <td>3%</td>
                                                        <td>3%</td>
                                                        <td>3%</td>
                                                        <td>0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Digital Goods</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Inventory Management</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Shipping and Tax Calculator</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Coupon Codes</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
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
                            <div class="tab-pane fade" id="pills-yearly">
                                <div class="card shadow-none mb-0">
                                    <div class="card-body p-0">
                                        <div class="table-responsive border br-7">
                                            <table class="table table-bordered pricing-table mb-0 table-hover border-hidden">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <div class="d-flex align-items-center">
                                                                <div class="me-3">
                                                                    <span class="avatar avatar-lg rounded-circle bg-white-1 tx-24"><i class="bi bi-headset"></i></span>
                                                                </div>
                                                                <div class="flex-grow-1 text-start">
                                                                    <p class="h4 mb-0 text-white">Contact Us!</p>
                                                                    <a href="{{url('contact-us')}}" class="text-white op-8">Proceed <i class="bi bi-arrow-right ms-1"></i></a>
                                                                </div>
                                                            </div>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Most Used</p>
                                                            <p class="h4 mb-0 text-white">Free</p>
                                                            <p class="h2 text-white mb-0">$19<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-secondary tx-white br-5 fw-600 mb-2">Recommended</p>
                                                            <p class="h4 mb-0 text-white">Starter</p>
                                                            <p class="h2 text-white mb-0">$49<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white border-right border-white-2">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Popular</p>
                                                            <p class="h4 mb-0 text-white">Pro</p>
                                                            <p class="h2 text-white mb-0">$75<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                        <th class="bg-primary text-white">
                                                            <p class="badge badge-lg bg-white-1 br-5 fw-600 mb-2">Newest</p>
                                                            <p class="h4 mb-0 text-white">Business</p>
                                                            <p class="h2 text-white mb-0">$99<span class="tx-13 op-5 ms-1">/ year</span></p>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border">
                                                        <td colspan="5" class="pricing-feature text-center">Site Features</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Drag and Drop Builder</td>
                                                        <td>1</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">No of Pages</td>
                                                        <td>1</td>
                                                        <td>Unlimited</td>
                                                        <td>Unlimited</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Customizable footer</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Your Own Favicon</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">HD Video & Audio Players</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Password Protect Pages</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Site Search</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">SSL Security</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Membership</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr class="border">
                                                        <td colspan="5" class="pricing-feature text-center">Ecommerce</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">No of Products</td>
                                                        <td>Upto 5</td>
                                                        <td>Upto 10</td>
                                                        <td>Upto 25</td>
                                                        <td>Unlimited</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Weebly Transaction Fee</td>
                                                        <td>3%</td>
                                                        <td>3%</td>
                                                        <td>3%</td>
                                                        <td>0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Digital Goods</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Inventory Management</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Shipping and Tax Calculator</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pricing-feature fw-semibold">Coupon Codes</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><i class="bi bi-check-circle tx-success"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-grid">
                                                                <a href="javascript:void(0);" class="btn btn-outline-primary">Get Started</a>
                                                            </div>
                                                        </td>
                                                        <td>
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

                <section class="section bg-pattern-1 bg-image4">
                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-9 filter-invert op-2">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Features</span></div>
                            <div class="heading-title">Selling Online <span class="tx-primary">Made Easy</span></div>
                            <div class="heading-description">Checkout These Features</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-6 text-center text-xl-start my-auto">
                                <img src="{{asset('build/assets/images/png/8.png')}}" class="img-fluid" alt="img" width="450">
                            </div>
                            <div class="col-xl-6 col-sm-9">
                                <div class="p-4 br-7 bg-gray-100">
                                    <img src="{{asset('build/assets/images/patterns/3.png')}}" alt="img" class="patterns-8 op-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg rounded-circle bg-primary text-white me-3 tx-24"><i class="bi bi-cart-check"></i></span>
                                                <div>
                                                    <h5>Integrated Shopping Cart & Checkout</h5>
                                                    <p class="mb-0">Weebly's shopping cart software is set-up automatically when you create your online store so you can start sellingimmediately.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card ms-sm--20p">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg rounded-circle bg-secondary text-white me-3 tx-24"><i class="bi bi-boxes"></i></span>
                                                <div>
                                                    <h5>Track Your Inventory & Manage Supply</h5>
                                                    <p class="mb-0">Manage hundreds of products. Show customers the number of items remaining and automatically update shoppers when items are out of stock.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <span class="avatar avatar-lg rounded-circle bg-success text-white me-3 tx-24"><i class="bi bi-arrow-left-right"></i></span>
                                                <div>
                                                    <h5>Simplified Transactions</h5>
                                                    <p class="mb-0">Show your Customers shipping costs and tax rates. Even offer coupon codes to incentivise your shoppers and drive sales.</p>
                                                </div>
                                            </div>
                                        </div>
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

                <section class="section overflow-hidden">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Reviews</span></div>
                            <div class="heading-title">What Do People Say <span class="tx-primary">About Us</span></div>
                            <div class="heading-description">Client Reviews</div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-xl-3 text-center text-lg-start feature-client-bg">
                                <span><i class="bi bi-quote tx-secondary tx-50"></i></span>
                                <p class="h3 mb-5">Clients Say About Us</p>
                                <div class="swiper-pagination"></div>
                            </div>
                            <div class="col-xl-9">
                                <div class="bg-client position-relative">
                                    <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-11 z-index-0 filter-invert op-2">
                                    <div class="swiper testimonialSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/1.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Dhaval Patel</h6>
                                                                <span class="tx-11">12 Aug, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 mb-0 tx-14">
                                                            Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/3.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Navin Telsko</h6>
                                                                <span class="tx-11">11 Nov, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 mb-0 tx-14">
                                                            Consetetur diam voluptua justo eirmod sed dolor. Ipsum amet clita ut nonumy justo, dolore et dolor dolor clita dolor justo Lorem sanctus ipsum sea sit.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/2.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Mosh</h6>
                                                                <span class="tx-11">16 Apr, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 mb-0 tx-14">
                                                            Tempor diam sed vero sed nonumy sed lorem gubergren amet. No no consetetur at duo duo sed et lorem dolor. Sea kasd gubergren voluptua lorem.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/1.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Dhaval Patel</h6>
                                                                <span class="tx-11">12 Aug, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 tx-14 mb-0">
                                                            Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/1.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Dhaval Patel</h6>
                                                                <span class="tx-11">12 Aug, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 tx-14 mb-0">
                                                            Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="card shadow-none mb-0">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center">
                                                            <img src="{{asset('build/assets/images/profile/1.jpg')}}" alt="img" class="avatar avatar-lg rounded-circle me-2">
                                                            <div class="flex-grow-1">
                                                                <h6 class="mb-0 text-white">Dhaval Patel</h6>
                                                                <span class="tx-11">12 Aug, 2022</span>
                                                            </div>
                                                            <i class="bi bi-quote review-quote"></i>
                                                        </div>
                                                        <p class="mt-2 tx-14 mb-0">
                                                            Efficiently innovate customized growth strategies whereas error-free paradigms. Monotonectally enhance stand-alone data with prospective innovation.
                                                        </p>
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
                                        Do I need to know how to Code to use Weebly?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No, you do not. Weebly offers an intuitive drag and drop builder for you to use. Add in the elements you like, manage your online store and even update blog posts using Weebly's editor.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        Do I get a Money Back guarantee?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Weebly's plans do not have a money back period. Instead, you can try the free plan and then upgrade to a paid one.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Will my Website be Responsive?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Absolutely! All of Weebly's themes and elements are fully mobile responsive. So your customers can browse your website.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        Do I need to purchase hosting to host my Website?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No! All plans come with hosting included. Weebly handles all the backend infrastructure required to run your Website.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        What Payment gateways does Weebly offer?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Weebly offers Stripe as the the payement gateway on the Free, Starter and Pro plan. While on the Business plan you can choose from Stripe, Square, Authorize.net and Paypal.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        Can I increase the number of products I can sell on my Plan?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">If you want to increase the number of products you want to manage/sell on your Website, you will need to upgrade your plan.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                        Do I get email accounts with Weebly?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">No you do not get an email solution with Weebly. However, you can purchase a stand alone email solution for your business and use it with the same domain.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

        <!-- SWIPER JS -->
        <script src="{{asset('build/assets/libs/swiper/swiper-bundle.min.js')}}"></script>
        @vite('resources/assets/js/swiper.js')
        
        
@endsection