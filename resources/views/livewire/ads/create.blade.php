<div>
    @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        
    @endif
    <form wire:submit.prevent="store">
        <div class="mb-3">
          <label  class="form-label">Titolo</label>
          <input wire:model.change='title' type="text" class="form-control @error('title') is-invalid @enderror">
          @error('title')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Descrizione</label>
            <input wire:model.change='description' type="text" class="form-control @error('description') is-invalid @enderror">
            @error('description')
            <span>{{$message}}</span>
        @enderror  
        </div>
          <div class="mb-3">
            <label  class="form-label">Categoria</label>
            <select wire:model.change='category_id' class="form-select @error('category_id') is-invalid @enderror">
                
             
                @foreach (App\Models\Categories::all() as $category)
                
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                
                
              </select>
              @error('category')
            <span>{{$message}}</span>
        @enderror 
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prezzo</label>
            <input wire:model.change='price' type="number" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <span>{{$message}}</span>
        @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Selezione Immagine</label>
            <input type="file" class="form-control @error('picture') is-invalid @enderror">
            @error('picture')
            <span>{{$message}}</span>
        @enderror
          </div>
        <button type="submit" class="btn btn-primary">crea</button>
      </form>
</div>
