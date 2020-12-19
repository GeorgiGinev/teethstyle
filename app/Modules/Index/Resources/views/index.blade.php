@extends('welcome')

@section('content')
    <header class="py-4">
        <h1>
            @lang('index::content.title')
        </h1>
        <span class="subtitle">
        @lang('index::content.subtitle')
    </span>
    </header>

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
