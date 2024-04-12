<x-layout.layout>
    <div>
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ $ads[0]->picture ?? 'https://picsum.photos/150/150' }}" class="d-block w-100" alt="Immagine 1">
              </div>
              <div class="carousel-item">
                <img src="{{ $ads[1]->picture ?? 'https://picsum.photos/150/150' }}" class="d-block w-100" alt="Immagine 2">
              </div>
              <div class="carousel-item">
                <img src="{{ $ads[2]->picture ?? 'https://picsum.photos/150/150' }}" class="d-block w-100" alt="Immagine 3">
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
        <h1>
            {{$ad->title}}
        </h1>
        <h4>
            {{$ad->description}}
        </h4>
        <h4>
            {{$ad->price}}
        </h4>
        <div>
            {{$ad->picture ?? ''}}
        </div>
    </div>
</x-layout.layout>
