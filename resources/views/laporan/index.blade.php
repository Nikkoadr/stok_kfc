@extends('layouts.master')

@section('links')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 text-gray-800">Rekap Stok Opname</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="data_laporan" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Total Stok Sistem</th>
                        <th>Total Stok Aktual</th>
                        <th>Total Selisih</th>
                        <th width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>dasdas</td>
                        <td>dasd</td>
                        <td>sadsd</td>
                        <td>dasd</td>
                        <td>
                            <a href="#" 
                               class="btn btn-success btn-sm" target="_blank">
                                <i class="fas fa-file-pdf"></i> PDF
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('#data_laporan').DataTable({
        order: [[1, 'desc']]
    });
});
</script>
@endsection
