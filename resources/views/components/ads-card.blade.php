            <div class="col-md-4 mb-3"> 
                <div class="justify-content-between m-3 ">
                <div class="card rounded-4 border border-dark-subtle bg-gradient-secondary border-4 border-opacity-50"> 
                    <img src="{{ $ad->picture ?: 'https://picsum.photos/60/60' }}" class="border-black border-1 foto rounded-top  border border-end-0 border-start-0 border-top-0" alt="Picture">
                    
                    <div class="card-body border p-0 rounded-3">
                        <h5 class="card-title fw-bold m-0 fs-5 border border-end-0 border-start-0 border-top-0 border-3 blueColorText p-2">{{ $ad->title }}</h5>
                        <br>
                        <p class=" card-text fw-semibold border border-end-0 border-start-0 border-top-0 border-2 p-1">{{ $ad->description }}</p>
                       
                        <p class=" card-text fw-bold text-success ">{{ $ad->price }}€</p>
                        {{-- @dd($ad->id); --}}
                      
                        <a href="{{route('adDetail',$ad->id)}}" class="btn btn-success border border-black m-2">Dettagli</a>
                    </div>
                </div>
            </div>
         </div>