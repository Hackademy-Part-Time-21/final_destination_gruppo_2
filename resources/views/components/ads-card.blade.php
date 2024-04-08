            <div class="col-md-3 mb-4"> 
                <div class="card" style="width: 100%;"> 
                    <img src="{{ $ad->picture ?: 'https://picsum.photos/150/150' }}" class="card-img-top" alt="Picture">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text">{{ $ad->description }}</p>
                        <p class="card-text">{{ $ad->price }}</p>
                        {{-- @dd($ad->id); --}}
                        <a href="{{route('adDetail',$ad->id)}}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
