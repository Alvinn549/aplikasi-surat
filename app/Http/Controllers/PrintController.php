<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\ProfilDesa;
use PDF;

class PrintController extends Controller
{
    public function print(Surat $surat)
    {
        $profilDesa = ProfilDesa::first();

        // return view('dashboard.admin.print-surat', compact(['surat', 'profilDesa']));

        $pdf = PDF::loadView('dashboard.admin.print-surat', compact(['surat', 'profilDesa']));

        // Pdf::setOption(['dpi'=> 300, 'defaultFont' => 'sans-serif']);

        // $pdf->set_paper('12x15', 'portrait');

        return $pdf->download('surat.pdf');

    }
}
