@extends('welcome')

@section('content')
    <div class="animate__animated animate__fadeIn">
        <header class="my-4 pb-4">
            <h1>
                @lang('pages::sitemap.title')
            </h1>
        </header>

        <div class="content">
            @foreach($sitemap as $map)
                <div>
                    <a name="{{$map->url}}" href="{{$map->url}}">{{$map->url}}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
