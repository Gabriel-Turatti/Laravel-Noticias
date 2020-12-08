@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>Jornal</h1>
            <p class="lead">Veja noticias recentes</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="noticias">
                @php ($i = 0)
                @foreach($posts as $post)
                    @if($post->active && $i < 3)
                        <a class="link-noticia" href="{{ route('noticia', ['id' => $post->id]) }}">
                            <div class="noticia texto-quebra">
                                <div class="post-title">{{ $post->title }}</div>
                                <div class="post-summary">({{ $post->category->name }}) - {{ $post->summary }}</div>
                            </div>
                        </a>
                        @php ($i++)
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
