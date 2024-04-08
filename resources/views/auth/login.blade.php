<x-layout.layout>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="/login">
        @csrf
        <h3>Login Here</h3>
        <div class="mb-3">
            <label class="form-label color-primary">Email</label>
            <input type="email" name="email" placeholder="Email o Phone" class="form-control" value="{{old('email')}}">
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
        <a href="/register" class="text-decoration-none color-primary">Non sei registrato?</a>
        <br>
        <button type="submit" class="btn background-primary color-accent mt-2">Accedi</button>

        <div class="social">
            <div class="go"><i class="fab fa-google"></i>Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>Facebook</div>
        </div>
    </form>
</x-layout.layout>
