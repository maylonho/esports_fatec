<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('site.home')}}">
        <img width="80px" src="{{asset('images/logo.png')}}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('site.home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              CS 1.6
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('game_cs.listar')}}">Placar</a></li>
              <li><a class="dropdown-item" href="{{route('game_cs.agenda')}}">Jogos</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Alunos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('alunos.listar')}}">Listar</a></li>
              <li><a class="dropdown-item" href="{{route('alunos.cadastrar')}}">Cadastrar</a></li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>