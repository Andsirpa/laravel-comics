<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //definisco il metodo e sposto qui la logica
    public function index()
    {
        return view("page.home");
    }

    public function comics()
    {
        $comics = config('comics');
        return view('pages.comics', compact('comics'));
    }

    // metodo per il detail
    // passo l'index come parametro
    public function comicDetail($index)
    {
        $comics = config('comics');

        // gestisco l'errore quando cerco una chiave non presente nell'array
        if (!array_key_exists($index, $comics))
            abort(404);


        $comic = $comics[$index];
        return view('pages.comics-detail', compact('comic'));
    }
}
