<div class="modal fade" id="tambahdata">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST" action="{{ url('pembayaran-simpan') }}">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nis" class="form-label">NIS</label>
                        <input type="number" class="form-control" id="nis" placeholder="Masukkan NIS"
                            name="nis">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Siswa"
                            name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas Siswa</label>
                        <input type="text" class="form-control" id="kelas" placeholder="Masukkan Kelas Siswa"
                            name="kelas">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan Januari</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan Januari"
                                name="bayar_jan">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan Februari</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan Februari"
                                name="bayar_feb">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan Maret</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan Maret"
                                name="bayar_mar">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan April</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan April"
                                name="bayar_apr">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan Mei</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan Mei"
                                name="bayar_mei">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Bulan Juni</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" class="form-control" placeholder="Masukkan Pembayaran Bulan Juni"
                                name="bayar_jun">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>
