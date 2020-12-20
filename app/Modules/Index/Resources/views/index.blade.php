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
            <div class="row py-4">
                <div class="col-12 col-md-6 col-lg-4">
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
                <div class="col-12 col-md-6 col-lg-4">
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
                <div class="col-12 col-md-6 col-lg-4">
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

        <p>
            This view is loaded from module: {!! config('index.name') !!}
        </p>

        <form method="POST" action="/index/subscribe">
            <div class="form-group">
                <label for="subscribeEmail">Email address</label>
                <input
                    type="email"
                    class="form-control"
                    id="subscribeEmail"
                    aria-describedby="emailSubscribe"
                    placeholder="Enter email"
                    name="email"
                    required
                >
                <small id="subscribeEmailHelp" class="form-text text-muted">
                    We'll never share your email with anyone else.
                </small>
            </div>
            <div class="form-group">
                <label for="subscribePassword">Name</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="subscribePassword"
                    placeholder="Name"
                    required
                >
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
@endsection
