
                <div class="sticky">
                    <!-- Start::app-sidebar -->
                    <aside class="app-sidebar" id="sidebar">
                
                        <div class="app-toggle-header">                
                            <div class="header-element">
                                <!-- Start::header-link -->
                                <a href="javascript:void(0);" class="sidemenu-toggle header-link" data-bs-toggle="sidebar">
                                    <span class="close-toggle">
                                        <i class="bi bi-x header-link-icon"></i>
                                    </span>
                                </a>
                                <!-- End::header-link -->
                            </div>
                            <!-- End::header-element -->
                            <a href="{{url('index')}}" class="brand-main">
                                <img src="{{asset('build/assets/images/brand/logo-white.png')}}" alt="img" class="desktop-logo logo-dark">
                                <img src="{{asset('build/assets/images/brand/logo-color.png')}}" alt="img" class="desktop-logo logo-color">
                            </a>
                        </div>
                
                        <!-- Start::main-sidebar -->
                        <div class="main-sidebar container" id="sidebar-scroll">
                
                            <!-- Start::nav -->
                            <nav class="main-menu-container nav nav-pills sub-open">
                                <ul class="main-menu">
                
                                    <!-- Start::slide -->
                                    <li class="slide">
                                        <a href="{{url('index')}}" class="side-menu__item">
                                            <span class="side-menu__label">Home</span>    
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Domains</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-threefr">
                                            <li class="mega-menu-threefr">
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-journal-text tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Registration</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('register-domain')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                                                                            <i class="bi bi-hdd-stack me-0 tx-secondary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Register a Domain</h6>
                                                                        <span class="tx-default tx-14">Book your domain here</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('new-domain-extensions')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-success-transparent rounded-circle">
                                                                            <i class="bi bi-plus-circle me-0 tx-success"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">New Domain Extensions</h6>
                                                                        <span class="tx-default tx-14">Pre-register to get the name of your choice</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('premium-domains')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-purple-transparent rounded-circle">
                                                                            <i class="bi bi-gem me-0 tx-purple"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Premium Domains</h6>
                                                                        <span class="tx-default tx-14">Register catchy, popular Domain Names</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-arrow-left-right tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Transfer</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('domain-transfer')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-pink-transparent rounded-circle">
                                                                            <i class="bi bi-arrow-right-circle me-0 tx-pink"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Transfer Your Domains</h6>
                                                                        <span class="tx-default tx-14">Move in your existing domains</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('domain-transfer')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-info-transparent rounded-circle">
                                                                            <i class="bi bi-arrows-move me-0 tx-info"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Bulk Domain Transfer</h6>
                                                                        <span class="tx-default tx-14">Move in your existing domains</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-plus-circle-dotted tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Add-Ons</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('free-with-domain')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-primary-transparent rounded-circle">
                                                                            <i class="bi bi-layers me-0 tx-primary"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Free With Every Domain</h6>
                                                                        <span class="tx-default tx-14">Free Email, DNS, Theft protection and more</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('name-suggestion-tool')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-danger-transparent rounded-circle">
                                                                            <i class="bi bi-gear me-0 tx-danger"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Name Suggestion Tool</h6>
                                                                        <span class="tx-default tx-14">Use you name spinner for ideas in your domain</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('whois-lookup')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-teal-transparent rounded-circle">
                                                                            <i class="bi bi-search me-0 tx-teal"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Whois Lookup</h6>
                                                                        <span class="tx-default tx-14">Perform Whois Lookup</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Websites</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-twofr">
                                            <li class="mega-menu-twofr">
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-bar-chart tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Build Your Website</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('weebly')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#fb9543"
                                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M19.926,3c-1.869,0-3.435,1.218-3.922,3.044C15.153,3.296,12.934,3,12.022,3c-0.927,0-3.131,0.297-3.997,3.044C7.538,4.218,5.988,3,4.103,3C1.808,3,0,4.604,0,6.654c0,1.37,0.196,1.575,3.617,11.049c1.049,2.866,3.177,3.282,4.347,3.282c1.839,0,3.283-0.921,4.028-2.554C12.737,20.079,14.181,21,16.02,21c1.17,0,3.298-0.431,4.347-3.297C23.955,7.829,24,7.973,24,6.951C24.03,4.664,22.312,3,19.926,3z M21.162,8.433L21.162,8.433l-3.075,8.349c-0.371,1.017-0.995,1.762-2.167,1.762c-1.099,0-1.752-0.588-2.064-1.604l-1.841-5.557H11.97l-1.841,5.557c-0.326,1.017-0.98,1.59-2.063,1.59c-1.173,0-1.797-0.745-2.168-1.762L2.854,8.476C2.602,7.774,2.483,7.344,2.483,6.844c0-0.773,0.742-1.389,1.797-1.389c0.876,0,1.5,0.558,1.693,1.375l2.064,6.617h0.045l2.093-6.473c0.282-0.931,0.772-1.519,1.826-1.519s1.544,0.574,1.826,1.519l2.093,6.473h0.045l2.064-6.617c0.193-0.817,0.817-1.375,1.693-1.375c1.039,0,1.797,0.63,1.797,1.69C21.504,7.517,21.326,7.903,21.162,8.433z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Weebly <span
                                                                                class="badge bg-danger blink-text">New</span></h6>
                                                                        <span class="tx-default tx-14">Build the beautiful website you
                                                                            have always imagined, without having to know code.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('website-builder')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-success-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#17ca68" viewBox="0 0 92 92">
                                                                                <path
                                                                                    d="M46 0C20.6 0 0 20.6 0 46s20.6 46 46 46 46-20.6 46-46S71.4 0 46 0zm3.7 83.8c-.2 0-.4 0-.7.1V62.2c5.2-.1 9.9-.2 14.2-.5-3.8 11.7-10.9 19.5-13.5 22.1zm-7.4 0c-2.7-2.7-9.7-10.5-13.5-22.1 4.2.3 9 .5 14.2.5v21.7c-.2 0-.4-.1-.7-.1zM8 46c0-2.5.3-5 .7-7.4 2.2-.4 6.4-1 12.3-1.6-.5 2.9-.8 5.9-.8 9.1 0 3.2.3 6.2.7 9-5.8-.6-10.1-1.2-12.3-1.6-.3-2.5-.6-5-.6-7.5zm18.3 0c0-3.4.4-6.6 1-9.6 4.6-.3 9.8-.6 15.7-.6v20.4c-5.8-.1-11.1-.3-15.8-.7-.5-2.9-.9-6.1-.9-9.5zM49.6 8.2c2.7 2.7 9.6 10.7 13.5 22.1-4.2-.3-8.9-.5-14.1-.5V8.1c.2 0 .4.1.6.1zM43 8.1v21.7c-5.2.1-9.9.2-14.1.5 3.8-11.4 10.8-19.4 13.4-22.1.3 0 .5-.1.7-.1zm6 48.1V35.8c5.8.1 11.1.3 15.7.6.6 3 1 6.2 1 9.6 0 3.4-.3 6.6-.9 9.6-4.6.3-9.9.5-15.8.6zM70.9 37c5.9.6 10.1 1.2 12.3 1.6.5 2.4.8 4.9.8 7.4s-.3 5-.7 7.4c-2.2.4-6.4 1-12.3 1.6.5-2.9.7-5.9.7-9.1 0-3-.3-6.1-.8-8.9zm10.5-4.8c-2.8-.4-6.8-.9-11.9-1.4-2.4-8.6-6.6-15.5-10.1-20.4 10.1 3.8 18.1 11.8 22 21.8zM32.6 10.4c-3.6 4.8-7.7 11.7-10.1 20.3-5 .4-9 1-11.9 1.4 3.9-9.9 12-17.9 22-21.7zm-22 49.4c2.8.4 6.8.9 11.8 1.4 2.4 8.6 6.4 15.5 10 20.3-10-3.9-17.9-11.8-21.8-21.7zm49 21.7c3.6-4.8 7.6-11.6 10-20.2 5-.4 9-1 11.8-1.4-3.9 9.8-11.8 17.7-21.8 21.6z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Website Builder</h6>
                                                                        <span class="tx-default tx-14">Create your website instantly, no
                                                                            coding/design skills required. Choose from over 100 themes
                                                                            or simply drag-and-drop to customize your design.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-palette tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Design Your Website</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="javascript:void(0);" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" viewBox="0 0 24 24">
                                                                                <path fill="#7891EF"
                                                                                    d="M7,16a1,1,0,1,0,1,1A1,1,0,0,0,7,16Zm12.06-4,1.23-1.23a3,3,0,0,0,0-4.24L17.46,3.71a3,3,0,0,0-4.24,0L12,4.94A3,3,0,0,0,9,2H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V15A3,3,0,0,0,19.06,12ZM10,19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H9a1,1,0,0,1,1,1ZM12,7.76l2.64-2.64a1,1,0,0,1,1.41,0L18.88,8a1,1,0,0,1,0,1.41L16,12.29h0L12,16.24ZM20,19a1,1,0,0,1-1,1H11.82a3.12,3.12,0,0,0,.17-.92L17.07,14H19a1,1,0,0,1,1,1Z" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Themes <span
                                                                                class="badge bg-danger blink-text">New</span></h6>
                                                                        <span class="tx-default tx-14">Enhance the look and feel of your
                                                                            website. Select from a wide range of themes and templates
                                                                            for the web's top CMS platforms.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="javascript:void(0);" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-danger-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" viewBox="0 0 24 24">
                                                                                <path fill="#FB434D"
                                                                                    d="M9.71,6.29a1,1,0,0,0-1.42,0l-5,5a1,1,0,0,0,0,1.42l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L5.41,12l4.3-4.29A1,1,0,0,0,9.71,6.29Zm11,5-5-5a1,1,0,0,0-1.42,1.42L18.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5A1,1,0,0,0,20.71,11.29Z" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Plugins</h6>
                                                                        <span class="tx-default tx-14">Download plugins and scripts to add
                                                                            extra functionality to your website.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="javascript:void(0);" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-info-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" enable-background="new 0 0 24 24"
                                                                                viewBox="0 0 24 24">
                                                                                <path fill="#4EC2F0"
                                                                                    d="M13.6,10.9C13.7,11,13.8,11,14,11h7c0.6,0,1-0.4,1-1c0-0.2,0-0.3-0.1-0.4l-3.5-7c-0.3-0.5-0.9-0.7-1.4-0.4c-0.1,0.1-0.3,0.2-0.4,0.4l-3.5,7C12.9,10,13.1,10.6,13.6,10.9z M17.5,5.2L19.4,9h-3.8L17.5,5.2z M6.5,2C4,2,2,4,2,6.5S4,11,6.5,11S11,9,11,6.5C11,4,9,2,6.5,2z M6.5,9C5.1,9,4,7.9,4,6.5S5.1,4,6.5,4S9,5.1,9,6.5C9,7.9,7.9,9,6.5,9z M10.7,13.3C10.7,13.3,10.7,13.3,10.7,13.3c-0.4-0.4-1-0.4-1.4,0c0,0,0,0,0,0l-2.8,2.8l-2.8-2.8c-0.4-0.4-1-0.4-1.4,0c-0.4,0.4-0.4,1,0,1.4l2.8,2.8l-2.8,2.8c-0.4,0.4-0.4,1,0,1.4s1,0.4,1.4,0c0,0,0,0,0,0l2.8-2.8l2.8,2.8c0.4,0.4,1,0.4,1.4,0c0.4-0.4,0.4-1,0-1.4l-2.8-2.8l2.8-2.8C11.1,14.3,11.1,13.7,10.7,13.3z M21,13h-7c-0.6,0-1,0.4-1,1v7c0,0.6,0.4,1,1,1h7c0.6,0,1-0.4,1-1v-7C22,13.4,21.6,13,21,13z M20,20h-5v-5h5V20z" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Logos</h6>
                                                                        <span class="tx-default tx-14">Choose a customizable template and
                                                                            design a professional looking logo in minutes.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Hosting</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu">
                                            <li class="mega-menu">
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-hdd-rack tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Shared Hosting</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('linux-shared-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#fb9543" viewBox="0 0 128 128">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M113.823 104.595c-1.795-1.478-3.629-2.921-5.308-4.525-1.87-1.785-3.045-3.944-2.789-6.678.147-1.573-.216-2.926-2.113-3.452.446-1.154.864-1.928 1.033-2.753.188-.92.178-1.887.204-2.834.264-9.96-3.334-18.691-8.663-26.835-2.454-3.748-5.017-7.429-7.633-11.066-4.092-5.688-5.559-12.078-5.633-18.981-.036-3.166-.41-6.38-1.081-9.475-1.313-6.04-4.549-10.763-10.418-13.296-4.497-1.942-9.152-2.327-13.901-1.084-6.901 1.805-11.074 6.934-10.996 14.088.074 6.885.417 13.779.922 20.648.288 3.893-.312 7.252-2.895 10.34-2.484 2.969-4.706 6.172-6.858 9.397-1.229 1.844-2.317 3.853-3.077 5.931-2.07 5.663-3.973 11.373-7.276 16.5-1.224 1.9-1.363 4.026-.494 6.199.225.563.363 1.429.089 1.882-2.354 3.907-5.011 7.345-10.066 8.095-3.976.591-4.172 1.314-4.051 5.413.1 3.337.061 6.705-.28 10.021-.363 3.555.008 4.521 3.442 5.373 7.924 1.968 15.913 3.647 23.492 6.854 3.227 1.365 6.465.891 9.064-1.763 2.713-2.771 6.141-3.855 9.844-3.859 6.285-.005 12.572.298 18.86.369 1.702.02 2.679.653 3.364 2.199.84 1.893 2.26 3.284 4.445 3.526 4.193.462 8.013-.16 11.19-3.359 3.918-3.948 8.436-7.066 13.615-9.227 1.482-.619 2.878-1.592 4.103-2.648 2.231-1.922 2.113-3.146-.135-5zm-51.397-80.475c.758-2.601 2.537-4.289 5.243-4.801 2.276-.43 4.203.688 5.639 3.246 1.546 2.758 2.054 5.64.734 8.658-1.083 2.474-1.591 2.707-4.123 1.868-.474-.157-.937-.343-1.777-.652.708-.594 1.154-1.035 1.664-1.382 1.134-.772 1.452-1.858 1.346-3.148-.139-1.694-1.471-3.194-2.837-3.175-1.225.017-2.262 1.167-2.4 2.915-.086 1.089.095 2.199.173 3.589-3.446-1.023-4.711-3.525-3.662-7.118zm-12.75-2.251c1.274-1.928 3.197-2.314 5.101-1.024 2.029 1.376 3.547 5.256 2.763 7.576-.285.844-1.127 1.5-1.716 2.241l-.604-.374c-.23-1.253-.276-2.585-.757-3.733-.304-.728-1.257-1.184-1.919-1.762-.622.739-1.693 1.443-1.757 2.228-.088 1.084.477 2.28.969 3.331.311.661 1.001 1.145 1.713 1.916l-1.922 1.51c-3.018-2.7-3.915-8.82-1.871-11.909zm37.664 64.206c-.203 2.604-.5 2.713-3.118 3.098-1.859.272-2.359.756-2.453 2.964-.108 2.581-.101 5.171-.012 7.753.061 1.77-.537 3.158-1.755 4.393-6.764 6.856-14.845 10.105-24.512 8.926-4.17-.509-6.896-3.047-9.097-6.639.98-.363 1.705-.607 2.412-.894 3.122-1.27 3.706-3.955 1.213-6.277-1.884-1.757-3.986-3.283-6.007-4.892-1.954-1.555-3.934-3.078-5.891-4.629-1.668-1.323-2.305-3.028-2.345-5.188-.094-5.182.972-10.03 3.138-14.747 1.932-4.209 3.429-8.617 5.239-12.885.935-2.202 1.906-4.455 3.278-6.388 1.319-1.854 2.134-3.669 1.988-5.94-.084-1.276-.016-2.562-.016-3.843l.707-.352c1.141.985 2.302 1.949 3.423 2.959 4.045 3.646 7.892 3.813 12.319.67 1.888-1.341 3.93-2.47 5.927-3.652.497-.294 1.092-.423 1.934-.738 2.151 5.066 4.262 10.033 6.375 15 1.072 2.524 1.932 5.167 3.264 7.547 2.671 4.775 4.092 9.813 4.07 15.272-.012 2.83.137 5.67-.081 8.482z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Web Hosting (DirectAdmin)</h6>
                                                                        <span class="tx-default tx-14">Perfect for smaller websites and
                                                                            blogs. Comes with cPanel, PHP, Apache and more.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('windows-shared-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-success-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#17ca68"
                                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M22,2L11.2,3.6v8L22,11.5V2z M10.2,12.5L2,12.4l0,6.8l8.1,1.1L10.2,12.5L10.2,12.5z M2,4.8l0,6.8l8.1,0l0-7.9L2,4.8z M11.1,12.5l0,7.9L22,22l0-9.4L11.1,12.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Web Hosting (CPanel)</h6>
                                                                        <span class="tx-default tx-14">Perfect for smaller websites and
                                                                            blogs. Comes with Plesk, ASP, IIS and more.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('wordpress-shared-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#7891ef" viewBox="0 0 100 100">
                                                                                <path
                                                                                    d="M5 50c0 24.855 20.145 45 45 45 24.85 0 45-20.145 45-45C95 25.151 74.85 5 50 5 25.146 5 5 25.151 5 50m3.467 0a41.445 41.445 0 0 1 3.598-16.903l19.811 54.278C18.024 80.65 8.467 66.438 8.467 50M50 91.531c-4.077 0-8.015-.594-11.733-1.687L50.73 53.639 63.496 88.61c.083.207.186.39.293.565A41.316 41.316 0 0 1 50 91.531m33.564-42.31c2.369-5.925 3.162-10.662 3.162-14.874 0-1.529-.103-2.948-.287-4.273a41.34 41.34 0 0 1 5.086 19.927c0 15.324-8.301 28.698-20.645 35.894l12.684-36.674zm-8.955-12.772c1.576 2.765 3.427 6.32 3.427 11.455 0 3.557-1.058 8.027-3.161 13.428L70.73 75.168 55.721 30.53c2.506-.136 4.752-.396 4.752-.396 2.238-.266 1.971-3.549-.261-3.426 0 0-6.729.531-11.071.531-4.082 0-10.936-.531-10.936-.531-2.24-.123-2.499 3.296-.266 3.426 0 0 2.123.26 4.361.396l6.465 17.729-9.086 27.251L24.55 30.53c2.506-.136 4.758-.396 4.758-.396 2.239-.266 1.966-3.549-.266-3.426 0 0-6.725.531-11.072.531-.778 0-1.694-.02-2.67-.048C22.729 15.916 35.495 8.469 50 8.469c10.812 0 20.657 4.136 28.043 10.908-.178-.014-.355-.035-.533-.035-4.088 0-6.977 3.551-6.977 7.367.001 3.426 1.974 6.321 4.076 9.74">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Wordpress Shared
                                                                            Hosting</h6>
                                                                        <span class="tx-default tx-14">A secure, reliable and powerful
                                                                            platform crafter for wordpress.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-hdd-network tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Servers</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('virtualserver-linux-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-pink-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#f754fa" viewBox="0 0 128 128">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M113.823 104.595c-1.795-1.478-3.629-2.921-5.308-4.525-1.87-1.785-3.045-3.944-2.789-6.678.147-1.573-.216-2.926-2.113-3.452.446-1.154.864-1.928 1.033-2.753.188-.92.178-1.887.204-2.834.264-9.96-3.334-18.691-8.663-26.835-2.454-3.748-5.017-7.429-7.633-11.066-4.092-5.688-5.559-12.078-5.633-18.981-.036-3.166-.41-6.38-1.081-9.475-1.313-6.04-4.549-10.763-10.418-13.296-4.497-1.942-9.152-2.327-13.901-1.084-6.901 1.805-11.074 6.934-10.996 14.088.074 6.885.417 13.779.922 20.648.288 3.893-.312 7.252-2.895 10.34-2.484 2.969-4.706 6.172-6.858 9.397-1.229 1.844-2.317 3.853-3.077 5.931-2.07 5.663-3.973 11.373-7.276 16.5-1.224 1.9-1.363 4.026-.494 6.199.225.563.363 1.429.089 1.882-2.354 3.907-5.011 7.345-10.066 8.095-3.976.591-4.172 1.314-4.051 5.413.1 3.337.061 6.705-.28 10.021-.363 3.555.008 4.521 3.442 5.373 7.924 1.968 15.913 3.647 23.492 6.854 3.227 1.365 6.465.891 9.064-1.763 2.713-2.771 6.141-3.855 9.844-3.859 6.285-.005 12.572.298 18.86.369 1.702.02 2.679.653 3.364 2.199.84 1.893 2.26 3.284 4.445 3.526 4.193.462 8.013-.16 11.19-3.359 3.918-3.948 8.436-7.066 13.615-9.227 1.482-.619 2.878-1.592 4.103-2.648 2.231-1.922 2.113-3.146-.135-5zm-51.397-80.475c.758-2.601 2.537-4.289 5.243-4.801 2.276-.43 4.203.688 5.639 3.246 1.546 2.758 2.054 5.64.734 8.658-1.083 2.474-1.591 2.707-4.123 1.868-.474-.157-.937-.343-1.777-.652.708-.594 1.154-1.035 1.664-1.382 1.134-.772 1.452-1.858 1.346-3.148-.139-1.694-1.471-3.194-2.837-3.175-1.225.017-2.262 1.167-2.4 2.915-.086 1.089.095 2.199.173 3.589-3.446-1.023-4.711-3.525-3.662-7.118zm-12.75-2.251c1.274-1.928 3.197-2.314 5.101-1.024 2.029 1.376 3.547 5.256 2.763 7.576-.285.844-1.127 1.5-1.716 2.241l-.604-.374c-.23-1.253-.276-2.585-.757-3.733-.304-.728-1.257-1.184-1.919-1.762-.622.739-1.693 1.443-1.757 2.228-.088 1.084.477 2.28.969 3.331.311.661 1.001 1.145 1.713 1.916l-1.922 1.51c-3.018-2.7-3.915-8.82-1.871-11.909zm37.664 64.206c-.203 2.604-.5 2.713-3.118 3.098-1.859.272-2.359.756-2.453 2.964-.108 2.581-.101 5.171-.012 7.753.061 1.77-.537 3.158-1.755 4.393-6.764 6.856-14.845 10.105-24.512 8.926-4.17-.509-6.896-3.047-9.097-6.639.98-.363 1.705-.607 2.412-.894 3.122-1.27 3.706-3.955 1.213-6.277-1.884-1.757-3.986-3.283-6.007-4.892-1.954-1.555-3.934-3.078-5.891-4.629-1.668-1.323-2.305-3.028-2.345-5.188-.094-5.182.972-10.03 3.138-14.747 1.932-4.209 3.429-8.617 5.239-12.885.935-2.202 1.906-4.455 3.278-6.388 1.319-1.854 2.134-3.669 1.988-5.94-.084-1.276-.016-2.562-.016-3.843l.707-.352c1.141.985 2.302 1.949 3.423 2.959 4.045 3.646 7.892 3.813 12.319.67 1.888-1.341 3.93-2.47 5.927-3.652.497-.294 1.092-.423 1.934-.738 2.151 5.066 4.262 10.033 6.375 15 1.072 2.524 1.932 5.167 3.264 7.547 2.671 4.775 4.092 9.813 4.07 15.272-.012 2.83.137 5.67-.081 8.482z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Linux KVM VPS</h6>
                                                                        <span class="tx-default tx-14">With KVM Hypervisor implementation
                                                                            for a cost effective dedicated server experience.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('dedicated-server')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-primary-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" viewBox="0 0 24 24">
                                                                                <path fill="#1457E6"
                                                                                    d="M11,13a1,1,0,1,0,1,1A1,1,0,0,0,11,13ZM7,13a1,1,0,1,0,1,1A1,1,0,0,0,7,13ZM22,4a3,3,0,0,0-3-3H5A3,3,0,0,0,2,4V8a3,3,0,0,0,.78,2A3,3,0,0,0,2,12v4a3,3,0,0,0,3,3h6v2H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2H13V19h6a3,3,0,0,0,3-3V12a3,3,0,0,0-.78-2A3,3,0,0,0,22,8ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm0-8a1,1,0,0,1-1,1H5A1,1,0,0,1,4,8V4A1,1,0,0,1,5,3H19a1,1,0,0,1,1,1ZM11,5a1,1,0,1,0,1,1A1,1,0,0,0,11,5ZM7,5A1,1,0,1,0,8,6,1,1,0,0,0,7,5Z" />
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Dedicated Servers</h6>
                                                                        <span class="tx-default tx-14">Dedicated hardware and rock-solid
                                                                            performance. Perfect for larger websites and apps.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('windows-dedicated-server')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-danger-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#fb434d"
                                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M22,2L11.2,3.6v8L22,11.5V2z M10.2,12.5L2,12.4l0,6.8l8.1,1.1L10.2,12.5L10.2,12.5z M2,4.8l0,6.8l8.1,0l0-7.9L2,4.8z M11.1,12.5l0,7.9L22,22l0-9.4L11.1,12.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Windows Dedicated
                                                                            Servers</h6>
                                                                        <span class="tx-default tx-14">Dedicated hardware and rock-solid
                                                                            performance. Perfect for larger websites and apps.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-hdd-stack tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Reseller Hosting</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('linux-reseller-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-warning-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#f5b14b" viewBox="0 0 128 128">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M113.823 104.595c-1.795-1.478-3.629-2.921-5.308-4.525-1.87-1.785-3.045-3.944-2.789-6.678.147-1.573-.216-2.926-2.113-3.452.446-1.154.864-1.928 1.033-2.753.188-.92.178-1.887.204-2.834.264-9.96-3.334-18.691-8.663-26.835-2.454-3.748-5.017-7.429-7.633-11.066-4.092-5.688-5.559-12.078-5.633-18.981-.036-3.166-.41-6.38-1.081-9.475-1.313-6.04-4.549-10.763-10.418-13.296-4.497-1.942-9.152-2.327-13.901-1.084-6.901 1.805-11.074 6.934-10.996 14.088.074 6.885.417 13.779.922 20.648.288 3.893-.312 7.252-2.895 10.34-2.484 2.969-4.706 6.172-6.858 9.397-1.229 1.844-2.317 3.853-3.077 5.931-2.07 5.663-3.973 11.373-7.276 16.5-1.224 1.9-1.363 4.026-.494 6.199.225.563.363 1.429.089 1.882-2.354 3.907-5.011 7.345-10.066 8.095-3.976.591-4.172 1.314-4.051 5.413.1 3.337.061 6.705-.28 10.021-.363 3.555.008 4.521 3.442 5.373 7.924 1.968 15.913 3.647 23.492 6.854 3.227 1.365 6.465.891 9.064-1.763 2.713-2.771 6.141-3.855 9.844-3.859 6.285-.005 12.572.298 18.86.369 1.702.02 2.679.653 3.364 2.199.84 1.893 2.26 3.284 4.445 3.526 4.193.462 8.013-.16 11.19-3.359 3.918-3.948 8.436-7.066 13.615-9.227 1.482-.619 2.878-1.592 4.103-2.648 2.231-1.922 2.113-3.146-.135-5zm-51.397-80.475c.758-2.601 2.537-4.289 5.243-4.801 2.276-.43 4.203.688 5.639 3.246 1.546 2.758 2.054 5.64.734 8.658-1.083 2.474-1.591 2.707-4.123 1.868-.474-.157-.937-.343-1.777-.652.708-.594 1.154-1.035 1.664-1.382 1.134-.772 1.452-1.858 1.346-3.148-.139-1.694-1.471-3.194-2.837-3.175-1.225.017-2.262 1.167-2.4 2.915-.086 1.089.095 2.199.173 3.589-3.446-1.023-4.711-3.525-3.662-7.118zm-12.75-2.251c1.274-1.928 3.197-2.314 5.101-1.024 2.029 1.376 3.547 5.256 2.763 7.576-.285.844-1.127 1.5-1.716 2.241l-.604-.374c-.23-1.253-.276-2.585-.757-3.733-.304-.728-1.257-1.184-1.919-1.762-.622.739-1.693 1.443-1.757 2.228-.088 1.084.477 2.28.969 3.331.311.661 1.001 1.145 1.713 1.916l-1.922 1.51c-3.018-2.7-3.915-8.82-1.871-11.909zm37.664 64.206c-.203 2.604-.5 2.713-3.118 3.098-1.859.272-2.359.756-2.453 2.964-.108 2.581-.101 5.171-.012 7.753.061 1.77-.537 3.158-1.755 4.393-6.764 6.856-14.845 10.105-24.512 8.926-4.17-.509-6.896-3.047-9.097-6.639.98-.363 1.705-.607 2.412-.894 3.122-1.27 3.706-3.955 1.213-6.277-1.884-1.757-3.986-3.283-6.007-4.892-1.954-1.555-3.934-3.078-5.891-4.629-1.668-1.323-2.305-3.028-2.345-5.188-.094-5.182.972-10.03 3.138-14.747 1.932-4.209 3.429-8.617 5.239-12.885.935-2.202 1.906-4.455 3.278-6.388 1.319-1.854 2.134-3.669 1.988-5.94-.084-1.276-.016-2.562-.016-3.843l.707-.352c1.141.985 2.302 1.949 3.423 2.959 4.045 3.646 7.892 3.813 12.319.67 1.888-1.341 3.93-2.47 5.927-3.652.497-.294 1.092-.423 1.934-.738 2.151 5.066 4.262 10.033 6.375 15 1.072 2.524 1.932 5.167 3.264 7.547 2.671 4.775 4.092 9.813 4.07 15.272-.012 2.83.137 5.67-.081 8.482z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Reseller Hosting (DirectAdmin)</h6>
                                                                        <span class="tx-default tx-14">Start your hosting business today.
                                                                            Comes with free WHM, cPanel and WHMCS.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('windows-reseller-hosting')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-teal-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#4ac9bd"
                                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M22,2L11.2,3.6v8L22,11.5V2z M10.2,12.5L2,12.4l0,6.8l8.1,1.1L10.2,12.5L10.2,12.5z M2,4.8l0,6.8l8.1,0l0-7.9L2,4.8z M11.1,12.5l0,7.9L22,22l0-9.4L11.1,12.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Reseller
                                                                            Hosting (CPanel)</h6>
                                                                        <span class="tx-default tx-14">Start your hosting business today.
                                                                            Comes with free Plesk and WHMCS.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-nut tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Tools</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('codeguard-backup')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#7891ef"
                                                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M12.502,1.899h0.005H12.502L12.502,1.899z M12,2.086l8,2.958v7.126c0,3.083-1.34,5.656-3.983,7.647c-1.628,1.226-3.274,1.872-4.018,2.126c-0.722-0.245-2.378-0.892-4.016-2.126C5.34,17.826,4,15.253,4,12.17V5.044L12,2.086L12,2.086z M12-0.003c-0.088,0-0.175,0.018-0.26,0.053L2.49,3.47C2.2,3.58,2,3.86,2,4.17v8c0,9.11,9.71,11.78,9.81,11.81C11.87,23.99,11.94,24,12,24s0.13-0.01,0.19-0.02c0.1-0.03,9.81-2.7,9.81-11.81v-8c0-0.31-0.2-0.59-0.49-0.7l-9.25-3.42C12.175,0.015,12.088-0.003,12-0.003L12-0.003z">
                                                                                </path>
                                                                                <path
                                                                                    d="M9.25 13.69c.31.28.33.75.06 1.06C9.16 14.92 8.96 15 8.75 15c-.18 0-.36-.06-.5-.19l-2.5-2.25C5.59 12.42 5.5 12.21 5.5 12c0-.21.09-.42.25-.56l2.5-2.25c.31-.27.78-.25 1.06.06.27.31.25.78-.06 1.06L7.37 12 9.25 13.69zM13.48 8.92l-1.5 6.5c-.084.369-.42.64-.9.56-.4-.09-.65-.5-.56-.9l1.5-6.5c.09-.4.5-.65.9-.56C13.32 8.11 13.57 8.52 13.48 8.92zM18.25 12.56l-2.5 2.25c-.14.13-.32.19-.5.19-.21 0-.41-.08-.56-.25-.27-.31-.25-.78.06-1.06L16.63 12l-1.88-1.69c-.31-.28-.33-.75-.06-1.06.28-.31.75-.33 1.06-.06l2.5 2.25c.16.14.25.35.25.56C18.5 12.21 18.41 12.42 18.25 12.56z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Codegaurd Website
                                                                            Backup</h6>
                                                                        <span class="tx-default tx-14">Your data is precious. Secure your
                                                                            website in just a few minues.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('sitelock')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-secondary-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#fb9543"
                                                                                enable-background="new 0 0 48 48" viewBox="0 0 48 48">
                                                                                <rect width="3.42" height="3" x="7.39" y="5.63"></rect>
                                                                                <rect width="3.42" height="3" x="13.47" y="5.63"></rect>
                                                                                <rect width="3.42" height="3" x="19.56" y="5.63"></rect>
                                                                                <path
                                                                                    d="M43.31,0.5H4.69C2.38,0.5,0.5,2.38,0.5,4.69v7.57v31.04c0,2.31,1.88,4.19,4.19,4.19h38.62c2.31,0,4.19-1.88,4.19-4.19V12.26V4.69C47.5,2.38,45.62,0.5,43.31,0.5z M3.5,4.69c0-0.66,0.53-1.19,1.19-1.19h38.62c0.66,0,1.19,0.53,1.19,1.19v6.07h-41V4.69z M44.5,43.31c0,0.66-0.53,1.19-1.19,1.19H4.69c-0.66,0-1.19-0.53-1.19-1.19V13.76h41V43.31z">
                                                                                </path>
                                                                                <path
                                                                                    d="M15.59,41.67h16.83c0.83,0,1.5-0.67,1.5-1.5V26.71c0-0.83-0.67-1.5-1.5-1.5h-0.69v-0.9c0-3.93-2.95-7.23-6.86-7.67c-0.02,0-0.05,0-0.07-0.01c-0.26-0.03-0.52-0.04-0.79-0.04c-1.76,0-3.49,0.62-4.88,1.74c-1.8,1.48-2.84,3.66-2.84,5.98v0.9h-0.69c-0.83,0-1.5,0.67-1.5,1.5v13.46C14.09,41,14.76,41.67,15.59,41.67z M30.92,38.67H17.09V28.21h0.69h12.45h0.69V38.67z M19.28,24.31c0-1.42,0.63-2.75,1.73-3.65c0.98-0.79,2.27-1.21,3.45-1.04c0.03,0,0.08,0.01,0.12,0.01c2.37,0.29,4.15,2.3,4.15,4.68v0.9h-9.45V24.31z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">SiteLock Malware
                                                                            Detector</h6>
                                                                        <span class="tx-default tx-14">Over 5000 websites get attacked
                                                                            everyday. Get SiteLock and secure your website from hackers,
                                                                            viruses and malware.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('acronis-backup')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-info-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="backup-icon"
                                                                                height="20" width="20" fill="#4ec2f0"
                                                                                data-name="Layer 1" viewBox="0 0 128 128">
                                                                                <path fill="none" stroke="#4ec2f0"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    stroke-width="16"
                                                                                    d="M100,84a20,20,0,1,0-8.58-38A32,32,0,0,0,28,52c0,.18,0,.35,0,.53A16,16,0,1,0,24,84h4">
                                                                                </path>
                                                                                <line x1="64" x2="64" y1="104" y2="60" fill="none"
                                                                                    stroke="#4ec2f0" stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="16"></line>
                                                                                <polyline fill="none" stroke="#4ec2f0"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    stroke-width="16" points="50 92 64 108 78 92">
                                                                                </polyline>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Acronis Cyber Backup <span
                                                                                class="badge bg-danger blink-text">New</span></h6>
                                                                        <span class="tx-default tx-14">Backup your data on the
                                                                            cloud-recover any time.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Cloud</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-onefr">
                                            <li class="mega-menu-onefr">
                                                <div class="">
                                                    <ul>
                                                        <li class="slide">
                                                            <a href="{{url('cloud')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 bg-warning-transparent rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="22"
                                                                                width="22" fill="#f5b14b" viewBox="0 0 48 48">
                                                                                <path class="cloud-icon" fill="none"
                                                                                    d="M0 0h48v48h-48z"></path>
                                                                                <path
                                                                                    d="M38.71 20.07c-1.36-6.88-7.43-12.07-14.71-12.07-5.78 0-10.79 3.28-13.3 8.07-6.01.65-10.7 5.74-10.7 11.93 0 6.63 5.37 12 12 12h26c5.52 0 10-4.48 10-10 0-5.28-4.11-9.56-9.29-9.93zm-.71 15.93h-26c-4.42 0-8-3.58-8-8s3.58-8 8-8h1.42c1.31-4.61 5.54-8 10.58-8 6.08 0 11 4.92 11 11v1h3c3.31 0 6 2.69 6 6s-2.69 6-6 6z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Cloud</h6>
                                                                        <span class="tx-default tx-14">Power your business with Cloud. 2x
                                                                            faster and 4x scalable.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('professional-cloud')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="22"
                                                                                width="22" fill="#7891ef"
                                                                                enable-background="new 0 0 48 48" viewBox="0 0 48 48">
                                                                                <path
                                                                                    d="M39.9,33.8c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.5,0,2.8-1,3.3-2.4c0.3-0.9,0.5-1.9,0.5-2.9c0-4.8-3.6-8.9-8.4-9.5    c-0.9-0.1-1.7-0.9-1.7-1.8c-0.4-5-4.5-8.9-9.5-8.9c-5,0-9.1,3.9-9.5,8.9c-0.1,0.9-0.8,1.7-1.7,1.8c-4.8,0.6-8.4,4.6-8.4,9.5    c0,1,0.2,2,0.5,2.9c0.5,1.4,1.8,2.4,3.3,2.4c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2c-3.2,0-6-2.1-7-5.1c-0.4-1.3-0.7-2.7-0.7-4.2    c0-6.3,4.3-11.7,10.3-13.1c1.2-6.3,6.7-11,13.2-11c6.5,0,12,4.7,13.2,11c6,1.4,10.3,6.8,10.3,13.1c0,1.4-0.2,2.8-0.7,4.2    C45.9,31.8,43.1,33.8,39.9,33.8z">
                                                                                </path>
                                                                                <path
                                                                                    d="M16.2,44.4c-1.1,0-2-0.9-2-2V23.3c0-1.1,0.9-2,2-2s2,0.9,2,2v19.1C18.1,43.5,17.2,44.4,16.2,44.4z">
                                                                                </path>
                                                                                <path
                                                                                    d="M16.2 47.5L16.2 47.5c-.6 0-1.2-.3-1.6-.8l-4.9-6.5c-.6-.9-.5-2.1.4-2.7.9-.6 2.1-.5 2.7.4l3.3 4.4 3.3-4.4c.6-.9 1.9-1 2.7-.4.9.6 1 1.9.4 2.7l-4.9 6.5C17.4 47.2 16.8 47.5 16.2 47.5zM29.9 47.5c-1.1 0-2-.9-2-2V26.4c0-1.1.9-2 2-2s2 .9 2 2v19.1C31.8 46.6 31 47.5 29.9 47.5z">
                                                                                </path>
                                                                                <path
                                                                                    d="M34.7,31.8c-0.6,0-1.2-0.3-1.6-0.8l-3.3-4.4L26.6,31c-0.6,0.9-1.9,1-2.7,0.4c-0.9-0.6-1-1.9-0.4-2.7l4.9-6.5     c0.7-1,2.4-1,3.1,0l4.9,6.5c0.6,0.9,0.5,2.1-0.4,2.7C35.6,31.6,35.1,31.8,34.7,31.8z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Professional Cloud</h6>
                                                                        <span class="tx-default tx-14">Get cloud power and flexibility
                                                                            with the simplicity of fully managed servers.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Email & Productivity</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-twofr">
                                            <li class="mega-menu-twofr">
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-envelope tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Email</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('business-email')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 bg-teal-transparent rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#4ac9bd"
                                                                                enable-background="new 0 0 32 32" viewBox="0 0 32 32">
                                                                                <path
                                                                                    d="M27,4.70996H5c-2.48145,0-4.5,2.01855-4.5,4.5v13.58008c0,2.48145,2.01855,4.5,4.5,4.5h22c2.48145,0,4.5-2.01855,4.5-4.5V9.20996C31.5,6.72852,29.48145,4.70996,27,4.70996z M25.67072,7.70996l-1.38074,1.09003l-7.35999,5.81c-0.54999,0.42999-1.31,0.42999-1.85999,0L7.96997,9l-1.6366-1.29004H25.67072z M27,24.29004H5c-0.82715,0-1.5-0.67285-1.5-1.5V9.30469l9.71002,7.66528C14.03003,17.62,15.02002,17.94,16,17.94s1.96997-0.32001,2.78998-0.97003L28.5,9.30811v13.48193C28.5,23.61719,27.82715,24.29004,27,24.29004z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Business Email</h6>
                                                                        <span class="tx-default tx-14">Simple and powerful webmail.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="">
                                                    <ul>
                                                        <li>
                                                            <p class="mb-3 d-flex align-items-center menu-label">
                                                                <i class="bi bi-envelope-plus tx-primary tx-18 me-2"></i>
                                                                <span class="tx-14 tx-primary">Email &amp; Productvity</span>
                                                            </p>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('google-workspace')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-secondary-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" viewBox="0 0 24 24">
                                                                                <path fill="#fb9543"
                                                                                    d="M22,3H2A2,2,0,0,0,0,5V19a2,2,0,0,0,2,2H22a2,2,0,0,0,2-2V5A2,2,0,0,0,22,3ZM12,9.88,4.07,4H19.93ZM4,9.21l7.7,5.69a.5.5,0,0,0,.59,0L20,9.21V20H4Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Google Workspace</h6>
                                                                        <span class="tx-default tx-14">Cloud based email and productivity
                                                                            suite.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('enterprise-email')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#7891ef"
                                                                                enable-background="new 0 0 34 34" viewBox="0 0 34 34">
                                                                                <path
                                                                                    d="M1.00998,2.99999v28c0,1.09998,0.90002,2,2,2h18c1.10004,0,2-0.90002,2-2v-5.96002h-2v2.92999c0,0.55005-0.44995,1-1,1h-16c-0.54999,0-1-0.44995-1-1v-23.94c0-0.54999,0.45001-1,1-1h4.01843l1.01373,1.52063C9.22763,4.82878,9.53989,4.9959,9.87424,4.9959h4.26294c0.33435,0,0.64661-0.16711,0.83203-0.44531L15.983,3.02995h4.02698c0.55005,0,1,0.45001,1,1v5.01001h2V2.99999c0-1.09998-0.89996-2-2-2h-18C1.91,0.99999,1.00998,1.90001,1.00998,2.99999z M10.01999,30.00999h4c0.54999,0,1,0.45001,1,1s-0.45001,1-1,1h-4c-0.54999,0-1-0.45001-1-1S9.47,30.00999,10.01999,30.00999z">
                                                                                </path>
                                                                                <path
                                                                                    d="M11.56003,11.27001c-0.36005,0.5-0.57001,1.10999-0.57001,1.75995v8c0,1.65002,1.33997,3,3,3h16c1.64996,0,3-1.34998,3-3v-8c0-0.62994-0.20001-1.22998-0.54004-1.71997c-0.54999-0.77002-1.45001-1.28003-2.45996-1.28003h-16C12.99002,10.02995,12.10001,10.52001,11.56003,11.27001z M30.99002,13.02995v8c0,0.55005-0.45001,1-1,1h-16c-0.55005,0-1-0.44995-1-1v-8c0-0.25995,0.09998-0.48999,0.25995-0.66998l8.45874,5.51318c0.1651,0.10754,0.37793,0.10822,0.54364,0.00159l8.50763-5.47473C30.91,12.56999,30.99002,12.78996,30.99002,13.02995z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Enterprise Email <span
                                                                                class="badge bg-danger blink-text">New</span></h6>
                                                                        <span class="tx-default tx-14">Advanced and Corporate-class
                                                                            email.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Security</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-onefr">
                                            <li class="mega-menu-onefr">
                                                <div class="">
                                                    <ul>
                                                        <li class="slide">
                                                            <a href="{{url('ssl-certificates')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 bg-secondary-transparent rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#fb9543" viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M12,13a1,1,0,0,0-1,1v3a1,1,0,0,0,2,0V14A1,1,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">SSL Certificates</h6>
                                                                        <span class="tx-default tx-14">Powerful encryption for your
                                                                            data.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('sitelock')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-purple-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                                                width="20" fill="#7891ef"
                                                                                enable-background="new 0 0 48 48" viewBox="0 0 48 48">
                                                                                <rect width="3" height="6.1" x="14.97" y="27.28"></rect>
                                                                                <path
                                                                                    d="M35.92,24.35c-1.19,0-2.36,0.2-3.48,0.56v-5.47c0-0.83-0.67-1.5-1.5-1.5h-4.25v-7.22c0-5.63-4.58-10.22-10.22-10.22c-5.63,0-10.22,4.58-10.22,10.22v7.22H2c-0.83,0-1.5,0.67-1.5,1.5v20.4c0,0.83,0.67,1.5,1.5,1.5h23.69c2,3.77,5.91,6.16,10.23,6.16c6.38,0,11.58-5.19,11.58-11.57C47.5,29.54,42.31,24.35,35.92,24.35z M9.25,10.72c0-3.98,3.24-7.22,7.22-7.22c3.98,0,7.22,3.24,7.22,7.22v7.22H9.25V10.72z M3.5,38.34v-17.4h25.94v5.4c-0.1,0.07-0.18,0.14-0.28,0.21c-0.18,0.13-0.36,0.27-0.53,0.41c-0.21,0.17-0.42,0.35-0.61,0.54c-0.16,0.15-0.32,0.3-0.47,0.46c-0.19,0.2-0.36,0.4-0.54,0.61c-0.14,0.17-0.28,0.34-0.41,0.51c-0.16,0.22-0.31,0.45-0.46,0.68c-0.11,0.18-0.23,0.36-0.34,0.55c-0.14,0.24-0.25,0.5-0.37,0.75c-0.09,0.19-0.18,0.37-0.26,0.56c-0.11,0.27-0.2,0.55-0.29,0.83c-0.06,0.19-0.13,0.37-0.18,0.56c-0.08,0.31-0.14,0.64-0.19,0.96c-0.03,0.16-0.07,0.32-0.09,0.49c-0.06,0.49-0.1,0.99-0.1,1.49c0,0.4,0.02,0.8,0.06,1.19c0.01,0.13,0.04,0.26,0.06,0.39c0.04,0.26,0.07,0.52,0.12,0.78c0,0.02,0,0.04,0.01,0.05H3.5z M35.92,44.5c-3.46,0-6.56-2.06-7.91-5.25c-0.44-1.04-0.67-2.16-0.67-3.32c0-0.77,0.1-1.52,0.3-2.25c0.49-1.81,1.58-3.43,3.09-4.58c0.3-0.23,0.62-0.44,0.95-0.63c0,0,0,0,0,0c0,0,0,0,0,0c1.29-0.73,2.75-1.12,4.24-1.12c4.73,0,8.58,3.85,8.58,8.58C44.5,40.66,40.65,44.5,35.92,44.5z">
                                                                                </path>
                                                                                <path
                                                                                    d="M34.4,36.73l-3.2-3.2l-2.12,2.12l4.26,4.26c0.28,0.28,0.66,0.44,1.06,0.44s0.78-0.16,1.06-0.44l6.73-6.73l-2.12-2.12L34.4,36.73z">
                                                                                </path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">SiteLock</h6>
                                                                        <span class="tx-default tx-14">Over 500 widgets get attacked
                                                                            everyday. Get SiteLock and secure your website from hackers,
                                                                            viruses and malware.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="slide">
                                                            <a href="{{url('codeguard-backup')}}" class="side-menu__item">
                                                                <div class="d-lg-flex align-items-start">
                                                                    <div class="me-3">
                                                                        <span
                                                                            class="avatar header__dropavatar mb-2 rounded-circle bg-success-transparent">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="backup-icon"
                                                                                height="20" width="20" fill="#17ca68"
                                                                                data-name="Layer 1" viewBox="0 0 128 128">
                                                                                <path fill="none" stroke="#17ca68"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    stroke-width="16"
                                                                                    d="M100,84a20,20,0,1,0-8.58-38A32,32,0,0,0,28,52c0,.18,0,.35,0,.53A16,16,0,1,0,24,84h4">
                                                                                </path>
                                                                                <line x1="64" x2="64" y1="104" y2="60" fill="none"
                                                                                    stroke="#17ca68" stroke-linecap="round"
                                                                                    stroke-linejoin="round" stroke-width="16"></line>
                                                                                <polyline fill="none" stroke="#17ca68"
                                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                                    stroke-width="16" points="50 92 64 108 78 92">
                                                                                </polyline>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-grow-1">
                                                                        <h6 class="d-block mb-1">Codegaurd Website
                                                                            Backup</h6>
                                                                        <span class="tx-default tx-14">Your data is preciuos. Secure your
                                                                            website in just a few minutes.</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <span class="side-menu__label">Pages</span>
                                            <i class="fe fe-chevron-down side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-slide-menu-onefr without-icon">
                                            <li class="slide">
                                                <a href="{{url('about')}}" class="side-menu__item">
                                                    <i class="bi bi-house"></i>
                                                    <span class="fw-500 tx-15">About Us</span>
                                                </a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('blog')}}" class="side-menu__item">
                                                    <i class="bi bi-box"></i>
                                                    <span class="fw-500 tx-15">Blog</span>
                                                </a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('faqs')}}" class="side-menu__item">
                                                    <i class="bi bi-question-octagon"></i>
                                                    <span class="fw-500 tx-15">FAQ</span>
                                                </a>
                                            </li>                                            
                                            <li class="slide">
                                                <a href="{{url('contact-us')}}" class="side-menu__item">
                                                    <i class="bi bi-telephone"></i>
                                                    <span class="fw-500 tx-15">Contact Us</span>
                                                </a>
                                            </li>
                                           
                                       
                                        </ul>
                                    </li>
                                    <!-- End::slide -->
                
                                </ul>
                                <div class="d-xl-flex d-lg-none d-grid gap-2 text-center">
                                    <a href="{{url('register')}}" class="btn btn-secondary min-w-fit-content">Register</a>
                                    <a href="{{url('login')}}" class="btn btn-outline-light login-btn min-w-fit-content">Login</a>
                                </div>
                                
                            </nav>
                            <!-- End::nav -->
                
                        </div>
                        <!-- End::main-sidebar -->
                
                    </aside>
                    <!-- End::app-sidebar -->
                </div>
