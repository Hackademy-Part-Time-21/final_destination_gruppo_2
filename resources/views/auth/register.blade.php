<x-layout.layout>
    <form method="POST" action="/register">
        @csrf
        <div class="mb-3">
            <label class="form-label color-primary">Name</label>
            <input type="name" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Email address</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Password</label>
            <input type="password" name="password" class="form-control" >
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Confirmation Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn background-primary color-accent">Registrati</button>
    </form>
</x-layout.layout>
