<nav class="fixed-top">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <li class="nav-item dropdown">
            <a class="hoverElement dropdown-toggle color-secondary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
  
    <div  class="background-primary color-accent"  id="main" style="height: 80px; display: flex; align-items: center; justify-content: space-between; padding: 0 10px;">
        <div style="display: flex; align-items: center;">
            <span class="hoverElement color-detail" style="font-size: 30px; cursor: pointer; margin-right: 20px;" onclick="openNav()">&#9776;</span>
            <a href="{{route('home')}}">
                <img width="150" src="{{asset('images/logo.png')}}" alt="img">
            </a>
        </div>
        <div>
            <div style="flex-grow: 1; display: flex; justify-content: center; ">
                <form action="{{route('ads.index')}}" method="GET" style="display: flex; justify-content: center; width: 100%;">
                    <input name="searched" class="form-control me-2 col" type="search" placeholder="Search" aria-label="Search" style="width: auto; flex-grow: 1; height: 30px; padding: 0 10px;">
                    <button type="submit" style="border: none; background: none;">
                        <i type="submit" class="fa-solid fa-magnifying-glass" style="color: #999999;"></i>
                    </button>
                </form>
            </div>
        </div>
        <div style="margin: 25px; border: solid 5px">
            <a class="nav-link color-secondary" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user"></i>
            </a>
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
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                        <form action="/logout" method="POST" id="form-logout">
                            @csrf
                        </form>
                    </li>
                @endauth
                @if(Auth::user() && Auth::user()->role===2)
                    <li>
                        <a class="dropdown-item" href="{{route('adRevision')}}">Revisiona</a>
                    </li>
                @endif
                @if(Auth::user() && Auth::user()->role===3)
                    <li>
                        <a class="dropdown-item" href="#">Rendi revisore</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    
    
    
</nav>

<script>
    var accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent').trim();
    var detailColor = getComputedStyle(document.documentElement).getPropertyValue('--detail').trim();  
    
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft = "0";
    }

    



    document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.querySelector('.form-control');
    const searchButton = document.querySelector('button[type="submit"]');

    searchButton.addEventListener('click', function(event) {
        // Se l'input è già visibile, permetti la sottomissione del form
        if (searchInput.style.display === 'block') {
            return true;
        }
        // Altrimenti, mostra l'input e previeni la sottomissione del form
        event.preventDefault();
        searchInput.style.display = 'block';
        searchInput.focus(); // Opzionale, mette il focus sull'input
    });
});
</script>
    