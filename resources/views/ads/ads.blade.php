<x-layout.layout>
    <div class="backgroundOpacity px-5 py-1 border border-black border-2 rounded-4" style="--bs-border-opacity: .5;">
    <div class="mt-5 text-center">
        <h1 class="blueColorText pb-5">ECCO GLI ANNUNCI:</h1>
        <div class="container">
            <div class="row">
                @foreach ($ads as $ad) 
                    <x-ads-card :ad="$ad"/>
                @endforeach
            </div>
        </div>
        <div class="mt-3">
            {{ $ads->links('components.pagination')}}
        </div>
        <a href="{{route('ads.create')}}" class="btn btn-primary border border-dark m-3 mb-5">CREA IL TUO ANNUNCIO</a>
    </div>
</x-layout.layout>