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
}
