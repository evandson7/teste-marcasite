<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'Greys anatony'
        ];

        return view('series.index')->with('series',$series);
    }


    public function create()
    {
        return view('series.create');
    }


    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
       if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie])) {
        return "OK";
       }else{
        return "Deu erro";
       }
    }
}

