<?php

namespace App\Http\Controllers;

use App\Models\TravelHistory;
use Illuminate\Http\Request;
use Auth;
use Alert;

class HistoryTravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travelHistory = TravelHistory::where('id_user', '=', Auth::user()->id)->orderBy('tanggal', 'desc')->orderBy('jam', 'asc')->get();

        return view('pages.history', compact('travelHistory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',
        ]);

        $data = $request->all();
        $data['id_user'] = Auth::user()->id;

        TravelHistory::create($data);

        Alert::success('Berhasil', 'Catatan berhasil tambahkan.');
        return redirect()->route('travel-history.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $history = TravelHistory::findOrFail($id);
        return view('pages.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'jam' => 'required',
            'lokasi' => 'required',
            'suhu_tubuh' => 'required',
        ]);

        $data = TravelHistory::findOrFail($id);
        $data->tanggal = $request->get('tanggal');
        $data->jam = $request->get('jam');
        $data->lokasi = $request->get('lokasi');
        $data->suhu_tubuh = $request->get('suhu_tubuh');
        $data->save();

        Alert::success('Berhasil', 'Catatan berhasil diubah.');
        return redirect()->route('travel-history.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = TravelHistory::findOrFail($id);
        $delete->delete();

        Alert::success('Berhasil', 'Catatan berhasil dihapus.');
        return back();
    }
}
