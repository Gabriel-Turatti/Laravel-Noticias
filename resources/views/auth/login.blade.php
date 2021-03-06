@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-4 offset-4">
            <h1 class="text-center">LaraQuiz</h1>
            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Digite o E-mail"/>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Digite a senha"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-success">Entrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
