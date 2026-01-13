@extends('layouts.master')

@section('links')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 text-gray-800">Edit Produk</h1>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Kode Produk</label>
                    <input type="text"
                           class="form-control"
                           name="kode_produk"
                           value="{{ $produk->kode_produk }}"
                           required>
                </div>

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text"
                           class="form-control"
                           name="nama_produk"
                           value="{{ $produk->nama_produk }}"
                           required>
                </div>

                <div class="form-group">
                    <label>Satuan Besar</label>
                    <input type="text"
                           class="form-control"
                           name="satuan_besar"
                           value="{{ $produk->satuan_besar }}">
                </div>

                <div class="form-group">
                    <label>Isi per {{ $produk->satuan_besar }}</label>
                    <input type="number"
                           class="form-control"
                           name="isi_per_satuan"
                           value="{{ $produk->isi_per_satuan }}"
                           min="1"
                           required>
                </div>

                <div class="form-group">
                    <label>Satuan Kecil</label>
                    <input type="text"
                           class="form-control"
                           name="satuan_kecil"
                           value="{{ $produk->satuan_kecil }}">
                </div>

                <button class="btn btn-primary">
                    <i class="fas fa-save"></i> Update Produk
                </button>
            </form>
        </div>
    </div>

</div>
@endsection

@section('scripts')
@endsection
