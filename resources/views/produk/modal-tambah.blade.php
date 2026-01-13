<div class="modal fade" id="modalTambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk</h5>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Kode Produk</label>
                        <input type="text"
                               class="form-control"
                               name="kode_produk"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text"
                               class="form-control"
                               name="nama_produk"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Satuan Besar</label>
                        <input type="text"
                               class="form-control"
                               name="satuan_besar"
                               placeholder="Pack">
                    </div>

                    <div class="form-group">
                        <label>Isi per Satuan (Pcs)</label>
                        <input type="number"
                               class="form-control"
                               name="isi_per_satuan"
                               min="1"
                               required>
                    </div>

                    <div class="form-group">
                        <label>Satuan Kecil</label>
                        <input type="text"
                               class="form-control"
                               name="satuan_kecil"
                               placeholder="Pcs">
                    </div>

                    <small class="text-muted">
                        Contoh: 1 Pack = 10 Pcs
                    </small>
                </div>

                <div class="modal-footer">
                    <button type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
