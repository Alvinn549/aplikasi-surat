<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dusuns = Dusun::with('rw')->latest()->get()    ;

        return view('dashboard.admin.dusun-list', compact('dusuns'));
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
            'nama_dusun' => 'required|string|unique:dusuns'
        ]);

        $dusun = Dusun::create($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$dusun->nama_dusun.' berhasil disimpan</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('dusun.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function show(dusun $dusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function edit(dusun $dusun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dusun $dusun)
    {
        $validate = $request->validate([
            'nama_dusun' => ['required','string', Rule::unique('dusuns')->ignore($dusun->id)],
        ]);

        $dusun->update($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$dusun->nama_dusun.' berhasil diperbarui</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('dusun.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function destroy(dusun $dusun)
    {
        $dusun->delete();

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$dusun->nama_dusun.' berhasil dihapus</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('dusun.index');
    }
}
