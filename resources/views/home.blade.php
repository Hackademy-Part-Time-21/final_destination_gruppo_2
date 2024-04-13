<x-layout.layout>
    




    

        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    
       <div style= " margin-top: -3%">
        <img style="width: 100%" src="{{asset('images/Progettosenzatitolo(1).png') }}" alt="img">
       </div>
        
          
       @auth
       <div class="mb-2">
       <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
       </div>
       @endauth 
      
     
      <div style="justify-content: center; border-top: 2px solid #003c43;">
        <h1 class="text-center">
          <strong>Ultimi arrivi</strong>
        </h1>
      </div>
        <div class="container">
            <div class="row text-center">
                @foreach ($ads as $ad)
                  <x-ads-card :ad="$ad"/>
                @endforeach
            </div>
        </div>
</x-layout.layout>
