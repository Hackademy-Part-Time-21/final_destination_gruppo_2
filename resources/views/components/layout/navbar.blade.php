<header id="header" style="border-bottom: 2px solid #030637;">

    
        <div class="col-12 background-primary color-accent" style="height: 30px;">
            <div class="d-flex justify-content-center align-items-center h-100 px-5">
                <p class="m-0 w-100 text-center d-md-none">Spedizione gratuita assicurata</p>
                <p class="m-0 d-none d-md-block text-md-start">Spedizione gratuita assicurata</p>
        
                
                <ul class="list-unstyled d-flex gap-3 m-0 ms-md-auto d-none d-md-flex">
                    <li>
                        <a class="link-underline-opacity-25" style="text-decoration: none; color: inherit;" href="">whatsapp</a>
                    </li>
                    <li>
                        <a style="text-decoration: none; color: inherit;" href="">email</a>
                    </li>
                    <li>
                        <a style="text-decoration: none; color: inherit;" href="">tel 3442212133</a>
                    </li>
                </ul>
            </div>
        </div>
        
        
        
        
        

        <div class="col-12 d-flex justify-content-between background-accent color-primary m-" style="height: 68px;">
            
            <div class="d-flex align-items-center mobile-menu-container" style="position: relative;"> 
                <div class="d-block d-md-none me-3">
                    <button class="btn color-primary ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#menuMobile" aria-expanded="false" aria-controls="menuMobile">
                        <i class="fa-solid fa-bars fa-lg" style="color: #290f1e;"></i>
                    </button>
                    <div class="collapse" id="menuMobile">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link color-primary"  href="{{route('ads.index')}}" role="button" aria-expanded="false" aria-controls="submenuCategorie">Annunci </a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-primary" data-bs-toggle="collapse" href="#submenuCategorie" role="button" aria-expanded="false" aria-controls="submenuCategorie">Categorie <i class="fa-solid fa-caret-down fa-2xs" style="color: #401430;"></i></a>
                                <div class="collapse" id="submenuCategorie">
                                    <ul class="nav flex-column">
                                        @foreach (App\Models\Categories::all() as $category)
                                            
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-primary" data-bs-toggle="collapse" href="#submenuChiSiamo" role="button" aria-expanded="false" aria-controls="submenuChiSiamo">Chi siamo <i class="fa-solid fa-caret-down fa-2xs" style="color: #401430;"></i></a>
                                <div class="collapse" id="submenuChiSiamo">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Informazioni</a></li>
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Storia</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-primary" data-bs-toggle="collapse" href="#submenuVendi" role="button" aria-expanded="false" aria-controls="submenuVendi">Vendi <i class="fa-solid fa-caret-down fa-2xs" style="color: #401430;"></i></a>
                                <div class="collapse" id="submenuVendi">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Come vendere</a></li>
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Regole</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-primary" data-bs-toggle="collapse" href="#submenuContattaci" role="button" aria-expanded="false" aria-controls="submenuContattaci">Contattaci <i class="fa-solid fa-caret-down fa-2xs" style="color: #401430;"></i></a>
                                <div class="collapse" id="submenuContattaci">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Form di contatto</a></li>
                                        <li class="nav-item"><a class="nav-link color-primary" href="#">Altre informazioni</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <i class="fa-solid fa-lg fa-magnifying-glass ms-3" style="color: #411530; margin: 1rem;"></i>
            </div>
        
            
            <div style="height: 60px">
                <a href="{{route('home')}}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 55px;">
                </a>
            </div>
            
            
            <div class="d-flex align-items-center me-4">
                
                <div class="dropdown">
                    <a class="fa-solid fa-user fa-lg" style="color: #411530; margin: 1rem; cursor: pointer;" id="dropdownUserMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownUserMenu">
                        @guest
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        @endguest
                        @auth
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Esci</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endauth
                    </ul>
                </div>
            
                <i class="fa-solid fa-cart-shopping fa-lg" style="color: #411530; margin: 1rem;"></i>
            </div>
            
        </div>
        
        
        <div id="navdesktop" class="py-3 d-none d-md-block" style="height: 58px;">
            <div class="container">
                <ul class="nav justify-content-center">

                    <li class="nav-item dropdown">
                        <a class="nav-link color-primary hover" href="{{route('ads.index')}}" id="navCategorie" role="button">Annunci</a> 
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-primary" href="#" id="navCategorie" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navCategorie">
                            @foreach (App\Models\Categories::all() as $category)
                                            
                            <li class="nav-item"><a class="nav-link color-primary" href="{{route('adsByCategory',$category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-primary" href="#" id="navChiSiamo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chi siamo
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navChiSiamo">
                            <li><a class="dropdown-item" href="#">Informazioni</a></li>
                            <li><a class="dropdown-item" href="#">Storia</a></li>
                        </ul>
                    </li>
        
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-primary" href="#" id="navVendi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Vendi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navVendi">
                            <li><a class="dropdown-item" href="#">Crea annuncio</a></li>
                            <li><a class="dropdown-item" href="#">FAQ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle color-primary" href="#" id="navContattaci" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contattaci
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navContattaci">
                            <li><a class="dropdown-item" href="#">Form di contatto</a></li>
                            <li><a class="dropdown-item" href="#">Altre informazioni</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>
    
    

</header>



