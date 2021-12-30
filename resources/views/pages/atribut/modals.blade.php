<!-- Modal -->
<div class="modal fade" id="tambahatributModal" tabindex="-1" aria-labelledby="tambahatributModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Atribut</h5>
      </div>
      <form action="{{ URL::to('/atribut') }}" method="post">
        @csrf
        <input type="hidden" name="fungsi" value="tambah">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">ID Atribut</b> *</label>
            <input type="text" class="form-control @error('idAtribut') is-invalid @enderror" name="idAtribut" value="{{ old('idAtribut') }}" id="idAtribut">
            @error('idAtribut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">Nama Atribut</b> *</label>
            <input type="text" class="form-control @error('namaAtribut') is-invalid @enderror" name="namaAtribut" value="{{ old('namaAtribut') }}" id="namaAtribut">
            @error('namaAtribut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</button>
          <button type="submit" name="tambahAtribut" value="tambahAtribut" class="btn bg-custom"><i class="fas fa-download"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editatributModal" tabindex="-1" aria-labelledby="editatributModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title" id="exampleModalLabel">Edit Atribut</h5>
      </div>
      <form action="{{ URL::to('/atribut') }}" method="post">
        @csrf
        <input type="hidden" name="fungsi" value="edit">
        <input type="hidden" name="id" value="{{ isset($atribut->id_atribut) ? $atribut->id_atribut : '' }}">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">ID Atribut</b> *</label>
            <input type="text" class="form-control @error('idAtribut') is-invalid @enderror" name="idAtribut" value="{{ old('idAtribut') ? old('idAtribut') : (isset($atribut->kode_atribut) ? $atribut->kode_atribut : ''); }}" id="idAtribut">
            @error('idAtribut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">Nama Atribut</b> *</label>
            <input type="text" class="form-control @error('namaAtribut') is-invalid @enderror" name="namaAtribut" value="{{ old('namaAtribut') ? old('namaAtribut') : (isset($atribut->nama_atribut) ? $atribut->nama_atribut : ''); }}" id="namaAtribut">
            @error('namaAtribut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</button>
          <button type="submit" name="editAtribut" value="editAtribut" class="btn bg-custom"><i class="fas fa-download"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>