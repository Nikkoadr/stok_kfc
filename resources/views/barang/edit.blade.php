@extends('layouts.master')
@section('links')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Edit Barang</h1>
        <a href="#" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('barang.update', $barang->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Item</label>
                    <input type="text" class="form-control" name="item" value="{{ $barang->item }}" required>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="description">{{ $barang->description }}</textarea>
                </div>
                <div class="form-group">
                    <label>Konversi</label>
                    <input type="text" class="form-control" name="conversion" value="{{ $barang->conversion }}" required>
                </div>
                <div class="form-group">
                    <label>Isi per Pack</label>
                    <input type="number" class="form-control" name="perpack" value="{{ $barang->perpack }}" required>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-control" name="stock" value="{{ $barang->stock }}" required>
                </div>
                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
