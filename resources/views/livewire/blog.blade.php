@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="section banner-4 banner-section">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <div class="">
                                        <p class="mb-3 content-1 h5 text-white">Blog <span class="tx-info-dark">Page</span></p>
                                        <p class="mb-0 tx-28">We Fight Passionately to Get Our Clients Every Time They Deserve</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/3.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-secondary blog-badge">Hosting</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">Starting a Web Hosting Business</a></h5>
                                                <div class="tx-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/1.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Megan Peters</a>
                                                        <small class="d-block tx-muted">1 day ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/2.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-success blog-badge">Servers</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}"> Best and fastest Servers</a></h5>
                                                <div class="tx-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/3.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Dhaval Patel</a>
                                                        <small class="d-block tx-muted">3 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/4.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-success blog-badge">Small Scale</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">New Domain Registration</a></h5>
                                                <div class="tx-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam ..</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/7.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Dhaval Patel</a>
                                                        <small class="d-block tx-muted">5 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/6.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-info blog-badge">Email</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}">Email Hosting For Your Projects</a></h5>
                                                <div class="tx-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/2.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Mike Rowe-Soft</a>
                                                        <small class="d-block tx-muted">2 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/5.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-danger blog-badge">Cloud</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}"> Cloud Hosting growing faster </a></h5>
                                                <div class="tx-muted">Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut ..</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/5.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Navin Telsko</a>
                                                        <small class="d-block tx-muted">4 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="position-relative">
                                                <a href="{{url('blog-details')}}">
                                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/7.jpg')}}" alt="img">
                                                </a>
                                                <span class="badge bg-secondary blog-badge">Domain</span>
                                            </div>
                                            <div class="card-body d-flex flex-column">
                                                <h5><a href="{{url('blog-details')}}"> How to Create a New Domain </a></h5>
                                                <div class="tx-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti  ..</div>
                                                <div class="d-flex align-items-center pt-4 mt-auto">
                                                    <div class="avatar me-3 cover-image rounded-circle">
                                                        <img src="{{asset('build/assets/images/profile/9.jpg')}}" class="rounded-circle" alt="img" width="40">
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="h6">Peter John</a>
                                                        <small class="d-block tx-muted">6 days ago</small>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <a href="javascript:void(0)" class="icon d-inline-block tx-muted"><i class="fe fe-heart me-1 rounded-circle p-2 bg-gray-200 tx-muted"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="mb-9">
                                    <div class="float-end">
                                        <ul class="pagination ">
                                            <li class="page-item page-prev disabled">
                                                <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                            <li class="page-item page-next">
                                                <a class="page-link" href="javascript:void(0)">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="javascript:void(0);" class="form">
                                            <div class="form-group custom-form-group">
                                                <input type="text" class="form-control form-control-lg rounded-pill" placeholder="Find your Blog here...">
                                                <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button" id="btn-addon">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <p class="h5 mb-4">Recent Posts</p>
                                            <div class="row mb-3 mb-xl-0">
                                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 text-center">
                                                    <img src="{{asset('build/assets/images/blog/6.jpg')}}" class="img-fluid br-5 w-100" width="120" alt="img">
                                                </div>
                                                <div class="col-xl-8 col-lg-9 col-md-8 col-sm-8">
                                                    <span class="badge bg-danger-transparent tx-danger me-1 mb-1 mt-3 mt-sm-0">Cloud</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h6>
                                                    <p class="tx-muted">Excepteur sint occaecat....</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3 mb-xl-0">
                                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 text-center">
                                                    <img src="{{asset('build/assets/images/blog/5.jpg')}}" class="img-fluid br-5 w-100" width="120" alt="img">
                                                </div>
                                                <div class="col-xl-8 col-lg-9 col-md-8 col-sm-8">
                                                    <span class="badge bg-primary-transparent tx-primary me-1 mb-1 mt-3 mt-sm-0">Hosting</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h6>
                                                    <p class="tx-muted">Excepteur sint occaecat....</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3 mb-xl-0">
                                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 text-center">
                                                    <img src="{{asset('build/assets/images/blog/2.jpg')}}" class="img-fluid br-5 w-100" width="120" alt="img">
                                                </div>
                                                <div class="col-xl-8 col-lg-9 col-md-8 col-sm-8">
                                                    <span class="badge bg-secondary-transparent tx-secondary me-1 mb-1 mt-3 mt-sm-0">Email</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h6>
                                                    <p class="tx-muted">Excepteur sint occaecat....</p>
                                                </div>
                                            </div>
                                            <div class="row mb-3 mb-xl-0">
                                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-4 text-center">
                                                    <img src="{{asset('build/assets/images/blog/3.jpg')}}" class="img-fluid br-5 w-100" width="120" alt="img">
                                                </div>
                                                <div class="col-xl-8 col-lg-9 col-md-8 col-sm-8">
                                                    <span class="badge bg-success-transparent tx-success me-1 mb-1 mt-3 mt-sm-0">Servers</span>
                                                    <h6 class="mb-0"><a href="{{url('blog-details')}}"> Voluptatem quia voluptas </a></h6>
                                                    <p class="tx-muted mb-0">Excepteur sint occaecat....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <p class="h5 mb-4">Tags</p>
                                        <div class="tags">
                                            <a href="javascript:void(0)" class="tag">Hosting</a>
                                            <a href="javascript:void(0)" class="tag">Servers</a>
                                            <a href="javascript:void(0)" class="tag">Email</a>
                                            <a href="javascript:void(0)" class="tag">Linux Servers</a>
                                            <a href="javascript:void(0)" class="tag">Windows Servers</a>
                                            <a href="javascript:void(0)" class="tag">KVM Servers</a>
                                            <a href="javascript:void(0)" class="tag">Domain Transfer</a>
                                            <a href="javascript:void(0)" class="tag">Domain Registration</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card bg-primary-transparent feature-card-14 overflow-hidden">
                                    <div class="card-body">
                                        <h5 class="fw-semibold text-white">NEVER MISS A POST !</h5>
                                        <P class="text-white">Signup for free to get the latest posts.</P>
                                        <div class="input-group">
                                            <input class="form-control border-0" placeholder="Enter your email id" type="text">
                                            <a href="javascript:void(0)" class="btn btn-info-dark">Subscribe<i class="fa fa-paper-plane ms-2 tx-11"></i></a>
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