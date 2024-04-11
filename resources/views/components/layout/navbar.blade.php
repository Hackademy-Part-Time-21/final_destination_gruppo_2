<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
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
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle color-secondary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contattaci
        </a>
        <ul class="dropdown-menu " aria-labelledby="navCategorie">
            <li class="nav-item"><a class="nav-link color-primary" href="{{route('lavora-con-noi')}}">Lavora con noi</a></li>
            <li class="nav-item"><a class="nav-link color-primary" href="{{route('beChecker')}}">Diventa revisore</a></li>
        </ul>
    </li>
    <a href="{{route('ads.index')}}">Annunci</a>
    <a class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
        </a>
        <ul class="dropdown-menu">
            @foreach (App\Models\Categories::all() as $category)
                <li class="nav-item"><a class="nav-link color-primary" href="{{route('adsByCategory',$category->id)}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </a>
  </div>
  
  <div id="main" style=" height: 45px; background-color: #111; color: #818181; display:flex; justify-content: space-between;">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <div>
      <h1 style="font-size:25px"><a href="{{route('home')}}">PRESTO</a> </h1>
    </div>
    <div>
        <form action="{{route('ads.index')}}" method="GET" class="row">
            <input name ='searched' class="form-control me-2 col" type="search" placeholder="Search" aria-label="Search">
            <button class="col btn btn-outline-success" type="submit">Search</button>
        </form>
</div>

<script>
    function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

</script>