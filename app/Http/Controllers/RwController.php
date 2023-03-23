<?php

namespace App\Http\Controllers;

use App\Models\Rw;
use App\Models\Dusun;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;

class RwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rws = Rw::with(['dusun','rt'])->latest()->get();

        $dusuns = Dusun::all();

        return view('dashboard.admin.rw-list', compact(['rws','dusuns']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_rw' => 'required|string|unique:rws',
            'dusun_id' => 'required|string'
        ]);

        // dd($validate);

        $rw = Rw::create($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rw->nama_rw.' berhasil disimpan</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('rw.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function show(rw $rw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function edit(rw $rw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rw $rw)
    {
        $validate = $request->validate([
            'nama_rw' => ['required','string', Rule::unique('rws')->ignore($rw->id)],
            'dusun_id' => 'required|string'
        ]);

        $rw->update($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rw->nama_rw.' berhasil diperbarui</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('rw.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rw  $rw
     * @return \Illuminate\Http\Response
     */
    public function destroy(rw $rw)
    {
        $rw->delete();

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rw->nama_rw.' berhasil dihapus</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('rw.index');
    }
}
