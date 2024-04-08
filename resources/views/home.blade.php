<x-layout.layout>
    <div class="mt-5">
    @auth
    <div class="mb-2">
    <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
    </div>
    @endauth
    {{-- <div class="d-flex justify-content-center">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="{{ asset('images/vino.webp') }}" class="d-block w-100" alt="I migliori vini">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="color-detail">I migliori vini</h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/rum.webp') }}" class="d-block w-100" alt="I migliori distillati">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="color-detail">I migliori distillati</h1>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('images/gin.webp') }}" class="d-block w-100" alt="La tua passione">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="color-detail">La tua passione</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row">
        @foreach ($ads as $ads) 
            <div class="col-md-3 mb-4"> 
                <div class="card" style="width: 100%;"> 
                    <img src="{{ $ads->picture ?: 'https://picsum.photos/150/150' }}" class="card-img-top" alt="Picture">

                    <div class="card-body">
                        
                        <h5 class="card-title">{{ $ads->user_id }}</h5>
                        <h6 class="card-title">{{ $ads->title }}</h6>
                        <p class="card-text">{{ $ads->description }}</p>
                        <a href="/annunci/{{ $ads->id }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout.layout>
