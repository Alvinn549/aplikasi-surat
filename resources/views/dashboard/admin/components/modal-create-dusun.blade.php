 <div class="modal fade" id="modal-create-dusun"  data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Dusun</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('dusun.store') }}" method="post" id="store">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_dusun" class="form-label">Nama Dusun</label>
                        <input required type="text" name="nama_dusun" class="form-control @error('nama_dusun') is-invalid @enderror" id="nama_dusun" value="{{ old('nama_dusun') }}">
                        @error('nama_dusun')
                        <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary me-2 " data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" id="btn-store-dusun">Simpan</button>
        </div>
    </div>
</div>
</div>