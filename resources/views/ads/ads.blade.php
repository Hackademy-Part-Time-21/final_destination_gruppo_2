<x-layout.layout>
    <div class="background-detail px-5 py-1 border border-dark border-4 rounded-4" style="--bs-border-opacity: .3;">
    <div class="mt-5 text-center">
        <h1 class="blueColorText">ECCO GLI ANNUNCI</h1>
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
        <a href="{{route('ads.create')}}" class="btn btn-primary">CREA ANNUNCIO</a>
    </div>
</x-layout.layout>