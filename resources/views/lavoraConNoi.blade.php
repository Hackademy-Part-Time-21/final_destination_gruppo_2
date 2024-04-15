<x-layout.layout>

            <div class="form-login-card">
                <br>
                <br>
                <div class="card text-center pt-3 color-accent background-secondary form-login-card">
                    <h1>
                        Vuoi lavorare con noi?
                    </h1>
                    <br>
                    <p>
                        Riempi il form, ti risponderemo il prima possibile
                    </p>
                    <br>
                    <br>
                    <div>
                        <a href="{{route('beChecker',Auth::user())}}" class="btn btn-primary mb-3">RICHIEDI DI DIVENTARE REVISORE</a>
                    </div>
                </div>
<br>
<br>
                <form action="{{route('candidati')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3">
                        <label class="form-label" > <strong>Nome e Cognome</strong></label>
                        <input name="name" type="text" class="form-control">
                    </div>
                    <div class="m-3">
                      <label class="form-label"><strong>Indirizzo email</strong></label>
                      <input name="email" type="email" class="form-control">
                    </div>
                    <div class="m-3">
                        <label class="form-label"><strong>Allega un curriculum (facoltativo)</strong></label>
                        <input name="cv" class="form-control" type="file" id="formFile">
                    </div>
                    <div class="m-3">
                        <label class="form-label"><strong>Presentati brevemente</strong></label>
                        <input name="presentazione" class="form-control" type="text">
                    </div>
                    <div class="m-3">
                        <label class="form-label"><strong>Che lavoro vorresti fare?</strong></label>
                        <input name="presentazione" class="form-control" type="text">
                    </div>
                    <button type="submit" class="btn btn-primary m-3">Submit</button>
                  </form>
            </div>
      
</x-layout.layout>
