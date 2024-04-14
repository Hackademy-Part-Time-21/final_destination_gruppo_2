<x-layout.layout>
  <div class="carddetail background-accent" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);border-radius: 8px;">
    <div class="carousel-container background-accent">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ $ads[0]->picture ?? 'https://picsum.photos/500/300' }}" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ $ads[1]->picture ?? 'https://picsum.photos/500/300' }}" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ $ads[2]->picture ?? 'https://picsum.photos/500/300' }}" class="d-block w-100" alt="Image 3">
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
    <div class="card-content" style="margin:10px">
      <h1> <strong>Titolo:</strong> <br> {{ $ad->title }}</h1>
      <p><strong>Descrizione:</strong> <br> {{ $ad->description }}</p>
      <p><strong>Prezzo:</strong> <br> {{ $ad->price }}€</p>
  </div>
  
</div>

</x-layout.layout>
