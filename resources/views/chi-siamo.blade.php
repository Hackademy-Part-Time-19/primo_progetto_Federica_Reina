<x-layout>
    <x-slot:title>Contatti</x-slot>

    <div style="padding-left: 20px;margin-top:15px">

        <p style="background-color: #0D6EFD;padding:0px 7px 0px 7px; width:fit-content; color:white; border-radius:4px;">{{ $titolo }}</p>
    
    </div>

        <div class="row" style="margin-left: 10px;margin-top:30px">
            <div class="col flex-column" style="margin-bottom: 25px">
                <h1>Contatti</h1>
                <div class="d-flex flex-row align-items-center">
                    <div style="margin-top: 30px" class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="#0D6EFD" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                    </svg></div>
                    <div style="margin-top: 30px" class="p-2"> Corso Cavour, 19</div>
                </div>

                <div class="d-flex flex-row align-items-center">
                    <div style="margin-top: 30px" class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="38" fill="#0D6EFD" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg></div>
                    <div class="p-2" style="margin-top: 30px" > 012345678</div>
                </div>
                <div class="d-flex flex-row align-items-center">
                    <div style="margin-top: 30px" class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="46" height="36" fill="#0D6EFD" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg></div>
                    <div class="p-2" style="margin-top: 30px" > info@blog.com</div>
                </div>
            </div>

            <div class="col">
                <form action="{{route('saveContact')}}" method="POST"
                style="width:90%; padding-right:20px">
                    @csrf
                    <h1 style="margin-bottom: 30px;">Scrivici un messaggio</h1>
                    @if(session()->has('success'))
                        <div style="background-color: #95bfff; border:none; border-radius:4px;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom:8px;">
                            <p style="color: white;padding-left:10px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="margin-right:5px">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>{{session('success')}}</p>
                        </div>
                    @endif
                    <div class="form-group" style="margin-bottom: 15px">
                        <label for="exampleInputEmail1" style="margin-bottom: 5px">Nome</label>
                        <input name="name" type="text" class="form-control" placeholder="Nome">
                      </div>
                    <div class="form-group" style="margin-bottom: 15px">
                      <label for="exampleInputEmail1" style="margin-bottom: 5px">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com">
                    </div>
                    <div class="form-group" style="margin-bottom: 15px">
                        <label for="exampleFormControlTextarea1" style="margin-bottom: 5px">Messaggio</label>
                        <textarea  name="message"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 5px;margin-bottom:80px">Submit</button>
                  </form>
            </div>
        </div>
            
            



</x-layout>