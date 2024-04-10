<x-layout.layout>
    <div class="container">
        <x-layout.success-message/>
        <div class="row">
            <div class="col-12 text-bg-dark">
                <br>
                <br>
                <header class="card text-center pt-3">
                    <h1>
                        Non lavorare con noi!
                    </h1>
                    <br>
                    <h4>
                        Ma se proprio ti vuoi male, compila il form e forse un giorno sarai contattato.
                    </h4>
                    <br>
                    <h6>
                        Comunque la mail è finta quindi non arriverà mai neanche la richiesta
                    </h6>
                    <br>
                    <br>
                    <br>
                    <div>
                        <a href="{{route('beChecker')}}" class="btn btn-primary mb-3">RICHIEDI DI DIVENTARE REVISORE</a>
                    </div>
                </header>
<br>
<br>
                <form action="{{route('candidati')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e Cognome</label>
                        <input name="name" type="text" class="form-control">  
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Indirizzo email</label>
                      <input name="email" type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Allega un curriculum (facoltativo)</label>
                        <input name="cv" class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Presentati brevemente</label>
                        <textarea name="presentazione" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout.layout>
