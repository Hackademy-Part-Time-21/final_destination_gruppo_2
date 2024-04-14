            <div class="col-md-4 m- background-accent cardhome-container"> 
                <div id="" class="background-accent justify-content-between m-3" style="box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);border-radius: 8px;">
                    <div class="card background-accent"> 
                        <img src="{{ $ad->picture ?: 'https://picsum.photos/500/300' }}" alt="Picture">
                        <div class="card-body">
                            <h5 title="titolo" class="truncateTitlecard-title fw-bold m-0 fs-5">{{ $ad->title }}</h5>
                            <br>
                            <p title="descrizione" class="truncateDescription card-text fw-semibold">{{ $ad->description }}</p>
                            <p class="card-text fw-bold text-success">{{ $ad->price }}€</p>
                            <a href="{{route('adDetail',$ad->id)}}" class="btn btn-success">Dettagli</a>
                        </div>
                    </div>
                </div>
         </div>