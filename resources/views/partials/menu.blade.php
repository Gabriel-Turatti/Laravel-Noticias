<link rel="stylesheet" href="../public/css/style.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand titulo" href="#">Jornal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nvb">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('principal') }}">Principal</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Sair</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Logar</a>
            </li>
            @endif
        </ul>
    </div>
</nav>