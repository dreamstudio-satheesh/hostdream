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
                                        <p class="mb-3 content-1 h5 text-white">Blog <span class="tx-info-dark">Description</span></p>
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
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('build/assets/images/blog/1.jpg')}}" alt="img">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <img class="avatar rounded-circle me-3" src="{{asset('build/assets/images/profile/5.jpg')}}" alt="avatar-img">
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Author Name</h6>
                                                    <p class="tx-muted tx-15 fw-500 mb-0">Manny Jah</p>
                                                </div>
                                            </div>
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <span class="avatar bg-gray-200 rounded-circle tx-muted border me-3"><i class="fe fe-grid"></i></span>
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Categories</h6>
                                                    <p class="tx-muted tx-15 fw-500 mb-0">Linux KVM Hosting</p>
                                                </div>
                                            </div>
                                            <div class="d-flex me-4 mb-3 mb-md-0 align-items-center">
                                                <span class="avatar bg-gray-200 rounded-circle tx-muted border me-3"><i class="fe fe-calendar"></i></span>
                                                <div class="pe-3">
                                                    <h6 class="mb-0">Date</h6>
                                                    <p class="tx-muted tx-15 fw-500 mb-0">01/10/2022</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-3">
                                        <h4>Voluptatem quia voluptas</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <p> Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry
                                            you’re working in, as a blogger, you should live and die by this statement.
                                        </p>
                                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
                                            I will give you a complete account of the system, and expound the actual teachings of the great explorer of the
                                            truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.
                                        </p>
                                        <div class="card bg-primary-01 shadow-none border-start border-primary border-3 mt-4 border-0">
                                            <div class="card-body">
                                                <blockquote class="quote mb-0">
                                                    <p class="h5">" Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco labor. "</p>
                                                    <p class="mb-0 mt-3"> so awesome this title <cite title="Source Title" class="fw-semibold"> - magna aliqua</cite> </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="card shadow-none mb-0">
                                            <div class="card-body p-0">
                                                <p class="h6 mb-3">Share this Post :</p>
                                                <div class="mb-4 d-flex">
                                                    <a href="https://www.google.com/" target="_blank" class="social-icons me-2 text-center bg-primary-transparent"> <i class="fe fe-instagram tx-primary"></i> </a>
                                                    <a href="https://www.google.com/" target="_blank" class="social-icons me-2 text-center bg-secondary-transparent"> <i class="fe fe-twitter tx-secondary"></i> </a>
                                                    <a href="https://www.google.com/" target="_blank" class="social-icons me-2 text-center bg-success-transparent"> <i class="fe fe-linkedin tx-success"></i> </a>
                                                    <a href="https://www.google.com/" target="_blank" class="social-icons me-2 text-center bg-danger-transparent"> <i class="fe fe-share-2 tx-danger"></i> </a>
                                                </div>
                                                <p class="h6 mb-3">Related Tags :</p>
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
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="mb-4">Comments</h5>
                                        <div class="d-block mb-4 overflow-visible d-block d-sm-flex">
                                            <div class="me-3 mb-3">
                                                <a href="javascript:void(0);"> <img class="avatar avatar-lg rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/profile/2.jpg')}}"> </a>
                                            </div>
                                            <div class="overflow-visible">
                                                <div class="border mb-4 p-4 br-5">
                                                    <nav class="nav float-end">
                                                        <div class="dropdown">
                                                            <a class="nav-link tx-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit mx-1"></i> Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                    <h5 class="mt-0">Gavin Murray</h5>
                                                    <p class="tx-muted">Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.</p>
                                                    <a href="javascript:void(0);" class="btn btn-danger-transparent btn-sm rounded-pill" role="button">
                                                        <i class="fe fe-heart me-2"></i>23
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent btn-sm rounded-pill" role="button" data-bs-toggle="reply-form" data-bs-target="comment-1">
                                                        <i class="fe fe-corner-up-left me-2"></i>Reply
                                                    </a>

                                                    <form method="POST" class="reply-form d-none" id="comment-1">
                                                        <textarea placeholder="Reply to Comment..." class="form-control my-3" rows="3"></textarea>
                                                        <div class="text-end">
                                                            <button type="button" class="btn btn-success-transparent btn-sm rounded-pill">Submit</button>
                                                            <button type="button" class="btn btn-danger-transparent btn-sm rounded-pill" data-bs-toggle="reply-form" data-bs-target="comment-1">Cancel</button>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="d-block d-sm-flex overflow-visible">
                                                    <div class="me-3 mb-3">
                                                        <a href="javascript:void(0);"> <img class="avatar avatar-lg rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/profile/3.jpg')}}"> </a>
                                                    </div>
                                                    <div class="border p-4 overflow-visible br-5 blog-reply">
                                                        <nav class="nav float-end">
                                                            <div class="dropdown">
                                                                <a class="nav-link tx-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit mx-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </nav>
                                                        <h5 class="mt-0">Mozelle Belt</h5>
                                                        <p class="tx-muted">Nostrud exercitation ullamco laboris commodo consequat. There’s an old maxim that states, “No fun for the writer, no fun for the reader.”No matter what industry you’re working in, as a blogger.</p>
                                                        <a href="javascript:void(0);" class="btn btn-danger-transparent btn-sm rounded-pill" role="button">
                                                            <i class="fe fe-heart me-2"></i>76
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-primary-transparent btn-sm rounded-pill" role="button" data-bs-toggle="reply-form" data-bs-target="comment-2">
                                                            <i class="fe fe-corner-up-left me-2"></i>Reply
                                                        </a>

                                                        <form method="POST" class="reply-form d-none" id="comment-2">
                                                            <textarea placeholder="Reply to Comment..." class="form-control my-3" rows="3"></textarea>
                                                            <div class="text-end">
                                                                <button type="button" class="btn btn-success-transparent btn-sm rounded-pill">Submit</button>
                                                                <button type="button" class="btn btn-danger-transparent btn-sm rounded-pill" data-bs-toggle="reply-form" data-bs-target="comment-2">Cancel</button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-sm-flex d-block mb-5 overflow-visible">
                                            <div class="me-3 mb-3">
                                                <a href="javascript:void(0);"> <img class="avatar avatar-lg rounded-circle thumb-sm" alt="64x64" src="{{asset('build/assets/images/profile/4.jpg')}}"> </a>
                                            </div>
                                            <div class=" overflow-visible">
                                                <div class="border p-4 br-5">
                                                    <nav class="nav float-end">
                                                        <div class="dropdown">
                                                            <a class="nav-link tx-muted fs-16 p-0 ps-4" href="javascript:;" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-edit mx-1"></i> Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-corner-up-left mx-1"></i> Reply</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-flag mx-1"></i> Report Abuse</a>
                                                                <a class="dropdown-item" href="javascript:void(0)"><i class="fe fe-trash-2 mx-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </nav>
                                                    <h5 class="mt-0">Paul Smith</h5>
                                                    <p class="tx-muted">Very nice ! On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the </p>
                                                    <a href="javascript:void(0);" class="btn btn-danger-transparent btn-sm rounded-pill" role="button">
                                                        <i class="fe fe-heart me-2"></i>45
                                                    </a>
                                                    <a href="javascript:void(0);" class="btn btn-primary-transparent btn-sm rounded-pill" role="button" data-bs-toggle="reply-form" data-bs-target="comment-3">
                                                        <i class="fe fe-corner-up-left me-2"></i>Reply
                                                    </a>

                                                    <form method="POST" class="reply-form d-none" id="comment-3">
                                                        <textarea placeholder="Reply to Comment..." class="form-control my-3" rows="3"></textarea>
                                                        <div class="text-end">
                                                            <button type="button" class="btn btn-success-transparent btn-sm rounded-pill">Submit</button>
                                                            <button type="button" class="btn btn-danger-transparent btn-sm rounded-pill" data-bs-toggle="reply-form" data-bs-target="comment-3">Cancel</button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p class="h5 mb-4">Add a Comments</p>
                                        <form class="form-horizontal  m-t-20">
                                            <div class="mb-3">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="text" required="" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="col-xs-12">
                                                    <input class="form-control" type="email" required="" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="col-xs-12">
                                                    <textarea class="form-control" rows="5" placeholder="Your Comment"></textarea>
                                                </div>
                                            </div>
                                            <div class="">
                                                <a href="javascript:void(0)" class="btn btn-primary">Submit</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="javascript:void(0);" class="form">
                                            <div class="form-group custom-form-group">
                                                <input type="search" class="form-control form-control-lg rounded-pill" placeholder="Find your Blog here...">
                                                <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button" id="btn-addon">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <p class="h5 mb-4">Categories</p>
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)" class="tx-primary"><i class="fe fe-chevron-right me-1"></i>Web Hosting</a> <span class="product-label tx-primary bg-primary-01">22</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>Dedicated Servers</a> <span class="product-label">15</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>Linux Servers</a> <span class="product-label">10</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>Email Hosting</a> <span class="product-label">88</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>SSL Certificate</a> <span class="product-label">43</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>Codeguard Backup</a> <span class="product-label">76</span> </li>
                                            <li class="list-group-item border-0 px-0"><a href="javascript:void(0)"><i class="fe fe-chevron-right me-1"></i>Sitelock</a> <span class="product-label">97</span> </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <p class="h5 mb-4">Professional Blog Writers</p>
                                        <div class="">
                                            <div class="d-flex overflow-visible">
                                                <img class="avatar rounded-circle avatar-lg me-3" src="{{asset('build/assets/images/profile/2.jpg')}}" alt="avatar-img">
                                                <div class="">
                                                    <a href="{{url('blog-details')}}" class="fw-600">Simon Sais</a>
                                                    <p class="tx-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar rounded-circle avatar-lg me-3" src="{{asset('build/assets/images/profile/3.jpg')}}" alt="avatar-img">
                                                <div class="">
                                                    <a href="{{url('blog-details')}}" class="fw-600">Cherry Blossom</a>
                                                    <p class="tx-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar rounded-circle avatar-lg me-3" src="{{asset('build/assets/images/profile/4.jpg')}}" alt="avatar-img">
                                                <div class="">
                                                    <a href="{{url('blog-details')}}" class="fw-600">Ivan Notheridiya</a>
                                                    <p class="tx-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                            <div class="d-flex overflow-visible mt-4">
                                                <img class="avatar rounded-circle avatar-lg me-3" src="{{asset('build/assets/images/profile/5.jpg')}}" alt="avatar-img">
                                                <div class="">
                                                    <a href="{{url('blog-details')}}" class="fw-600">Manny Jah</a>
                                                    <p class="tx-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                </div>
                                            </div>
                                        </div>
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

        <!-- COMMENT JS -->
        @vite('resources/assets/js/comment.js')

        
@endsection