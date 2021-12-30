<!-- Modal -->
<div class="modal fade" id="tambahnilaiatributModal" tabindex="-1" aria-labelledby="tambahnilaiatributModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Nilai Atribut</h5>
      </div>
      <form action="{{ URL::to('/nilaiatribut') }}" method="post">
        @csrf
        <input type="hidden" name="fungsi" value="tambah">
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">Atribut</b> *</label>
            <select class="form-select @error('dataatribut') is-invalid @enderror" name="dataatribut" id="dataatribut" aria-label="Default select example">
              <option value="" selected>Pilih Atribut...</option>
              @if ($dataatribut->isEmpty())
                  <option disabled class="text-center">Data Belum Ada</option>
              @else
                  @foreach ($dataatribut as $atribut)
                      <option value="{{ $atribut->id_atribut }}">{{ '['.$atribut->kode_atribut.']'.' '.$atribut->nama_atribut }}</option>
                  @endforeach
              @endif
            </select>
            @error('dataatribut')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: red"><b style="color: #020426">Nama Nilai</b> *</label>
            <input type="text" class="form-control @error('namaNilai') is-invalid @enderror" name="namaNilai" value="{{ old('namaNilai') }}" id="namaNilai">
            @error('namaNilai')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</button>
          <button type="submit" name="tambahnilaiAtribut" value="tambahnilaiAtribut" class="btn bg-custom"><i class="fas fa-download"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editatributModal" tabindex="-1" aria-labelledby="editatributModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title" id="exampleModalLabel">Edit Nilai Atribut</h5>
      </div>
      <form action="{{ URL::to('/nilaiatribut') }}" method="post">
        @csrf
        <input type="hidden" name="fungsi" value="edit">
        <input type="hidden" name="id" value="{{ isset($atribut->id_nilaiatribut) ? $atribut->id_nilaiatribut : '' }}">
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