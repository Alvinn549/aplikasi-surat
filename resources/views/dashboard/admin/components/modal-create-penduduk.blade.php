<!-- Modal Form -->
<div class="modal fade" id="modal-create-penduduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
      </div>
      <div class="modal-body">
        <form action="{{ route('penduduk.store') }}" method="post"id="store">
          @csrf
          <div class="row">
            <div class="col">
              <div class="mb-3">
                <label for="nik" class="form-label">Nik</label>
                <input type="number" name="nik" class="form-control @error('nik') is-invalid @enderror" id="nik" value="{{ old('nik') }}">
                @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              
              <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" value="{{ old('tempat_lahir') }}">
                @error('tempat_lahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control form-select @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin">
                  <option value="">Open This Select Menu</option>
                  <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                  <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="dusun_id" class="form-label">Dusun</label>
                <select name="dusun_id" class="form-control form-select @error('dusun_id') is-invalid @enderror" id="dusun_id">
                  <option value="">Open This Select Menu</option>
                  @foreach($dusuns as $dusun)
                  <option value="{{ $dusun->id }}" {{ old('dusun_id') == $dusun->id ? 'selected' : '' }}>{{ $dusun->nama_dusun }}</option>
                  @endforeach
                </select>
                @error('dusun_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="rw_id" class="form-label">Rw</label>
                <select name="rw_id" class="form-control form-select @error('rw_id') is-invalid @enderror" id="rw_id">
                  <option value="">Open This Select Menu</option>
                  @foreach($rws as $rw)
                  <option value="{{ $rw->id }}" {{ old('rw_id') == $rw->id ? 'selected' : '' }}>{{ $rw->nama_rw }}</option>
                  @endforeach
                </select>
                @error('rw_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <label for="rt_id" class="form-label">Rt</label>
                <select name="rt_id" class="form-control form-select @error('rt_id') is-invalid @enderror" id="rt_id">
                  <option value="">Open This Select Menu</option>
                  @foreach($rts as $rt)
                  <option value="{{ $rt->id }}" {{ old('rt_id') == $rt->id ? 'selected' : '' }}>{{ $rt->nama_rt }}</option>
                  @endforeach
                </select>
                @error('rt_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                <textarea name="alamat_lengkap" class="form-control @error('alamat_lengkap') is-invalid @enderror" id="alamat_lengkap" >{{ old('alamat_lengkap') }}</textarea>
                @error('alamat_lengkap')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="kebangsaan" class="form-label">Kebangsaan</label>
                <input type="text" name="kebangsaan" class="form-control @error('kebangsaan') is-invalid @enderror" id="kebangsaan" value="{{ old('kebangsaan') }}">
                @error('kebangsaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" name="agama" class="form-control @error('agama') is-invalid @enderror" id="agama" value="{{ old('agama') }}">
                @error('agama')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" value="{{ old('pekerjaan') }}">
                @error('pekerjaan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="status_perkawinan" class="form-label">Statu Perkawinan</label>
                <input type="text" name="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror" id="status_perkawinan" value="{{ old('status_perkawinan') }}">
                @error('status_perkawinan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="pendidikan_dalam_kk" class="form-label">Pendidikan Dalam KK</label>
                <input type="text" name="pendidikan_dalam_kk" class="form-control @error('pendidikan_dalam_kk') is-invalid @enderror" id="pendidikan_dalam_kk" value="{{ old('pendidikan_dalam_kk') }}">
                @error('pendidikan_dalam_kk')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" id="btn-store-penduduk" data-toggle="tooltip" title='Store'><i class="fa-solid fa-floppy-disk me-2"></i>Simpan</button>
      </div>
    </div>
  </div>
</div>