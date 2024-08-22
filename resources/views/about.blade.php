@extends('layouts.portal')

<!-- Titulo -->
@section('title')
Sobre Nós
@endsection
<!-- Titulo -->

@section('content')
<header class="pt-10">
    <div class="container">
        <div class="text-center col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto position-relative z-index-20">
            <h1 class="display-3 fw-bold mb-3">Sobre Nós</h1>
            <p class="text-muted lead mb-0">Lançado em 2024, o CDT (Centro de Desenvolvimento de Tecnologia) é uma plataforma online que visa mostrar projetos de desenvolvimento de software a todos no IFPR (Instituto Federal do Paraná).</p>
        </div>
    </div>
</header>
<div class="container position-relative z-index-20 py-7">
    <div class="row g-3">
        <div class="col-12 col-lg-6 d-none d-lg-block">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <picture>
                        <img class="img-fluid rounded shadow-sm"
                            src="{{ asset('img/about-1.jpeg') }}"
                            alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row gy-3">
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid rounded shadow-sm"
                                    src="{{ asset('img/about-2.jpeg') }}"
                                    alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid rounded shadow-sm"
                                    src="{{ asset('img/about-3.jpeg') }}"
                                    alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row g-3">
                <div class="col-12 col-md-6 d-none d-lg-block">
                    <picture>
                        <img class="img-fluid rounded shadow-sm"
                            src="{{ asset('img/about-4.jpeg') }}"
                            alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row gy-3">
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid rounded shadow-sm"
                                    src="{{ asset('img/about-5.jpeg') }}"
                                    alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                        <div class="col-12">
                            <picture>
                                <img class="img-fluid rounded shadow-sm"
                                    src="{{ asset('img/about-6.jpeg') }}"
                                    alt="HTML Bootstrap Template by Pixel Rocket">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 col-lg-6 mx-auto text-center py-4 border-bottom mb-5">
        <div class="my-5 d-none d-md-flex align-items-start justify-content-between">
            <div>
                <span class="display-3 fw-bold text-primary d-block">12</span>
                <span class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Locations</span>
            </div>
            <div>
                <span class="display-3 fw-bold text-primary d-block">75K</span>
                <span class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Customers</span>
            </div>
            <div>
                <span class="display-3 fw-bold text-primary d-block">160</span>
                <span class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Staff</span>
            </div>
        </div>
    </div>
    <div class="py-6 row gx-8 align-items-center">
        <div class="col-12 col-lg-6">
            <p class="mb-3 small fw-bolder tracking-wider text-uppercase text-primary">How it started</p>
            <h2 class="display-5 fw-bold mb-6">Our story</h2>
            <p>In 2015, one of our founders had an experience with landing pages where he realized that you can’t
                control your results, but only act on them. This is what inspired him and the other co-founder to build
                a landing page design tool which helps users build their landing pages.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis tortor sed neque pellentesque
                suscipit. Quisque finibus tristique faucibus. Pellentesque rhoncus justo ac ipsum pulvinar commodo. Nam
                quis hendrerit dui. Vestibulum dolor ligula, vehicula bibendum iaculis in, placerat et sapien. Maecenas
                in odio at quam volutpat lobortis.</p>
        </div>
        <div class="col-12 col-lg-6">
            <picture>
                <img class="img-fluid rounded shadow-sm" src="{{ asset('img/about-7.jpeg') }}"
                    alt="HTML Bootstrap Template by Pixel Rocket">
            </picture>
        </div>
    </div>
    <div class="py-8">
        <h2 class="display-5 fw-bold mb-6 text-center">Our team</h2>
        <div class="row g-6">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-2.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">Jack Johnston</p>
                        <p class="text-primary small fw-bold mb-4">Founder &amp; CEO</p>
                        <p class="text-muted">Serial angel investor and entrepreneur, Jack has founded multiple
                            successful startups prior to Sigma.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-3.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">JP Laurent</p>
                        <p class="text-primary small fw-bold mb-4">Executive Chairman</p>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis
                            tortor sed neque pellentesque.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-4.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">Gary Waite</p>
                        <p class="text-primary small fw-bold mb-4">Founder &amp; CTO</p>
                        <p class="text-muted">Mauris consequat sodales dolor, eu iaculis tortor efficitur vel. Mauris
                            sed felis augue argum felis.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-5.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">Patrica Smith</p>
                        <p class="text-primary small fw-bold mb-4">VP Marketing</p>
                        <p class="text-muted">Nullam faucibus placerat vestibulum. Vivamus blandit risus a ligula
                            efficitur tincidunt.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-6.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">Samanth Rowson</p>
                        <p class="text-primary small fw-bold mb-4">Head Designer</p>
                        <p class="text-muted">Vestibulum fermentum urna sit amet dolor rutrum, non consequat velit
                            vehicula. Proin sed consequat diam.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card rounded shadow-lg h-100">
                    <div class="card-body d-flex align-items-center flex-column justify-content-center text-center p-5">
                        <picture class="avatar">
                            <img class="img-fluid rounded-circle"
                                src="{{ asset('img/profile-small-7.jpeg') }}" alt="">
                        </picture>
                        <p class="lead fw-bolder mb-0 mt-4">Jack Smith</p>
                        <p class="text-primary small fw-bold mb-4">Technical Lead</p>
                        <p class="text-muted">Sed venenatis ligula tortor, vel pharetra massa convallis a. Ut bibendum
                            porttitor nisi ornare.</p>
                        <ul class="list-unstyled d-flex align-items-center justify-content-center mb-0">
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-linkedin-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-facebook-box-fill ri-2x"></i></a></li>
                            <li class="mx-2"><a href="#" class="text-decoration-none"><i
                                        class="ri-twitter-fill ri-2x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-5">
        <div class="rounded-pill border px-5 py-3 text-muted d-flex align-items-center">
            Want to join our team? <a href="#" class="fw-bold d-flex align-items-center ms-2">We are hiring <i
                    class="ri-arrow-right-line ms-1"></i></a>
        </div>
    </div>
</div>
@endsection
