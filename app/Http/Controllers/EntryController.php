<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Entrant;

class EntryController extends Controller
{
    public function index()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'telephone' => ['required'],
            'raffle' => ['required'],
        ]);

        $fullName = $request->get('name');
        $telephone = $request->get('telephone');
        $raffle = $request->get('raffle');
        $won = false;

        $newEntrant = array('fullname' => $fullName, 'telephone' => $telephone, 'raffle' => $raffle, 'won' => $won);

        Entrant::create($newEntrant);

        return redirect()->back()->with('message', "Entrant was added successfully");
    }

}
