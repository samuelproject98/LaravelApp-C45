@extends('layout.main')

@section('content')
<div class="atribut">
    <h3 class="mb-4">Nilai Atribut</h3>
    
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible d-flex align-items-center fade show" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            {{ session('success') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif 

    <div class="table-responsive" id="no-more-tables">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th colspan="5">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-7 mb-2">
                                    <input type="text" class="form-control" placeholder="Pencarian...">
                                </div>
                                <div class="col-sm-5">
                                    <button type="button" class="btn d-inline" style="background-color: #06c95b; color: white">
                                        <i class="fas fa-sync-alt"></i>
                                        Refresh
                                    </button>
                                    <button type="button" class="btn d-inline" data-bs-toggle="modal" data-bs-target="#tambahnilaiatributModal" style="background-color: #000; color: white">
                                        <i class="fas fa-plus"></i>
                                        Tambah
                                    </button>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Atribut</th>
                    <th>Nama Nilai Atribut</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if ($datanilaiatribut->isEmpty())
                    <tr>
                        <td class="text-center" colspan="5">Data Belum Ada</td>
                    </tr>
                @else
                    <?php $nomor = 1; ?>
                    @foreach ($datanilaiatribut as $nilaiatribut)
                    <tr>
                        <td class="text-center" style="vertical-align: middle" data-title="No">{{ $nomor }}</td>
                        <td class="text-center" style="vertical-align: middle" data-title="Kode">{{ $nilaiatribut->kode_atribut }}</td>
                        <td class="text-center" style="vertical-align: middle" data-title="Nama Atribut">{{ $nilaiatribut->nama_atribut }}</td>
                        <td class="text-center" style="vertical-align: middle" data-title="Nama Nilai Atribut">{{ $nilaiatribut->nama_nilaiatribut }}</td>
                        <td data-title="Aksi">
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-warning d-inline" data-bs-toggle="modal" data-bs-target="#editnilaiatributModal" style="color: white">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ URL::to('/nilaiatribut') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id_atribut" value="{{ $nilaiatribut->id_nilaiatribut }}">
                                    <input type="hidden" name="fungsi" value="hapus">
                                    <button type="submit" class="btn btn-danger text-center"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    @endforeach
                @endif 
            </tbody>
        </table>
    </div>
</div>

@if (old('tambahnilaiAtribut'))
    <script>
        $(document).ready(() => {
            $('#tambahnilaiatributModal').modal('show');
        })
    </script>
@endif

@if (old('editnilaiAtribut'))
    <script>
        $(document).ready(() => {
            $('#editnilaiatributModal').modal('show');
        })
    </script>
@endif

@endsection