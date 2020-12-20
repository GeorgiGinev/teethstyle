@extends('welcome')

@section('content')
    <div class="animate__animated animate__fadeIn">
        <header class="my-4 pb-4">
            <h1>
                @lang('pages::privacy.title')
            </h1>
        </header>
    </div>
    <p>
        This view is loaded from module: {!! config('pages.name') !!}
    </p>
@endsection
