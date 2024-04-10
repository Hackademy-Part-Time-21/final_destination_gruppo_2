<x-layout.layout/>
    <br>
    <br>
    <br>
    <div class="text-center ">
        <h2>NOME:</h2> <br>

     <h1 class="fs-1"> {{$ad->title}}  <br><br>
 </h1> <br>

        <h2>DESCRIZIONE:</h2> <br>
        <h4 class="fs-2">
            {{$ad->description}} <br><br>
        </h4> <br>
        <h2>PREZZO:</h2> <br>
        <h4 class="fs-3">
            {{$ad->price}}
        </h4> <br>
        <div class="fs-4">
            {{$ad->picture ?? "no picture"}}
        </div>
    </div>
    <br>
    <br>
    <br>
