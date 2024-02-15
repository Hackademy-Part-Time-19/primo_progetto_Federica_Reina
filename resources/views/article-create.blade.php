<x-layout>
    <x-slot:title>Scrivi il tuo articolo</x-slot>

    <h1 style="margin-bottom: 40px;padding-left: 15px;margin-top:15px">Scrivi il tuo articolo</h1>

        <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data" style="margin-left:15px; width:90vw">
            @csrf

            @if(session()->has('success'))
                <div style="background-color: #95bfff; border:none; border-radius:4px;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom:5px;">
                    <p style="color: white;padding-left:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="margin-right:5px">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>{{session('success')}}</p>
                </div>
            @endif

            <div class="form-group" style="margin-top: 15px" >
                <label for="exampleInputEmail1" style="margin-bottom: 5px">Titolo</label>
                <input name="title" type="text" class="form-control" placeholder="Titolo dell'articolo" value={{old('title')}}>
            </div>
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror

            <div class="form-group" style="margin-top: 15px">
                <label for="exampleInputEmail1" style="margin-bottom: 5px">Categoria</label>
                <input name="category" type="text" class="form-control" placeholder="Categoria dell'articolo" value={{old('category')}}>
            </div>
            @error('category') <span class="text-danger">{{ $message }}</span>@enderror

            <div class="form-group" style="margin-top: 15px">
                <label for="exampleFormControlTextarea1" style="margin-bottom: 5px">Breve introduzione dell'articolo</label>
                <textarea  name="description"class="form-control" id="exampleFormControlTextarea1" value={{old('description')}}></textarea>
            </div>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror

            <div class="form-group" style="margin-top: 15px">
                <label for="exampleFormControlTextarea1" style="margin-bottom: 5px">Contenuto integrale dell'articolo</label>
                <textarea  name="body"class="form-control" id="exampleFormControlTextarea1" rows="4" value={{old('body')}}></textarea>
            </div>
            @error('body') <span class="text-danger">{{ $message }}</span> @enderror

            <div class="form-group" style="margin-top: 15px">
                <label for="exampleInputEmail1" style="margin-bottom: 5px">Inserisci immagine</label>
                <input name="image" type="file" class="form-control" placeholder="Carica immagine" value={{old('image')}}>
            </div>
            @error('image') <span class="text-danger">{{ $message }}</span> @enderror


            <button type="submit" class="btn btn-primary" style="margin-top: 5px;margin-bottom:80px">Submit</button>
          </form>

</x-layout>