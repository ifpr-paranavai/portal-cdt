@extends('layouts.portal')

<!-- Titulo -->
@section('title')
Index
@endsection
<!-- Titulo -->

@section('content')

        <!-- Hero Content-->
        <div class="container pt-4 pt-md-6 pt-lg-8 pb-8 pb-lg-10 position-relative">
            <div class="row gx-10 align-items-center justify-content-center">

            <!-- Hero Text-->
            <div class="col-12 col-lg-8 position-relative z-index-20 text-center" data-aos="fade-in">
                <h1 class="display-3 fw-bold mb-4">Centro de Desenvolvimento Tecnológico do IFPR – Campus Paranavaí</h1>
                    @php
                        $fraseInicio = \App\Models\FraseInicio::find(1)->frase ?? 'Frase não encontrada';
                    @endphp
                <p class="lead text-muted mb-5">{{ $fraseInicio }}</p>
                    <!-- <a href="#" class="text-decoration-none text-primary fw-bolder d-flex fs-7 justify-content-center justify-content-lg-start" data-bs-toggle="modal"
                        data-bs-target="#videoIframeModal"
                        data-pixr-video-iframe="https://player.vimeo.com/video/307721664?autoplay=1&amp;loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                        role="button"><i class="ri-play-circle-line align-bottom me-1"></i> Como funciona</a> -->

                    <div class="mt-4 pt-1 d-flex flex-column flex-md-row justify-content-center">
                        <a href= "{{ route('projeto.indexPublic') }}" class="btn btn-success" role="button">Ver Projetos</a>
                        <a href="{{ route('contact') }}" class="btn btn-link text-decoration-none text-muted ms-2 bg-light-hover"
                            role="button">Entre em Contato</a>
                    </div>
                    <!-- <ul class="list-unstyled d-none d-md-flex align-items-center small text-muted mt-3 pt-1 fw-medium fs-9 justify-content-center justify-content-lg-start">
                        <li class="me-4 d-flex align-items-center"><i
                                class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> Sem necessidade de cartão de crédito
                        </li>
                        <li class="me-4 d-flex align-items-center"><i
                                class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> Cancelamento a qualquer momento</li>
                        <li class="me-4 d-flex align-items-center"><i
                                class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> 30 dias de teste gratuito</li>
                    </ul> -->
                </div>
                <!-- / Hero Text-->

                <!-- Hero Graphic-->
                <!-- <div class="col-12 col-lg-6 mt-5 mt-lg-0 align-self-stretch position-relative z-index-20" data-aos="fade-in">
                    <div class="d-flex h-100 bg-dark rounded-3 shadow-lg card">
                        <div class="card-header border-white-10 border-1 py-4 d-flex align-items-center">
                            <span class="f-w-2 f-h-2 block bg-danger rounded-circle me-2"></span>
                            <span class="f-w-2 f-h-2 block bg-warning rounded-circle me-2"></span>
                            <span class="f-w-2 f-h-2 block bg-info rounded-circle"></span>
                        </div>
                        <div class="card-body" style="min-height: 300px;">
                            <code class="highlight fs-8"
                                data-typed='{"backSpeed":2, "strings": ["$&nbsp;git&nbsp;clone&nbsp;https://github.com/ifpr-paranavai/portal-cdt.git<br/><span class=\"text-success\">Repositório&nbsp;clonado&nbsp;com&nbsp;sucesso 👍</span><br/><br/>$&nbsp;cd&nbsp;portal-cdt<br/><span class=\"text-success\">Diretório&nbsp;alterado&nbsp;para&nbsp;portal-cdt</span><br/><br/>$&nbsp;composer&nbsp;install<br/><span class=\"text-success\">Dependências&nbsp;instaladas&nbsp;com&nbsp;sucesso...</span><br/><br/>$&nbsp;php&nbsp;artisan&nbsp;serve<br/><span class=\"text-success\">Servidor&nbsp;iniciado&nbsp;em&nbsp;http://localhost:8000 🚀</span><br/><br/>$&nbsp;npm&nbsp;install<br/><span class=\"text-success\">Pacotes&nbsp;NPM&nbsp;instalados&nbsp;com&nbsp;sucesso...</span><br/><br/>$&nbsp;npm&nbsp;run&nbsp;dev<br/><span class=\"text-success\">Vite&nbsp;executando&nbsp;em&nbsp;modo&nbsp;de&nbsp;desenvolvimento...</span>"]}'></code>
                        </div>
                    </div>
                </div> -->
                <!-- / Hero Graphic-->

            </div>

            <!-- Bottom left shapes-->
            <div class="position-absolute top-0 end-0 start-0 bottom-0 z-index-0 d-none d-lg-block">

                <div class="d-block f-w-6  position-absolute bottom-7 start-5 rotate-n45 origin-center">
                    <span class="d-block animation-float-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 89.72"><path class="text-body" d="M14.75,46.11C14.75,53,2.5,51.83,2.5,60.64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,17C14.75,24,2.5,22.75,2.5,31.57" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,46.11c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,17C14.75,10.13,2.5,11.32,2.5,2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-secondary" d="M37,75.18c0,6.91-12.25,5.72-12.25,14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,46.11C37,53,24.76,51.83,24.76,60.64" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,75.18c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,46.11c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                    </span>
                </div>

                <div class="d-block f-w-6  position-absolute bottom-35 start-n3">
                    <span class="d-block animation-float-6">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.95 50.74"><path class="text-secondary" d="M55.45,34.33A15.92,15.92,0,1,1,39.54,18.41,15.91,15.91,0,0,1,55.45,34.33Z" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-body" d="M34.33,18.41A15.92,15.92,0,1,1,18.41,2.5,15.92,15.92,0,0,1,34.33,18.41Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/></svg>                    </span>
                </div>

                <div class="d-block f-w-6  position-absolute bottom-20 start-n2">
                    <span class="d-block animation-float">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.66 58.68"><polygon class="text-body" points="20.69 33.95 38.85 23.45 20.68 12.98 2.5 2.5 2.52 23.47 2.53 44.45 20.69 33.95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><polygon class="text-secondary" points="43.5 47.31 61.66 36.81 43.49 26.34 25.32 15.86 25.33 36.83 25.34 57.81 43.5 47.31" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                    </span>
                </div>
            </div>
            <!-- / Bottom left shapes-->
        </div>
        <!-- /hero Content-->

        <!-- Logo Showcase-->
        <!-- <div class="bg-primary py-8" data-aos="fade-in">
            <p class="mb-0 text-center small fw-bolder tracking-wider text-uppercase text-white opacity-75">Trusted by
                thousands of companies worldwide</p>
            <div class="mt-5">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-90">
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bosch">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-1.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Smeg">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-2.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sony">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-3.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Siemens">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-4.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Coca Cola">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-5.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Philips">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-6.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Samsung">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-7.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Netflix">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-8.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="marquee-section animation-marquee-90">
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Bosch">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-1.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Smeg">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-2.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Sony">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-3.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Siemens">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-4.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Coca Cola">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-5.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Philips">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-6.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Samsung">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-7.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-5 f-w-24">
                                <a class="d-block" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Netflix">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-8.svg') }}" alt="">
                                    </picture>
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> -->
        <!-- Logo Showcase-->

        <!-- Latest news Posts-->
<div id="noticias" class="bg-primary py-8" data-aos="fade-in">
    <div class="container">
        <h4 class="fs-1 fw-bold mb-6 text-white text-center">Últimas noticias</h4>

        <div class="row g-5">
            @foreach($noticias as $noticia)
            <!-- News Post-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="d-flex h-100 bg-white rounded-4 card overflow-hidden shadow-lg position-relative hover-lift">
                    <picture>
                        <img class="img-fluid" src="{{ asset('imagens/noticias/' . $noticia->imagem) }}" alt="{{ $noticia->alt }}">
                    </picture>

                    <div class="card-body p-4 p-lg-5">
                        <p class="card-title fw-medium mb-4">{{ $noticia->titulo }}</p>
                        <a href="{{ route('noticias.show', $noticia->id) }}" class="fw-medium fs-7 text-decoration-none link-cover">Ler mais... &rarr;</a>
                    </div>
                </div>
            </div>
            <!-- / News Post-->
            @endforeach
        </div>

        <a href="{{ route('noticias.cards') }}" class="btn btn-white mx-auto mt-7 d-table fw-medium w-100 w-md-auto">Mais Noticias &rarr;</a>
    </div>
</div>
<!-- / Latest News Posts-->


<!-- Latest news Posts-->
<div id="projetos" class="bg-dark py-8" data-aos="fade-in">
    <div class="container">
        <h4 class="fs-1 fw-bold mb-6 text-white text-center">Últimos Projetos</h4>

        <div class="row g-5">
            @foreach($projetos as $projeto)
            <!-- Project Post-->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="d-flex h-100 bg-white rounded-4 card overflow-hidden shadow-lg position-relative hover-lift">
                    <div class="card-body p-4 p-lg-5">
                        <p class="card-title fw-medium mb-4">{{ $projeto->nome }}</p>
                        <p class="fw-medium fs-7 text-decoration-none link-cover text-secondary p-2 rounded {{ $projeto->status == 'concluido' ? 'bg-success' : ($projeto->status == 'em aberto' ? 'bg-warning' : 'bg-light') }}">
                            {{ $projeto->status }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- / Project Post-->
            @endforeach
        </div>

        <a href="{{ route('projeto.indexPublic') }}" class="btn btn-white mx-auto mt-7 d-table fw-medium w-100 w-md-auto">Mais Projetos &rarr;</a>
    </div>
</div>
<!-- / Latest Projects Posts-->

        <!-- Ferramentas-->
        <div class="bg-dark py-8" data-aos="fade-in">
            <div class="container py-4">
            <p class="mb-0 text-center small fw-bolder tracking-wider text-uppercase text-orange">Ferramentas</p>
            <h3 class="text-white text-center mt-3 fs-1 mb-3 fw-bold">Ferramentas utilizadas no desenvolvimento</h3>
            <p class="text-white opacity-50 text-center">Abaixo estão listadas as ferramentas que foram utilizadas para o desenvolvimento deste sistema.</p>

            <div class="row gx-10 gy-7 mt-4">
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="100">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-vscode.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">Visual Studio Code</p>
                <p class="text-white opacity-75 text-center fs-7">IDE leve para diversas linguagens.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="200">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-phpstorm.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">PHPStorm</p>
                <p class="text-white opacity-75 text-center fs-7">IDE completa para desenvolvimento em PHP com várias integrações.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="300">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-powerarchitect.png') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">Power Architect</p>
                <p class="text-white opacity-75 text-center fs-7">Ferramenta de design e modelagem de bancos de dados.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="400">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-github.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">GitHub</p>
                <p class="text-white opacity-75 text-center fs-7">Plataforma de hospedagem de código com controle de versão Git.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="500">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-php.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">PHP</p>
                <p class="text-white opacity-75 text-center fs-7">Linguagem de programação para desenvolvimento de aplicações web.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="600">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-laravel.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">Laravel</p>
                <p class="text-white opacity-75 text-center fs-7">Framework PHP para desenvolvimento de aplicações web.</p>
                </div>
                <!-- /Ferramenta-->
                <!-- Ferramenta-->
                <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column align-items-center justify-content-center" data-aos="fade-in" data-aos-duration="500" data-aos-delay="700">
                <picture class="d-block f-h-10">
                    <img class="h-100 w-auto" src="{{ asset('img/logos/logo-blade.svg') }}" alt="">
                </picture>
                <p class="text-white fs-4 fw-medium mb-2 mt-3">Blade</p>
                <p class="text-white opacity-75 text-center fs-7">Motor de template nativo do Laravel para criar layouts dinâmicos.</p>
                </div>
            </div>

            <!-- <a href="#" class="btn btn-white d-table mx-auto mt-7 w-100 w-md-auto" role="button">Mais sobre nossas ferramentas</a> -->

            </div>
        </div>
        <!-- / Ferramentas-->

        <!-- Product Highlights-->
        <div class="py-5 py-lg-10">

            <!-- Highlight One-->
            <div class="container py-5 py-lg-8">
                <div class="row g-5 g-lg-10 d-flex align-items-center">

                    <!-- Highlight One Image Section-->
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-1 position-relative" data-aos="fade-in">
                        <picture class="position-relative z-index-20">
                            <img class="img-fluid rounded-5" src="{{ asset('img/feature-1.jpeg') }}"
                                alt="HTML Bootstrap Template by Pixel Rocket">
                        </picture>
                        <div class="position-absolute bottom-5 end-0 z-index-30 d-none d-lg-block">
                            <div
                                class="p-3 bg-white shadow-lg rounded-3 f-w-60 mb-3 d-flex align-items-center me-0 ms-auto" data-aos="fade-right" data-aos-duration="400" data-aos-delay="450">
                                <div class="position-relative me-4">
                                    <picture class="position-relative z-index-0">
                                        <img class="f-w-12 rounded-circle"
                                            src="{{ asset('img/profile-small-2.jpeg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <span
                                        class="position-absolute z-index-20 d-block f-w-3 f-h-3 border border-3 border-white bg-success rounded-circle bottom-0 end-8"></span>
                                </div>
                                <div class="lh-sm">
                                    <small class="align-self-center fs-8">Gostei. 👍 Mas nós podemos tentar colocar uma cor diferente? </small>
                                    <span class="fs-9 text-muted fw-medium mt-1 d-block">12 mins atrás</span>
                                </div>
                            </div>
                            <div
                                class="p-3 bg-white shadow-lg rounded-3 f-w-56 mb-3 d-flex align-items-center me-0 ms-auto"  
                                data-aos="fade-left" data-aos-duration="400" data-aos-delay="1500">
                                <div class="position-relative me-4">
                                    <picture class="position-relative z-index-0">
                                        <img class="f-w-12 rounded-circle" src="{{ asset('img/profile-small-3.jpeg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <span
                                        class="position-absolute z-index-20 d-block f-w-3 f-h-3 border border-3 border-white bg-danger rounded-circle bottom-0 end-8"></span>
                                </div>
                                <div class="lh-1">
                                    <small class="align-self-center fs-8 lh-sm">Não.</small>
                                    <span class="fs-9 text-muted fw-medium mt-1 d-block">5 mins atrás</span>
                                </div>
                            </div>
                        </div>

                        <!-- Hightlight One SVG Shape-->
                        <div class="d-none d-xl-block f-w-60 position-absolute top-n13 start-n3 opacity-75">
                            <span class="d-block" data-aos="fade-in">
                                <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 411.39 411.39"><circle cx="355.89" cy="255.89" r="2.5" fill="none"/><circle cx="355.89" cy="55.89" r="2.5" fill="none"/><circle cx="305.89" cy="105.89" r="2.5" fill="none"/><circle cx="255.89" cy="155.89" r="2.5" fill="none"/><circle cx="305.89" cy="205.89" r="2.5" fill="none"/><circle cx="305.89" cy="405.89" r="2.5" fill="none"/><circle cx="405.89" cy="5.89" r="2.5" fill="none"/><circle cx="305.89" cy="305.89" r="2.5" fill="none"/><circle cx="205.89" cy="105.89" r="2.5" fill="none"/><circle cx="255.89" cy="255.89" r="2.5" fill="none"/><circle cx="205.89" cy="205.89" r="2.5" fill="none"/><circle cx="305.89" cy="5.89" r="2.5" fill="none"/><circle cx="355.89" cy="355.89" r="2.5" fill="none"/><circle cx="205.89" cy="405.89" r="2.5" fill="none"/><circle cx="205.89" cy="305.89" r="2.5" fill="none"/><circle cx="355.89" cy="155.89" r="2.5" fill="none"/><circle cx="405.89" cy="405.89" r="2.5" fill="none"/><circle cx="405.89" cy="205.89" r="2.5" fill="none"/><circle cx="405.89" cy="305.89" r="2.5" fill="none"/><circle cx="405.89" cy="105.89" r="2.5" fill="none"/><circle cx="5.89" cy="305.89" r="2.5" fill="none"/><circle cx="5.89" cy="5.89" r="2.5" fill="none"/><circle cx="55.89" cy="55.89" r="2.5" fill="none"/><circle cx="55.89" cy="155.89" r="2.5" fill="none"/><circle cx="55.89" cy="355.89" r="2.5" fill="none"/><circle cx="55.89" cy="255.89" r="2.5" fill="none"/><circle cx="155.89" cy="55.89" r="2.5" fill="none"/><circle cx="105.89" cy="305.89" r="2.5" fill="none"/><circle cx="105.89" cy="205.89" r="2.5" fill="none"/><circle cx="105.89" cy="105.89" r="2.5" fill="none"/><circle cx="205.89" cy="5.89" r="2.5" fill="none"/><circle cx="255.89" cy="355.89" r="2.5" fill="none"/><circle cx="105.89" cy="405.89" r="2.5" fill="none"/><circle cx="255.89" cy="55.89" r="2.5" fill="none"/><circle cx="105.89" cy="5.89" r="2.5" fill="none"/><circle cx="5.89" cy="205.89" r="2.5" fill="none"/><circle cx="5.89" cy="405.89" r="2.5" fill="none"/><circle cx="155.89" cy="355.89" r="2.5" fill="none"/><circle cx="155.89" cy="255.89" r="2.5" fill="none"/><circle cx="155.89" cy="155.89" r="2.5" fill="none"/><circle cx="5.89" cy="105.89" r="2.5" fill="none"/><path d="M5.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,5.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,5.89,3.39Z" fill="#bcbcbc"/><path d="M55.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,58.39Z" fill="#bcbcbc"/><path d="M155.89,61.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,61.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,53.39Z" fill="#bcbcbc"/><path d="M255.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,58.39Z" fill="#bcbcbc"/><path d="M355.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,58.39Z" fill="#bcbcbc"/><path d="M55.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,158.39Z" fill="#bcbcbc"/><path d="M155.89,161.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,161.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,153.39Z" fill="#bcbcbc"/><path d="M255.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,158.39Z" fill="#bcbcbc"/><path d="M355.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,158.39Z" fill="#bcbcbc"/><path d="M55.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,258.39Z" fill="#bcbcbc"/><path d="M155.89,261.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,261.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,253.39Z" fill="#bcbcbc"/><path d="M255.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,258.39Z" fill="#bcbcbc"/><path d="M355.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,258.39Z" fill="#bcbcbc"/><path d="M55.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,358.39Z" fill="#bcbcbc"/><path d="M155.89,361.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,361.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,353.39Z" fill="#bcbcbc"/><path d="M255.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,358.39Z" fill="#bcbcbc"/><path d="M355.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,358.39Z" fill="#bcbcbc"/><path d="M105.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,105.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,105.89,3.39Z" fill="#bcbcbc"/><path d="M205.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,205.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,205.89,3.39Z" fill="#bcbcbc"/><path d="M305.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,305.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,305.89,3.39Z" fill="#bcbcbc"/><path d="M405.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,405.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,405.89,3.39Z" fill="#bcbcbc"/><path d="M5.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,108.39Z" fill="#bcbcbc"/><path d="M105.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,108.39Z" fill="#bcbcbc"/><path d="M205.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,108.39Z" fill="#bcbcbc"/><path d="M305.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,108.39Z" fill="#bcbcbc"/><path d="M405.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,108.39Z" fill="#bcbcbc"/><path d="M5.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,208.39Z" fill="#bcbcbc"/><path d="M105.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,208.39Z" fill="#bcbcbc"/><path d="M205.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,208.39Z"/><path d="M305.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,208.39Z" fill="#bcbcbc"/><path d="M405.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,208.39Z" fill="#bcbcbc"/><path d="M5.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,308.39Z" fill="#bcbcbc"/><path d="M105.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,308.39Z" fill="#bcbcbc"/><path d="M205.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,308.39Z" fill="#bcbcbc"/><path d="M305.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,308.39Z" fill="#bcbcbc"/><path d="M405.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,308.39Z" fill="#bcbcbc"/><path d="M5.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,408.39Z" fill="#bcbcbc"/><path d="M105.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,408.39Z" fill="#bcbcbc"/><path d="M205.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,408.39Z" fill="#bcbcbc"/><path d="M305.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,408.39Z" fill="#bcbcbc"/><path d="M405.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,408.39Z" fill="#bcbcbc"/><rect x="152.24" y="100.37" width="3" height="4.75" transform="translate(-27.62 138.8) rotate(-45)"/><rect x="157.72" y="105.84" width="3" height="4.75" transform="translate(-29.89 144.28) rotate(-45)"/><rect x="151.37" y="106.72" width="4.75" height="3" transform="translate(-31.49 140.41) rotate(-45)"/><rect x="156.84" y="101.24" width="4.75" height="3" transform="translate(-26.02 142.67) rotate(-45)"/><rect x="154.98" y="103.98" width="3" height="3" transform="translate(-28.75 141.54) rotate(-45)"/><rect x="256.72" y="105.84" width="3" height="4.75" transform="translate(-0.89 214.28) rotate(-45)"/><rect x="251.24" y="100.37" width="3" height="4.75" transform="translate(1.38 208.8) rotate(-45)"/><rect x="255.84" y="101.24" width="4.75" height="3" transform="translate(2.98 212.68) rotate(-45)"/><rect x="250.37" y="106.72" width="4.75" height="3" transform="translate(-2.5 210.4) rotate(-45)"/><rect x="253.98" y="103.98" width="3" height="3" transform="translate(0.25 211.55) rotate(-45)"/><rect x="355.72" y="105.84" width="3" height="4.75" transform="translate(28.11 284.29) rotate(-45)"/><rect x="350.24" y="100.37" width="3" height="4.75" transform="translate(30.37 278.81) rotate(-45)"/><rect x="354.84" y="101.24" width="4.75" height="3" transform="translate(31.98 282.68) rotate(-45)"/><rect x="349.37" y="106.72" width="4.75" height="3" transform="translate(26.5 280.4) rotate(-45)"/><rect x="352.98" y="103.98" width="3" height="3" transform="translate(29.24 281.55) rotate(-45)"/><rect x="51.24" y="100.37" width="3" height="4.75" transform="translate(-57.2 67.38) rotate(-45)"/><rect x="56.72" y="105.84" width="3" height="4.75" transform="translate(-59.47 72.86) rotate(-45)"/><rect x="55.84" y="101.24" width="4.75" height="3" transform="translate(-55.6 71.26) rotate(-45)"/><rect x="50.37" y="106.72" width="4.75" height="3" transform="translate(-61.07 68.98) rotate(-45)"/><rect x="53.98" y="103.98" width="3" height="3" transform="translate(-58.34 70.12) rotate(-45)"/><rect x="152.24" y="0.37" width="3" height="4.75" transform="translate(43.09 109.51) rotate(-45)"/><rect x="157.72" y="5.84" width="3" height="4.75" transform="translate(40.82 114.99) rotate(-45)"/><rect x="156.84" y="1.24" width="4.75" height="3" transform="translate(44.7 113.38) rotate(-45)"/><rect x="151.37" y="6.72" width="4.75" height="3" transform="translate(39.22 111.11) rotate(-45)"/><rect x="154.98" y="3.98" width="3" height="3" transform="translate(41.96 112.25) rotate(-45)"/><rect x="251.24" y="0.37" width="3" height="4.75" transform="translate(72.09 179.52) rotate(-45)"/><rect x="256.72" y="5.84" width="3" height="4.75" transform="translate(69.82 184.99) rotate(-45)"/><rect x="250.37" y="6.72" width="4.75" height="3" transform="translate(68.21 181.11) rotate(-45)"/><rect x="255.84" y="1.24" width="4.75" height="3" transform="translate(73.69 183.39) rotate(-45)"/><rect x="253.98" y="3.98" width="3" height="3" transform="translate(70.96 182.26) rotate(-45)"/><rect x="350.24" y="0.37" width="3" height="4.75" transform="translate(101.09 249.52) rotate(-45)"/><rect x="355.72" y="5.84" width="3" height="4.75" transform="translate(98.82 255) rotate(-45)"/><rect x="349.37" y="6.72" width="4.75" height="3" transform="translate(97.21 251.12) rotate(-45)"/><rect x="354.84" y="1.24" width="4.75" height="3" transform="translate(102.69 253.39) rotate(-45)"/><rect x="352.98" y="3.98" width="3" height="3" transform="translate(99.96 252.26) rotate(-45)"/><rect x="1.24" y="50.37" width="3" height="4.75" transform="translate(-36.49 17.38) rotate(-45)"/><rect x="6.72" y="55.84" width="3" height="4.75" transform="translate(-38.76 22.86) rotate(-45)"/><rect x="0.37" y="56.72" width="4.75" height="3" transform="translate(-40.36 18.99) rotate(-45)"/><rect x="5.84" y="51.24" width="4.75" height="3" transform="translate(-34.89 21.26) rotate(-45)"/><rect x="3.98" y="53.98" width="3" height="3" transform="translate(-37.62 20.12) rotate(-45)"/><rect x="101.24" y="50.37" width="3" height="4.75" transform="translate(-7.2 88.09) rotate(-45)"/><rect x="106.72" y="55.84" width="3" height="4.75" transform="translate(-9.47 93.57) rotate(-45)"/><rect x="105.84" y="51.24" width="4.75" height="3" transform="translate(-5.6 91.97) rotate(-45)"/><rect x="100.37" y="56.72" width="4.75" height="3" transform="translate(-11.07 89.69) rotate(-45)"/><rect x="103.98" y="53.98" width="3" height="3" transform="translate(-8.33 90.84) rotate(-45)"/><rect x="206.72" y="55.84" width="3" height="4.75" transform="translate(19.82 164.28) rotate(-45)"/><rect x="201.24" y="50.37" width="3" height="4.75" transform="translate(22.09 158.8) rotate(-45)"/><rect x="200.37" y="56.72" width="4.75" height="3" transform="translate(18.21 160.4) rotate(-45)"/><rect x="205.84" y="51.24" width="4.75" height="3" transform="translate(23.69 162.68) rotate(-45)"/><rect x="203.98" y="53.98" width="3" height="3" transform="translate(20.96 161.55) rotate(-45)"/><rect x="301.24" y="50.37" width="3" height="4.75" transform="translate(51.38 229.52) rotate(-45)"/><rect x="306.72" y="55.84" width="3" height="4.75" transform="translate(49.11 234.99) rotate(-45)"/><rect x="300.37" y="56.72" width="4.75" height="3" transform="translate(47.5 231.11) rotate(-45)"/><rect x="305.84" y="51.24" width="4.75" height="3" transform="translate(52.98 233.39) rotate(-45)"/><rect x="303.98" y="53.98" width="3" height="3" transform="translate(50.25 232.26) rotate(-45)"/><rect x="406.72" y="55.84" width="3" height="4.75" transform="translate(78.4 305.7) rotate(-45)"/><rect x="401.24" y="50.37" width="3" height="4.75" transform="translate(80.67 300.23) rotate(-45)"/><rect x="400.37" y="56.72" width="4.75" height="3" transform="translate(76.79 301.82) rotate(-45)"/><rect x="405.84" y="51.24" width="4.75" height="3" transform="translate(82.27 304.1) rotate(-45)"/><rect x="403.98" y="53.98" width="3" height="3" transform="translate(79.54 302.97) rotate(-45)"/><rect x="1.24" y="150.37" width="3" height="4.75" transform="translate(-107.2 46.67) rotate(-45)"/><rect x="6.72" y="155.84" width="3" height="4.75" transform="translate(-109.47 52.15) rotate(-45)"/><rect x="0.37" y="156.72" width="4.75" height="3" transform="translate(-111.07 48.27) rotate(-45)"/><rect x="5.84" y="151.24" width="4.75" height="3" transform="translate(-105.6 50.55) rotate(-45)"/><rect x="3.98" y="153.98" width="3" height="3" transform="translate(-108.34 49.41) rotate(-45)"/><rect x="101.24" y="150.37" width="3" height="4.75" transform="translate(-77.91 117.38) rotate(-45)"/><rect x="106.72" y="155.84" width="3" height="4.75" transform="translate(-80.18 122.86) rotate(-45)"/><rect x="100.37" y="156.72" width="4.75" height="3" transform="translate(-81.78 118.98) rotate(-45)"/><rect x="105.84" y="151.24" width="4.75" height="3" transform="translate(-76.31 121.26) rotate(-45)"/><rect x="103.98" y="153.98" width="3" height="3" transform="translate(-79.05 120.13) rotate(-45)"/><rect x="206.72" y="155.84" width="3" height="4.75" transform="translate(-50.89 193.57) rotate(-45)"/><rect x="201.24" y="150.37" width="3" height="4.75" transform="translate(-48.62 188.09) rotate(-45)"/><rect x="200.37" y="156.72" width="4.75" height="3" transform="translate(-52.5 189.69) rotate(-45)"/><rect x="205.84" y="151.24" width="4.75" height="3" transform="translate(-47.02 191.97) rotate(-45)"/><rect x="203.98" y="153.98" width="3" height="3" transform="translate(-49.76 190.84) rotate(-45)"/><rect x="306.72" y="155.84" width="3" height="4.75" transform="translate(-21.6 264.28) rotate(-45)"/><rect x="301.24" y="150.37" width="3" height="4.75" transform="translate(-19.33 258.8) rotate(-45)"/><rect x="305.84" y="151.24" width="4.75" height="3" transform="translate(-17.73 262.68) rotate(-45)"/><rect x="300.37" y="156.72" width="4.75" height="3" transform="translate(-23.21 260.4) rotate(-45)"/><rect x="303.98" y="153.98" width="3" height="3" transform="translate(-20.46 261.55) rotate(-45)"/><rect x="406.72" y="155.84" width="3" height="4.75" transform="translate(7.69 334.99) rotate(-45)"/><rect x="401.24" y="150.37" width="3" height="4.75" transform="translate(9.96 329.52) rotate(-45)"/><rect x="400.37" y="156.72" width="4.75" height="3" transform="translate(6.08 331.11) rotate(-45)"/><rect x="405.84" y="151.24" width="4.75" height="3" transform="translate(11.56 333.39) rotate(-45)"/><rect x="403.98" y="153.98" width="3" height="3" transform="translate(8.83 332.26) rotate(-45)"/><rect x="1.24" y="250.37" width="3" height="4.75" transform="translate(-177.91 75.96) rotate(-45)"/><rect x="6.72" y="255.84" width="3" height="4.75" transform="translate(-180.18 81.44) rotate(-45)"/><rect x="5.84" y="251.24" width="4.75" height="3" transform="translate(-176.31 79.83) rotate(-45)"/><rect x="0.37" y="256.72" width="4.75" height="3" transform="translate(-181.78 77.56) rotate(-45)"/><rect x="3.98" y="253.98" width="3" height="3" transform="translate(-179.05 78.7) rotate(-45)"/><rect x="101.24" y="250.37" width="3" height="4.75" transform="translate(-148.62 146.67) rotate(-45)"/><rect x="106.72" y="255.84" width="3" height="4.75" transform="translate(-150.89 152.15) rotate(-45)"/><rect x="105.84" y="251.24" width="4.75" height="3" transform="translate(-147.02 150.55) rotate(-45)"/><rect x="100.37" y="256.72" width="4.75" height="3" transform="translate(-152.49 148.27) rotate(-45)"/><rect x="103.98" y="253.98" width="3" height="3" transform="translate(-149.76 149.42) rotate(-45)"/><rect x="201.24" y="250.37" width="3" height="4.75" transform="translate(-119.33 217.38) rotate(-45)"/><rect x="206.72" y="255.84" width="3" height="4.75" transform="translate(-121.6 222.86) rotate(-45)"/><rect x="200.37" y="256.72" width="4.75" height="3" transform="translate(-123.2 218.98) rotate(-45)"/><rect x="205.84" y="251.24" width="4.75" height="3" transform="translate(-117.73 221.26) rotate(-45)"/><rect x="203.98" y="253.98" width="3" height="3" transform="translate(-120.47 220.13) rotate(-45)"/><rect x="301.24" y="250.37" width="3" height="4.75" transform="translate(-90.04 288.09) rotate(-45)"/><rect x="306.72" y="255.84" width="3" height="4.75" transform="translate(-92.31 293.57) rotate(-45)"/><rect x="305.84" y="251.24" width="4.75" height="3" transform="translate(-88.44 291.97) rotate(-45)"/><rect x="300.37" y="256.72" width="4.75" height="3" transform="translate(-93.92 289.69) rotate(-45)"/><rect x="303.98" y="253.98" width="3" height="3" transform="translate(-91.18 290.84) rotate(-45)"/><rect x="401.24" y="250.37" width="3" height="4.75" transform="translate(-60.75 358.8) rotate(-45)"/><rect x="406.72" y="255.84" width="3" height="4.75" transform="translate(-63.02 364.28) rotate(-45)"/><rect x="400.37" y="256.72" width="4.75" height="3" transform="translate(-64.63 360.39) rotate(-45)"/><rect x="405.84" y="251.24" width="4.75" height="3" transform="translate(-59.15 362.68) rotate(-45)"/><rect x="403.98" y="253.98" width="3" height="3" transform="translate(-61.89 361.55) rotate(-45)"/><rect x="6.72" y="355.84" width="3" height="4.75" transform="translate(-250.89 110.73) rotate(-45)"/><rect x="1.24" y="350.37" width="3" height="4.75" transform="translate(-248.62 105.25) rotate(-45)"/><rect x="0.37" y="356.72" width="4.75" height="3" transform="translate(-252.49 106.85) rotate(-45)"/><rect x="5.84" y="351.24" width="4.75" height="3" transform="translate(-247.02 109.12) rotate(-45)"/><rect x="3.98" y="353.98" width="3" height="3" transform="translate(-249.76 108) rotate(-45)"/><rect x="106.72" y="355.84" width="3" height="4.75" transform="translate(-221.6 181.44) rotate(-45)"/><rect x="101.24" y="350.37" width="3" height="4.75" transform="translate(-219.33 175.96) rotate(-45)"/><rect x="100.37" y="356.72" width="4.75" height="3" transform="translate(-223.2 177.56) rotate(-45)"/><rect x="105.84" y="351.24" width="4.75" height="3" transform="translate(-217.73 179.83) rotate(-45)"/><rect x="103.98" y="353.98" width="3" height="3" transform="translate(-220.47 178.71) rotate(-45)"/><rect x="206.72" y="355.84" width="3" height="4.75" transform="translate(-192.31 252.15) rotate(-45)"/><rect x="201.24" y="350.37" width="3" height="4.75" transform="translate(-190.04 246.67) rotate(-45)"/><rect x="205.84" y="351.24" width="4.75" height="3" transform="translate(-188.44 250.55) rotate(-45)"/><rect x="200.37" y="356.72" width="4.75" height="3" transform="translate(-193.91 248.26) rotate(-45)"/><rect x="203.98" y="353.98" width="3" height="3" transform="translate(-191.18 249.42) rotate(-45)"/><rect x="301.24" y="350.37" width="3" height="4.75" transform="translate(-160.75 317.38) rotate(-45)"/><rect x="306.72" y="355.84" width="3" height="4.75" transform="translate(-163.02 322.86) rotate(-45)"/><rect x="300.37" y="356.72" width="4.75" height="3" transform="translate(-164.63 318.97) rotate(-45)"/><rect x="305.84" y="351.24" width="4.75" height="3" transform="translate(-159.15 321.26) rotate(-45)"/><rect x="303.98" y="353.98" width="3" height="3" transform="translate(-161.89 320.13) rotate(-45)"/><rect x="406.72" y="355.84" width="3" height="4.75" transform="translate(-133.73 393.57) rotate(-45)"/><rect x="401.24" y="350.37" width="3" height="4.75" transform="translate(-131.46 388.09) rotate(-45)"/><rect x="405.84" y="351.24" width="4.75" height="3" transform="translate(-129.86 391.97) rotate(-45)"/><rect x="400.37" y="356.72" width="4.75" height="3" transform="translate(-135.34 389.68) rotate(-45)"/><rect x="403.98" y="353.98" width="3" height="3" transform="translate(-132.6 390.85) rotate(-45)"/><rect x="51.24" y="0.37" width="3" height="4.75" transform="translate(13.51 38.09) rotate(-45)"/><rect x="56.72" y="5.84" width="3" height="4.75" transform="translate(11.24 43.57) rotate(-45)"/><rect x="55.84" y="1.24" width="4.75" height="3" transform="translate(15.11 41.97) rotate(-45)"/><rect x="50.37" y="6.72" width="4.75" height="3" transform="translate(9.64 39.7) rotate(-45)"/><rect x="53.98" y="3.98" width="3" height="3" transform="translate(12.38 40.83) rotate(-45)"/><rect x="152.24" y="200.37" width="3" height="4.75" transform="translate(-98.33 168.09) rotate(-45)"/><rect x="157.72" y="205.84" width="3" height="4.75" transform="translate(-100.6 173.57) rotate(-45)"/><rect x="151.37" y="206.72" width="4.75" height="3" transform="translate(-102.2 169.69) rotate(-45)"/><rect x="156.84" y="201.24" width="4.75" height="3" transform="translate(-96.72 171.95) rotate(-45)"/><rect x="154.98" y="203.98" width="3" height="3" transform="translate(-99.46 170.83) rotate(-45)"/><rect x="256.72" y="205.84" width="3" height="4.75" transform="translate(-71.6 243.57) rotate(-45)"/><rect x="251.24" y="200.37" width="3" height="4.75" transform="translate(-69.33 238.09) rotate(-45)"/><rect x="250.37" y="206.72" width="4.75" height="3" transform="translate(-73.21 239.69) rotate(-45)"/><rect x="255.84" y="201.24" width="4.75" height="3" transform="translate(-67.73 241.97) rotate(-45)"/><rect x="253.98" y="203.98" width="3" height="3" transform="translate(-70.47 240.84) rotate(-45)"/><rect x="350.24" y="200.37" width="3" height="4.75" transform="translate(-40.34 308.1) rotate(-45)"/><rect x="355.72" y="205.84" width="3" height="4.75" transform="translate(-42.6 313.57) rotate(-45)"/><rect x="354.84" y="201.24" width="4.75" height="3" transform="translate(-38.73 311.97) rotate(-45)"/><rect x="349.37" y="206.72" width="4.75" height="3" transform="translate(-44.21 309.69) rotate(-45)"/><rect x="352.98" y="203.98" width="3" height="3" transform="translate(-41.47 310.85) rotate(-45)"/><rect x="51.24" y="200.37" width="3" height="4.75" transform="translate(-127.91 96.67) rotate(-45)"/><rect x="56.72" y="205.84" width="3" height="4.75" transform="translate(-130.18 102.15) rotate(-45)"/><rect x="50.37" y="206.72" width="4.75" height="3" transform="translate(-131.78 98.27) rotate(-45)"/><rect x="55.84" y="201.24" width="4.75" height="3" transform="translate(-126.31 100.55) rotate(-45)"/><rect x="53.98" y="203.98" width="3" height="3" transform="translate(-129.05 99.42) rotate(-45)"/><rect x="152.24" y="300.37" width="3" height="4.75" transform="translate(-169.04 197.38) rotate(-45)"/><rect x="157.72" y="305.84" width="3" height="4.75" transform="translate(-171.31 202.86) rotate(-45)"/><rect x="156.84" y="301.24" width="4.75" height="3" transform="translate(-167.43 201.24) rotate(-45)"/><rect x="151.37" y="306.72" width="4.75" height="3" transform="translate(-172.91 198.98) rotate(-45)"/><rect x="154.98" y="303.98" width="3" height="3" transform="translate(-170.17 200.12) rotate(-45)"/><rect x="256.72" y="305.84" width="3" height="4.75" transform="translate(-142.31 272.86) rotate(-45)"/><rect x="251.24" y="300.37" width="3" height="4.75" transform="translate(-140.04 267.38) rotate(-45)"/><rect x="250.37" y="306.72" width="4.75" height="3" transform="translate(-143.91 268.98) rotate(-45)"/><rect x="255.84" y="301.24" width="4.75" height="3" transform="translate(-138.44 271.26) rotate(-45)"/><rect x="253.98" y="303.98" width="3" height="3" transform="translate(-141.18 270.13) rotate(-45)"/><rect x="355.72" y="305.84" width="3" height="4.75" transform="translate(-113.32 342.86) rotate(-45)"/><rect x="350.24" y="300.37" width="3" height="4.75" transform="translate(-111.05 337.39) rotate(-45)"/><rect x="349.37" y="306.72" width="4.75" height="3" transform="translate(-114.92 338.98) rotate(-45)"/><rect x="354.84" y="301.24" width="4.75" height="3" transform="translate(-109.44 341.26) rotate(-45)"/><rect x="352.98" y="303.98" width="3" height="3" transform="translate(-112.18 340.14) rotate(-45)"/><rect x="56.72" y="305.84" width="3" height="4.75" transform="translate(-200.89 131.44) rotate(-45)"/><rect x="51.24" y="300.37" width="3" height="4.75" transform="translate(-198.62 125.96) rotate(-45)"/><rect x="55.84" y="301.24" width="4.75" height="3" transform="translate(-197.02 129.83) rotate(-45)"/><rect x="50.37" y="306.72" width="4.75" height="3" transform="translate(-202.49 127.56) rotate(-45)"/><rect x="53.98" y="303.98" width="3" height="3" transform="translate(-199.76 128.71) rotate(-45)"/><rect x="157.72" y="405.84" width="3" height="4.75" transform="translate(-242.02 232.15) rotate(-45)"/><rect x="152.24" y="400.37" width="3" height="4.75" transform="translate(-239.75 226.67) rotate(-45)"/><rect x="151.37" y="406.72" width="4.75" height="3" transform="translate(-243.62 228.27) rotate(-45)"/><rect x="156.84" y="401.24" width="4.75" height="3" transform="translate(-238.14 230.52) rotate(-45)"/><rect x="154.98" y="403.98" width="3" height="3" transform="translate(-240.88 229.41) rotate(-45)"/><rect x="256.72" y="405.84" width="3" height="4.75" transform="translate(-213.02 302.15) rotate(-45)"/><rect x="251.24" y="400.37" width="3" height="4.75" transform="translate(-210.75 296.67) rotate(-45)"/><rect x="250.37" y="406.72" width="4.75" height="3" transform="translate(-214.62 298.26) rotate(-45)"/><rect x="255.84" y="401.24" width="4.75" height="3" transform="translate(-209.15 300.55) rotate(-45)"/><rect x="253.98" y="403.98" width="3" height="3" transform="translate(-211.89 299.42) rotate(-45)"/><rect x="350.24" y="400.37" width="3" height="4.75" transform="translate(-181.76 366.68) rotate(-45)"/><rect x="355.72" y="405.84" width="3" height="4.75" transform="translate(-184.03 372.15) rotate(-45)"/><rect x="349.37" y="406.72" width="4.75" height="3" transform="translate(-185.63 368.26) rotate(-45)"/><rect x="354.84" y="401.24" width="4.75" height="3" transform="translate(-180.15 370.55) rotate(-45)"/><rect x="352.98" y="403.98" width="3" height="3" transform="translate(-182.89 369.43) rotate(-45)"/><rect x="51.24" y="400.37" width="3" height="4.75" transform="translate(-269.33 155.25) rotate(-45)"/><rect x="56.72" y="405.84" width="3" height="4.75" transform="translate(-271.6 160.73) rotate(-45)"/><rect x="50.37" y="406.72" width="4.75" height="3" transform="translate(-273.2 156.85) rotate(-45)"/><rect x="55.84" y="401.24" width="4.75" height="3" transform="translate(-267.73 159.12) rotate(-45)"/><rect x="53.98" y="403.98" width="3" height="3" transform="translate(-270.47 158) rotate(-45)"/></svg>                            </span>
                        </div>
                        <!-- /Hightlight One SVG Shape-->
                    </div>
                    <!-- /Highlight One Image Section-->

                    <!-- Highlight One Text Section-->
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-1 position-relative" data-aos="fade-in">
                        <div class="position-relative z-index-20">
                            <p class="mb-0 small fw-bolder tracking-wider text-uppercase text-primary">Trabalhem juntos
                            </p>
                            <h4 class="fs-1 fw-bold mb-4 mt-3">Colaboração é a chave para o sucesso.</h4>
                            <p class="text-muted">Utilize nosso portal para colaborar com os users do CDT-IFPR em todas as etapas dos projetos de extensão.</p>
                            <a href="#" class="btn btn-link px-0 me-3 fw-medium text-decoration-none mt-4"
                                role="button">Comece agora &rarr;</a>
                        </div>

                    </div>
                    <!-- /Highlight One Text Section-->

                </div>
            </div>
            <!-- /Hightlight One-->

            <!-- Highlight Two-->
            <div class="container py-5 py-lg-8">
                <div class="row g-5 g-lg-10 d-flex align-items-center flex-row-reverse">

                    <!-- Highlight Two Image Section-->
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-1 position-relative" data-aos="fade-in">
                        <picture class="position-relative z-index-20">
                            <img class="img-fluid rounded-5" src="{{ asset('img/feature-2.jpeg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                        </picture>

                        <!-- Hightlight Two SVG Shape-->
                        <div class="d-none d-xl-block f-w-60 position-absolute top-n13 end-n3 opacity-75">
                            <span class="d-block">
                                <svg class="w-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 411.39 411.39"><circle cx="355.89" cy="255.89" r="2.5" fill="none"/><circle cx="355.89" cy="55.89" r="2.5" fill="none"/><circle cx="305.89" cy="105.89" r="2.5" fill="none"/><circle cx="255.89" cy="155.89" r="2.5" fill="none"/><circle cx="305.89" cy="205.89" r="2.5" fill="none"/><circle cx="305.89" cy="405.89" r="2.5" fill="none"/><circle cx="405.89" cy="5.89" r="2.5" fill="none"/><circle cx="305.89" cy="305.89" r="2.5" fill="none"/><circle cx="205.89" cy="105.89" r="2.5" fill="none"/><circle cx="255.89" cy="255.89" r="2.5" fill="none"/><circle cx="205.89" cy="205.89" r="2.5" fill="none"/><circle cx="305.89" cy="5.89" r="2.5" fill="none"/><circle cx="355.89" cy="355.89" r="2.5" fill="none"/><circle cx="205.89" cy="405.89" r="2.5" fill="none"/><circle cx="205.89" cy="305.89" r="2.5" fill="none"/><circle cx="355.89" cy="155.89" r="2.5" fill="none"/><circle cx="405.89" cy="405.89" r="2.5" fill="none"/><circle cx="405.89" cy="205.89" r="2.5" fill="none"/><circle cx="405.89" cy="305.89" r="2.5" fill="none"/><circle cx="405.89" cy="105.89" r="2.5" fill="none"/><circle cx="5.89" cy="305.89" r="2.5" fill="none"/><circle cx="5.89" cy="5.89" r="2.5" fill="none"/><circle cx="55.89" cy="55.89" r="2.5" fill="none"/><circle cx="55.89" cy="155.89" r="2.5" fill="none"/><circle cx="55.89" cy="355.89" r="2.5" fill="none"/><circle cx="55.89" cy="255.89" r="2.5" fill="none"/><circle cx="155.89" cy="55.89" r="2.5" fill="none"/><circle cx="105.89" cy="305.89" r="2.5" fill="none"/><circle cx="105.89" cy="205.89" r="2.5" fill="none"/><circle cx="105.89" cy="105.89" r="2.5" fill="none"/><circle cx="205.89" cy="5.89" r="2.5" fill="none"/><circle cx="255.89" cy="355.89" r="2.5" fill="none"/><circle cx="105.89" cy="405.89" r="2.5" fill="none"/><circle cx="255.89" cy="55.89" r="2.5" fill="none"/><circle cx="105.89" cy="5.89" r="2.5" fill="none"/><circle cx="5.89" cy="205.89" r="2.5" fill="none"/><circle cx="5.89" cy="405.89" r="2.5" fill="none"/><circle cx="155.89" cy="355.89" r="2.5" fill="none"/><circle cx="155.89" cy="255.89" r="2.5" fill="none"/><circle cx="155.89" cy="155.89" r="2.5" fill="none"/><circle cx="5.89" cy="105.89" r="2.5" fill="none"/><path d="M5.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,5.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,5.89,3.39Z" fill="#bcbcbc"/><path d="M55.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,58.39Z" fill="#bcbcbc"/><path d="M155.89,61.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,61.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,53.39Z" fill="#bcbcbc"/><path d="M255.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,58.39Z" fill="#bcbcbc"/><path d="M355.89,50.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,50.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,58.39Z" fill="#bcbcbc"/><path d="M55.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,158.39Z" fill="#bcbcbc"/><path d="M155.89,161.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,161.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,153.39Z" fill="#bcbcbc"/><path d="M255.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,158.39Z" fill="#bcbcbc"/><path d="M355.89,150.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,150.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,158.39Z" fill="#bcbcbc"/><path d="M55.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,258.39Z" fill="#bcbcbc"/><path d="M155.89,261.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,261.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,253.39Z" fill="#bcbcbc"/><path d="M255.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,258.39Z" fill="#bcbcbc"/><path d="M355.89,250.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,250.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,258.39Z" fill="#bcbcbc"/><path d="M55.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,55.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,55.89,358.39Z" fill="#bcbcbc"/><path d="M155.89,361.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,155.89,361.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,155.89,353.39Z" fill="#bcbcbc"/><path d="M255.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,255.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,255.89,358.39Z" fill="#bcbcbc"/><path d="M355.89,350.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,355.89,350.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,355.89,358.39Z" fill="#bcbcbc"/><path d="M105.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,105.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,105.89,3.39Z" fill="#bcbcbc"/><path d="M205.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,205.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,205.89,3.39Z" fill="#bcbcbc"/><path d="M305.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,305.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,305.89,3.39Z" fill="#bcbcbc"/><path d="M405.89,11.39a5.5,5.5,0,1,0-5.5-5.5A5.5,5.5,0,0,0,405.89,11.39Zm0-8a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,405.89,3.39Z" fill="#bcbcbc"/><path d="M5.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,108.39Z" fill="#bcbcbc"/><path d="M105.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,108.39Z" fill="#bcbcbc"/><path d="M205.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,108.39Z" fill="#bcbcbc"/><path d="M305.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,108.39Z" fill="#bcbcbc"/><path d="M405.89,100.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,100.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,108.39Z" fill="#bcbcbc"/><path d="M5.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,208.39Z" fill="#bcbcbc"/><path d="M105.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,208.39Z" fill="#bcbcbc"/><path d="M205.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,208.39Z"/><path d="M305.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,208.39Z" fill="#bcbcbc"/><path d="M405.89,200.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,200.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,208.39Z" fill="#bcbcbc"/><path d="M5.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,308.39Z" fill="#bcbcbc"/><path d="M105.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,308.39Z" fill="#bcbcbc"/><path d="M205.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,308.39Z" fill="#bcbcbc"/><path d="M305.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,308.39Z" fill="#bcbcbc"/><path d="M405.89,300.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,300.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,308.39Z" fill="#bcbcbc"/><path d="M5.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,5.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,5.89,408.39Z" fill="#bcbcbc"/><path d="M105.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,105.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,105.89,408.39Z" fill="#bcbcbc"/><path d="M205.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,205.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,205.89,408.39Z" fill="#bcbcbc"/><path d="M305.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,305.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,305.89,408.39Z" fill="#bcbcbc"/><path d="M405.89,400.39a5.5,5.5,0,1,0,5.5,5.5A5.51,5.51,0,0,0,405.89,400.39Zm0,8a2.5,2.5,0,1,1,2.5-2.5A2.51,2.51,0,0,1,405.89,408.39Z" fill="#bcbcbc"/><rect x="152.24" y="100.37" width="3" height="4.75" transform="translate(-27.62 138.8) rotate(-45)"/><rect x="157.72" y="105.84" width="3" height="4.75" transform="translate(-29.89 144.28) rotate(-45)"/><rect x="151.37" y="106.72" width="4.75" height="3" transform="translate(-31.49 140.41) rotate(-45)"/><rect x="156.84" y="101.24" width="4.75" height="3" transform="translate(-26.02 142.67) rotate(-45)"/><rect x="154.98" y="103.98" width="3" height="3" transform="translate(-28.75 141.54) rotate(-45)"/><rect x="256.72" y="105.84" width="3" height="4.75" transform="translate(-0.89 214.28) rotate(-45)"/><rect x="251.24" y="100.37" width="3" height="4.75" transform="translate(1.38 208.8) rotate(-45)"/><rect x="255.84" y="101.24" width="4.75" height="3" transform="translate(2.98 212.68) rotate(-45)"/><rect x="250.37" y="106.72" width="4.75" height="3" transform="translate(-2.5 210.4) rotate(-45)"/><rect x="253.98" y="103.98" width="3" height="3" transform="translate(0.25 211.55) rotate(-45)"/><rect x="355.72" y="105.84" width="3" height="4.75" transform="translate(28.11 284.29) rotate(-45)"/><rect x="350.24" y="100.37" width="3" height="4.75" transform="translate(30.37 278.81) rotate(-45)"/><rect x="354.84" y="101.24" width="4.75" height="3" transform="translate(31.98 282.68) rotate(-45)"/><rect x="349.37" y="106.72" width="4.75" height="3" transform="translate(26.5 280.4) rotate(-45)"/><rect x="352.98" y="103.98" width="3" height="3" transform="translate(29.24 281.55) rotate(-45)"/><rect x="51.24" y="100.37" width="3" height="4.75" transform="translate(-57.2 67.38) rotate(-45)"/><rect x="56.72" y="105.84" width="3" height="4.75" transform="translate(-59.47 72.86) rotate(-45)"/><rect x="55.84" y="101.24" width="4.75" height="3" transform="translate(-55.6 71.26) rotate(-45)"/><rect x="50.37" y="106.72" width="4.75" height="3" transform="translate(-61.07 68.98) rotate(-45)"/><rect x="53.98" y="103.98" width="3" height="3" transform="translate(-58.34 70.12) rotate(-45)"/><rect x="152.24" y="0.37" width="3" height="4.75" transform="translate(43.09 109.51) rotate(-45)"/><rect x="157.72" y="5.84" width="3" height="4.75" transform="translate(40.82 114.99) rotate(-45)"/><rect x="156.84" y="1.24" width="4.75" height="3" transform="translate(44.7 113.38) rotate(-45)"/><rect x="151.37" y="6.72" width="4.75" height="3" transform="translate(39.22 111.11) rotate(-45)"/><rect x="154.98" y="3.98" width="3" height="3" transform="translate(41.96 112.25) rotate(-45)"/><rect x="251.24" y="0.37" width="3" height="4.75" transform="translate(72.09 179.52) rotate(-45)"/><rect x="256.72" y="5.84" width="3" height="4.75" transform="translate(69.82 184.99) rotate(-45)"/><rect x="250.37" y="6.72" width="4.75" height="3" transform="translate(68.21 181.11) rotate(-45)"/><rect x="255.84" y="1.24" width="4.75" height="3" transform="translate(73.69 183.39) rotate(-45)"/><rect x="253.98" y="3.98" width="3" height="3" transform="translate(70.96 182.26) rotate(-45)"/><rect x="350.24" y="0.37" width="3" height="4.75" transform="translate(101.09 249.52) rotate(-45)"/><rect x="355.72" y="5.84" width="3" height="4.75" transform="translate(98.82 255) rotate(-45)"/><rect x="349.37" y="6.72" width="4.75" height="3" transform="translate(97.21 251.12) rotate(-45)"/><rect x="354.84" y="1.24" width="4.75" height="3" transform="translate(102.69 253.39) rotate(-45)"/><rect x="352.98" y="3.98" width="3" height="3" transform="translate(99.96 252.26) rotate(-45)"/><rect x="1.24" y="50.37" width="3" height="4.75" transform="translate(-36.49 17.38) rotate(-45)"/><rect x="6.72" y="55.84" width="3" height="4.75" transform="translate(-38.76 22.86) rotate(-45)"/><rect x="0.37" y="56.72" width="4.75" height="3" transform="translate(-40.36 18.99) rotate(-45)"/><rect x="5.84" y="51.24" width="4.75" height="3" transform="translate(-34.89 21.26) rotate(-45)"/><rect x="3.98" y="53.98" width="3" height="3" transform="translate(-37.62 20.12) rotate(-45)"/><rect x="101.24" y="50.37" width="3" height="4.75" transform="translate(-7.2 88.09) rotate(-45)"/><rect x="106.72" y="55.84" width="3" height="4.75" transform="translate(-9.47 93.57) rotate(-45)"/><rect x="105.84" y="51.24" width="4.75" height="3" transform="translate(-5.6 91.97) rotate(-45)"/><rect x="100.37" y="56.72" width="4.75" height="3" transform="translate(-11.07 89.69) rotate(-45)"/><rect x="103.98" y="53.98" width="3" height="3" transform="translate(-8.33 90.84) rotate(-45)"/><rect x="206.72" y="55.84" width="3" height="4.75" transform="translate(19.82 164.28) rotate(-45)"/><rect x="201.24" y="50.37" width="3" height="4.75" transform="translate(22.09 158.8) rotate(-45)"/><rect x="200.37" y="56.72" width="4.75" height="3" transform="translate(18.21 160.4) rotate(-45)"/><rect x="205.84" y="51.24" width="4.75" height="3" transform="translate(23.69 162.68) rotate(-45)"/><rect x="203.98" y="53.98" width="3" height="3" transform="translate(20.96 161.55) rotate(-45)"/><rect x="301.24" y="50.37" width="3" height="4.75" transform="translate(51.38 229.52) rotate(-45)"/><rect x="306.72" y="55.84" width="3" height="4.75" transform="translate(49.11 234.99) rotate(-45)"/><rect x="300.37" y="56.72" width="4.75" height="3" transform="translate(47.5 231.11) rotate(-45)"/><rect x="305.84" y="51.24" width="4.75" height="3" transform="translate(52.98 233.39) rotate(-45)"/><rect x="303.98" y="53.98" width="3" height="3" transform="translate(50.25 232.26) rotate(-45)"/><rect x="406.72" y="55.84" width="3" height="4.75" transform="translate(78.4 305.7) rotate(-45)"/><rect x="401.24" y="50.37" width="3" height="4.75" transform="translate(80.67 300.23) rotate(-45)"/><rect x="400.37" y="56.72" width="4.75" height="3" transform="translate(76.79 301.82) rotate(-45)"/><rect x="405.84" y="51.24" width="4.75" height="3" transform="translate(82.27 304.1) rotate(-45)"/><rect x="403.98" y="53.98" width="3" height="3" transform="translate(79.54 302.97) rotate(-45)"/><rect x="1.24" y="150.37" width="3" height="4.75" transform="translate(-107.2 46.67) rotate(-45)"/><rect x="6.72" y="155.84" width="3" height="4.75" transform="translate(-109.47 52.15) rotate(-45)"/><rect x="0.37" y="156.72" width="4.75" height="3" transform="translate(-111.07 48.27) rotate(-45)"/><rect x="5.84" y="151.24" width="4.75" height="3" transform="translate(-105.6 50.55) rotate(-45)"/><rect x="3.98" y="153.98" width="3" height="3" transform="translate(-108.34 49.41) rotate(-45)"/><rect x="101.24" y="150.37" width="3" height="4.75" transform="translate(-77.91 117.38) rotate(-45)"/><rect x="106.72" y="155.84" width="3" height="4.75" transform="translate(-80.18 122.86) rotate(-45)"/><rect x="100.37" y="156.72" width="4.75" height="3" transform="translate(-81.78 118.98) rotate(-45)"/><rect x="105.84" y="151.24" width="4.75" height="3" transform="translate(-76.31 121.26) rotate(-45)"/><rect x="103.98" y="153.98" width="3" height="3" transform="translate(-79.05 120.13) rotate(-45)"/><rect x="206.72" y="155.84" width="3" height="4.75" transform="translate(-50.89 193.57) rotate(-45)"/><rect x="201.24" y="150.37" width="3" height="4.75" transform="translate(-48.62 188.09) rotate(-45)"/><rect x="200.37" y="156.72" width="4.75" height="3" transform="translate(-52.5 189.69) rotate(-45)"/><rect x="205.84" y="151.24" width="4.75" height="3" transform="translate(-47.02 191.97) rotate(-45)"/><rect x="203.98" y="153.98" width="3" height="3" transform="translate(-49.76 190.84) rotate(-45)"/><rect x="306.72" y="155.84" width="3" height="4.75" transform="translate(-21.6 264.28) rotate(-45)"/><rect x="301.24" y="150.37" width="3" height="4.75" transform="translate(-19.33 258.8) rotate(-45)"/><rect x="305.84" y="151.24" width="4.75" height="3" transform="translate(-17.73 262.68) rotate(-45)"/><rect x="300.37" y="156.72" width="4.75" height="3" transform="translate(-23.21 260.4) rotate(-45)"/><rect x="303.98" y="153.98" width="3" height="3" transform="translate(-20.46 261.55) rotate(-45)"/><rect x="406.72" y="155.84" width="3" height="4.75" transform="translate(7.69 334.99) rotate(-45)"/><rect x="401.24" y="150.37" width="3" height="4.75" transform="translate(9.96 329.52) rotate(-45)"/><rect x="400.37" y="156.72" width="4.75" height="3" transform="translate(6.08 331.11) rotate(-45)"/><rect x="405.84" y="151.24" width="4.75" height="3" transform="translate(11.56 333.39) rotate(-45)"/><rect x="403.98" y="153.98" width="3" height="3" transform="translate(8.83 332.26) rotate(-45)"/><rect x="1.24" y="250.37" width="3" height="4.75" transform="translate(-177.91 75.96) rotate(-45)"/><rect x="6.72" y="255.84" width="3" height="4.75" transform="translate(-180.18 81.44) rotate(-45)"/><rect x="5.84" y="251.24" width="4.75" height="3" transform="translate(-176.31 79.83) rotate(-45)"/><rect x="0.37" y="256.72" width="4.75" height="3" transform="translate(-181.78 77.56) rotate(-45)"/><rect x="3.98" y="253.98" width="3" height="3" transform="translate(-179.05 78.7) rotate(-45)"/><rect x="101.24" y="250.37" width="3" height="4.75" transform="translate(-148.62 146.67) rotate(-45)"/><rect x="106.72" y="255.84" width="3" height="4.75" transform="translate(-150.89 152.15) rotate(-45)"/><rect x="105.84" y="251.24" width="4.75" height="3" transform="translate(-147.02 150.55) rotate(-45)"/><rect x="100.37" y="256.72" width="4.75" height="3" transform="translate(-152.49 148.27) rotate(-45)"/><rect x="103.98" y="253.98" width="3" height="3" transform="translate(-149.76 149.42) rotate(-45)"/><rect x="201.24" y="250.37" width="3" height="4.75" transform="translate(-119.33 217.38) rotate(-45)"/><rect x="206.72" y="255.84" width="3" height="4.75" transform="translate(-121.6 222.86) rotate(-45)"/><rect x="200.37" y="256.72" width="4.75" height="3" transform="translate(-123.2 218.98) rotate(-45)"/><rect x="205.84" y="251.24" width="4.75" height="3" transform="translate(-117.73 221.26) rotate(-45)"/><rect x="203.98" y="253.98" width="3" height="3" transform="translate(-120.47 220.13) rotate(-45)"/><rect x="301.24" y="250.37" width="3" height="4.75" transform="translate(-90.04 288.09) rotate(-45)"/><rect x="306.72" y="255.84" width="3" height="4.75" transform="translate(-92.31 293.57) rotate(-45)"/><rect x="305.84" y="251.24" width="4.75" height="3" transform="translate(-88.44 291.97) rotate(-45)"/><rect x="300.37" y="256.72" width="4.75" height="3" transform="translate(-93.92 289.69) rotate(-45)"/><rect x="303.98" y="253.98" width="3" height="3" transform="translate(-91.18 290.84) rotate(-45)"/><rect x="401.24" y="250.37" width="3" height="4.75" transform="translate(-60.75 358.8) rotate(-45)"/><rect x="406.72" y="255.84" width="3" height="4.75" transform="translate(-63.02 364.28) rotate(-45)"/><rect x="400.37" y="256.72" width="4.75" height="3" transform="translate(-64.63 360.39) rotate(-45)"/><rect x="405.84" y="251.24" width="4.75" height="3" transform="translate(-59.15 362.68) rotate(-45)"/><rect x="403.98" y="253.98" width="3" height="3" transform="translate(-61.89 361.55) rotate(-45)"/><rect x="6.72" y="355.84" width="3" height="4.75" transform="translate(-250.89 110.73) rotate(-45)"/><rect x="1.24" y="350.37" width="3" height="4.75" transform="translate(-248.62 105.25) rotate(-45)"/><rect x="0.37" y="356.72" width="4.75" height="3" transform="translate(-252.49 106.85) rotate(-45)"/><rect x="5.84" y="351.24" width="4.75" height="3" transform="translate(-247.02 109.12) rotate(-45)"/><rect x="3.98" y="353.98" width="3" height="3" transform="translate(-249.76 108) rotate(-45)"/><rect x="106.72" y="355.84" width="3" height="4.75" transform="translate(-221.6 181.44) rotate(-45)"/><rect x="101.24" y="350.37" width="3" height="4.75" transform="translate(-219.33 175.96) rotate(-45)"/><rect x="100.37" y="356.72" width="4.75" height="3" transform="translate(-223.2 177.56) rotate(-45)"/><rect x="105.84" y="351.24" width="4.75" height="3" transform="translate(-217.73 179.83) rotate(-45)"/><rect x="103.98" y="353.98" width="3" height="3" transform="translate(-220.47 178.71) rotate(-45)"/><rect x="206.72" y="355.84" width="3" height="4.75" transform="translate(-192.31 252.15) rotate(-45)"/><rect x="201.24" y="350.37" width="3" height="4.75" transform="translate(-190.04 246.67) rotate(-45)"/><rect x="205.84" y="351.24" width="4.75" height="3" transform="translate(-188.44 250.55) rotate(-45)"/><rect x="200.37" y="356.72" width="4.75" height="3" transform="translate(-193.91 248.26) rotate(-45)"/><rect x="203.98" y="353.98" width="3" height="3" transform="translate(-191.18 249.42) rotate(-45)"/><rect x="301.24" y="350.37" width="3" height="4.75" transform="translate(-160.75 317.38) rotate(-45)"/><rect x="306.72" y="355.84" width="3" height="4.75" transform="translate(-163.02 322.86) rotate(-45)"/><rect x="300.37" y="356.72" width="4.75" height="3" transform="translate(-164.63 318.97) rotate(-45)"/><rect x="305.84" y="351.24" width="4.75" height="3" transform="translate(-159.15 321.26) rotate(-45)"/><rect x="303.98" y="353.98" width="3" height="3" transform="translate(-161.89 320.13) rotate(-45)"/><rect x="406.72" y="355.84" width="3" height="4.75" transform="translate(-133.73 393.57) rotate(-45)"/><rect x="401.24" y="350.37" width="3" height="4.75" transform="translate(-131.46 388.09) rotate(-45)"/><rect x="405.84" y="351.24" width="4.75" height="3" transform="translate(-129.86 391.97) rotate(-45)"/><rect x="400.37" y="356.72" width="4.75" height="3" transform="translate(-135.34 389.68) rotate(-45)"/><rect x="403.98" y="353.98" width="3" height="3" transform="translate(-132.6 390.85) rotate(-45)"/><rect x="51.24" y="0.37" width="3" height="4.75" transform="translate(13.51 38.09) rotate(-45)"/><rect x="56.72" y="5.84" width="3" height="4.75" transform="translate(11.24 43.57) rotate(-45)"/><rect x="55.84" y="1.24" width="4.75" height="3" transform="translate(15.11 41.97) rotate(-45)"/><rect x="50.37" y="6.72" width="4.75" height="3" transform="translate(9.64 39.7) rotate(-45)"/><rect x="53.98" y="3.98" width="3" height="3" transform="translate(12.38 40.83) rotate(-45)"/><rect x="152.24" y="200.37" width="3" height="4.75" transform="translate(-98.33 168.09) rotate(-45)"/><rect x="157.72" y="205.84" width="3" height="4.75" transform="translate(-100.6 173.57) rotate(-45)"/><rect x="151.37" y="206.72" width="4.75" height="3" transform="translate(-102.2 169.69) rotate(-45)"/><rect x="156.84" y="201.24" width="4.75" height="3" transform="translate(-96.72 171.95) rotate(-45)"/><rect x="154.98" y="203.98" width="3" height="3" transform="translate(-99.46 170.83) rotate(-45)"/><rect x="256.72" y="205.84" width="3" height="4.75" transform="translate(-71.6 243.57) rotate(-45)"/><rect x="251.24" y="200.37" width="3" height="4.75" transform="translate(-69.33 238.09) rotate(-45)"/><rect x="250.37" y="206.72" width="4.75" height="3" transform="translate(-73.21 239.69) rotate(-45)"/><rect x="255.84" y="201.24" width="4.75" height="3" transform="translate(-67.73 241.97) rotate(-45)"/><rect x="253.98" y="203.98" width="3" height="3" transform="translate(-70.47 240.84) rotate(-45)"/><rect x="350.24" y="200.37" width="3" height="4.75" transform="translate(-40.34 308.1) rotate(-45)"/><rect x="355.72" y="205.84" width="3" height="4.75" transform="translate(-42.6 313.57) rotate(-45)"/><rect x="354.84" y="201.24" width="4.75" height="3" transform="translate(-38.73 311.97) rotate(-45)"/><rect x="349.37" y="206.72" width="4.75" height="3" transform="translate(-44.21 309.69) rotate(-45)"/><rect x="352.98" y="203.98" width="3" height="3" transform="translate(-41.47 310.85) rotate(-45)"/><rect x="51.24" y="200.37" width="3" height="4.75" transform="translate(-127.91 96.67) rotate(-45)"/><rect x="56.72" y="205.84" width="3" height="4.75" transform="translate(-130.18 102.15) rotate(-45)"/><rect x="50.37" y="206.72" width="4.75" height="3" transform="translate(-131.78 98.27) rotate(-45)"/><rect x="55.84" y="201.24" width="4.75" height="3" transform="translate(-126.31 100.55) rotate(-45)"/><rect x="53.98" y="203.98" width="3" height="3" transform="translate(-129.05 99.42) rotate(-45)"/><rect x="152.24" y="300.37" width="3" height="4.75" transform="translate(-169.04 197.38) rotate(-45)"/><rect x="157.72" y="305.84" width="3" height="4.75" transform="translate(-171.31 202.86) rotate(-45)"/><rect x="156.84" y="301.24" width="4.75" height="3" transform="translate(-167.43 201.24) rotate(-45)"/><rect x="151.37" y="306.72" width="4.75" height="3" transform="translate(-172.91 198.98) rotate(-45)"/><rect x="154.98" y="303.98" width="3" height="3" transform="translate(-170.17 200.12) rotate(-45)"/><rect x="256.72" y="305.84" width="3" height="4.75" transform="translate(-142.31 272.86) rotate(-45)"/><rect x="251.24" y="300.37" width="3" height="4.75" transform="translate(-140.04 267.38) rotate(-45)"/><rect x="250.37" y="306.72" width="4.75" height="3" transform="translate(-143.91 268.98) rotate(-45)"/><rect x="255.84" y="301.24" width="4.75" height="3" transform="translate(-138.44 271.26) rotate(-45)"/><rect x="253.98" y="303.98" width="3" height="3" transform="translate(-141.18 270.13) rotate(-45)"/><rect x="355.72" y="305.84" width="3" height="4.75" transform="translate(-113.32 342.86) rotate(-45)"/><rect x="350.24" y="300.37" width="3" height="4.75" transform="translate(-111.05 337.39) rotate(-45)"/><rect x="349.37" y="306.72" width="4.75" height="3" transform="translate(-114.92 338.98) rotate(-45)"/><rect x="354.84" y="301.24" width="4.75" height="3" transform="translate(-109.44 341.26) rotate(-45)"/><rect x="352.98" y="303.98" width="3" height="3" transform="translate(-112.18 340.14) rotate(-45)"/><rect x="56.72" y="305.84" width="3" height="4.75" transform="translate(-200.89 131.44) rotate(-45)"/><rect x="51.24" y="300.37" width="3" height="4.75" transform="translate(-198.62 125.96) rotate(-45)"/><rect x="55.84" y="301.24" width="4.75" height="3" transform="translate(-197.02 129.83) rotate(-45)"/><rect x="50.37" y="306.72" width="4.75" height="3" transform="translate(-202.49 127.56) rotate(-45)"/><rect x="53.98" y="303.98" width="3" height="3" transform="translate(-199.76 128.71) rotate(-45)"/><rect x="157.72" y="405.84" width="3" height="4.75" transform="translate(-242.02 232.15) rotate(-45)"/><rect x="152.24" y="400.37" width="3" height="4.75" transform="translate(-239.75 226.67) rotate(-45)"/><rect x="151.37" y="406.72" width="4.75" height="3" transform="translate(-243.62 228.27) rotate(-45)"/><rect x="156.84" y="401.24" width="4.75" height="3" transform="translate(-238.14 230.52) rotate(-45)"/><rect x="154.98" y="403.98" width="3" height="3" transform="translate(-240.88 229.41) rotate(-45)"/><rect x="256.72" y="405.84" width="3" height="4.75" transform="translate(-213.02 302.15) rotate(-45)"/><rect x="251.24" y="400.37" width="3" height="4.75" transform="translate(-210.75 296.67) rotate(-45)"/><rect x="250.37" y="406.72" width="4.75" height="3" transform="translate(-214.62 298.26) rotate(-45)"/><rect x="255.84" y="401.24" width="4.75" height="3" transform="translate(-209.15 300.55) rotate(-45)"/><rect x="253.98" y="403.98" width="3" height="3" transform="translate(-211.89 299.42) rotate(-45)"/><rect x="350.24" y="400.37" width="3" height="4.75" transform="translate(-181.76 366.68) rotate(-45)"/><rect x="355.72" y="405.84" width="3" height="4.75" transform="translate(-184.03 372.15) rotate(-45)"/><rect x="349.37" y="406.72" width="4.75" height="3" transform="translate(-185.63 368.26) rotate(-45)"/><rect x="354.84" y="401.24" width="4.75" height="3" transform="translate(-180.15 370.55) rotate(-45)"/><rect x="352.98" y="403.98" width="3" height="3" transform="translate(-182.89 369.43) rotate(-45)"/><rect x="51.24" y="400.37" width="3" height="4.75" transform="translate(-269.33 155.25) rotate(-45)"/><rect x="56.72" y="405.84" width="3" height="4.75" transform="translate(-271.6 160.73) rotate(-45)"/><rect x="50.37" y="406.72" width="4.75" height="3" transform="translate(-273.2 156.85) rotate(-45)"/><rect x="55.84" y="401.24" width="4.75" height="3" transform="translate(-267.73 159.12) rotate(-45)"/><rect x="53.98" y="403.98" width="3" height="3" transform="translate(-270.47 158) rotate(-45)"/></svg>                            </span>
                        </div>
                        <!-- /Hightlight Two SVG Shape-->

                        <div class="position-absolute bottom-3 start-5 z-index-30 d-none d-lg-block" data-aos="fade-in" data-aos-duration="350" data-aos-delay="200">
                            <div class="p-3 bg-white shadow-lg rounded-3 f-w-16 mb-3">
                                <picture class="position-relative z-index-0">
                                    <img class="img-fluid" src="{{ asset('img/logos/logo-12.svg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                            </div>
                            <div class="p-3 bg-white shadow-lg rounded-3 f-w-16 mb-3">
                                <picture class="position-relative z-index-0">
                                    <img class="img-fluid" src="{{ asset('img/logos/logo-10.svg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                            </div>
                            <div class="p-3 bg-white shadow-lg rounded-3 f-w-16 mb-3">
                                <picture class="position-relative z-index-0">
                                    <img class="img-fluid" src="{{ asset('img/logos/logo-11.svg') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                            </div>
                            <div class="px-3 py-2 bg-primary shadow-lg rounded-3 f-w-16 mb-3">
                                <span class="fs-3">👍</span>
                            </div>
                        </div>
                    </div>
                    <!-- /Highlight Two Image Section-->

                    <!-- Highlight Two Text Section-->
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-1 position-relative" data-aos="fade-in">
                        <div class="text-start text-lg-end">
                            <p class="mb-0 small fw-bolder tracking-wider text-uppercase text-orange">Centro de Desenvolvimento Tecnológico</p>
                            <h4 class="fs-1 fw-bold mb-4 mt-3">Portal Web para Projetos de Extensão</h4>
                            <p class="text-muted">Acesse e participe dos projetos de extensão do CDT-IFPR, contribuindo para o desenvolvimento tecnológico e social da comunidade.</p>
                            <a href="#" class="btn btn-link px-0 me-3 fw-medium text-orange text-decoration-none mt-4"
                                role="button">Saiba mais &rarr;</a>
                        </div>

                    </div>
                    <!-- /Highlight Two Text Section-->

                </div>
            </div>
            <!-- /Hightlight Two-->

        </div>
        <!-- /Product Highlights-->

                <!-- Customer Reviews-->
        <!-- <div class="pb-10">
            <div class="container">
                <p class="mb-3 small fw-bolder tracking-wider text-uppercase text-primary text-center">Our Feedback</p>
                <h4 class="fs-1 fw-bold mb-6 text-center col-12 col-sm-6 col-md-5 col-lg-6 col-xl-4 mx-auto">What our customers are saying about us</h4>
                <div class="mt-3 d-flex justify-content-center flex-column flex-md-row">
                    <a href="#" class="btn btn-primary mb-2 mb-md-0" role="button">Ready to get started?</a>
                    <a href="#" class="btn btn-link text-decoration-none text-muted ms-md-2 bg-light-hover" role="button">Start
                        your free trial</a>
                </div>
            </div>
            <div class="mt-5">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-200 py-3">
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Just amazed at how easy to use Sigma is. Really saved us a heap of time.</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle" src="{{ asset('img/profile-small-2.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Joe Smithy</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-15.svg') }}" alt="">
                                    </picture>
                                </div>
                                </div>
                                <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                    <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                    <p class="mb-2 fw-medium fs-6">What a great way to shave days off our next product launch!</p>
                                    <div class="d-flex align-items-center mt-2">
                                        <picture>
                                            <img class="f-w-10 rounded-circle" src="{{ asset('img/profile-small-3.jpeg') }}" alt="">
                                        </picture>
                                        <span class="d-block text-muted fs-7 ms-3">Patrick Johnson</span>
                                    </div>
                                    <div class="mt-4 f-w-20">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-16.svg') }}" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                    <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                    <p class="mb-2 fw-medium fs-6">Spent a lot of time using Sigma the past few weeks...love it!</p>
                                    <div class="d-flex align-items-center mt-2">
                                        <picture>
                                            <img class="f-w-10 rounded-circle" src="{{ asset('img/profile-small-4.jpeg') }}" alt="">
                                        </picture>
                                        <span class="d-block text-muted fs-7 ms-3">Sally Klein</span>
                                    </div>
                                    <div class="mt-4 f-w-20">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-17.svg') }}" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                    <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                    <p class="mb-2 fw-medium fs-6">This is great value for money when you factor in the time saved</p>
                                    <div class="d-flex align-items-center mt-2">
                                        <picture>
                                            <img class="f-w-10 rounded-circle" src="{{ asset('img/profile-small-5.jpeg') }}" alt="">
                                        </picture>
                                        <span class="d-block text-muted fs-7 ms-3">Rohit Sharma</span>
                                    </div>
                                    <div class="mt-4 f-w-20">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-18.svg') }}" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                    <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                    <p class="mb-2 fw-medium fs-6">Still amazed at how easy to use Sigma is...just great.</p>
                                    <div class="d-flex align-items-center mt-2">
                                        <picture>
                                            <img class="f-w-10 rounded-circle" src="{{ asset('img/profile-small-6.jpeg') }}" alt="">
                                        </picture>
                                        <span class="d-block text-muted fs-7 ms-3">Jeff Waite</span>
                                    </div>
                                    <div class="mt-4 f-w-20">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-19.svg') }}" alt="">
                                        </picture>
                                    </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Signed up last week - blown away at how easy it was to build our first landing page</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <picture>
                                            <img class="f-w-10 rounded-circle"
                                                src="{{ asset('img/profile-small-7.jpeg') }}" alt="">
                                        </picture>
                                        <span class="d-block text-muted fs-7 ms-3">Kinsta Troy</span>
                                    </div>
                                    <div class="mt-4 f-w-20">
                                        <picture>
                                            <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-20.svg') }}" alt="">
                                        </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">The one-click integration with our hosting company is a life-saver</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-2.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Fred Couples</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-21.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Hooked. Can&#x27;t live without it now!</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Sam Nelson</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-22.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                        <div class="marquee-section animation-marquee-200 py-3">
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Just amazed at how easy to use Sigma is. Really saved us a heap of time.</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-2.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Joe Smithy</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-15.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">What a great way to shave days off our next product launch!</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-3.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Patrick Johnson</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-16.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Spent a lot of time using Sigma the past few weeks...love it!</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-4.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Sally Klein</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-17.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">This is great value for money when you factor in the time saved</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-5.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Rohit Sharma</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-18.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Still amazed at how easy to use Sigma is...just great.</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-7.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Jeff Waite</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-19.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Signed up last week - blown away at how easy it was to build our first landing page</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-7.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Kinsta Troy</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-20.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">The one-click integration with our hosting company is a life-saver</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-2.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Fred Couples</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-21.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="rounded shadow-sm border f-w-76 d-flex flex-wrap flex-column px-5 pb-5 pt-7 mx-4 text-wrap position-relative h-100">
                                <i class="ri-double-quotes-l position-absolute top-n1 start-2 ri-2x opacity-10"></i>
                                <p class="mb-2 fw-medium fs-6">Hooked. Can&#x27;t live without it now!</p>
                                <div class="d-flex align-items-center mt-2">
                                    <picture>
                                        <img class="f-w-10 rounded-circle"
                                            src="{{ asset('img/profile-small-7.jpeg') }}" alt="">
                                    </picture>
                                    <span class="d-block text-muted fs-7 ms-3">Sam Nelson</span>
                                </div>
                                <div class="mt-4 f-w-20">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="{{ asset('img/logos/logo-22.svg') }}" alt="">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div> -->
        <!-- /Customer Reviews-->

        <!-- Product Features summary-->
        <!-- <div class="py-10">
            <div class="container">
                <h4 class="fs-1 fw-bold mb-3 text-center">Explore our features</h4>
                <p class="text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="row gx-10 gy-7 mt-4">


                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><polygon points='12 2 2 7 12 12 22 7 12 2'></polygon><polyline points='2 17 12 22 22 17'></polyline><polyline opacity='.4' points='2 12 12 17 22 12'></polyline></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">Tasks planner</p>
                        <span class="text-muted fs-7">Plan and schedule your weekly tasks on web or mobile through our desktop or mobile apps.</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><rect x='4' y='4' width='16' height='16' rx='2' ry='2'></rect><rect opacity='.3' x='9' y='9' width='6' height='6'></rect><line x1='9' y1='1' x2='9' y2='4'></line><line x1='15' y1='1' x2='15' y2='4'></line><line x1='9' y1='20' x2='9' y2='23'></line><line x1='15' y1='20' x2='15' y2='23'></line><line x1='20' y1='9' x2='23' y2='9'></line><line x1='20' y1='14' x2='23' y2='14'></line><line x1='1' y1='9' x2='4' y2='9'></line><line x1='1' y1='14' x2='4' y2='14'></line></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">Team collaborations</p>
                        <span class="text-muted fs-7">Invite unlimited team members to view, edit, comment and create landing pages with you.</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'><circle cx='18' cy='18' r='3'></circle><circle cx='6' cy='6' r='3'></circle><path opacity='.4' d='M13 6h3a2 2 0 0 1 2 2v7'></path><line opacity='.4' x1='6' y1='9' x2='6' y2='21'></line></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">Version control</p>
                        <span class="text-muted fs-7">Full integration with Git, GitLab and Bitbucket to easily allow version control.</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' ><path d='M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2'></path><circle cx='9' cy='7' r='4'></circle><path opacity='.4' d='M23 21v-2a4 4 0 0 0-3-3.87'></path><path opacity='.4' d='M16 3.13a4 4 0 0 1 0 7.75'></path></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">AB testing</p>
                        <span class="text-muted fs-7">Create unlimited AB tests for your landing pages and make the designs public or private.</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' ><path d='M19 16.9A5 5 0 0 0 18 7h-1.26a8 8 0 1 0-11.62 9'></path><polyline opacity='.4' points='13 11 9 17 15 17 11 23'></polyline></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">One-click export</p>
                        <span class="text-muted fs-7">Export your completed landing pages to HTML in both Bootstrap and Tailwind CSS format.</span>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-start">
                        <span class="f-w-8 d-block text-primary">
                            <svg class='w-100' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' ><circle opacity='.4' cx='12' cy='12' r='2'></circle><path d='M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14'></path></svg>
                        </span>
                        <p class="fw-medium mb-1 mt-3 fs-5">Mobile application</p>
                        <span class="text-muted fs-7">Download our mobile app and continue to work on your landing pages through the mobile app.</span>
                    </div>

                </div>

                <a href="#" class="btn btn-primary d-table mx-auto mt-5 w-100 w-md-auto mt-lg-8 mb-3" role="button">Start your trial</a>
                <ul
                    class="list-unstyled d-none d-md-flex align-items-center justify-content-center small text-muted mt-3 pt-1 fw-medium fs-9">
                    <li class="me-4 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-primary ri-lg me-1"></i> No credit card required
                    </li>
                    <li class="me-4 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-primary ri-lg me-1"></i> Cancel anytime</li>
                    <li class="me-4 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-primary ri-lg me-1"></i> 30 day free trial</li>
                </ul>
            </div>
        </div> -->
        <!-- Product Features summary-->

        <!-- About Us-->
        <!-- <div class="pt-10 bg-light">
            <div class="container">
                <div class="col-12 mx-auto col-sm-10 col-md-8 col-lg-6 text-center">
                    <h4 class="fs-1 fw-bold mb-4">Who we are</h4>
                    <div class="my-5 d-none d-md-flex align-items-start justify-content-between">
                        <div>
                            <span class="display-3 fw-bold text-primary d-block">12</span>
                            <span
                                class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Locations</span>
                        </div>
                        <div>
                            <span class="display-3 fw-bold text-primary d-block">75K</span>
                            <span
                                class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Customers</span>
                        </div>
                        <div>
                            <span class="display-3 fw-bold text-primary d-block">160</span>
                            <span class="d-block fs-9 fw-bolder tracking-wide text-uppercase text-muted">Staff</span>
                        </div>
                    </div> 

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Sed lobortis nibh augue</a>,
                        ut blandit <a href="#">lorem hendrerit non</a>. Donec finibus at lacus in efficitur nunc
                        fringilla, dui quis
                        vestibulum varius.</p>
                    <a href="#" class="btn btn-success mt-4">Find out more</a>
                </div>
            </div> -->

            <!-- <div class="position-relative mt-10">
                <picture class="d-table mx-auto mt-5 col-12 col-sm-10 position-relative z-index-20">
                    <img class="img-fluid d-table mx-auto" src="{{ asset('img/team-photo.png') }}" alt="HTML Bootstrap Template by Pixel Rocket">
                </picture>
                <div class="position-absolute top-0 end-0 start-0 bottom-0 z-index-0 d-none d-lg-block">
                    <div class="d-block f-w-6 position-absolute top-n13 end-50">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.95 50.74"><path class="text-secondary" d="M55.45,34.33A15.92,15.92,0,1,1,39.54,18.41,15.91,15.91,0,0,1,55.45,34.33Z" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-body" d="M34.33,18.41A15.92,15.92,0,1,1,18.41,2.5,15.92,15.92,0,0,1,34.33,18.41Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-6  position-absolute bottom-15 end-3 rotate-n45 origin-center">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 89.72"><path class="text-body" d="M14.75,46.11C14.75,53,2.5,51.83,2.5,60.64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,17C14.75,24,2.5,22.75,2.5,31.57" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,46.11c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-body" d="M14.75,17C14.75,10.13,2.5,11.32,2.5,2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-secondary" d="M37,75.18c0,6.91-12.25,5.72-12.25,14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,46.11C37,53,24.76,51.83,24.76,60.64" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,75.18c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/><path class="text-secondary" d="M37,46.11c0-6.91-12.25-5.72-12.25-14.54" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-4  position-absolute bottom-50 start-3">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20.25 20.25"><line class="text-body" x1="17.75" y1="17.28" x2="2.5" y2="2.97" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><line class="text-body" x1="2.97" y1="17.75" x2="17.28" y2="2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-6  position-absolute top-n3 start-30">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.66 58.68"><polygon class="text-body" points="20.69 33.95 38.85 23.45 20.68 12.98 2.5 2.5 2.52 23.47 2.53 44.45 20.69 33.95" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><polygon class="text-secondary" points="43.5 47.31 61.66 36.81 43.49 26.34 25.32 15.86 25.33 36.83 25.34 57.81 43.5 47.31" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-6  position-absolute top-20 end-5">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.47 48.01"><rect  class="text-body" x="2.5" y="2.5" width="31.65" height="31.65" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><rect class="text-secondary" x="25.32" y="15.86" width="31.65" height="31.65" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-6  position-absolute top-n13 end-25">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.23 48.04"><path class="text-body" d="M18.41,34.18a15.84,15.84,0,1,1,0-31.68" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/><path class="text-secondary" d="M41.23,47.54a15.84,15.84,0,1,1,0-31.68" fill="none" stroke="currentColor" stroke-miterlimit="10"/></svg>                        </span>
                    </div>

                    <div class="d-block f-w-4 position-absolute top-n13 start-20">
                        <span class="d-block">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.53 17.53"><path class="text-body" d="M12.11,14.07a6.27,6.27,0,1,1,2-8.64A6.28,6.28,0,0,1,12.11,14.07Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/></svg>                        </span>
                    </div>
                </div>
            </div>
        </div> -->
   @endsection