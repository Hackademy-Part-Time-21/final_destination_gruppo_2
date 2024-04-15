<x-layout.layout>
    <h3 style="text-align: center">Registrati</h3>
    <div class="form-login-card background-detail m-5">
    <form method="POST" action="/register">
        @csrf
        <div class="m-3">
            <label class="form-label color-primary"> <strong>Nome</strong></label>
            <input type="name" name="name" class="form-control" value="{{old('name')}}">
            @error('name')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="m-3">
            <label class="form-label color-primary"><strong>Indirizzo Email</strong></label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="m-3">
            <label class="form-label color-primary"> <strong>Password</strong></label>
            <input type="password" name="password" class="form-control" >
            @error('password')
                <span>{{$message}}</span>
            @enderror
        </div>
        <div class="m-3">
            <label class="form-label color-primary"><strong>Conferma Password</strong></label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <button type="submit" class="btn background-primary color-accent m-3">Registrati</button>
    </form>
</div>
</x-layout.layout>
