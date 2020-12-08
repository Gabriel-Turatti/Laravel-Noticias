@extends('partials.layout')

@section('content')
@include('partials.menu')
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h1>LaraQuiz - Posts</h1>
            <a href="{{ route('posts.create') }}" class="btn btn-success">Inserir</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <table class="table table-hover table-bordered">
                <tr>
                    <th style="width: 5%">ID</th>
                    <th style="width: 15%">Título</th>
                    <th>Sumário</th>
                    <th>Data da postagem</th>
                    <th style="width: 6%">Ativo</th>
                    <th style="width: 10%">Categoria</th>
                    <th>Ações</th>
                </tr>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->summary }}</td>
                        <td>{{ explode(' ', $post->created_at)[0] }}</td>
                        <td>{{ $post->active == 1 ? "Sim" : "Não" }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <div class="btn-group">
                                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-info">Editar</a>
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection