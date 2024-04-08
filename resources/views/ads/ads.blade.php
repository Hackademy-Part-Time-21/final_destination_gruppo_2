<x-layout.layout>
    <div class="mt-5">
        <h1>ECCO GLI ANNUNCI</h1>
        <a href="{{route('ads.create')}}" class="btn btn-primary">CREA ANNUNCIO</a>
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
    </div>
</x-layout.layout>