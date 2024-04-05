<x-layout.layout>
    @auth
    <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
    @endauth
    <div class="d-flex justify-content-center">
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
</x-layout.layout>
