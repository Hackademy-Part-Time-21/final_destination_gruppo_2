<x-layout.layout>
    <x-layout.success-message/>
    <a href="{{route('unDo')}}" class="btn btn-warning">undo</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Utente</th>
            <th scope="col">Titolo</th>
            <th scope="col">Azioni</th>
            <th scope="col">Dettagli</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($ads as $ad)
            <tr>
              <th scope="row">1</th>
              <td>{{$ad->user_id}}</td>
              <td>{{$ad->title}}</td>
              <td>
                  <ul>
                      <li><a href="{{route('acceptAd',$ad->id)}}">Accetta</a></li>
                      <li><a href="{{route('refuseAd',$ad->id)}}">Rifiuta</a></li>
                  </ul>
              </td>
              <td><a href="{{route('adDetail',$ad->id)}}">Mostra</a>
              </td>
            </tr>
                
            @endforeach
        </tbody>
      </table>
</x-layout.layout>