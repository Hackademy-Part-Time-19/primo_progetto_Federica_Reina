<x-layout>
    <x-slot:title>Articoli</x-slot>
   
<div style="padding-left: 20px;margin-top:15px">


    <p style="background-color: #0D6EFD;padding:0px 7px 0px 7px; width:fit-content; color:white; border-radius:4px;">{{ $titolo }}</p>

    <h1 style="margin-bottom: 60px;">Benvenuti nella sezione {{$titolo}}</h1>
</div>

    <div class="container" style="margin-left: 15px;">

        <div class="row">

            @foreach($articoli as $chiave => $articolo)
                
                    <x-card
                    :titolo="$articolo['titolo']"
                    :descrizione="$articolo['descrizione']"
                    :nome="$articolo['nome']" 
                    :chiave="$chiave" />
                
            @endforeach

        </div>
    </div>

</x-layout>