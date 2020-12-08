@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Posts</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('partials.errors')

            @if($post->id)
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="title">Título</label>
                        <input name="title" id="title" rows="5" class="form-control" placeholder="Digite o título da noticia" value="{{ $post->title }}"></input>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="summary">Sumário</label>
                        <input name="summary" id="summary" rows="5" class="form-control" placeholder="Digite o sumário da noticia" value="{{ $post->summary }}"></input>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="text">Texto</label>
                        <textarea name="text" id="text" rows="5" class="form-control" placeholder="Digite a noticia">{{ $post->text }}</textarea>
                    </div>
                    <div class="custom-control custom-switch">
                        @if($post->active)
                            <input class="custom-control-input" type="checkbox" name="active" id="active" checked>
                        @else
                            <input class="custom-control-input" type="checkbox" name="active" id="active">
                        @endif
                        <label for="active" class="custom-control-label">Deixar a noticia aparecer</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="category_id">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="0">Selecione...</option>
                            @foreach($categories as $category)
                                @if($category->active)
                                    @if($category->id == $post->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>
@endsection