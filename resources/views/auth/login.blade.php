<x-layout.layout>
    <h3 style="text-align: center">Accedi</h3>
    <div class="form-login-card background-detail m-5">
        <form method="POST" action="/login" >
            @csrf
            
            <div class="m-3">
                <label class="form-label color-primary"> <strong>Email</strong></label>
                <input type="email" name="email" placeholder="Email o Phone" class="form-control" value="{{old('email')}}">
                @error('email')
                    <span>{{$message}}</span>
                @enderror
            </div>
            <div class="m-3">
                <label class="form-label color-primary"><strong>Password</strong></label>
                <input type="password" placeholder="Password" name="password" class="form-control" >
                @error('password')
                    <span>{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class=" m-3 btn background-primary color-accent mt-2">Accedi</button> 
            
            
            
            
            <div class="social mt-4">
                <div class="go"><i class="fab fa-google ms-3"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook ms-3 mb-3"></i> Facebook</div>
            </div>

            <br>
            <a href="/register" class="m-3 text-decoration-none color-primary">Non sei ancora registrato?</a>
        </form>
    </div>
</x-layout.layout>
