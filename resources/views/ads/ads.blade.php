<x-layout.layout>
    <div class="sticky-top">
        <a href="{{route('ads.create')}}" class="btn btn-primary mb-5">CREA ANNUNCIO</a>
    </div>
    <div class="mt-5">
        <header class="text-center">
            <h1>{{$category->name ?? ''}}</h1>
            <h4>Ecco gli annunci</h4>
        </header>
        <div class="container">
            <div class="row">
                @forelse ($ads as $ad)
                    <div>
                        <x-ads-card :ad="$ad"/>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-danger fw-bold">
                                <p class="lead">Non ci sono annunci per questa categoria</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
        <div class="mt-3">
            {{ $ads->links('components.pagination')}}
        </div>
        <a href="{{route('ads.create')}}" class="btn btn-primary border border-dark m-3 mb-5">CREA IL TUO ANNUNCIO</a>
    </div>
</x-layout.layout>
