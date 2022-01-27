<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Entrant;

class IndexController extends Controller
{
    public function index()
    {
        $entrants = Entrant::all();
        return view('index')
        ->with('entrants', $entrants);
    }
}
