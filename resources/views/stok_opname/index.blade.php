@extends('layouts.master')

@section('links')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Stok Opname</h1>
        <form method="GET" action="{{ route('stok-opname.index') }}" class="form-inline">
            <input type="date"
                   name="tanggal"
                   class="form-control mr-2"
                   value="{{ $tanggal }}">
            <button class="btn btn-primary">
                Tampilkan
            </button>
        </form>
    </div>

    {{-- ALERT --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- FORM OPNAME --}}
    <form action="{{ route('stok-opname.store') }}" method="POST">
        @csrf
        <input type="hidden" name="tanggal" value="{{ $tanggal }}">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableOpname" width="100%" cellspacing="0">
                        <thead class="thead-light text-center">
                            <tr>
                                <th rowspan="2">Produk</th>
                                <th rowspan="2">Stok Sistem<br>(PCS)</th>
                                <th colspan="2">Fisik</th>
                                <th rowspan="2">Total Fisik<br>(PCS)</th>
                                <th rowspan="2">Selisih<br>(PCS)</th>
                            </tr>
                            <tr>
                                <th>Pack</th>
                                <th>PCS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produk as $i => $item)
                                @php
                                    $stokSistem = $item->stokHarian->first()->sisa_malam_pcs ?? 0;
                                @endphp

                                <tr>
                                    <input type="hidden" name="produk_id[]" value="{{ $item->id }}">
                                    <input type="hidden" class="isi-per-satuan" value="{{ $item->isi_per_satuan }}">

                                    <td>
                                        <strong>{{ $item->nama_produk }}</strong><br>
                                        <small class="text-muted">
                                            1 {{ $item->satuan_besar }} = {{ $item->isi_per_satuan }} {{ $item->satuan_kecil }}
                                        </small>
                                    </td>

                                    <td class="text-center stok-sistem">
                                        {{ $stokSistem }}
                                    </td>

                                    <td>
                                        <input type="number"
                                               name="fisik_pack_sisa[]"
                                               class="form-control text-center fisik-pack"
                                               value="0"
                                               min="0">
                                    </td>

                                    <td>
                                        <input type="number"
                                               name="fisik_pcs_sisa[]"
                                               class="form-control text-center fisik-pcs"
                                               value="0"
                                               min="0">
                                    </td>

                                    <td class="text-center total-fisik">
                                        0
                                    </td>

                                    <td class="text-center selisih">
                                        0
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="text-right mt-3">
                    <button class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan Opname
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
$(document).ready(function () {

    $('#tableOpname').DataTable({
        paging: false,
        searching: false,
        info: false,
        ordering: false
    });

    function hitungBaris(row) {
        let isiPerSatuan = parseInt(row.find('.isi-per-satuan').val());
        let pack = parseInt(row.find('.fisik-pack').val()) || 0;
        let pcs  = parseInt(row.find('.fisik-pcs').val()) || 0;
        let stokSistem = parseInt(row.find('.stok-sistem').text()) || 0;

        let totalFisik = (pack * isiPerSatuan) + pcs;
        let selisih = totalFisik - stokSistem;

        row.find('.total-fisik').text(totalFisik);
        row.find('.selisih').text(selisih);

        if (selisih < 0) {
            row.find('.selisih').addClass('text-danger').removeClass('text-success');
        } else {
            row.find('.selisih').addClass('text-success').removeClass('text-danger');
        }
    }

    $('.fisik-pack, .fisik-pcs').on('input', function () {
        let row = $(this).closest('tr');
        hitungBaris(row);
    });

});
</script>
@endsection
