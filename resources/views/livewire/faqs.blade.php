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
                                    <p class="mb-3 content-1 h5 text-white">Frequently Asked <span class="tx-info-dark">Questions</span></p>
                                    <p class="mb-0 tx-26">Everything you need to know about the product.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section">
                    <div class="container">
                        <div class="heading-section">
                            <div class="heading-subtitle"><span class="tx-primary tx-16 fw-semibold">FAQ'S</span></div>
                            <div class="heading-title">We Are Here To <span class="tx-primary">Help You</span></div>
                            <div class="heading-description">Browse Through The Most Frequently Asked Questions</div>
                        </div>
                        <form action="javascript:void(0);" class="mb-5">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="form-group custom-form-group">
                                        <input type="text" class="form-control form-control-lg rounded-pill" placeholder="Ask a question">
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row mb-4">
                            <div class="tab-style-2 mb-4">
                                <ul class="nav nav-pills d-md-flex d-block justify-content-center" role="tablist">
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link active" data-bs-toggle="pill" data-bs-target="#web-hosting" aria-selected="true" role="tab"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" enable-background="new 0 0 66 66" viewBox="0 0 66 66"><path d="M65,16.4c0-1.5-1.2-2.7-2.7-2.7h-9v-1c0-0.6-0.4-1-1-1c-0.6,0-1,0.4-1,1v1H36.6c-1-2.8-2.6-5.3-4.8-7.3C28.4,3.3,24,1.6,19.3,1.6c0,0,0,0,0,0c0,0,0,0,0,0c-0.2,0-0.5,0-0.7,0C8.8,2,1,10.1,1,19.9c0,11.9,11.3,20.7,22.8,17.7c0.1,0.2,0.2,0.3,0.3,0.5c-0.4,0.5-0.6,1-0.6,1.7v8.4c0,1.5,1.2,2.7,2.7,2.7h28.6v3c0,0.6,0.4,1,1,1c0.6,0,1-0.4,1-1v-3h5.5c1.5,0,2.7-1.2,2.7-2.7v-8.4c0-0.6-0.2-1.2-0.6-1.7c0.4-0.5,0.6-1,0.6-1.7v-8.4c0-0.6-0.2-1.2-0.6-1.7c0.4-0.5,0.6-1,0.6-1.7V16.4z M63,16.4v8.4c0,0.4-0.3,0.7-0.7,0.7H26.2c-0.4,0-0.7-0.3-0.7-0.7v-8.4c0-0.4,0.3-0.7,0.7-0.7h36.2C62.7,15.8,63,16.1,63,16.4zM63,28.1v8.4c0,0.4-0.3,0.7-0.7,0.7H26.2c-0.4,0-0.7-0.3-0.7-0.7v-8.4c0-0.4,0.3-0.7,0.7-0.7h36.2C62.7,27.4,63,27.7,63,28.1zM20.3,27.4v-6.5h3.2v3.9c0,0.6,0.2,1.2,0.6,1.7c-0.3,0.4-0.5,0.9-0.6,1.4C22.5,27.6,21.4,27.5,20.3,27.4z M18.3,36.1c-2.3-0.4-4.4-2.2-6-5.1c1.9-0.9,3.9-1.4,6-1.5V36.1z M20.3,29.4c1.1,0.1,2.2,0.2,3.2,0.5v4.6c-1,0.9-2.1,1.4-3.2,1.6V29.4zM23.5,16.4v2.5h-3.2v-6c2.4-0.1,4.8-0.8,7-1.8c0.3,0.9,0.6,1.8,0.9,2.7h-2C24.7,13.8,23.5,15,23.5,16.4z M20.3,3.7c2.4,0.4,4.6,2.4,6.2,5.5c-1.9,0.9-4,1.5-6.2,1.6V3.7z M28.2,8.2C27.6,7,26.9,6,26.1,5.1c1.2,0.6,2.4,1.3,3.4,2.1C29.1,7.6,28.7,7.9,28.2,8.2z M18.3,10.8c-2.1-0.1-4.3-0.7-6.2-1.6c1.6-3.1,3.8-5.1,6.2-5.5V10.8z M10.4,8.2c-0.5-0.3-0.9-0.6-1.3-1c1-0.8,2.2-1.5,3.4-2.1C11.7,6,11,7,10.4,8.2z M11.3,11c2.2,1.1,4.6,1.7,7,1.8v6H9.8C9.9,16.1,10.4,13.4,11.3,11z M18.3,20.9v6.5c-2.4,0.1-4.7,0.7-6.8,1.7c-1-2.4-1.6-5.3-1.7-8.3H18.3z M10.6,31.9c0.6,1,1.2,1.9,1.8,2.7c-1.1-0.5-2.1-1.1-3-1.9C9.8,32.5,10.2,32.2,10.6,31.9z M34.4,13.8h-4.2c-0.3-1.3-0.7-2.6-1.1-3.7c0.7-0.4,1.4-0.9,2-1.5C32.5,10.1,33.6,11.8,34.4,13.8z M7.6,8.6c0.6,0.5,1.3,1,2,1.4c-1.1,2.7-1.7,5.7-1.8,8.8H3.1C3.3,14.9,5,11.3,7.6,8.6z M3.1,20.9h4.7c0.1,3.3,0.8,6.5,1.9,9.2C9,30.5,8.4,31,7.8,31.4C5.1,28.7,3.3,25,3.1,20.9z M63,48.1c0,0.4-0.3,0.7-0.7,0.7H26.2c-0.4,0-0.7-0.3-0.7-0.7v-8.4c0-0.4,0.3-0.7,0.7-0.7h36.2c0.4,0,0.7,0.3,0.7,0.7V48.1z"/><path d="M37.2 17.7H30c-.6 0-1 .4-1 1 0 .6.4 1 1 1h7.2c.6 0 1-.4 1-1C38.2 18.2 37.7 17.7 37.2 17.7zM37.2 21.5H30c-.6 0-1 .4-1 1 0 .6.4 1 1 1h7.2c.6 0 1-.4 1-1C38.2 21.9 37.7 21.5 37.2 21.5zM51.1 20.6c0 2 1.6 3.7 3.7 3.7 2 0 3.7-1.6 3.7-3.7 0-2-1.6-3.7-3.7-3.7C52.8 16.9 51.1 18.6 51.1 20.6zM54.8 18.9c.9 0 1.7.8 1.7 1.7 0 .9-.8 1.7-1.7 1.7s-1.7-.8-1.7-1.7C53.1 19.7 53.9 18.9 54.8 18.9zM30 31.4h7.2c.6 0 1-.4 1-1 0-.6-.4-1-1-1H30c-.6 0-1 .4-1 1C29 30.9 29.5 31.4 30 31.4zM30 35.1h7.2c.6 0 1-.4 1-1 0-.6-.4-1-1-1H30c-.6 0-1 .4-1 1C29 34.7 29.5 35.1 30 35.1zM54.8 35.9c2 0 3.7-1.6 3.7-3.7s-1.6-3.7-3.7-3.7c-2 0-3.7 1.6-3.7 3.7S52.8 35.9 54.8 35.9zM54.8 30.6c.9 0 1.7.8 1.7 1.7 0 .9-.8 1.7-1.7 1.7s-1.7-.8-1.7-1.7C53.1 31.3 53.9 30.6 54.8 30.6zM37.2 41H30c-.6 0-1 .4-1 1 0 .6.4 1 1 1h7.2c.6 0 1-.4 1-1C38.2 41.5 37.7 41 37.2 41zM37.2 44.8H30c-.6 0-1 .4-1 1 0 .6.4 1 1 1h7.2c.6 0 1-.4 1-1C38.2 45.3 37.7 44.8 37.2 44.8zM54.8 40.2c-2 0-3.7 1.6-3.7 3.7 0 2 1.6 3.7 3.7 3.7 2 0 3.7-1.6 3.7-3.7C58.5 41.9 56.8 40.2 54.8 40.2zM54.8 45.6c-.9 0-1.7-.8-1.7-1.7s.8-1.7 1.7-1.7 1.7.8 1.7 1.7S55.7 45.6 54.8 45.6zM33.6 4.5c-.6 0-1 .4-1 1 0 .6.4 1 1 1h2c.6 0 1-.4 1-1 0-.6-.4-1-1-1H33.6zM40.5 4.5c-.6 0-1 .4-1 1 0 .6.4 1 1 1h4.9c.6 0 1-.4 1-1 0-.6-.4-1-1-1H40.5zM52.3 8.5c.6 0 1-.4 1-1v-2c0-.6-.4-1-1-1h-2c-.6 0-1 .4-1 1 0 .6.4 1 1 1h1v1C51.3 8 51.8 8.5 52.3 8.5zM41.5 62.4c-.6 0-1 .4-1 1 0 .6.4 1 1 1h4c.6 0 1-.4 1-1 0-.6-.4-1-1-1H41.5zM17.5 64.4h4c.6 0 1-.4 1-1 0-.6-.4-1-1-1h-4c-.6 0-1 .4-1 1C16.5 64 16.9 64.4 17.5 64.4zM15.1 60.8c0 .6.4 1 1 1 .6 0 1-.4 1-1v-4c0-.6-.4-1-1-1-.6 0-1 .4-1 1V60.8zM16.1 45.8c.6 0 1-.4 1-1-.2-2.5.6-5-1-5-.6 0-1 .4-1 1v4C15.1 45.3 15.6 45.8 16.1 45.8zM49.5 62.4c-.6 0-1 .4-1 1 0 .6.4 1 1 1h4c.6 0 1-.4 1-1 0-.6-.4-1-1-1H49.5zM55.8 56.8c-.6 0-1 .4-1 1v4c0 .6.4 1 1 1 .6 0 1-.4 1-1v-4C56.8 57.2 56.4 56.8 55.8 56.8zM33.5 62.4c-.6 0-1 .4-1 1 0 .6.4 1 1 1h4c.6 0 1-.4 1-1 0-.6-.4-1-1-1H33.5zM25.5 62.4c-.6 0-1 .4-1 1 0 .6.4 1 1 1h4c.6 0 1-.4 1-1 0-.6-.4-1-1-1H25.5zM15.1 52.8c0 .6.4 1 1 1 .6 0 1-.4 1-1v-4c0-.6-.4-1-1-1-.6 0-1 .4-1 1V52.8z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">Web Hosting</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link" data-bs-toggle="pill" data-bs-target="#servers" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" enable-background="new 0 0 3876.8 3869.2" viewBox="0 0 3876.8 3869.2"><path d="M1837.1,2053.4c-119-109.4-119.1-248.2,0-357.8c268.6-247,1050.5-299.3,1507.6-121.5c334.7,130.2,362.6,338.2,209.2,479.3
                                                    C3226.9,2354,2166.5,2356.3,1837.1,2053.4z M2090.1,1687.1c-138.5,53.9-221.2,124-221.2,187.5s82.7,133.6,221.2,187.5
                                                    c332.7,129.4,878.1,129.3,1210.6,0c138.5-53.9,221.2-124,221.2-187.5s-82.7-133.6-221.2-187.5
                                                    C2968.1,1557.7,2422.7,1557.7,2090.1,1687.1z"/><path d="M1747.8,3293.3V1874.5c0-33.5,27.1-60.6,60.6-60.6s60.6,27.1,60.6,60.6v1418.7c0,63.5,82.7,133.6,221.2,187.5
                                                    c332.7,129.4,878,129.3,1210.6,0c138.5-53.9,221.2-124,221.2-187.5V1874.5c0-33.5,27.1-60.6,60.6-60.6s60.6,27.1,60.6,60.6v1418.7
                                                    c0,63.3-30.9,125.2-89.3,178.9c-50.3,46.2-120.6,87.1-209.2,121.5C2774.9,3815.3,1747.8,3673.4,1747.8,3293.3z"/><path d="M2046.2,3124.8c-138.9-54-298.4-151.3-298.4-300.4c0-33.5,27.1-60.6,60.6-60.6s60.6,27.1,60.6,60.6
                                                    c0,63.5,82.7,133.6,221.2,187.5c332.6,129.4,878.1,129.3,1210.6,0c138.5-53.9,221.2-124,221.2-187.5c0-33.5,27.1-60.6,60.6-60.6
                                                    s60.6,27.1,60.6,60.6C3643.1,3204.4,2616.3,3346.5,2046.2,3124.8z"/><path d="M1747.8,2355.5v-480.9c0-33.5,27.1-60.6,60.6-60.6s60.6,27.1,60.6,60.6v480.9c0,63.5,82.7,133.6,221.2,187.5
                                                    c332.7,129.4,878,129.3,1210.6,0c138.5-53.9,221.2-124,221.2-187.5c0-33.5,27.1-60.6,60.6-60.6s60.6,27.1,60.6,60.6
                                                    c0,149.2-159.6,246.4-298.4,300.4C2774.9,2877.5,1747.8,2735.6,1747.8,2355.5z"/><path d="M1808.3 2002H422.8c-104.3 0-189.2-84.9-189.2-189.2V1408c0-104.3 84.9-189.2 189.2-189.2h2436.7c104.3 0 189.2 84.9 189.2 189.2v140.8c0 33.5-27.1 60.6-60.6 60.6s-60.6-27.1-60.6-60.6V1408c0-37.5-30.5-68-68-68H422.8c-37.5 0-68 30.5-68 68v404.8c0 37.5 30.5 68 68 68h1385.5c33.5 0 60.6 27.1 60.6 60.6C1868.9 1974.9 1841.8 2002 1808.3 2002zM1808.3 3050.4H422.8c-104.3 0-189.2-84.9-189.2-189.2v-404.9c0-104.3 84.9-189.2 189.2-189.2h1385.5c33.5 0 60.6 27.1 60.6 60.6s-27.1 60.6-60.6 60.6H422.8c-37.5 0-68 30.5-68 68v404.9c0 37.5 30.5 68 68 68h1385.5c33.5 0 60.6 27.1 60.6 60.6S1841.8 3050.4 1808.3 3050.4z"/><path d="M631.8 1339.9c-33.5 0-60.6-27.1-60.6-60.6V893c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v386.4C692.4 1312.8 665.2 1339.9 631.8 1339.9zM2650.6 1339.9c-33.5 0-60.6-27.1-60.6-60.6V893c0-33.5 27.1-60.6 60.6-60.6s60.6 27.1 60.6 60.6v386.4C2711.1 1312.8 2684 1339.9 2650.6 1339.9zM631.8 2388.4c-33.5 0-60.6-27.1-60.6-60.6v-386.4c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v386.4C692.4 2361.2 665.2 2388.4 631.8 2388.4zM858.3 3471.9H510.2c-33.5 0-60.6-27.1-60.6-60.6v-421.5c0-33.5 27.1-60.6 60.6-60.6s60.6 27.1 60.6 60.6v360.9h246.5l153-383.4c12.4-31.1 47.6-46.2 78.7-33.8 31.1 12.4 46.2 47.6 33.8 78.7l-168.2 421.5C905.4 3456.8 883.1 3471.9 858.3 3471.9zM586.9 1764.9c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C647.5 1737.8 620.4 1764.9 586.9 1764.9zM869.1 1764.9c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C929.6 1737.8 902.5 1764.9 869.1 1764.9zM1151.2 1764.9c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C1211.8 1737.8 1184.7 1764.9 1151.2 1764.9z"/><path d="M2876.2,953.6H406.1c-95.1,0-172.5-77.4-172.5-172.5V342.8c0-95.1,77.4-172.5,172.5-172.5h2470.1
                                                    c95.1,0,172.5,77.4,172.5,172.5v438.3C3048.7,876.2,2971.3,953.6,2876.2,953.6z M406.1,291.5c-28.3,0-51.3,23-51.3,51.3v438.3
                                                    c0,28.3,23,51.3,51.3,51.3h2470.1c28.3,0,51.3-23,51.3-51.3V342.8c0-28.3-23-51.3-51.3-51.3L406.1,291.5L406.1,291.5z"/><path d="M586.9 716.5c-33.5 0-60.6-27.1-60.6-60.6V468c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C647.5 689.4 620.4 716.5 586.9 716.5zM869.1 716.5c-33.5 0-60.6-27.1-60.6-60.6V468c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C929.6 689.4 902.5 716.5 869.1 716.5zM1151.2 716.5c-33.5 0-60.6-27.1-60.6-60.6V468c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C1211.8 689.4 1184.7 716.5 1151.2 716.5zM2695.5 622.5H2569c-33.5 0-60.6-27.1-60.6-60.6 0-33.5 27.1-60.6 60.6-60.6h126.4c33.5 0 60.6 27.1 60.6 60.6C2756 595.4 2728.9 622.5 2695.5 622.5zM2340.7 622.5h-126.4c-33.5 0-60.6-27.1-60.6-60.6 0-33.5 27.1-60.6 60.6-60.6h126.4c33.5 0 60.6 27.1 60.6 60.6C2401.3 595.4 2374.2 622.5 2340.7 622.5zM1986 622.5h-126.4c-33.5 0-60.6-27.1-60.6-60.6 0-33.5 27.1-60.6 60.6-60.6H1986c33.5 0 60.6 27.1 60.6 60.6C2046.5 595.4 2019.4 622.5 1986 622.5zM586.9 2813.3c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C647.5 2786.2 620.4 2813.3 586.9 2813.3zM869.1 2813.3c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C929.6 2786.2 902.5 2813.3 869.1 2813.3zM1151.2 2813.3c-33.5 0-60.6-27.1-60.6-60.6v-187.9c0-33.5 27.1-60.6 60.6-60.6 33.5 0 60.6 27.1 60.6 60.6v187.9C1211.8 2786.2 1184.7 2813.3 1151.2 2813.3z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">Servers</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link" data-bs-toggle="pill" data-bs-target="#ssl" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" enable-background="new 0 0 66 66" viewBox="0 0 66 66"><polygon points="14.9 40.2 14.9 40.2 14.9 40.2"/><path d="M3.6,44.2l22.9,6.6c0.7,0.2,1.4,0.3,2.2,0.3c1,0,1.9-0.2,2.8-0.6c2.7-1.2,5.5-1.5,9-1.9c1.2-0.1,2.5-0.3,3.8-0.5c0.1,0.8,0.6,1.5,1.4,1.9l8.5,4.1c0.1,0.1,0.3,0.1,0.4,0.1l-0.6,1.3c-0.2,0.5,0,1.1,0.5,1.3c0.5,0.2,1.1,0,1.3-0.5l9-19.2c0.2-0.5,0-1.1-0.5-1.3c-0.5-0.2-1.1,0-1.3,0.5l-0.6,1.3c-0.1-0.1-0.2-0.2-0.4-0.2l-8.5-4.1c-1-0.5-2.2-0.2-2.9,0.6c-3.2-1.7-6.5-2.7-9.6-3V9.9c0-0.5-0.5-1-1-1H6.5c-0.5,0-1,0.5-1,1v27.4l-0.5,0c-2.3-0.2-4.2,1.7-4,4C1.2,42.6,2.2,43.8,3.6,44.2zM52.1,35.6c0.1-0.2,0.3-0.2,0.4-0.2c0,0,0,0,0.1,0c0,0,0.1,0,0.1,0l8.5,4.1c0.2,0.1,0.2,0.2,0.2,0.3c0,0.1,0,0.2,0,0.3v0l-5.8,12.2l0,0c-0.1,0.2-0.4,0.3-0.5,0.2l-8.5-4.1c-0.2-0.1-0.3-0.2-0.3-0.4c0-0.1,0-0.1,0-0.2L52.1,35.6z M19.7,10.9h7.2v7.7l-3-2c-0.2-0.1-0.4-0.2-0.5-0.2c-0.2,0-0.4,0.1-0.6,0.2l-3,2V10.9z M7.5,10.9h10.2v9.6c0,0.4,0.2,0.7,0.5,0.9c0.3,0.2,0.7,0.1,1,0l4-2.7l4,2.7c0.3,0.2,0.7,0.2,1,0c0.3-0.2,0.5-0.5,0.5-0.9v-9.6h10.3V31H39c-7.2,0-10.2,3.8-11.1,3.8c-0.2,0-1.4-0.2-3.3-0.2c-6.5,0-9,2.6-9.1,2.8c-0.2,0.3-0.4,0.5-0.5,0.8l-7.6-0.8V10.9z M4.6,39.2c0,0,0.1,0,0.2,0c6.5,0.7,9,0.9,9.8,1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0.3,1.2,1.5,2.3,3.1,2.3h0.2l16.5-0.7c0.3,0,0.6-0.2,0.7-0.4c0.2-0.2,0.2-0.4,0.2-0.6c0-0.6-0.5-1-1-1l-16.5,0.7c-1,0-1.6-1.1-1.1-1.9c3-2.7,9.4-1.8,10.8-1.8c0.7,0,1.4-0.3,1.9-0.7c5.7-4.6,13.5-3.6,20-0.2L45,46.1c-1.6,0.3-3.2,0.4-4.6,0.6c-3.6,0.4-6.6,0.7-9.6,2c-1.1,0.5-2.4,0.5-3.6,0.2L4.2,42.3c-0.6-0.2-1.1-0.7-1.2-1.4C2.9,40,3.7,39.2,4.6,39.2z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">SSL Certificate</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link" data-bs-toggle="pill" data-bs-target="#backup" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" data-name="Layer 1" viewBox="0 0 128 128"><path d="M122,23.26331v4.29144A3.983,3.983,0,0,1,124,31v77a4,4,0,0,1-4,4H8a4,4,0,0,1-4-4V31a3.98291,3.98291,0,0,1,2-3.44519v-4.2915A8.00673,8.00673,0,0,0,0,31v77a8.00909,8.00909,0,0,0,8,8H47v4H37a2,2,0,0,0,0,4H91a2,2,0,0,0,0-4H81v-4h39a8.009,8.009,0,0,0,8-8V31A8.00679,8.00679,0,0,0,122,23.26331ZM77,120H51v-4H77Z"/><path d="M12,106H116a2.0001,2.0001,0,0,0,2-2V14a6.00656,6.00656,0,0,0-6-6H16a6.00656,6.00656,0,0,0-6,6v90A2.0001,2.0001,0,0,0,12,106Zm2-92a2.002,2.002,0,0,1,2-2h96a2.002,2.002,0,0,1,2,2V24H14Zm0,14H114v74H14Z"/><path d="M108 16h-4a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4zM96 16H92a2 2 0 0 0 0 4h4a2 2 0 0 0 0-4zM26.5 52h5.68323q-.1246-1.94843-.15283-4H26.5a2 2 0 0 0 0 4zM101.5 48H95.96979q-.02838 2.0517-.15277 4H101.5a2 2 0 0 0 0-4zM26.5 67h8.26636c-.38062-1.27826-.717-2.62238-1.02936-4H26.5a2 2 0 0 0 0 4zM101.5 63H94.26324c-.31232 1.3775-.64838 2.72192-1.02893 4H101.5a2 2 0 0 0 0-4zM27 78a2 2 0 0 0 0 4H41.77716c-.837-1.242-1.65674-2.57062-2.44232-4zM101 78H88.66364c-.78516 1.42847-1.60352 2.75909-2.43976 4H101a2 2 0 0 0 0-4zM91.9837 45.22894a4 4 0 0 0-4.62347-3.87158 26.49641 26.49641 0 0 1-3.5354.20734c-3.96466 0-11.47614-.72955-17.23773-5.61548a4.00009 4.00009 0 0 0-5.17413 0c-5.76166 4.88593-13.27307 5.61548-17.23773 5.61548a26.434 26.434 0 0 1-3.54773-.20923 4.00916 4.00916 0 0 0-4.61115 3.87347C35.592 66.59552 43.55994 79.29919 50.319 86.19379c4.64063 4.7337 9.93958 7.88226 12.63733 8.633l-.00873.032a4.016 4.016 0 0 0 1.03943.14117L63.9978 95h.00372l.01154-.00006a4.01584 4.01584 0 0 0 1.06995-.1496l-.009-.032c2.707-.76562 7.98383-3.90808 12.60681-8.62378C84.43994 79.29974 92.408 66.59589 91.9837 45.22894zM64.00226 91L64 90.99976 63.9978 91c-.32587 0-24.7002-9.54407-23.98224-45.69165a29.451 29.451 0 0 0 4.15961.25635C49.07544 45.5647 57.38623 44.60852 64 39c6.61316 5.608 14.92438 6.5647 19.82483 6.5647a29.437 29.437 0 0 0 4.15961-.25635C88.70233 81.45367 64.33105 91 64.00226 91z"/><path d="M73,57.96429a9.00007,9.00007,0,0,0-18,0,8.88718,8.88718,0,0,0,3.00214,6.69043l-.80737,10.02411A4,4,0,0,0,61.18182,79h5.63635a4.00006,4.00006,0,0,0,3.98712-4.32117l-.80743-10.02411A8.88718,8.88718,0,0,0,73,57.96429Zm-7.18182,4.62048,1,12.41522H61.18182l1-12.41522a5.00014,5.00014,0,1,1,3.63635,0Z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">Backup</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link" data-bs-toggle="pill" data-bs-target="#sitelock" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" viewBox="0 0 16.933 16.933"><path d="m 11.36316,1.0086334e-5 c -0.352112,0 -0.355572,0.528703403666 0.002,0.528650743666 1.959974,-2.8866e-4 3.740614,1.13425167 4.568605,2.90938397 0.828001,1.7751325 0.550127,3.8668155 -0.710013,5.3676376 -1.132104,1.3483206 -2.872105,1.9949326 -4.586696,1.7456306 l 0.41753,-0.29921 c 0.294761,-0.21291 -0.01344,-0.6388886 -0.306982,-0.4299498 L 9.8355454,10.474823 c -0.1204671,0.0847 -0.1485766,0.251512 -0.062498,0.371042 l 0.6542056,0.91208 c 0.204664,0.29264 0.641614,-0.0209 0.42994,-0.3085 l -0.264574,-0.36897 c 1.883896,0.26232 3.794132,-0.454172 5.037294,-1.9347722 C 17.021411,7.4884206 17.326154,5.1746573 16.411755,3.2142747 15.449778,1.1738213 13.447935,1.0086334e-5 11.36316,1.0086334e-5 Z M 11.37686,1.8495127 c -2.0431141,0 -3.7030459,1.6678824 -3.7030459,3.7170852 0,2.0492128 1.6599318,3.7165752 3.7030459,3.7165752 2.043112,0 3.705114,-1.6673624 3.705114,-3.7165752 0,-2.0492028 -1.662002,-3.7170852 -3.705114,-3.7170852 z m 0,0.5296808 c 1.756059,0 3.175956,1.423122 3.175956,3.1874044 0,1.7642924 -1.419897,3.1874043 -3.175956,3.1874043 -1.7560605,0 -3.173378,-1.4231119 -3.173378,-3.1874043 0,-1.7642824 1.4173175,-3.1874044 3.173378,-3.1874044 z m 10e-4,0.796331 c -0.129648,-7.601e-4 -0.259774,0.0864 -0.265614,0.2640704 v 0.2769903 c -0.518338,0.1167503 -0.91207,0.5683409 -0.91207,1.1224118 0,0.3901104 0.196896,0.6130805 0.43356,0.7286409 0.236665,0.1155602 0.48859,0.1323001 0.716734,0.1560602 0.228154,0.023799 0.43342,0.0544 0.538978,0.1059301 0.0653,0.0363 0.136936,0.0714 0.136936,0.2516705 0,0.3378305 -0.278194,0.6198407 -0.638704,0.6232207 -0.302634,-0.006 -0.540088,-0.1918101 -0.640776,-0.5234908 -0.116058,-0.3333203 -0.601466,-0.1787802 -0.505388,0.1602002 0.170246,0.5273809 0.524498,0.7703511 0.87073,0.8593814 v 0.2077403 c 0.0189,0.3575803 0.523988,0.3446802 0.529158,0 V 7.2031901 c 0.519398,-0.1163702 0.914118,-0.5732507 0.914128,-1.1218914 0,-0.3849307 -0.196886,-0.6110012 -0.43355,-0.7265713 -0.236664,-0.11556 -0.488578,-0.1322999 -0.716734,-0.1560601 -0.228144,-0.023799 -0.43342,-0.0559 -0.538977,-0.10749 -0.0785,-0.0383 -0.136937,-0.0891 -0.136937,-0.2521803 0,-0.3440205 0.278204,-0.613641 0.638706,-0.6170211 0.324362,0.012599 0.534928,0.1830205 0.640774,0.5178008 0.112998,0.3269305 0.596168,0.1879203 0.5059,-0.1586502 C 12.383716,4.1668159 12.105072,3.8399054 11.641404,3.7222653 V 3.4395949 C 11.636404,3.2649846 11.507516,3.1762844 11.37786,3.1755245 Z M 3.816738,11.138355 c -0.3034033,0.14526 -0.5544474,0.27374 -0.7441231,0.37621 -0.1372468,-0.23943 -0.396841,-0.40153 -0.6898642,-0.40153 H 0.79528176 C 0.34990199,11.113035 0,11.473175 0,11.908335 v 3.702626 c 0,0.43516 0.35282191,0.795301 0.79528176,0.795301 H 2.3827454 c 0.4351501,0 0.7933227,-0.35041 0.7927016,-0.795301 l 5.292e-4,-0.0455 c 0.5160882,-0.0836 1.0080969,-0.19597 1.5874637,-0.21808 0.3270725,10e-6 0.9389683,0.46354 1.3363192,0.74415 0.566217,0.399692 1.1761231,0.841802 1.8375678,0.841802 0.1991056,0 0.3985911,-0.0655 0.661965,-0.16381 1.4474571,-0.541142 4.5005671,-2.268404 6.2790561,-3.308846 0.393801,-0.21777 0.556507,-0.68579 0.420641,-1.09451 -0.0194,-0.0584 -0.0447,-0.116 -0.0765,-0.17105 -0.243936,-0.422512 -0.739114,-0.525412 -1.220572,-0.361222 l -3.702544,1.282102 c -0.0648,-0.27417 -0.239104,-0.51971 -0.5007388,-0.67077 C 8.7637892,11.890335 7.6908738,11.320185 6.6324981,10.888735 6.2996157,10.762285 5.90729,10.587309 5.5236614,10.583519 5.1400329,10.579729 4.3969345,10.860585 3.816738,11.138355 Z m 2.6189403,0.2403 c 1.0845852,0.46055 2.0346433,0.947402 3.0974089,1.525492 0.2968829,0.17141 0.3154924,0.51438 0.1953355,0.722432 -0.1410467,0.24432 -0.466639,0.34266 -0.7244832,0.19379 L 7.3999362,12.894327 c -0.3140728,-0.21258 -0.6049462,0.29217 -0.2635439,0.45734 l 1.6034832,0.925522 c 0.5037886,0.29087 1.1550235,0.11729 1.4458765,-0.38654 0.0381,-0.066 0.07,-0.13678 0.0925,-0.2067 l 3.896832,-1.350312 c 0.340322,-0.1158 0.541506,0.003 0.612866,0.17415 0.0714,0.1712 0.0129,0.39485 -0.165367,0.48989 -2.069433,1.192862 -4.7627912,2.723614 -6.2082579,3.275774 -0.2407747,0.0898 -0.4354403,0.132811 -0.4769692,0.132811 -0.3968607,0 -0.9749677,-0.352151 -1.5332048,-0.746211 -0.3786214,-0.25481 -1.0622158,-0.832272 -1.6406825,-0.841812 -0.4280601,10e-4 -1.1244442,0.12465 -1.5874637,0.209812 v -2.964686 c 0,0 0.4416999,-0.24573 0.8665904,-0.44648 0.5487573,-0.25931 1.1508835,-0.50385 1.4528855,-0.50185 0.3020021,0.002 0.6779935,0.15805 0.9401975,0.26362 z m -5.64035694,0.26355 H 2.3827854 c 0.1547751,0 0.2635044,0.125277 0.2635044,0.26665 0,1.367352 5.292e-4,3.439376 5.292e-4,3.702106 0,0.14392 -0.1165274,0.266081 -0.263544,0.26613 l -1.58798354,5.29e-4 c -0.14186599,4.7e-5 -0.2656023,-0.115509 -0.26562315,-0.266659 l -5.1065e-4,-3.702626 c -2.242e-5,-0.162539 0.13066813,-0.26613 0.2661637,-0.26613 z m 0.26354404,3.440106 c -5e-6,0.146126 0.1184621,0.26458 0.2645738,0.26458 0.1461117,0 0.265094,-0.111218 0.265094,-0.26458 0,-0.153362 -0.1220786,-0.264582 -0.2678828,-0.264582 -0.1458042,0 -0.26178,0.118456 -0.261785,0.264582 z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">Sitelock</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item position-relative flex-md-grow-1 me-4 mb-2" role="presentation">
                                        <div class="card faq-category-card all-ease-03">
                                            <a href="javascript:void(0);" class="tab-style-2-link stretched-link" data-bs-toggle="pill" data-bs-target="#others" aria-selected="false" role="tab" tabindex="-1"></a>
                                            <div class="card-body text-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="faq-category-icon" height="45" width="45" enable-background="new 0 0 64 64" viewBox="0 0 64 64"><path d="M43.7,36.4h8.4c4.5,0,8.1-3.6,8.1-8.1c0-2.2-0.8-4.2-2.4-5.7c-1.3-1.3-3-2.1-4.8-2.3c-0.2-1.5-0.9-2.9-2-4c-1.3-1.3-3.1-2-4.9-2c-1,0-1.9,0.2-2.8,0.6c-1.5-4.2-5.4-7-9.9-7c-4.3,0-8.1,2.6-9.7,6.4c-1.7-1.2-3.8-1.9-6-1.9c-5.8,0-10.5,4.7-10.5,10.5c0,0.6,0.1,1.3,0.2,1.9C3.2,25.2,0,28.7,0,32.9c0,2.2,0.8,4.2,2.4,5.7C3.9,40.1,5.9,41,8.1,41h28.3C39.6,41,42.4,39.1,43.7,36.4z M33.4,9.8c4,0,7.5,2.7,8.4,6.7c0.1,0.3,0.3,0.6,0.6,0.7c0.3,0.1,0.6,0.1,0.9-0.1c0.8-0.6,1.8-0.9,2.8-0.9c1.3,0,2.6,0.5,3.5,1.5c0.9,0.9,1.5,2.2,1.5,3.5c0,0.5,0.4,1,1,1c1.6,0,3.2,0.6,4.4,1.8c1.2,1.2,1.8,2.7,1.8,4.4c0,3.4-2.8,6.2-6.2,6.2h-7.8c0.1-0.5,0.2-1.1,0.2-1.6c0-2.2-0.8-4.2-2.4-5.7c-1.3-1.3-3-2.1-4.8-2.3c-0.5-3.4-3.4-6-6.9-6c-1,0-1.9,0.2-2.8,0.6c-0.5-1.4-1.3-2.7-2.4-3.8C26.5,12.1,29.7,9.8,33.4,9.8z M36.4,39.1H8.1c-1.6,0-3.2-0.6-4.4-1.8c-1.2-1.2-1.8-2.7-1.8-4.4c0-3.4,2.8-6.2,6.2-6.2h0.5c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.2-0.6,0.1-0.9c-0.2-0.8-0.4-1.7-0.4-2.5c0-4.7,3.9-8.6,8.6-8.6c4,0,7.5,2.8,8.4,6.7c0.1,0.3,0.3,0.6,0.6,0.7c0.3,0.1,0.6,0.1,0.9-0.1c0.8-0.6,1.8-0.9,2.8-0.9c2.8,0,5,2.2,5,5c0,0.5,0.4,1,1,1c1.6,0,3.2,0.6,4.4,1.8c1.2,1.2,1.8,2.7,1.8,4.4C42.6,36.3,39.8,39.1,36.4,39.1z"/><path d="M62.5,47.4c-0.8-0.8-1.7-1.3-2.8-1.4c-0.4-2-2.2-3.6-4.4-3.6c-0.5,0-1,0.1-1.4,0.2c-1-2.4-3.4-4-6-4c-3.6,0-6.6,2.9-6.6,6.6c0,0.3,0,0.5,0,0.8c-2.4,0.4-4.2,2.5-4.2,5.1c0,1.4,0.5,2.7,1.5,3.6c1,1,2.3,1.5,3.6,1.5h16.6c2.8,0,5.1-2.3,5.1-5.1C64,49.7,63.5,48.4,62.5,47.4z M58.9,54.2H42.3c-0.9,0-1.7-0.3-2.3-0.9c-0.6-0.6-0.9-1.4-0.9-2.3c0-1.8,1.4-3.2,3.2-3.2h0.3c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.2-0.6,0.1-0.9c-0.1-0.4-0.2-0.9-0.2-1.4c0-2.6,2.1-4.6,4.6-4.6c2.1,0,4,1.5,4.5,3.6c0.1,0.3,0.3,0.6,0.6,0.7c0.3,0.1,0.6,0.1,0.9-0.1c0.4-0.3,0.9-0.4,1.4-0.4c1.4,0,2.5,1.1,2.5,2.5c0,0.5,0.4,1,1,1c0.9,0,1.7,0.3,2.3,0.9c0.6,0.6,0.9,1.4,0.9,2.3C62.1,52.8,60.6,54.2,58.9,54.2z"/></svg>
                                                <p class="mb-0 mt-2 tx-15 fw-500">Others</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="web-hosting" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="accordion accordion-style-1" id="acc-style-1">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-cloud-fog2"></i></span>
                                                    <h4 class="mb-0"> Web Hosting</h4>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-1" aria-expanded="false" aria-controls="acc-1">
                                                            What is Shared Web hosting?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-1" class="accordion-collapse collapse show" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">In Shared Web Hosting, multiple clients are hosted on a single server i.e. the clients share the server's resources. This helps reduce the cost, since the cost of the server and its resources are spread over all the clients/packages hosted on the server. Shared Hosting is perfect for personal websites, small and mid-sized businesses that do not require all the resources of a server.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-2" aria-expanded="false" aria-controls="acc-2">
                                                            Can I host multiple Web sites within one Shared Hosting plan?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-2" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes! Our Pro and Business shared hosting plans allow you to host more than one Website, by adding secondary domains through your hosting control panel i.e. cPanel.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-3" aria-expanded="false" aria-controls="acc-3">
                                                            Is there a Money Back Guarantee?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-3" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, we offer a 100% Risk Free, 30 day Money Back Guarantee.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-4" aria-expanded="false" aria-controls="acc-4">
                                                            Is Email hosting included in my package?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-4" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, all our Hosting packages come with Unlimited Email Hosting.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-5" aria-expanded="false" aria-controls="acc-5">
                                                            Can I upgrade to a higher plan?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-5" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, you can easily upgrade to one of our higher plans at any time.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-6" aria-expanded="false" aria-controls="acc-6">
                                                            Is my data safe? Do you take backups?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-6" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, your data is a 100% secure and is backed-up every 5 days.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-7" aria-expanded="false" aria-controls="acc-7">
                                                            Do you include protection from viruses?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-7" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, all our servers are protected by Clam AV.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-8" aria-expanded="false" aria-controls="acc-8">
                                                            Can I divide my Shared Hosting package and resell it?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-8" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">While a Shared Hosting package cannot be used for this purpose, you can easily resell custom packages with our Reseller Hosting. To view our Reseller Hosting plans, <a href="{{url('linux-reseller-hosting')}}" class="plain-link">click here</a>.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-9" aria-expanded="false" aria-controls="acc-9">
                                                            Do you offer SSH access?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-9" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Yes, we provide SSH access to your domain. Because this is a shared environment, you will not get root access. However, you will be able to achieve most of your requirements by having the rights to access only the files relevant to your domain.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-10" aria-expanded="false" aria-controls="acc-10">
                                                            Who do I get in touch with if I need help?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-10" class="accordion-collapse collapse" data-bs-parent="#acc-style-1">
                                                        <div class="accordion-body">Our Support team is always at hand to assist you. You can take a look at all our contact details <a href="{{url('contact-us')}}" class="plain-link">here</a>.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="servers" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="accordion accordion-style-1" id="acc-style-2">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-hdd-network"></i></span>
                                                    <h4 class="mb-0">Servers</h4>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-11" aria-expanded="false" aria-controls="acc-11">
                                                            What is the port speed of the server?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-11" class="accordion-collapse collapse show" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">The server uplink port speed is up to 1 Gbps.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-12" aria-expanded="false" aria-controls="acc-12">
                                                            How long does it take for the server to be ready?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-12" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">After the payment, your server will be provisioned in about 30 minutes and you can access it via SSH. The disk resize operation, however, may still run in the background for a while after provisioning.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-13" aria-expanded="false" aria-controls="acc-13">
                                                            What is your backup policy?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-13" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">You are responsible for your backups and web content. It is recommended that you keep copies of your content safe and make your own backups. You can take a backup from your cPanel or use a remote backup solution.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-14" aria-expanded="false" aria-controls="acc-14">
                                                            What is the level of support that you provide with the server?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-14" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">To ensure high uptime and accessibility at all times, we are available 24x7 for any hardware, network, booting, O.S. or login issues. Our System Administration Support will also assist you with basic cPanel & Firewall setup and their issues.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-15" aria-expanded="false" aria-controls="acc-15">
                                                            Is Additional Storage available for all server configurations?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-15" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">
                                                            <P>At present, the additional storage feature is only available with our HDD servers in the US data centre.</P>
                                                            <P>Would love to hear about such new features requests to help us serve you better.</P>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-16" aria-expanded="false" aria-controls="acc-16">
                                                            Can I use a Dedicated Server for email marketing?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-16" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">Dedicated Servers can be used for Websites, Databases, Custom Applications, Ecommerce, DNS, File Storage and Emails. Emails, however, must be restricted to personal, organisational or professional purposes. The use of Dedicated Servers to send out mass emails/marketing is NOT recommended and can attract penalties.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-17" aria-expanded="false" aria-controls="acc-17">
                                                            Can I use virtualisation software on the server?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-17" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">Our Dedicated Servers are virtualised (1:1). Thus, nested virtualisation will not work due to network restrictions on the host system.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-18" aria-expanded="false" aria-controls="acc-18">
                                                            Can I use virtualisation software on the server?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-18" class="accordion-collapse collapse" data-bs-parent="#acc-style-2">
                                                        <div class="accordion-body">We don’t have any backup solution at the moment. Yet, we strongly recommend that you maintain a remote backup to avoid any hassles during any ill-fated incident.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ssl" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-award"></i></span>
                                                <h4 class="mb-0"> SSL Certificate</h4>
                                            </div>
                                            <div class="accordion accordion-style-1" id="acc-style-3">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-19" aria-expanded="false" aria-controls="acc-19">
                                                            What is an SSL Certificate?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-19" class="accordion-collapse collapse show" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">An SSL (Secure Sockets Layer) Certificate is a digital certificate that verifies the identity of your website and encrypts information sent to and from your website.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-20" aria-expanded="false" aria-controls="acc-20">
                                                            What is the benefit of SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-20" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">An SSL encrypts your customers' sensitive information such as their identity, personal address, debit/credit card details, password, etc. by encrypting the data from their computer to your web server.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-21" aria-expanded="false" aria-controls="acc-21">
                                                            Does SSL work in all web browsers?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-21" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">
                                                            Yes, Comodo SSL Certificates are compatible with all major browsers.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-22" aria-expanded="false" aria-controls="acc-22">
                                                            How do I apply for an SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-22" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">
                                                            After purchase of SSL Certificate, you need to complete the verification process with the certificate authority. To apply for an SSL, kindly follow the steps mentioned here.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-23" aria-expanded="false" aria-controls="acc-23">
                                                            How do I generate a Certificate Signing Request (CSR)?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-23" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">
                                                            You need to generate a CSR from your control panel by providing your website and organization details.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-24" aria-expanded="false" aria-controls="acc-24">
                                                            How do I install an SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-24" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">After your certificate has been issued, it will be available in your control panel. In order to install the certificate</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-25" aria-expanded="false" aria-controls="acc-25">
                                                            When do I need to reissue an SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-25" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">You would need to reissue the certificate if the organization details need to be updated.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-26" aria-expanded="false" aria-controls="acc-26">
                                                            Can I upgrade my SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-26" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">At the moment, you cannot upgrade/downgrade the certificate.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-27" aria-expanded="false" aria-controls="acc-27">
                                                            Do I need technical knowledge to set up an SSL?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-27" class="accordion-collapse collapse" data-bs-parent="#acc-style-3">
                                                        <div class="accordion-body">No, you do not need to have any technical knowledge. However, you do need to follow a few steps before the successful installation of the certificate. For more informatio</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="backup" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-cloud"></i></span>
                                                <h4 class="mb-0"> Backup</h4>
                                            </div>
                                            <div class="accordion accordion-style-1" id="acc-style-4">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-28" aria-expanded="false" aria-controls="acc-28">
                                                        Which products can I backup using Acronis Cyber Backup?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-28" class="accordion-collapse collapse show" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">Acronis Cyber Backup can be configured to backup KVM Linux VPS, Dedicated Linux Servers, and Dedicated Windows Servers.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-29" aria-expanded="false" aria-controls="acc-29">
                                                        Can I backup all my servers to the same Acronis Account?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-29" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">Yes all your servers from one server location can be backed up under the same Acronis Account. Servers from US will be backed under the US account and servers from India and Hong Kong will be backed up on your Acronis Asia account Will the Acronis Cyber Backup order get renewed if I renew my VPS or Dedicated server?</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-30" aria-expanded="false" aria-controls="acc-30">
                                                        Will the Acronis Cyber Backup order get renewed if I renew my VPS or Dedicated server?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-30" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">
                                                        <p>No. Acronis has its own product lifecycle and will not be automatically renewed with your VPS or Dedicated Server. You will have to renew it separately.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-31" aria-expanded="false" aria-controls="acc-31">
                                                        How can I upgrade my backup storage space?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-31" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">
                                                        <p>If you need more backup storage space you can go to the order management page and add more storage</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-32" aria-expanded="false" aria-controls="acc-32">
                                                        How safe is my backup data?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-32" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">All the data that you backup will be stored in an offsite location, so that in case of a disaster at the location of your VPS or Dedicated Server, your backup data will remain safe. Additionally, the backup data is encrypted and regularly scanned for malware to ensure complete protection.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-33" aria-expanded="false" aria-controls="acc-33">
                                                        Can I restore backup data from one server to another?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-33" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">Yes you can backup and restore your data from one server to another provided you have the backup agent installed on the servers.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-34" aria-expanded="false" aria-controls="acc-34">
                                                        Can I download the backup files to my local machine?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-34" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">Yes you can download the backup files to your computer / local machine from the Acronis panel. What happens when my backup order expires?</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-35" aria-expanded="false" aria-controls="acc-35">
                                                        What happens when my backup order expires?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-35" class="accordion-collapse collapse" data-bs-parent="#acc-style-4">
                                                        <div class="accordion-body">When your backup order expires, it will be suspended and you can renew the order within 15 days to retain your backups. However, if you fail to renew within the time period, your order will be deleted and the backups will also be deleted.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sitelock" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-lock"></i></span>
                                                <h4 class="mb-0">Sitelock</h4>
                                            </div>
                                            <div class="accordion accordion-style-1" id="acc-style-5">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-36" aria-expanded="false" aria-controls="acc-36">
                                                        What is SiteLock?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-36" class="accordion-collapse collapse show" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">SiteLock provides simple, fast and affordable website security to websites of all sizes. Founded in 2008, the company protects over 12 million websites worldwide. The SiteLock cloud-based suite of products offers automated website vulnerability detection and malware removal, DDoS protection, website acceleration, website risk assessments, and PCI compliance.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-37" aria-expanded="false" aria-controls="acc-37">
                                                        What does SiteLock do?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-37" class="accordion-collapse collapse" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">SiteLock provides comprehensive website security. It performs website daily scans to identify vulnerabilities or malware. When vulnerabilities or malware are found, you will be alerted immediately. Based on your SiteLock scanner, it will automatically remove any malware on your website. For content management system (CMS) websites, SiteLock can automatically patch found vulnerabilities.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-38" aria-expanded="false" aria-controls="acc-38">
                                                        What types of issues does SiteLock scan for?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-38" class="accordion-collapse collapse" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">
                                                        <p>SiteLock has the technology to perform a comprehensive website scan that encompasses:</p>
                                                            <ul>
                                                                <li>SiteLock performs daily scans of a website's files for malware. If malware is found, the website owner is alerted immediately. SiteLock also offers comprehensive scans to automatically remove the malware.</li>
                                                                <li>SiteLock performs scans of website applications for common vulnerabilities that could lead to a compromise.</li>
                                                                <li>SiteLock has the technology to automatically patch vulnerabilities in content management systems (CMS).</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-39" aria-expanded="false" aria-controls="acc-39">
                                                        What are vulnerabilities and malware?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-39" class="accordion-collapse collapse" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">
                                                        <p>A website vulnerability is a weakness or misconfiguration in a website or web application code that allows an attacker to gain some level of control of the site, and possibly the hosting server. Most vulnerabilities are exploited through automated means, such as vulnerability scanners and botnets.</p>
                                                        <p>Malware, short for malicious software, is used to gather sensitive data, gain unauthorized access to websites and even hijack computers.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-40" aria-expanded="false" aria-controls="acc-40">
                                                        Will SiteLock impact website performance?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-40" class="accordion-collapse collapse" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">No. During a website scan, SiteLock downloads the relevant files to a secure server and performs scans there. There is no impact to the website content, code, bandwidth or server resources on the website.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-41" aria-expanded="false" aria-controls="acc-41">
                                                        What is the SiteLock Trust Seal?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-41" class="accordion-collapse collapse" data-bs-parent="#acc-style-5">
                                                        <div class="accordion-body">The SiteLock Trust Seal is a widely-recognized security badge you can display on your website. It is a clear indication that your website is secure and malware-free. To add the seal to your website, simply include the code snippet that SiteLock provides in the footer area of your website.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="others" role="tabpanel">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="avatar rounded-circle bg-primary-gradient text-white me-2 tx-20"><i class="bi bi-grid"></i></span>
                                                <h4 class="mb-0">Others</h4>
                                            </div>
                                            <div class="accordion accordion-style-1" id="acc-style-6">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc-42" aria-expanded="false" aria-controls="acc-42">
                                                            Do I need to know how to Code to use Weebly?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-42" class="accordion-collapse collapse show" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">No, you do not. Weebly offers an intuitive drag and drop builder for you to use. Add in the elements you like, manage your online store and even update blog posts using Weebly's editor.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-43" aria-expanded="false" aria-controls="acc-43">
                                                            Do I get a Money Back guarantee?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-43" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">Weebly's plans do not have a money back period. Instead, you can try the free plan and then upgrade to a paid one.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-44" aria-expanded="false" aria-controls="acc-44">
                                                            Will my Website be Responsive?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-44" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">Absolutely! All of Weebly's themes and elements are fully mobile responsive. So your customers can browse your website.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-45" aria-expanded="false" aria-controls="acc-45">
                                                            Do I need to purchase hosting to host my Website?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-45" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">No! All plans come with hosting included. Weebly handles all the backend infrastructure required to run your Website.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-46" aria-expanded="false" aria-controls="acc-46">
                                                            What Payment gateways does Weebly offer?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-46" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">Weebly offers Stripe as the the payement gateway on the Free, Starter and Pro plan. While on the Business plan you can choose from Stripe, Square, Authorize.net and Paypal.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-47" aria-expanded="false" aria-controls="acc-47">
                                                            Can I increase the number of products I can sell on my Plan?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-47" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">If you want to increase the number of products you want to manage/sell on your Website, you will need to upgrade your plan.</div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc-48" aria-expanded="false" aria-controls="acc-48">
                                                            Do I get email accounts with Weebly?
                                                        </button>
                                                    </h2>
                                                    <div id="acc-48" class="accordion-collapse collapse" data-bs-parent="#acc-style-6">
                                                        <div class="accordion-body">No you do not get an email solution with Weebly. However, you can purchase a stand alone email solution for your business and use it with the same domain.</div>
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
                                        <button class="custom-form-btn btn btn-lg btn-primary bg-primary-gradient rounded-pill border-0" type="button">Subscribe</button>
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