
                <div class="card col-3 mb-3" style="width: 30%;"> 
                    <img src="{{ $ad->picture ?: 'https://picsum.photos/150/150' }}" class="card-img-top" alt="Picture">
                    <div class="card-body">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <p class="card-text">{{ $ad->description }}</p>
                        <p class="card-text">{{ $ad->price }}</p>
                        <a href="{{route('adDetail',$ad->id)}}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
