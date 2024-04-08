<x-layout.layout>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <div class="mt-5">
    <form method="POST" action="/register">
        @csrf
        <h3>Registrati</h3>
        <div class="mb-3">
            <label class="form-label color-primary">Name</label>
            <input type="name" placeholder="Name o username" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Email address</label>
            <input type="email" placeholder="Email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Password</label>
            <input type="password" placeholder="Password" name="password" class="form-control" >
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label color-primary">Confirmation Password</label>
            <input type="password" placeholder="Confirma la tua password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn background-primary color-accent">Registrati</button>
    </form>
</div>
</x-layout.layout>
