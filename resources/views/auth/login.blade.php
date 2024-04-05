<x-layout.layout>
    <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
            <label class="form-label color-primary">Email</label>
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
        <a href="/register" class="text-decoration-none color-primary">Non sei registrato?</a>
        <br>
        <button type="submit" class="btn background-primary color-accent mt-2">Accedi</button>
    </form>
</x-layout.layout>
