@extends('layouts.master')

@section('links')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Hitung Stok</h1>
    </div>

    <form action="{{ route('hitung.store') }}" method="POST">
        @csrf

        <div class="card shadow">
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Query Stock Card</th>
                            <th>Fisik Barang</th>
                            <th>Selisih</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barangs as $index => $barang)
                        <tr>
                            <td>
                                {{ $barang->item }}
                                <input type="hidden" name="barang_id[]" value="{{ $barang->id }}">
                            </td>
                            <td>{{ $barang->description }}</td>
                            <td>
                                <input type="number"
                                       class="form-control query"
                                       name="query_stok_card[]"
                                       value="{{ $barang->stock }}"
                                       readonly>
                            </td>
                            <td>
                                <input type="number"
                                       class="form-control fisik"
                                       name="fisik_barang[]"
                                       required>
                            </td>
                            <td>
                                <input type="number"
                                       class="form-control selisih"
                                       readonly>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <button class="btn btn-primary mt-3">
                    <i class="fas fa-save"></i> Simpan Opname
                </button>
            </div>
        </div>
    </form>

</div>
@endsection

@section('scripts')
<script>
document.querySelectorAll('.fisik').forEach((input, index) => {
    input.addEventListener('input', function () {
        let query = document.querySelectorAll('.query')[index].value;
        let selisih = this.value - query;
        document.querySelectorAll('.selisih')[index].value = selisih;
    });
});
</script>
@endsection
