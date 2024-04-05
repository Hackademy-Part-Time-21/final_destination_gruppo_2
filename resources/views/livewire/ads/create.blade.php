<div>
    <x-layout.success-message/>
    <form wire:submit.prevent="store">
        <div class="mb-3">
            <label  class="form-label color-primary">Titolo</label>
            <input wire:model.change='title' type="text" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <span class="text-danger fw-bold">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label color-primary">Descrizione</label>
            <input wire:model.change='description' type="text" class="form-control @error('description') is-invalid @enderror">
            @error('description')
                <span class="text-danger fw-bold">{{$message}}</span>
            @enderror
        </div>
            <div class="mb-3">
                <label  class="form-label color-primary">Categoria</label>
                <select wire:model.change='category_id' class="form-select @error('category_id') is-invalid @enderror">
                    <option >Seleziona una categoria</option>
                    @foreach (App\Models\Categories::all() as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label color-primary">Prezzo</label>
                <input wire:model.change='price' type="number" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                    <span class="text-danger fw-bold">{{$message}}</span>
                 @enderror
            </div>
            {{-- <div class="mb-3">
                <label class="form-label color-primary">Selezione Immagine</label>
                <input wire:model="picture" type="file" class="form-control @error('picture') is-invalid @enderror">
                @error('picture')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div> --}}
        <button type="submit" class="btn background-primary color-accent">Aggiungi un nuovo annuncio</button>
    </form>
</div>
