<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Entrant;

class WinnersController extends Controller
{
    public function index()
    {
        return view('winners');
    }

    public function action(Request $request)
    {
        $request->validate([
            'winners' => ['required'],
            'raffle' => ['required'],
        ]);

        $raffle = $request->get('raffle');
        $count = (int) $request->get('winners');

        $winners = Entrant::where('raffle', $raffle)->inRandomOrder()->limit($count)->get();

        return redirect()->back()->with('winners', $winners);
    }
}
