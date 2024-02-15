<x-layout>
    <div style="padding-left: 20px;margin-top:15px">


        <p style="background-color: #0D6EFD;padding:0px 7px 0px 7px; width:fit-content; color:white; border-radius:4px;">
            {{ $articolo['titolo'] }}</p>

    </div>

    <div style="margin-left: 20px; margin-top:60px">
        <h1>{{ $articolo['titolo'] }}</h1>
        <p>{{ $articolo['descrizione'] }}</p>
        <h6 style="color: #0D6EFD;">{{ $articolo['nome'] }}</h6>

    </div>
</x-layout>
