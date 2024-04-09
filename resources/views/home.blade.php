<x-layout.layout>
    <div class="mt-5">
    @auth
    <div class="mb-2">
    <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
    </div>
    @endauth

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
