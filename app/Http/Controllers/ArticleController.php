<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    private $articoli = [['titolo'=> 'Articolo 1', 'descrizione'=>'descrizione di prova', 'nome'=>'Luca'],
                            ['titolo'=> 'Articolo 2', 'descrizione'=>'descrizione di prova', 'nome'=>'Federica'],
                            ['titolo'=> 'Articolo 3', 'descrizione'=>'descrizione di prova', 'nome'=>'Elisabetta'],
                            ['titolo'=> 'Articolo 4', 'descrizione'=>'descrizione di prova', 'nome'=>'Pino'],
                            ['titolo'=> 'Articolo 5', 'descrizione'=>'descrizione di prova', 'nome'=>'Carlo'],
                            ['titolo'=> 'Articolo 6', 'descrizione'=>'descrizione di prova', 'nome'=>'Livia'],
                            ['titolo'=> 'Articolo 7', 'descrizione'=>'descrizione di prova', 'nome'=>'Rino'],
                            ['titolo'=> 'Articolo 8', 'descrizione'=>'descrizione di prova', 'nome'=>'Danila']
                        ];


    public function index() {
    
        return view('articoli',['titolo' => 'Articoli', 'articoli'=> $this->articoli]);
    
    }


    public function show($id){
    
        return view('dettaglio',['articolo' => $this->articoli[$id]]);
    
    }

    public function store(StoreArticleRequest $request){

        $validated = $request -> validate();
        
        Article::create($request->all());  
        return redirect()->route('article.create')->with('success',  "L'articolo è stato inserito correttamente"); 
    }

    public function create(){

        return view('article-create');
    }

}
