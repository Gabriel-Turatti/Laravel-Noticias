@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h3 class="texto-quebra">{{ $post->title }}</h3>
            <h6 class="subtitulo">Categoria: {{ $post->category->name }}</h6>
        </div>
    </div>
    <div class="row mt-3 noticias texto-quebra">
        @foreach(explode(PHP_EOL, $post->text) as $paragrafo)
        <div class="col-12 paragrafo">{{ $paragrafo }}</div><br><br>
        @endforeach
    </div>
</div>
@endsection