@extends('layouts.master')

@section('links')
<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 text-gray-800">Data Produk</h1>
    <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
        <i class="fas fa-plus"></i> Tambah Produk
    </button>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="data_produk" width="100%" cellspacing="0">
                <thead class="thead-light">
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Konversi</th>
                        <th>Isi / Pack</th>
                        <th width="130">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                    <tr>
                        <td>{{ $item->kode_produk }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>1 {{ $item->satuan_besar }} = {{ $item->isi_per_satuan }} {{ $item->satuan_kecil }}</td>
                        <td>{{ $item->isi_per_satuan }}</td>
                        <td>
                            {{-- EDIT --}}
                            <a href="{{ route('produk.edit', $item->id) }}"
                               class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>

                            {{-- DELETE --}}
                            <form action="{{ route('produk.destroy', $item->id) }}"
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

{{-- MODAL TAMBAH --}}
@include('produk.modal-tambah')

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
$(document).ready(function() {
    $('#data_produk').DataTable();
});
</script>

<script>
$(document).on('click', '.btnDelete', function () {
    let form = $(this).closest('form');

    Swal.fire({
        title: 'Hapus produk?',
        text: 'Produk yang sudah dipakai tidak bisa dihapus.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    });
});
</script>
@endsection
