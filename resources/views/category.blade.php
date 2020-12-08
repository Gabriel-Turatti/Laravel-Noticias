@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Categorias</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            @include('partials.errors')

            @if($category->id)
            <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST">
            {{ method_field('PUT') }}
            @else
            <form action="{{ route('categories.store') }}" method="POST">
            @endif

                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome da categoria" value="{{ $category->name }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Descrição</label>
                        <input type="text" name="description" id="description" class="form-control" placeholder="Descreva a categoria" value="{{ $category->description }}">
                    </div>
                </div>
                <div class="custom-control custom-switch">
                        @if($category->active)
                            <input class="custom-control-input" type="checkbox" name="active" id="active" checked>
                        @else
                            <input class="custom-control-input" type="checkbox" name="active" id="active">
                        @endif
                        <label for="active" class="custom-control-label">Deixar a categoria aparecer</label>
                    </div>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </form>
        </div>
    </div>
</div>
@endsection