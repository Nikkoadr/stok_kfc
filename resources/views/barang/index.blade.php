@extends('layouts.master')

@section('link')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Data Barang</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
            <i class="fas fa-plus"></i> Tambah Barang
        </button>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th>Item</th>
                            <th>Deskripsi</th>
                            <th>Konversi</th>
                            <th>Isi / Pack</th>
                            <th>Stok</th>
                            <th width="130">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar_barang as $barang)
                        <tr>
                            <td>{{ $barang->item }}</td>
                            <td>{{ $barang->description }}</td>
                            <td>{{ $barang->conversion }}</td>
                            <td>{{ $barang->perpack }}</td>
                            <td>{{ $barang->stock }}</td>
                            <td>
                                {{-- EDIT --}}
                                <a href="{{ route('barang.edit', $barang->id) }}"
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                {{-- DELETE --}}
                                <form action="{{ route('barang.destroy', $barang->id) }}"
                                      method="POST"
                                      class="d-inline formDelete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                            class="btn btn-danger btn-sm btnDelete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

{{-- MODAL TAMBAH --}}
@include('barang.modal-tambah')

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

<script>
$(function () {

    // DATATABLE
    $('#dataTable').DataTable({
        responsive: true
    });

    // DELETE CONFIRM
    $('.btnDelete').click(function () {
        let form = $(this).closest('form');
        Swal.fire({
            title: 'Hapus data?',
            text: 'Data ini akan dihapus permanen.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

});
</script>
@endsection
