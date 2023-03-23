<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Dusun;
use App\Models\Rw;
use App\Models\Rt;
use App\Models\Surat;



class DashboardController extends Controller
{
    public function index()
    {
        $dusun_count = count(Dusun::get('id'));
        $rw_count = count(Rw::get('id'));
        $rt_count = count(Rt::get('id'));
        $penduduk_count = count(Penduduk::get('id'));

        $surat_acc = count(Surat::where('status', 'diterima')->get('id'));
        $surat_rjc = count(Surat::where('status', 'ditolak')->get('id'));
        $surat_rev = count(Surat::where('status', 'revisi')->get('id'));
        $surat_pend = count(Surat::where('status', 'menunggu')->orWhere('status', 'revisi')->get('id'));

        if(auth()->user()->role == 'admin')
        {
            return view('dashboard.admin.index', compact([
                'dusun_count', 
                'rw_count', 
                'rt_count',
                'penduduk_count',
                'surat_acc',
                'surat_rjc',
                'surat_rev',
                'surat_pend',
            ]));
        }
        elseif (auth()->user()->role == 'kepala_desa' ) 
        {
            return view('dashboard.kepala-desa.index', compact([
                'dusun_count', 
                'rw_count', 
                'rt_count',
                'penduduk_count',
                'surat_acc',
                'surat_rjc',
                'surat_rev',
                'surat_pend',
            ]));
        }
        else 
        {
            return redirect()->route('access-denied');    
        }
    }
}
