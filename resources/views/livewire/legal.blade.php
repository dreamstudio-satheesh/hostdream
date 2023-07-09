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
                                    <p class="mb-3 content-1 h5 text-white">Legal <span class="tx-info-dark">Agreement</span></p>
                                    <p class="mb-0 tx-26">Everything you need to know about the Legal Agreements.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="mb-5">
                            <h2>Legal <span class="tx-primary">Agreement</span></h2>
                            <p class="mb-0 tx-muted">Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut</p>
                        </div>

                        <div class="row spec-tabs">
                            <div class="col-lg-4 col-md-5">
                                <div class="nav flex-column nav-pills mb-5 mb-lg-0 me-3" id="spec-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a href="#" class="nav-link active" id="spec-pills-1-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-1" role="tab" aria-controls="spec-pills-1" aria-selected="true">
                                        <span><i class="bi bi-hdd-stack"></i></span>
                                        <div>
                                            <p class="mb-0">Acceptable Use</p>
                                            <small class="fw-light">Policy</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-2-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-2" role="tab" aria-controls="spec-pills-2" aria-selected="false">
                                        <span><i class="bi bi-code-slash"></i></span>
                                        <div>
                                            <p class="mb-0">Infringement</p>
                                            <small class="fw-light">Policy</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-3-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-3" role="tab" aria-controls="spec-pills-3" aria-selected="false">
                                        <span><i class="bi bi-clouds"></i></span>
                                        <div>
                                            <p class="mb-0">Backup</p>
                                            <small class="fw-light">Policy</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-4-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-4" role="tab" aria-controls="spec-pills-4" aria-selected="false">
                                        <span><i class="bi bi-lightning-charge"></i></span>
                                        <div>
                                            <p class="mb-0">Data</p>
                                            <small class="fw-light">Request Policy</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-5-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-5" role="tab" aria-controls="spec-pills-5" aria-selected="false">
                                        <span><i class="bi bi-gift"></i></span>
                                        <div>
                                            <p class="mb-0">Customer</p>
                                            <small class="fw-light"> Master Agreement</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-6-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-6" role="tab" aria-controls="spec-pills-6" aria-selected="false">
                                        <span><i class="bi bi-window-dock"></i></span>
                                        <div>
                                            <p class="mb-0">Domain</p>
                                            <small class="fw-light"> Registration Agreement</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-7-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-7" role="tab" aria-controls="spec-pills-7" aria-selected="false">
                                        <span><i class="bi bi-hdd-network"></i></span>
                                        <div>
                                            <p class="mb-0">Customer</p>
                                            <small class="fw-light"> Hosting Agreement</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-8-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-8" role="tab" aria-controls="spec-pills-8" aria-selected="false">
                                        <span><i class="bi bi-hdd"></i></span>
                                        <div>
                                            <p class="mb-0">Customer</p>
                                            <small class="fw-light">Digital Certificate Agreement</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-9-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-9" role="tab" aria-controls="spec-pills-9" aria-selected="false">
                                        <span><i class="bi bi-pencil-square"></i></span>
                                        <div>
                                            <p class="mb-0">Customer</p>
                                            <small class="fw-light">Domain Registration Agreement</small>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="nav-link" id="spec-pills-10-tab" data-bs-toggle="pill" data-bs-target="#spec-pills-10" role="tab" aria-controls="spec-pills-10" aria-selected="false">
                                        <span><i class="bi bi-grid"></i></span>
                                        <div>
                                            <p class="mb-0">Customer</p>
                                            <small class="fw-light">Web Services Agreement</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="tab-content" id="spec-pills-tabContent">
                                    <div class="tab-pane fade show active" id="spec-pills-1" role="tabpanel" aria-labelledby="spec-pills-1-tab">
                                        <h2>Acceptable Use Policy</h2>

                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h4>1. Prohibited Uses:</h4>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                            <b>No Illegal or Harmful Use</b>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Unauthorized System Access or Network Abuse</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li> 
                                            <b>No Adult Content</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Storage of Backups</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h4>2. Zero Tolerance Spam Policy</h4>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                            <b>No Illegal or Harmful Use</b>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Unauthorized System Access or Network Abuse</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li> 
                                            <b>No Adult Content</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Storage of Backups</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h4>3. Defamation and Objectionable Content</h4>
                                        <ol style="list-style: upper-alpha;">
                                            <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                        </ol>

                                        <h4>4. Enforcement</h4>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                            <b>Resellers</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>Direct customers.</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>

                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-2" role="tabpanel" aria-labelledby="spec-pills-2-tab">
                                        <h2>Infringement Policy</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>Counter Notice Procedure For Customers</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                            <b>No Illegal or Harmful Use</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Unauthorized System Access or Network Abuse</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Adult Content</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li> 
                                            <b>No Storage of Backups</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-3" role="tabpanel" aria-labelledby="spec-pills-3-tab">
                                        <h2>Backup Policy</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                            <b>No Illegal or Harmful Use </b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Unauthorized System Access or Network Abuse</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Adult Content</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Storage of Backups</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <b>No Storage of Backups</b> 
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-4" role="tabpanel" aria-labelledby="spec-pills-4-tab">
                                        <h2>Data Request Policy</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>1. Privacy Notice</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>2. Types of Requests</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <ol>
                                            <li>
                                            <h6> Data Requests.</h6>
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                            <h6> Preservation Requests.</h6>
                                            <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                <ol>
                                                    <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                                    <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                                    <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                                    <li>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                                </ol>
                                            </li>
                                        </ol>
                                        <h4>3. Emergency Requests.</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h4>Disclosure of Non-Public Domain Registrant Information. </h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-5" role="tabpanel" aria-labelledby="spec-pills-5-tab">
                                        <h2>TERMS OF SERVICE:</h2>
                                        <p class="tx-muted">It is essential that you read this TOS prior to purchasing any Service(s) from the company.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Additional Policies and Agreements</h3>
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

                                        <h3>Account Eligibility</h3>
                                        <ol>
                                            <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                            <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                            <li class="mb-2">Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</li>
                                        </ol>

                                        <h3>Transfers</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Content</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Compliance with Applicable Law.</h3>
                                        <p>Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Third Party Products and Services</h3>
                                        <ol>
                                            <li>
                                                <h6>Third Party Providers</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Reseller or Licensor</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Third Party Websites</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h3>Prohibited Persons (Countries, Entities, And Individuals).</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Account Security</h3>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h3>HIPAA Disclaimer</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Compatibility with the Services</h3>
                                        <ol style="list-style: upper-alpha;">
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h3>Billing and Payment Information</h3>
                                        <ol>
                                            <li>
                                                <h6>Prepayment</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Autorenewal</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Taxes</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Late Payment</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Domain Payments.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Fraud</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Invoice Disputes.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h3>Money-Back Guarantee and Refund Policy.</h3>
                                        <ol>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h3>Resource Usage</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Uptime Guarantee.</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Store</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>WordPress Plugins.</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Coupons</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Limitation of Liability</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Indemnification</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Arbitration</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h3>Independent Contractor</h3>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-6" role="tabpanel" aria-labelledby="spec-pills-6-tab">
                                        <h2>Domain Registration Agreement</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>

                                        <h4>1. Our Services</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>2. Limitation of Liability</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>3. Multiple Domain Registrations</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <h4>4. Fees</h4>
                                        <ol>
                                            <li>
                                                <h6>Payment of fees as a condition to domain registration</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Reservation of right to modify fees. </h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Credit card charge-backs for domain registrations.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Credit card charge-backs for non-domain registration services</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>

                                        </ol>

                                        <h4>5. Required Domain Registration Information</h4>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol>
                                            <li>
                                                <h6>Registration information.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Additional registration information</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Use of Registration Information and Additional Registration Information. </h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Information updating and accuracy obligations.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Information requirements for renewals.</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Ownership of data</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                            <li>
                                                <h6>Registrant Verification</h6>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                            </li>
                                        </ol>

                                        <h4>6. Domain Privacy Service</h4>
                                        <ol>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>

                                        <h4>7. Domain Parking</h4>
                                        <ol>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                        <h4>8. Registration Renewal</h4>
                                        <ol>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-7" role="tabpanel" aria-labelledby="spec-pills-7-tab">
                                        <h2>Customer Hosting Agreement</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                <ol>
                                                    <li>
                                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                        <ol style="list-style: upper-alpha;">
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                        </ol>
                                                    </li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                </ol>
                                            </li>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                <ol>
                                                    <li>
                                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                        <ol style="list-style: upper-alpha;">
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                        </ol>
                                                    </li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>

                                                </ol>
                                            </li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-8" role="tabpanel" aria-labelledby="spec-pills-8-tab">
                                        <h2>Customer Digital Certificate Agreement</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol style="list-style: upper-alpha;">
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-9" role="tabpanel" aria-labelledby="spec-pills-9-tab">
                                        <h2>Customer Domain Registration Agreement</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol>
                                            <li>
                                                <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                                <ol style="list-style: upper-alpha;">
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                    <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                                </ol>
                                            </li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                    </div>
                                    <div class="tab-pane fade" id="spec-pills-10" role="tabpanel" aria-labelledby="spec-pills-10-tab">
                                        <h2>Customer Web Services Agreement</h2>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p>
                                        <ol style="list-style: upper-alpha;">
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                            <li><p>Invidunt erat elitr ut accusam amet ipsum lorem, elitr labore lorem sanctus no eos consetetur duo takimata ut, ea dolor. Justo aliquyam duo vero clita aliquyam vero eirmod stet amet. Dolores est eos et est kasd, invidunt aliquyam no sadipscing, et dolor magna consetetur consetetur ipsum.</p></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
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