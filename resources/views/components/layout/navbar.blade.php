<div class="container-fluid p-0">
    <div class="row">
        <div class="col-12 background-accent">
            <h1 class="mx-auto text-center color-primary"><a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('images/logo.png') }}" alt="Logo" height="45"></a></h1>
        </div>
        <div class="col-12 position-relative background-primary">
            <nav class="navbar navbar-expand-lg background-primary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-secondary" aria-current="page" href="{{route('ads.index')}}"><i class="fa-solid fa-bullhorn"></i>Annunci</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-secondary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Categorie
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navCategorie">
                                    @foreach (App\Models\Categories::all() as $category)

                                    <li class="nav-item"><a class="nav-link color-primary" href="{{route('adsByCategory',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @if(Auth::user() && Auth::user()->role == 2)
                                <li class="nav-item">
                                    <a class="nav-link color-secondary" aria-current="page" href="{{route('adRevision')}}"></i>Revisor</a>
                                </li>
                            @endif
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle color-secondary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Contattaci
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navCategorie">
                                    <li class="nav-item"><a class="nav-link color-primary" href="{{route('lavora-con-noi')}}">Lavora con noi</a></li>
                                    <li class="nav-item"><a class="nav-link color-primary" href="{{route('beChecker')}}">Diventa revisore</a></li>
                                </ul>
                            </li>
                            <li>
                                <form action="{{route('ads.index')}}" method="GET">
                                    <input name ='searched' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li>
                                <a class="nav-link color-secondary" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end background-accent">
                                    @guest
                                        <li>
                                            <a class="dropdown-item" href="{{route('login')}}">Accedi</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
                                        </li>
                                    @endguest
                                    @auth
                                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
                                            <form action="/logout" method="POST" id="form-logout">
                                                @csrf
                                            </form>
                                         </li>
                                    @endauth
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="lineaNav col-12 position-relative"></div>
    </div>
  </nav>
</div>
