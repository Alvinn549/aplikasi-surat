<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\ProfilDesa;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (auth()->user()->role == 'admin')
        {
            $surats = Surat::with('penduduk')->latest()->get();
            return view('dashboard.admin.arsip-surat', compact('surats'));
        } 
        elseif (auth()->user()->role == 'kepala_desa') 
        {
            $surats = Surat::where('status','menunggu')
            ->orWhere('status', 'revisi')
            ->latest()
            ->get();
            return view('dashboard.kepala-desa.approval-surat', compact('surats'));
        } 
        else
        {
            return redirect()->route('access-denied');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profilDesa = ProfilDesa::first();
        $penduduks = Penduduk::latest()->get();
        $surat = Surat::latest()->first();


        $nxt_no_surat = $surat ? $surat->id+1 : 1 ;

        return view('dashboard.admin.create-surat', compact(['profilDesa', 'penduduks', 'nxt_no_surat']));
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
            'keperluan' => 'required|string',
            'penduduk_id' => 'required',
            'nomor_kk_pengaju' => 'required', 
            'jenis_barang' => 'required',
            'perkiraan_waktu' => 'required',
            'perkiraan_tempat_kejadian' => 'required',
            'tujuan_surat' => 'required',
            'berlaku_selama' => 'required',
            'dikeluarkan_di' => 'required',
            'pada_tanggal' => 'required',
            'saksi_1' => 'required',
            'nik_saksi_1' => 'required',
            'saksi_2' => 'required',
            'nik_saksi_2' => 'required',
        ]);

        $surat = Surat::create($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">Surat berhasil dikirim !</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('surat.create');


        // dd($validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        $profilDesa = ProfilDesa::first();

        if(auth()->user()->role == 'admin')
        {
            return view('dashboard.admin.show-surat', compact(['surat','profilDesa']));
        }
        elseif(auth()->user()->role == 'kepala_desa')
        {
            return view('dashboard.kepala-desa.show-surat', compact(['surat','profilDesa']));   
        }
        else 
        {
            return redirect()->route('access-denied');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        if($request->status == null )
        {
            Alert::toast('<p style="color: white; margin-top: 10px;">Status tidak boleh kosong !</p>','warning')
            ->toHtml()
            ->background('#212529')
            ->position($position = 'bottom-right');

            return back();
        }

        // dd($request->status);

        $surat->update(['status' => $request->status]);

        Alert::toast('<p style="color: white; margin-top: 10px;">Surat berhasil '.$request->status.' !</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('surat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        $surat->delete();

        Alert::toast('<p style="color: white; margin-top: 10px;">Surat berhasil dihapus</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('surat.index');
    }
}
