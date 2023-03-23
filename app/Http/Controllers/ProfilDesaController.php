<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilDesaController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $profilDesa = ProfilDesa::first();

        return view('dashboard.admin.profil-desa', compact('profilDesa'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilDesa $profilDesa)
    {
        $validate = $request->validate([
            'nama_desa' => 'required|string',
            'email_desa' => 'required|string',
            'alamat_kantor' => 'required|string',
            'nomor_surat' => 'required|string',
            'nama_kepala_desa' => 'required|string',
            'telp' => 'required|numeric',
            'website_desa' => 'required|string',
            // 'logo' => 'required'
        ]);

        if($request->file('logo'))
        {
            // dd($request->logo);
            $cek = $request->validate(['logo' => 'image|file|max:7168']);

            if ($request->oldLogo) 
            {
                Storage::delete($request->oldLogo);
            }

            $foto = $request->file('logo')->store('logo');

            $profilDesa->update(['logo' => $foto ]);
        }
        // dd($request->file('logo'));

        $profilDesa->update($validate);

        Alert::toast('<p style="color: white; margin-top: 10px;">Profil desa berhasil diperbarui</p>','success')
        ->toHtml()
        ->background('#212529')
        ->position($position = 'bottom-right');

        return redirect()->route('profil-desa.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfilDesa  $profilDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilDesa $profilDesa)
    {
        //
    }
}
