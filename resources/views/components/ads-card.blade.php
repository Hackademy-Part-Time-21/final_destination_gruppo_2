            <div class="col-md-4 mb-4"> 
                <div class="justify-content-between m-3">
                <div class="card rounded-5 border border-info bg-gradient-secondary border-2" style="width: 100%;"> 
                    <img src="{{ $ad->picture ?: 'https://picsum.photos/150/150' }}" class="card-img-top" alt="Picture">
                    <div class="card-body border ">
                        <h5 class="card-title fw-bold fs-3 border border-end-0 border-start-0 border-top-0 border-3 blueColorText">{{ $ad->title }}</h5>
                        <br>
                        <p class="card-text fw-semibold border border-end-0 border-start-0 border-top-0 border-2">{{ $ad->description }}</p>
                       
                        <p class="card-text fw-bold">{{ $ad->price }}</p>
                        {{-- @dd($ad->id); --}}
                      
                        <a href="{{route('adDetail',$ad->id)}}" class="btn btn-success border border-info">Dettagli</a>
                    </div>
                </div>
            </div>
         </div>

