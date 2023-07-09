
                <header class="top-menu">
                    <div class="container top-menu-brand px-0">
                
                        <ul class="nav list-unstyled align-items-center">
                            <li><a href="tel:+91679108040" class="nav-link d-flex"><i
                                        class="bi bi-headset me-2"></i>24x7 Technical Support</a></li>
                            <li>
                                <a href="mailto:john@gmail.com" class="nav-link"><i class="bi bi-envelope-plus me-2"></i>info@dreamhost.in</a>
                            </li>
                        </ul>
                
                        <ul class="nav list-unstyled align-items-center">
                            <li>
                                <a href="javascript:void(0);" class="nav-link"><i class="bi bi-question-circle me-2"></i>Help</a>
                            </li>
                            <li>
                                <a href="{{url('contact-us')}}" class="nav-link d-flex"><i class="bi bi-person me-2"></i>Contact</a>
                            </li>
                        </ul>
                    </div>
                </header>
                
                <header class="main-header" id="stickyHeader">
                    <!-- Start::main-brand-header -->
                    <div class="main-brand-header">
                        <div class="container brand-header-container">    
                            <div class="d-flex align-items-center">
                                <!-- Start::header-element -->
                                <div class="header-element me-1">
                                    <!-- Start::header-link -->
                                    <a href="javascript:void(0);" class="sidemenu-toggle1 header-link" data-bs-toggle="sidebar">
                                        <span class="open-toggle">
                                            <i class="bi bi-text-indent-left header-link-icon"></i>
                                        </span>
                                    </a>
                                    <!-- End::header-link -->
                                </div>
                                <!-- End::header-element -->
                                <a href="{{url('index')}}" class="brand-main">
                                    <img src="{{asset('build/assets/images/brand/logo-white.png')}}" alt="img" class="desktop-logo logo-dark">
                                    <img src="{{asset('build/assets/images/brand/toggle-dark.png')}}" alt="img" class="mobile-logo mobile-dark mx-3">
                                    <img src="{{asset('build/assets/images/brand/logo-color.png')}}" alt="img" class="desktop-logo logo-color">
                                    <img src="{{asset('build/assets/images/brand/toggle-color.png')}}" alt="img" class="mobile-logo mobile-color">
                                </a>

                                <ul class="categories-dropdowns">
                                    <li class="category-dropdown px-2 py-3">
                                        <a href="javascript:void(0);" class="avatar bg-white-1 border rounded-circle tx-15 border-white-2 categorydropdown toggleDropdown">
                                            <i class="bi bi-grid text-white"></i>
                                        </a>
                                        <ul class="main-dropdown" id="dropdown-toggle">
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-cast tx-17"></i></span>
                                                    Web Hosting
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu"> 
                                                    <li><a href="{{url('linux-shared-hosting')}}" class="category-item">Web Hosting (DirectAdmin)</a></li>
                                                    <li><a href="{{url('windows-shared-hosting')}}" class="category-item">Web Hosting (CPanel)</a></li>
                                                    <li><a href="{{url('wordpress-shared-hosting')}}" class="category-item">Wordpress Shared Hosting</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-globe tx-17"></i></span>
                                                    Domains
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('register-domain')}}" class="category-item">Register Domain</a></li>
                                                    <li><a href="{{url('domain-transfer')}}" class="category-item">Transfer Domain</a></li>
                                                    <li><a href="{{url('premium-domains')}}" class="category-item">Premium Domains</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-layers tx-17"></i></span>
                                                    Reseller Hosting
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('linux-reseller-hosting')}}" class="category-item">Linux Reseller Hosting</a></li>
                                                    <li><a href="{{url('windows-reseller-hosting')}}" class="category-item">Windows Reseller Hosting</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-clouds tx-17"></i></span>
                                                    Cloud Hosting
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('cloud')}}" class="category-item">Cloud Hosting</a></li>
                                                    <li><a href="{{url('professional-cloud')}}" class="category-item">Professional Cloud Hosting</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-hdd-network tx-17"></i></span>
                                                    Servers
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('virtualserver-linux-hosting')}}" class="category-item">Linux KVM VPS</a></li>
                                                    <li><a href="{{url('dedicated-server')}}" class="category-item">Dedicated Servers</a></li>
                                                    <li><a href="{{url('windows-dedicated-server')}}" class="category-item">Windows Dedicated Servers</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-envelope-plus tx-17"></i></span>
                                                    Email & Productivity
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('business-email')}}" class="category-item">Business Email</a></li>
                                                    <li><a href="{{url('enterprise-email')}}" class="category-item">Enterprise Email</a></li>
                                                    <li><a href="{{url('google-workspace')}}" class="category-item">Google Workspace</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="categories-dropdowns__item">
                                                    <span class="me-1"><i class="bi bi-shield-check tx-17"></i></span>
                                                    Security
                                                    <span class="float-end"><i class="bi bi-chevron-right tx-11"></i></span>
                                                </div>
                                                <ul class="category-menu">
                                                    <li><a href="{{url('ssl-certificates')}}" class="category-item">SSL Certificate</a></li>
                                                    <li><a href="{{url('codeguard-backup')}}" class="category-item">CodeGuard Website Backup</a></li>
                                                    <li><a href="{{url('sitelock')}}" class="category-item">SiteLock</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <ul class="nav list-unstyled align-items-center">
                                <li class="d-flex align-items-center position-relative me-md-4 me-2">
                                    <a href="tel:+1236789657" class="stretched-link"></a>
                                    <span class="avatar bg-white-1 border rounded-circle tx-15 border-white-2 me-2"><i class="bi bi-telephone text-white"></i></span>
                                    <div class="d-none d-md-block">
                                        <a href="javascript:void(0);" class="nav-link tx-15 p-0">Call to Us</a>
                                        <a href="tel:+1236789657" class="mb-0 nav-link p-0 tx-13 op-8 lh-sm">+91 679108040</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center position-relative">
                                    <a id="live-chat" href="javascript:void(0);" class="stretched-link"></a>
                                    <span class="avatar bg-white-1 border rounded-circle tx-15 border-white-2 me-2"><i class="bi bi-chat-text text-white"></i></span>
                                    <div class="d-none d-md-block">
                                        <a href="javascript:void(0);" class="nav-link tx-15 p-0">Live Chat</a>
                                        <p class="mb-0 nav-link p-0 tx-13 op-8 lh-sm">Chat With Us</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End::main-brand-header -->
                </header>