<x-layout.layout>
    <div class="sticky-top">
        <a href="{{route('ads.create')}}" class="btn btn-primary mb-5">CREA ANNUNCIO</a>
    </div>
    <div class="mt-5">
        <h1 class="text-center">
            <h1>{{$category->name ?? ''}}</h1>
            <h4>Ecco gli annunci</h4>
        </h1>
        <div class="container">
            <div class="row text-center">
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
    </div>
</x-layout.layout>
