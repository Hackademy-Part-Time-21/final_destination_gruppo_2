<nav class="fixed-top">
    <div id="mySidenav" class="sidenav">
  
    <div class="user-info" style=" height:50px">
    @auth
            <h5><a href="#">{{ auth()->user()->name }}</a></h5>
            <!-- Qui metti eventuali altre informazioni dell'utente o link di logout -->
            <a href="#">Carrello</a>
        @else
            <h5><a href="{{ route('login') }}">Ciao, accedi</a></h5>
        @endauth
        </div>


        <!-- MENU SIDENAV -->
<div class="mt-10" style="border-top:5px solid">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('ads.index')}}">Annunci</a>
        <a class="nav-item dropdown">
            <a class="nav-link dropdown-toggle category-menu-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorie
            </a>
            <ul class="dropdown-menu">
                @foreach (App\Models\Categories::all() as $category)
                    <li class="nav-item"><a class="nav-link color-primary" href="{{route('adsByCategory',$category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </a>
        <li class="nav-item dropdown">
            <a class="hoverElement dropdown-toggle color-secondary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contattaci
            </a>
            <ul class="dropdown-menu " aria-labelledby="navCategorie">
                <li class="nav-item"><a class="nav-link color-primary" href="{{route('lavora-con-noi')}}">Lavora con noi</a></li>
                <li class="nav-item"><a class="nav-link color-primary" href="{{route('beChecker')}}">Diventa revisore</a></li>
            </ul>
        </li>
        @if(auth()->check())
    <li>
        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Esci</a>
        <form action="/logout" method="POST" id="form-logout">
            @csrf
        </form>
    </li>
@endif
</div>
    </div>
  
    <div  class="container-fluid background-primary color-accent"  id="main" style="height: 80px; display: flex; align-items: center; justify-content: space-between; padding: 0 10px;">
        <div style="display: flex; align-items: center;">
            <span class="hoverElement color-detail" style="font-size: 30px; cursor: pointer; margin-right: 20px;" onclick="openNav()">&#9776;</span>
            <a href="{{route('home')}}">
                <img width="80" src="{{asset('images/logo.png')}}" alt="img">
            </a>
        </div>
    
        <!-- BARRA DI RICERCA -->

        <div class="pt-2" style="display: flex; justify-content: center;">
    <form action="{{ route('ads.index') }}" method="GET" style="display: flex; align-items: center;">
        <input id="searchInput" name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 100%; max-width: 200px; padding: 5px;">
        <button type="submit" style="border: none; background: none;" id="searchIcon">
        <div class="search-icon">
            <i class="fa-solid fa-magnifying-glass" style="color: #999999;"></i>
        </div>
        </button>
    </form>
</div>




<!-- Aggiungi questa sezione prima della chiusura del tag </div> con id="mySidenav" -->
<!-- <div class="language-selector">
    <div class="flag-wrapper">
    <img src="{{asset('images/flaitalian.png')}}" alt="Italian Flag" class="flag-icon">
    <img src="{{asset('images/unitedking.png')}}" alt="Italian Flag" class="flag-icon">
    <img src="{{asset('images/spainflag.png')}}" alt="Italian Flag" class="flag-icon"> -->
    <!-- Aggiungi qui altre bandiere ognuna con un link alla pagina nella lingua corrispondente -->
    <!-- </div>
</div> -->


        <div style="margin: 40px; display: flex; align-items: center;">
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
            <div style="margin-left: 20px;">
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fa-solid fa-shopping-cart"></i>
                    </a>
                </form>
            </div>
            <div style="margin-left: 20px;">
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="#">
                        <i class="fas fa-heart"></i>
                    </a>
                </form>
            </div>
        </div>
    </div>
</nav>


<script>
    
$(document).ready(function(){
    // Quando si clicca sull'icona di ricerca
    $(".search-icon").click(function(){
        // Mostra o nascondi la barra di ricerca in base al suo stato attuale
        $(".form-control").toggle();
    });
});



    var accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent').trim();
    var detailColor = getComputedStyle(document.documentElement).getPropertyValue('--detail').trim();  
    
    // Funzione per aprire la sidenav
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    // Funzione per chiudere la sidenav
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }

    // Aggiungi un event listener al documento
document.addEventListener('click', function(event) {
    var sidenav = document.getElementById('mySidenav');
    // Controlla se l'elemento cliccato non è la sidenav stessa
    if (event.target !== sidenav && !sidenav.contains(event.target)) {
        // Chiudi la sidenav se è aperta
        if (sidenav.style.width === "250px") {
            closeNav();
        }
    }
});



    $(document).ready(function(){
            $('.category-menu-link').click(function(e){
                e.preventDefault();
                var target = $($(this).attr('href'));
                if(target.length){
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 800);
                }
            });
        });


    //     document.getElementById("searchForm").addEventListener("keypress", function(e) {
    //     if (e.key === "Enter") {
    //         e.preventDefault(); // Prevent form submission
    //         document.getElementById("searchForm").submit(); // Submit the form
    //     }
    // });

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
    