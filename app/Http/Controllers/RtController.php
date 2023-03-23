<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;

class RtController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rts = Rt::with('rw')->latest()->get();

        $rws = Rw::all();

        return view('dashboard.admin.rt-list', compact(['rts','rws']));
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
            'nama_rt' => 'required|string|unique:rts',
            'rw_id' => 'required|string'
        ]);

        // dd($validate);

        $rt = Rt::create($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rt->nama_rt.' berhasil disimpan</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('rt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function show(rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function edit(rt $rt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rt $rt)
    {
        $validate = $request->validate([
            'nama_rt' => ['required','string', Rule::unique('rts')->ignore($rt->id)],
            'rw_id' => 'required|string'
        ]);

        $rt->update($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rt->nama_rt.' berhasil diperbarui</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('rt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rt  $rt
     * @return \Illuminate\Http\Response
     */
    public function destroy(rt $rt)
    {
        $rt->delete();

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$rt->nama_rt.' berhasil dihapus</p>','success')
       ->toHtml()
       ->background('#212529')
       ->position($position = 'bottom-right');

       return redirect()->route('rt.index');
   }
}
