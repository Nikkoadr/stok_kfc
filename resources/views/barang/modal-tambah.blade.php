<div class="modal fade" id="modalTambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>
                <div class="modal-body">
                    <label>Item</label>
                    <input type="text" class="form-control" name="item" required>

                    <label class="mt-2">Deskripsi</label>
                    <textarea class="form-control" name="description"></textarea>

                    <label class="mt-2">Konversi</label>
                    <input type="text" class="form-control" name="conversion" required>

                    <label class="mt-2">Isi per Pack</label>
                    <input type="number" class="form-control" name="perpack" required>

                    <label class="mt-2">Stok</label>
                    <input type="number" class="form-control" name="stock" required>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
