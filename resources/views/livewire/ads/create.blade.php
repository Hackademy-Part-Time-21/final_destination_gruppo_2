<div>
    <x-layout.success-message/>
    <br>
    <br>
    <div class="background-detail px-5 py-1 border border-dark border-4 rounded-4" style="--bs-border-opacity: .3;">
    <div class="mt-5">
        <form wire:submit.prevent="store">
            @csrf
            <h2 class="text-center fw-bold border border-top-0 border-5 blueColorText">CREA IL TUO ARTICOLO:</h2>
            <div class="mb-3 blueColorText">
                <label  class="form-label fw-semibold">Titolo</label>
                <div class=" border border-info bg-gradient-secondary border rounded">
                <input wire:model.change='title' type="text" class="form-control @error('title') is-invalid @enderror">
            </div>
                @error('title')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div>
           
            <div class="mb-3 blueColorText">
                <label  class="form-label fw-semibold">Descrizione</label>
                <div class=" border border-info bg-gradient-secondary border rounded">
                <input wire:model.change='description' type="text" class="form-control @error('description') is-invalid @enderror">
            </div>
                @error('description')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div>
     
                <div class="mb-3 blueColorText">
                    <label  class="form-label fw-semibold ">Seleziona una categoria</label>
                    <div class=" border border-info bg-gradient-secondary border rounded">
                    <select wire:model.change='category_id' class="form-select @error('category_id') is-invalid @enderror">
                    
                        <option value=""></option>
                        @foreach (App\Models\Categories::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                    @error('category_id')
                        <span class="text-danger fw-bold">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="mb-3 blueColorText">
                    <label class="form-label fw-semibold">Prezzo</label>
                    <div class=" border border-info bg-gradient-secondary border rounded">
                    <input wire:model.change='price' type="number" class="form-control @error('price') is-invalid @enderror">
                </div>
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
                <div class="text-center p-3">
    <button type="submit" class="blueColor rounded-pill text-white p-2 fs-5">Aggiungi un nuovo annuncio</button>
                </div>
        </form>
    </div>
    </div>
</div>
