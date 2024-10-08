@extends('layouts.portal')

<!-- Titulo -->
@section('title')
Pricing
@endsection
<!-- Titulo -->

@section('content')
<header class="bg-primary py-10 text-white overflow-hidden position-relative z-index-10">
    <div class="container">
        <div class="d-block f-w-72  position-absolute top-n25 start-n13 opacity-10 d-none d-lg-block">
            <span class="d-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.53 17.53">
                    <path class="text-success" d="M12.11,14.07a6.27,6.27,0,1,1,2-8.64A6.28,6.28,0,0,1,12.11,14.07Z"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="5" /></svg> </span>
        </div>
        <div class="d-block f-w-72  position-absolute bottom-10 end-n3 opacity-10  d-none d-lg-block">
            <span class="d-block">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.47 48.01">
                    <rect class="text-success" x="2.5" y="2.5" width="31.65" height="31.65" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                    <rect class="text-success" x="25.32" y="15.86" width="31.65" height="31.65" fill="none"
                        stroke="currentColor" stroke-miterlimit="10" /></svg> </span>
        </div>
        <div class="text-center col-12 col-sm-9 col-lg-7 col-xl-6 mx-auto pb-8 position-relative z-index-20">
            <h1 class="display-3 fw-bold mb-3">Simple pricing</h1>
            <p class="opacity-75 lead">Try Sigma for free for 30 days with full features, no credit card required, no
                commitment required. Then upgrade your account after that when you're ready.</p>
            <a href="#" class="btn btn-white mt-4 w-100 w-md-auto">Start your trial</a>
        </div>
    </div>
</header>
<div class="container position-relative z-index-20">
    <div class="row g-0 border rounded mt-n10 bg-white shadow-lg">
        <div class="col-4 d-none d-lg-block border-end">
            <div class="f-h-68 w-100 px-lg-7 py-lg-6 p-4 p-md-5 border-bottom">
                <h3 class="fs-2 fw-bold">Try one of our flexible plans</h3>
                <ul class="list-unstyled mt-4 fs-7">
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> No credit card required
                    </li>
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> Cancel anytime</li>
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill text-success ri-lg me-1"></i> 30 day free trial</li>
                </ul>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                <span class="tooltip-trigger" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="The amount of user accounts available for each package">Users</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                Templates
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                Emails
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                <span class="tooltip-trigger" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="The amount of bandwidth available for each package">Bandwidth</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                Support
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                Integrations
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-start align-items-center border-bottom">
                Backups
            </div>
            <div class="f-h-24 px-4 px-md-7 d-flex justify-content-center align-items-center">
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div
                class="f-h-68 w-100 px-lg-7 py-lg-6 p-4 p-md-5 d-flex flex-column justify-content-between border-bottom">
                <div>
                    <h3 class="fs-1 fw-black">Essential</h3>
                    <p class="text-muted">Keep things simple and try our services with our basic plan.</p>
                    <p class="display-4 lh-1 fw-black mb-1"><sup class="fs-9 align-super me-1">$</sup>19<span
                            class="fs-5 fw-medium">/mo</span></p>
                    <span class="d-block text-muted small">Billed annually, per team member</span>
                </div>
                <a href="#" class="btn btn-primary w-100 mt-4">Get started</a>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span class="tooltip-trigger" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Single user account available on the basic package">1 team member</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>20 <span class="d-lg-none d-inline">templates</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>30 <span class="d-lg-none d-inline">emails</span> per week</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>100GB <span class="d-lg-none d-inline">bandwidth</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>Email <span class="d-lg-none d-inline">support</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>15 <span class="d-lg-none d-inline">integrations</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>Weekly <span class="d-lg-none d-inline">backups</span></span>
            </div>
            <div class="f-h-24 px-4 px-md-7 d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary w-100">Get started</a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 border-start mt-8 mt-md-0">
            <div
                class="f-h-68 w-100 px-lg-7 py-lg-6 p-4 p-md-5 d-flex flex-column justify-content-between border-bottom position-relative">
                <div>
                    <h3 class="fs-1 fw-black">Agency</h3>
                    <p class="text-muted">Perfect for small to mid-sized companies and agencies.</p>
                    <p class="display-4 lh-1 fw-black mb-1"><sup class="fs-9 align-super me-1">$</sup>45<span
                            class="fs-5 fw-medium">/mo</span></p>
                    <span class="d-block text-muted small">Billed annually, per team member</span>
                </div>
                <a href="#" class="btn btn-primary w-100 mt-4">Get started</a>
                <span class="badge bg-orange position-absolute top-0 start-50 translate-middle d-none d-md-flex">Most
                    Popular</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>10 team members</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>500 <span class="d-lg-none d-inline">templates</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span class="tooltip-trigger" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="The amount of emails available for our agency package">1000 <span
                        class="d-lg-none d-inline">templates</span> per week</span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>Unlimited <span class="d-lg-none d-inline">bandwith</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>Email, Telephone <span class="d-lg-none d-inline">support</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>15 <span class="d-lg-none d-inline">integrations</span></span>
            </div>
            <div class="f-h-20 px-4 px-md-7 d-flex justify-content-center align-items-center border-bottom">
                <span>Hourly <span class="d-lg-none d-inline">backups</span></span>
            </div>
            <div class="f-h-24 px-4 px-md-7 d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary w-100">Get started</a>
            </div>
        </div>
    </div>
    <div class="my-10 bg-primary p-4 p-md-6 rounded text-white d-flex align-items-center position-relative">
        <div class="row">
            <div class="col-12 col-md-5 position-relative z-index-20">
                <h4 class="fs-3 fw-bold mb-3">Need Enterprise?</h4>
                <p class="opacity-75">Our Enterprise package is custom-built per client - ideal for large
                    businesses.</p>
                <a href="#" class="btn btn-white" role="button">Discuss your requirements</a>
            </div>
            <div class="col-12 col-md-6 offset-md-1 mt-5 mt-lg-0">
                <ul class="list-unstyled">
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill opacity-75 ri-lg me-1"></i> Custom package per client
                    </li>
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill opacity-75 ri-lg me-1"></i> Unlimited resources</li>
                    <li class="me-4 mb-2 d-flex align-items-center"><i
                            class="ri-checkbox-circle-fill opacity-75 ri-lg me-1"></i> Add additional features</li>
                </ul>
            </div>
        </div>
        <div class="position-absolute top-0 end-0 start-0 bottom-0 z-index-0 d-none d-lg-block overflow-hidden">

            <div class="d-block f-w-80  position-absolute top-10 end-n25 opacity-25">
                <span class="d-block">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.95 50.74">
                        <path class="text-white"
                            d="M55.45,34.33A15.92,15.92,0,1,1,39.54,18.41,15.91,15.91,0,0,1,55.45,34.33Z" fill="none"
                            stroke="currentColor" stroke-miterlimit="10" />
                        <path class="text-white"
                            d="M34.33,18.41A15.92,15.92,0,1,1,18.41,2.5,15.92,15.92,0,0,1,34.33,18.41Z" fill="none"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                        </svg> </span>
            </div>
        </div>
    </div>
    <div class="my-10 py-4">
        <div class="container">
            <p class="mb-6 text-center small fw-bolder tracking-wider text-muted text-uppercase">Already trusted
                by
                thousands of brands</p>
            <div class="row gx-8 gy-5 justify-content-center align-items-center">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-17.svg') }}" alt="">
                    </picture>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-18.svg') }}" alt="">
                    </picture>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-19.svg') }}" alt="">
                    </picture>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-20.svg') }}" alt="">
                    </picture>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-21.svg') }}" alt="">
                    </picture>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <picture>
                        <img class="img-fluid" src="{{ asset('img/logo-22.svg') }}" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-10 bg-light">
    <div class="container">
        <h3 class="text-center fs-1 mb-3 fw-bold">Frequently asked questions</h3>
        <div class="mx-auto mt-5 col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-medium py-4 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Are there any restrictions on the trial offer?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Nunc et sollicitudin libero. Etiam eget sollicitudin eros. In non mauris feugiat,
                            gravida dolor ac, gravida diam. Suspendisse elementum hendrerit massa, in molestie
                            tortor pretium vel. Donec sed finibus libero. Cras at diam quis lacus interdum
                            pellentesque. Aenean at luctus est. Phasellus facilisis neque luctus nibh venenatis, eu
                            viverra odio interdum. Morbi aliquam mi in ultrices gravida. Nunc quis sodales mauris.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button fw-medium py-4 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            What are the cancellation terms?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Donec cursus consequat nulla, a imperdiet eros pulvinar nec. Aenean iaculis massa vel
                            aliquet iaculis. Vivamus orci metus, dignissim sed elit ac, euismod consectetur dui.
                            Mauris at enim magna. Suspendisse ut urna vitae odio malesuada tempor vitae egestas ex.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button fw-medium py-4 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            What payment methods does Sigma accept?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Sed a tortor suscipit urna efficitur fringilla. Integer aliquam erat ut eros egestas, eu
                            laoreet elit pellentesque. Nunc at urna vel ligula blandit placerat.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button fw-medium py-4 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            Can I upgrade after signing up?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Maecenas vitae metus urna. Morbi mattis, nulla at tempus viverra, urna eros tincidunt
                            risus, porttitor sollicitudin leo ligula ut felis. Integer pharetra, dui nec tincidunt
                            posuere, quam est efficitur nisl, non porta justo diam molestie sem.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
