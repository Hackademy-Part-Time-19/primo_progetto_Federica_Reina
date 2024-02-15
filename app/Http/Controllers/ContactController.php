<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Mail\COntactReceivedMail;
use Illuminate\Http\Request;


class ContactController extends Controller
{

    

    public function saveContact(Request $request){
        $data = $request->all();
        Mail::to()->send(new COntactReceivedMail);
        return redirect()->route('contatti')->with('success', 'Il messaggio è stato inviato correttamente');
    }
}
