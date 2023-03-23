 <div class="modal fade" id="modal-create-rw"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rw</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('rw.store') }}" method="post" id="store">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_rw" class="form-label">Nama Rw</label>
                        <input required type="text" name="nama_rw" class="form-control @error('nama_rw') is-invalid @enderror" id="nama_rw" value="{{ old('nama_rw') }}">
                        @error('nama_rw')
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
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" id="btn-store-rw">Simpan</button>
        </div>
    </div>
</div>
</div>