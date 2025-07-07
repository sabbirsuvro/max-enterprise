@extends('frontend.layout.app')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend/img/bg/breadcrumb-bg.jpg') }}">
        <div class="breadcrumb-bottom-shape"><img src="{{ asset('frontend/img/bg/breadcrumb-bottom.png') }}" alt="shape" /></div>
        <div class="shape-mockup breadcrumb-left jump-reverse"><img src="{{ asset('frontend/img/icon/breadcrumb-left.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup breadcrumb-right jump"><img src="{{ asset('frontend/img/icon/breadcrumb-right.png') }}" alt="shape" />
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Career</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Career</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space overflow-hidden" id="faq-sec">
        <div class="container">
            <div class="row gx-60 justify-content-center">
                <div class="col-lg-4">
                    <div class="title-area mb-4">
                        <span class="sub-title after-none">Career</span>
                        <h2 class="sec-title">Have Any Questions?</h2>
                        <p class="sec-text">Discover your next career move with us! We’re always looking for talented,
                            passionate individuals to join our team. Check out our open positions and see how you can grow,
                            learn, and make an impact in a dynamic, supportive environment. Your future starts here.</p>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="accordion" id="faqAccordion">
                        @foreach ($career as $item)
                         <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-{{ $item->id }}" aria-expanded="false" aria-controls="collapse-2">{{ $item->title }}</button>
                            </div>
                            <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-text">
                                        {!! $item->details !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
