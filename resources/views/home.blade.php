<x-layout.layout>
    




  
    
  <div style="position: relative; margin-top: -3%">
    <img style="width: 100%" src="{{asset('images/Progettosenzatitolo(1).png')}}" alt="img">
    <h1 style="position: absolute; bottom: 5%; left: 5%; z-index: 1; color: #135d66; padding: 1vw; font-size: 4vw;">
        Il Marketplace della Montagna
    </h1>
</div>



       @auth
       <div class="mb-2">
       <a href="{{route('ads.create')}}" class="btn btn-outline-dark btn-lg background-primary color-detail" weight="45">Crea Annuncio</a>
       </div>
       @endauth 
      
     
      <div style="justify-content: center; border-top: 2px solid #003c43; margin-top:2% ">
        <h3  class="text-center color-primary">
          Ultimi arrivi
        </h3>
      </div>
        <div class="container">
            <div class="row text-center">
                @foreach ($ads as $ad)
                  <x-ads-card :ad="$ad"/>
                @endforeach
            </div>
        </div>

        <div style="justify-content: center; border-top: 2px solid #003c43; margin-top:2% ">
          <h3 class="text-center color-primary">
           Dicono di noi
          </h3>
        </div>

        <div class="recensione-container">
          <img src="{{asset('images/Recensione1.png')}}" alt="Recensione">
          <img src="{{asset('images/Recensione2.png')}}" alt="Recensione">
          <img src="{{asset('images/Recensione3.png')}}" alt="Recensione">
      </div>


</x-layout.layout>
