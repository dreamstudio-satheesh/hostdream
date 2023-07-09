@extends('layouts.app')

@section('styles')

@endsection

@section('content')

            <div class="main-content app-content">
                <section>
                    <div class="banner-1 banner-section banner-arrow-down">
                        <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                        <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                        <img src="{{asset('build/assets/images/patterns/9.png')}}" alt="img" class="patterns-8 op-2">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="mb-4">
                                        <p class="mb-3 content-1 h5 text-white">Advance <span class="tx-info-dark">Enterprise Email</span></p>
                                        <p class="tx-18">Professional Email for Power Users with Extra Storage</p>
                                        <ul class="list-unstyled mb-3">
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>5GB Email Storage Per Account</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Inbuilt Virus Protection</li>
                                            <li class="list-item mb-2"><i class="fe fe-chevron-right bg-white-2 rounded-circle p-1 me-2"></i>Additional Storage Available</li>
                                        </ul>
                                        <p class="tx-18">Start your business at just<span class="h2 text-white"> $13.8</span><span class="op-5 tx-14"> / month</span></p>
                                    </div>
                                    <a href="#plans" class="btn btn-lg btn-secondary d-inline-flex align-items-center"><i class="fe fe-eye me-1"></i> View Plans</a>
                                </div>
                                <div class="col-lg-5">
                                    <div class="banner-bg mt-5 mt-lg-0">
                                        <img src="{{asset('build/assets/images/png/76.png')}}" class="reseller-img img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 overflow-hidden">
                    <img src="{{asset('build/assets/images/patterns/4.png')}}" alt="img" class="patterns-3">
                    <img src="{{asset('build/assets/images/patterns/6.png')}}" alt="img" class="patterns-4">
                    <img src="{{asset('build/assets/images/patterns/23.png')}}" alt="img" class="patterns-1 op-2">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Specifications</span></div>
                            <div class="heading-title">Enterprise Email <span class="tx-primary">Specifications</span></div>
                            <div class="heading-description">Checkout These Specification</div>
                        </div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-5 col-md-8">
                                <div class="text-center text-xl-start mb-5 mb-xl-0">
                                    <img src="{{asset('build/assets/images/png/31.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border-top border-3 border-secondary">
                                            <div class="card-body">
                                                <div class="mb-3 d-flex">
                                                    <div class="avatar avatar-lg bg-secondary-gradient text-white me-3 tx-24 br-style"><i class="bi bi-envelope-plus"></i></div>
                                                    <div class="my-auto"><h5 class="mb-0">More than Enough Mailbox Space</h5></div>
                                                </div>
                                                <p class="mb-0">With 30GB of Email storage, you will never run out of space. Powered by our state-of-the-art webmail platform.</p>
                                            </div>
                                        </div>
                                        <div class="card border-top border-3 border-pink">
                                            <div class="card-body">
                                                <div class="mb-3 d-flex">
                                                    <div class="avatar avatar-lg bg-pink-gradient text-white me-3 tx-24 br-style"><i class="bi bi-hdd-network"></i></div>
                                                    <div class="my-auto"><h5>Additional Storage @ Rs. 156.00/8GB</h5></div>
                                                </div>
                                                <p class="mb-0">You can now increase storage for individual accounts by buying additional storage blocks of 5 GB.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-md-3">
                                        <div class="card mt-md-5 border-top border-3 border-teal">
                                            <div class="card-body">
                                                <div class="mb-3 d-flex">
                                                    <div class="avatar avatar-lg bg-teal-gradient text-white me-3 tx-24 br-style"><i class="bi bi-calendar2-check"></i></div>
                                                    <div class="my-auto"><h5>Stay Organised</h5></div>
                                                </div>
                                                <p class="mb-0">Quick sharing of Calendars and Contacts only means one thing - you get more done. Easier, better & faster!</p>
                                            </div>
                                        </div>
                                        <div class="card border-top border-3 border-purple">
                                            <div class="card-body">
                                                <div class="mb-3 d-flex">
                                                    <div class="avatar avatar-lg bg-purple-gradient text-white me-3 tx-24 br-style"><i class="bi bi-ui-checks-grid"></i></div>
                                                    <div class="my-auto"><h5>Smart Widgets</h5></div>
                                                </div>
                                                <p class="mb-0">View customized news feeds, stay updated on the weather and keep your emails secured with last login IP details.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section bg-pattern-1 bg-image1" id="plans">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">Compare</span></div>
                            <div class="heading-title">Looking for Something <span class="tx-primary">Else</span></div>
                            <div class="heading-description">Email hosting gives you an email address to contact your team, partners, and customers.</div>
                        </div>
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md-6">
                                <div class="feature-card-5 feature-card-5-primary position-relative">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-xl-4">
                                                    <img src="{{asset('build/assets/images/png/66.png')}}" class="mt-2 mb-5 img-fluid" alt="img" width="200">
                                                    <p class="mb-1 tx-14">Starts at just</p>
                                                    <h4 class="">$876.98<span class="tx-12 tx-muted op-7"> / month</span> </h4>
                                                </div>
                                                <div class="col-xl-7">
                                                    <h4 class="mb-3">Business Email</h4>
                                                    <p class="mb-3">When customers see an email using a free, generic address, like 'you@gmail.com'.</p>
                                                    <ul class="list-unstyled mb-4 fw-500">
                                                        <li class="list-item mb-2"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>5GB Email Storage Per Account</li>
                                                        <li class="list-item mb-2"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>Inbuilt Virus Protection</li>
                                                        <li class="list-item"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>Additional Storage Available</li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-secondary">Get Started</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-card-5 feature-card-5-success position-relative">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row justify-content-between">
                                                <div class="col-xl-4">
                                                    <img src="{{asset('build/assets/images/png/70.png')}}" class="mt-2 mb-5 img-fluid" alt="img" width="200">
                                                    <p class="mb-1 tx-14">Starts at just</p>
                                                    <h4 class="">$876.98<span class="tx-12 tx-muted op-7"> / month</span> </h4>
                                                </div>
                                                <div class="col-xl-7">
                                                    <h4 class="mb-3">Enterprise Email</h4>
                                                    <p class="mb-3">When customers see an email using a free, generic address, like 'you@gmail.com'.</p>
                                                    <ul class="list-unstyled mb-4 fw-500">
                                                        <li class="list-item mb-2"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>5GB Email Storage Per Account</li>
                                                        <li class="list-item mb-2"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>Inbuilt Virus Protection</li>
                                                        <li class="list-item"><i class="fe fe-check-circle tx-primary rounded-circle p-1 me-2"></i>Additional Storage Available</li>
                                                    </ul>
                                                    <a href="javascript:void(0);" class="btn btn-secondary">Get Started</a>
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
                                        How will purchasing Enterprise Email benefit me?
                                    </button>
                                </h2>
                                <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">By purchasing an Enterprise Email package you take advantage of our advanced email technology, to give you the least latency and industry best uptime, scalability and reliability. An email service being served out of the cloud also means no IT hardware, software, bandwidth or people costs, and a simple pay-as-you-grow model.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                        What typical features does an Enterprise Email provide over Personal Email?
                                    </button>
                                </h2>
                                <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Enterprise Email supports a number of features that aren't available in Personal email. Shared calendaring, global contacts, push synchronization for mobile devices, MS Outlook & Mac OSX.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                        Which Email Clients and protocols are supported?
                                    </button>
                                </h2>
                                <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        You can send and receive emails using any desktop-based email client such as Microsoft Outlook, Outlook Express, Mozilla Thunderbird, Eudora, Entourage 2004, Windows Mail, etc. We also have a guide on how you can configure different email clients to send/receive emails. The enterprise email product supports the POP, IMAP and MAPI protocols.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                        How do I use my Webmail Interface?
                                    </button>
                                </h2>
                                <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        To access your Webmail Interface, you can use the white-labelled URL: http://webmail.yourdomainname.com. Once on the login page, you would need to login with your email address and the corresponding password.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                        Which mobile phones can I access my mail from?
                                    </button>
                                </h2>
                                <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">
                                        Your email can be accessed using any Smartphone or Tablet. Our responsive webmail, is compatible on all major Operating systems such as iOS, Android, Windows Mobile, Symbian and Blackberry.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                        What is the space provided per Email Account?
                                    </button>
                                </h2>
                                <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Each email account comes with 30 GB space dedicated to your emails and attachments.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                    What ports do I need to use for Email Hosting?
                                    </button>
                                </h2>
                                <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Usually, the port used for the Outgoing Mail Server/SMTP Service is 25. However, there might be a situation where your ISP might be blocking the use of port 25 for SMTP service. To circumvent this you can use an alternate port 587 for sending mails.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                        Can I create mailing lists?
                                    </button>
                                </h2>
                                <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can create mailing lists and add/delete users, select a moderator, restrict people from joining a list or even ban users from a list. More information on this can be found in our knowledgebase</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                        What is your SPAM policy?
                                    </button>
                                </h2>
                                <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">We take a zero tolerance stance against sending of unsolicited e-mail, bulk emailing, and spam. "Safe lists", purchased lists, and selling of lists will be treated as spam. Any user who sends out spam will have their account terminated with or without notice.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                        Can I use Auto Responders?
                                    </button>
                                </h2>
                                <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                    <div class="accordion-body">Yes, you can. An auto-responder is a program that, when setup for your email address, sends out an automatic pre-set reply to an email, as soon as it is received at this email address. To set up an Auto Responder, please refer to the following KnowledgeBase article.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@endsection

@section('scripts')

@endsection