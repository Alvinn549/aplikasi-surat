 <div class="modal fade" id="modal-create-rt"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Rt</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('rt.store') }}" method="post" id="store">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_rt" class="form-label">Nama Rt</label>
                        <input required type="text" name="nama_rt" class="form-control @error('nama_rt') is-invalid @enderror" id="nama_rt" value="{{ old('nama_rt') }}">
                        @error('nama_rt')
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
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" id="btn-store-rt">Simpan</button>
        </div>
    </div>
</div>
</div>