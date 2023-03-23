<!-- Main Layout -->
@extends('dashboard.layouts.main')
<!-- Section -->
@section('content')
<div class="container-fluid p-4">
    <h1 >Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row justify-content-center">
        <h1 class="display-5 mb-4" style="font-size: 30px;">Kependudukan</h1>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">Dusun</h1>
                        <h1 class="text-center display-6 index-count">{{ $dusun_count }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">RW</h1>
                        <h1 class="text-center display-6 index-count">{{ $rw_count }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">RT</h1>
                        <h1 class="text-center display-6 index-count">{{ $rt_count }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">Penduduk</h1>
                        <h1 class="text-center display-6 index-count">{{ $penduduk_count }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <h1 class="display-6 mb-3" style="font-size: 30px;">Surat</h1>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">Surat Diterima</h1>
                        <h1 class="text-center display-6 index-count">{{ $surat_acc }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">Surat Ditolak</h1>
                        <h1 class="text-center display-6 index-count">{{ $surat_rjc }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card db-card  mb-4" style="border-radius: 20px;">
                <div class="card-body">
                    <div class="row">
                        <h1 class="text-center display-6 index-count">Surat Pending</h1>
                        <h1 class="text-center display-6 index-count">{{ $surat_pend }}</h1>
                    </div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between" id="view-details-tmt">
                    <a class="small  stretched-link"  href="#">View Details</a>
                    <div class="small "><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection