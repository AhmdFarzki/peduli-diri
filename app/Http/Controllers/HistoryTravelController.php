<?php

namespace App\Http\Controllers;

use App\Models\TravelHistory;
use Illuminate\Http\Request;
use Auth;

class HistoryTravelController extends Controller
{
    public function index() {
        $travelHistory = TravelHistory::where('id_user', '=', Auth::user()->id)->orderBy('tanggal', 'desc')->get();

        return view('pages.history', compact('travelHistory'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',
        ]);

        $data = $request->all();
        $data['id_user'] = Auth::user()->id;

        TravelHistory::create($data);

        return redirect()->route('travel-history');
    }
}
