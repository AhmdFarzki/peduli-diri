<?php

namespace App\Http\Controllers;

use App\Models\TravelHistory;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $travelHistory = TravelHistory::where('id_user', '=', Auth::user()->id)->orderBy('tanggal', 'desc')->orderBy('jam', 'asc')->limit(5)->get();

        $total = TravelHistory::where('id_user', '=', Auth::user()->id)->count();

        return view('pages.dashboard', compact('travelHistory', 'total'));
    }
}
