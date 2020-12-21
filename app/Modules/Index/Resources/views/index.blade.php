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
                    <a name="subscription"></a>
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
                                            id="subscribe"
                                            class="ts-dark-button">@lang('index::content.subscribe')</button>
                                    <a href="https://96f9ebuavlqz0sa9rb4zu5sb7w.hop.clickbank.net/"
                                       title="@lang('index::content.skip')"
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
        @push('scripts')
            <script>
                @if(Session::has('alert-type'))
                var type = "{{ Session::get('alert-type', 'info') }}";

                switch (type) {
                    case 'success': {
                        toastr.success("@lang('toastr.sub_success')");
                        break;
                    }
                    case 'error': {
                        toastr.error("@lang('toastr.sub_error')");
                        break;
                    }
                    default: {
                        toastr.warning("@lang('toastr.sub_warning')");

                    }
                }
                @endif
            </script>
            <script type="application/ld+json">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/assets/css/app.css">
    <title>TeethStyle.com</title>
</head>
<body>

    <div class="container-sm">
            <header class="header">
        <a class="logo" title="Logo" href="http://teethstyle.loc/index">
            TeethStyle<span class="logo-domain">.COM</span>        </a>
    </header>

        <section class="page-container p-4">
                <div class="animate__animated animate__fadeIn">
        <header class="my-4 pb-4">
            <h1>
                Do you care about your smile?            </h1>
            <span class="subtitle">
                A perfect smile makes the best impression. Feel great and look incredible!            </span>
        </header>
        <section class="my-4 py-4">
            <header class="text-center">
                <span class="subtitle italic">
                    Benefits                </span>
                <h2>
                    For Your Whole Body                </h2>
            </header>
            <div id="scrollToForm">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Buy now            </div>
            <div class="row py-4">
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                More Good Flora in Your Mouth                            </h3>
                            <p class="card-text">
                                Helps support the friendly bacteria in your mouth.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">
                                Renews Your Blood and Saliva                            </h3>
                            <p class="card-text">
                                Helps detoxify your liver and all bodily fluids.                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 px-0 px-sm-3">
                    <div class="card ts-card">
                        <div class="card-body">
                            <h3 class="card-title">Get Strong, Shiny Teeth</h3>

                            <p class="card-text">
                                Look great and feel great with a new confidence and fresh breath.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="subscribeForm" class="my-4 py-4">
            <header class="text-center">
                <h2>
                    <a name="subscription"></a>
                    Subscribe and continue                </h2>
            </header>
            <div class="row my-4">
                <div class="col-12 col-lg-6">
                    <img class="img-fluid" src="http://teethstyle.loc/assets/images/gforce-product.png"
                         alt="G-Force"/>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-5 px-0 px-sm-3">
                    <div class="card ts-card h-100">
                        <div class="card-body d-flex flex-column">
                            <div class="card-toastr">
                                <p>Subscribe to find out about special offers and discounts.</p>
                            </div>
                            <form method="POST" action="/index/subscribe" class="mt-4 d-flex flex-column flex-grow-1">
                                <input type="hidden" name="_token" value="6u8YRCwt4HprEvWoW1xmH45w10NTEVRP6Zk6dC2W">                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <label
                                            for="subscribePassword">Name</label>
                                        <input
                                            type="text"
                                            name="name"
                                            class="form-control"
                                            id="subscribePassword"
                                            placeholder="Name"
                                            required
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label
                                            for="subscribeEmail">Email Address</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="subscribeEmail"
                                            aria-describedby="emailSubscribe"
                                            placeholder="Email Address"
                                            name="email"
                                            required
                                        >
                                    </div>
                                </div>
                                <div class="flex-grow-0">
                                    <button type="submit"
                                            id="subscribe"
                                            class="ts-dark-button">Subscribe</button>
                                    <a href="https://96f9ebuavlqz0sa9rb4zu5sb7w.hop.clickbank.net/"
                                       title="Buy now"
                                       class="ts-primary-button">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        Buy now</a>
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
                Reasons to            </span>
                <h2>
                    Buy this product                </h2>
            </header>
            <div class="py-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        For Yellow, Sensitive Teeth                                    </h3>
                                    <p class="card-text">
                                        G-force helps improve the natural defense barrier of your teeth.                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        For a Fresher Breath                                    </h3>
                                    <p class="card-text">
                                        G-force will help clean your mouth of foul-smell and For yellow-teeth causing bacteria.                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        For Gum Irritation                                    </h3>
                                    <p class="card-text">
                                        G-force is a natural supplement containing powerful antioxidants that help detoxify your body and allow your gums to health.                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide h-100">
                            <div class="card ts-card h-100">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        For a Fresher Breath                                    </h3>
                                    <p class="card-text">
                                        G-force will help clean your mouth of foul-smell and For yellow-teeth causing bacteria.                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
                </section>

            <footer class="footer d-block d-sm-flex">
        <div class="flex-grow-1">
            <a class="logo" title="Logo" href="http://teethstyle.loc/index">
                TeethStyle<span class="logo-domain">.COM</span>            </a>
            <div class="reserved">
                <p class="font-weight-bold">
                    @ 2020 Teethstyle All Rights Reserved                </p>
            </div>
        </div>
        <div class="flex-grow-0">
            <ul class="footer-menu">
                <li>
                    <a href="http://teethstyle.loc/pages/privacy" title="Privacy Policy">
                        Privacy Policy                    </a>
                </li>
                <li>
                    <a href="http://teethstyle.loc/pages/terms" title="Terms Of Service">
                        Terms Of Service                    </a>
                </li>
            </ul>
        </div>
    </footer>
    </div>
    <script src="/assets/js/app.js"></script>
            <script>
            </script>
            <script type="application/ld+json">
                {
                    "@context": "http://schema.org/",
                    "@type": "Product",
                    "name": "G-Force Whitening teeth",
                    "image": "http://teethstyle.loc/assets/images/gforce-product.png",
                    "description": "The powerful antioxidants in G-force help to detoxify your liver and all bodily fluids, resulting in alkaline, bacteria-fighting saliva, strong gums and teeth..",
                    "sku": "G-Force",
                    "brand": "G-Force",
                    "aggregateRating": [{
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "reviewCount": "1987"
                    }]
                }
            </script>
            </body>
            </html>

            </script>
    @endpush
@endsection
