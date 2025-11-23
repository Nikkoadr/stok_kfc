@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Data Barang</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
            <i class="fas fa-plus"></i> Tambah Barang
        </button>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari barang...">
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTableCustom">
                    <thead class="thead-light">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok Pack</th>
                            <th>Stok Sisa</th>
                            <th width="130">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BRG001</td>
                            <td>Kertas A4</td>
                            <td>20</td>
                            <td>5</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm btnDelete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>BRG002</td>
                            <td>Tinta Printer</td>
                            <td>12</td>
                            <td>4</td>
                            <td>
                                <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-danger btn-sm btnDelete"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <label>Kode Barang</label>
                    <input type="text" class="form-control" required>
                    <label class="mt-2">Nama Barang</label>
                    <input type="text" class="form-control" required>
                    <label class="mt-2">Stok Pack</label>
                    <input type="number" class="form-control" required>
                    <label class="mt-2">Stok Sisa</label>
                    <input type="number" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('searchInput').addEventListener('keyup', function () {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll('#dataTableCustom tbody tr');

        rows.forEach(row => {
            let kode = row.cells[0].innerText.toLowerCase();
            let nama = row.cells[1].innerText.toLowerCase();

            if (kode.includes(filter) || nama.includes(filter)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });

    document.querySelectorAll('.btnDelete').forEach(btn => {
        btn.addEventListener('click', function () {

            Swal.fire({
                title: 'Hapus data?',
                text: "Data ini akan dihapus permanen.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            });

        });
    });

</script>
@endsection
