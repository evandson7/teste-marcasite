<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}

