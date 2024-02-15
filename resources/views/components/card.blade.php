
    <div class="card" style="width: 18rem; margin:15px">
        <div class="card-body">
            <h5 class="card-title"><b> {{$titolo}} </b></h5>
            <p class="card-text">{{$descrizione}}</p>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$nome}}</h6>
            <a href="{{ route('articoli.dettaglio',['id'=>$chiave]) }}" class="card-link">Leggi Tutto</a>
            
        </div>
    </div>
