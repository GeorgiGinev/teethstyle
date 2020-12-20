@extends('welcome')

@section('content')
    <div class="animate__animated animate__fadeIn">
        <header class="my-4 pb-4">
            <h1>
                @lang('index::content.title')
            </h1>
            <span class="subtitle">
            @lang('index::content.subtitle')
        </span>
        </header>

        <section class="my-4 py-4">
            <header class="text-center">
                <span class="subtitle italic">
                    @lang('index::content.benefits')
                </span>
                <h2>
                    @lang('index::content.benefits_title')
                </h2>
            </header>
            <div id="scrollToForm">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                @lang('index::content.skip')
            </div>
            <div class="row py-4">
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                @lang('index::content.benefits_left_title')
                            </h3>
                            <p class="card-text">
                                @lang('index::content.benefits_left_content')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                @lang('index::content.benefits_center_title')
                            </h3>
                            <p class="card-text">
                                @lang('index::content.benefits_center_content')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">@lang('index::content.benefits_right_title')</h3>

                            <p class="card-text">
                                @lang('index::content.benefits_right_content')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="subscribeForm" class="my-4 py-4">
            <header class="text-center">
                <h2>
                    @lang('index::content.subscribe_and_continue')
                </h2>
            </header>
            <div class="row my-4">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="{{asset('assets/images/gforce-product.png')}}"
                         alt="@lang('basic.product')"/>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-5 px-0 px-sm-3">
                    <div class="card ts-card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="card-toastr">
                                <p>@lang('index::content.subscribe_toastr')</p>
                            </div>
                            <form method="POST" action="/index/subscribe" class="mt-4 d-flex flex-column flex-grow-1">
                                @csrf
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <label
                                            for="subscribePassword">@lang('index::content.subscribe_field_name')</label>
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            id="subscribePassword"
                                            placeholder="@lang('index::content.subscribe_field_name')"
                                            required
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="subscribeEmail">@lang('index::content.subscribe_field_email')</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="subscribeEmail"
                                            aria-describedby="emailSubscribe"
                                            placeholder="@lang('index::content.subscribe_field_email')"
                                            name="email"
                                            required
                                        >
                                    </div>
                                </div>
                                <div class="flex-grow-0">
                                    <button type="submit"
                                            class="ts-dark-button">@lang('index::content.subscribe')</button>
                                    <a href="#" title="@lang('index::content.skip')"
                                       class="ts-primary-button">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        @lang('index::content.skip')</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-4 py-4">
            <header class="text-center">
            <span class="subtitle italic">
                @lang('index::content.reasons')
            </span>
                <h2>
                    @lang('index::content.reasons_to_buy')
                </h2>
            </header>
            <div class="py-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        @lang('index::content.reasons_first_title')
                                    </h3>
                                    <p class="card-text">
                                        @lang('index::content.reasons_first_content')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        @lang('index::content.reasons_second_title')
                                    </h3>
                                    <p class="card-text">
                                        @lang('index::content.reasons_second_content')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        @lang('index::content.reasons_third_title')
                                    </h3>
                                    <p class="card-text">
                                        @lang('index::content.reasons_third_content')
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        @lang('index::content.reasons_fourth_title')
                                    </h3>
                                    <p class="card-text">
                                        @lang('index::content.reasons_fourth_content')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

@endsection
