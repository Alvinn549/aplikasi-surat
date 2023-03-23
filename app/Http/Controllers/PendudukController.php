<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Dusun;
use App\Models\Rw;
use App\Models\Rt;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;
use Carbon\Carbon; 

class PendudukController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $penduduks = Penduduk::with(['dusun', 'rw', 'rt'])->latest()->get();
        $dusuns = Dusun::all();
        $rws = Rw::all();
        $rts = Rt::all();

        return view('dashboard.admin.penduduk-list', compact(['penduduks', 'dusuns', 'rws', 'rts']));
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
            'nik' => 'required|numeric|unique:penduduks',
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'dusun_id' => 'required|string',
            'rw_id' => 'required|string',
            'rt_id' => 'required|string',
            'alamat_lengkap' => 'required',
            'kebangsaan' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'status_perkawinan' => 'required|string',
            'pendidikan_dalam_kk' => 'required|string',
        ]);
// dd($validate);
        $penduduk = Penduduk::create($validate);
        $penduduk->update(['umur' => Carbon::parse($request->tanggal_lahir)->diffInYears()]);

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$penduduk->nama.' berhasil disimpan</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('penduduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(penduduk $penduduk)
    {
        $dusuns = Dusun::all();
        $rws = Rw::all();
        $rts = Rt::all();

        return view('dashboard.admin.edit-penduduk', compact(['penduduk', 'dusuns', 'rws', 'rts']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penduduk $penduduk)
    {
        $validate = $request->validate([
            'nik' => ['required','numeric', Rule::unique('penduduks')->ignore($penduduk->id)],
            'nama' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'dusun_id' => 'required|string',
            'rw_id' => 'required|string',
            'rt_id' => 'required|string',
            'alamat_lengkap' => 'required',
            'kebangsaan' => 'required|string',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string',
            'status_perkawinan' => 'required|string',
            'pendidikan_dalam_kk' => 'required|string',
        ]);
// dd($validate);
        $penduduk->update($validate);
        $penduduk->update(['umur' => Carbon::parse($request->tanggal_lahir)->diffInYears()]);
        
        Alert::toast('<p style="color: white; margin-top: 10px;">'.$penduduk->nama.' berhasil diperbarui</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('penduduk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(penduduk $penduduk)
    {
        $penduduk->delete();

        Alert::toast('<p style="color: white; margin-top: 10px;">'.$penduduk->nama.' berhasil dihapus</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('penduduk.index');
    }
}
