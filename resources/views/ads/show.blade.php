<x-layout.layout>
    <div>
        <h1>
            {{$ad->title}}
        </h1>
        <h4>
            {{$ad->description}}
        </h4>
        <h4>
            {{$ad->price}}
        </h4>
        <div>
            {{$ad->picture ?? "no picture"}}
        </div>
    </div>
</x-layout.layout>