<div>
    <x-layout.success-message/>
    <br>
    <br>
    <div class="backgroundOpacity px-5 py-1 border border-dark border-4 rounded-4" style="--bs-border-opacity: .3;">
    <div class="mt-5">
        <form wire:submit.prevent="store">
            <h2 class="text-center fw-bold text-white">CREA IL TUO ARTICOLO:</h2>
            <div class="mb-3 t">
                <label  class="form-label fw-semibold text-white">Titolo</label>
                <div class=" border border-info bg-gradient-secondary border rounded">
                <input wire:model.change='title' type="text" class="form-control InputOpacity @error('title') is-invalid @enderror">
            </div>
                @error('title')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div>
           
            <div class="mb-3">
                <label  class="form-label fw-semibold text-white ">Descrizione</label>
                <div class=" border border-info bg-gradient-secondary border rounded ">
                <input wire:model.change='description' type="text" class="form-control text-white InputOpacity @error('description') is-invalid @enderror">
            </div>
                @error('description')
                    <span class="text-danger fw-bold">{{$message}}</span>
                @enderror
            </div>
     
                <div class="mb-3 blueColorText">
                    <label  class="form-label fw-semibold ">Categoria</label>
                    <div class=" border border-info bg-gradient-secondary border rounded">
                    <select wire:model.change='category_id' class="form-select @error('category_id') is-invalid @enderror">
                    </div>
                        <option >Seleziona una categoria</option>
                        @foreach (App\Models\Categories::all() as $category)
                            <option class="text-dark backgroundOpacity" value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger fw-bold">{{$message}}</span>
                    @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label class="form-label fw-semibold text-white">Prezzo</label>
                    <div class=" border border-info bg-gradient-secondary border rounded">
                    <input wire:model.change='price' type="number" class="form-control InputOpacity @error('price') is-invalid @enderror">
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
                <div class="text-center p-3 text-white">
    <button type="submit" class="blueColor rounded-pill text-white fw-semibold px-5 py-3 fs-5">Aggiungi un nuovo annuncio</button>
                </div>
        </form>
    </div>
    </div>
</div>
