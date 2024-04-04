<x-layout.layout>
    <form method="POST" action="/login">
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}">
        @error('email')
        <span>{{$message}}</span>
    @enderror 
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" >
        @error('password')
        <span>{{$message}}</span>
    @enderror
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="remember">
        <label class="form-check-label">Ricordami</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</x-layout.layout>