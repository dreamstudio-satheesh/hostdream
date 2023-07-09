        
        <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Switcher</h5>
                <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-light tx-primary" data-bs-dismiss="offcanvas">
                    <i class="fe fe-x"></i>
                </a>
            </div>
            <div class="offcanvas-body mt-3">

                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="row switcher-style">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-light-theme">
                                    Light
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-light-theme" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-dark-theme">
                                    Dark
                                </label>
                                <input class="form-check-input" type="radio" name="theme-style" id="switcher-dark-theme">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Directions:</p>
                    <div class="row switcher-style">
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-ltr">
                                    LTR
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-ltr" checked>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-rtl">
                                    RTL
                                </label>
                                <input class="form-check-input" type="radio" name="direction" id="switcher-rtl">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="row switcher-style">
                        <div class="col-6 col-xl-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-full-width">
                                    Full Width
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-full-width" checked>
                            </div>
                        </div>
                        <div class="col-6 col-xl-4">
                            <div class="form-check switch-select">
                                <label class="form-check-label" for="switcher-boxed">
                                    Boxed
                                </label>
                                <input class="form-check-input" type="radio" name="layout-width" id="switcher-boxed">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="d-flex align-items-center switcher-style">
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-primary-1" type="radio"
                                name="theme-primary" id="switcher-primary">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-primary-2" type="radio"
                                name="theme-primary" id="switcher-primary1">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-primary-3" type="radio" 
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-primary-4" type="radio" 
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-primary-5" type="radio" 
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="form-check switch-select me-3 ps-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="d-flex align-items-center switcher-style">
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-bg-1" type="radio"
                                name="theme-background" id="switcher-background" checked>
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-bg-2" type="radio"
                                name="theme-background" id="switcher-background1">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-bg-3" type="radio" name="theme-background"
                                id="switcher-background2">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-bg-4" type="radio"
                                name="theme-background" id="switcher-background3">
                        </div>
                        <div class="form-check switch-select me-3">
                            <input class="form-check-input color-input color-bg-5" type="radio"
                                name="theme-background" id="switcher-background4">
                        </div>
                        <div class="form-check switch-select me-3 ps-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between canvas-footer">
                    <a href="https://spruko.com/licenses" role="button" class="btn btn-primary">Licenses</a>
                    <a href="https://themeforest.net/user/spruko/portfolio" role="button" class="btn btn-secondary">Our Portfolio</a>
                    <button id="reset-all" class="btn btn-danger">Reset</button>
                </div>

            </div>
        </div>
        