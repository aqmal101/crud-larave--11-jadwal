<!-- Modal Tambah Data -->
<div class="modal fade" id="editdata{{ $row->kd_bayar }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="POST" action="{{ url('pembayaran-edit', $row->kd_bayar) }}">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="kd_bayar" class="form-label">Kode Pembayaran</label>
                                <input type="number" class="form-control" id="kd_bayar" name="kd_bayar"
                                    required="true" value="{{ $row->kd_bayar }}">
                            </div>
                            <div class="col-6">
                                <label for="nim" class="form-label">NIM Mahasiswa</label>
                                <input type="text" class="form-control" id="nim" name="nim" required="true"
                                    value="{{ $row->nim }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="semester" class="form-label">Semester</label>
                                <input type="number" class="form-control" id="semester" name="semester"
                                    required="true" value="{{ $row->semester }}">
                            </div>
                            <div class="col-6">
                                <label for="thn_ajar" class="form-label">Tahun Pengajaran</label>
                                <input type="number" class="form-control" id="thn_ajar" name="thn_ajar"
                                    required="true" value="{{ $row->thn_ajar }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="jml_bayar" class="form-label">Jumlah Pembayaran</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="jml_bayar" name="jml_bayar"
                                        value="{{ $row->jml_bayar }}">
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="tgl_bayar" class="form-label">Tanggal Pembayaran</label>
                                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar"
                                    required="true" value="{{ $row->tgl_bayar }}">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="mtd_bayar" class="form-label">Metode Pembayaran</label>
                                <input type="text" class="form-control" id="mtd_bayar" name="mtd_bayar"
                                    required="true" value="{{ $row->mtd_bayar }}">
                            </div>
                            <div class="col-6">
                                <label for="sts_bayar" class="form-label">Status Pembayaran</label>
                                <input type="text" class="form-control" id="sts_bayar" name="sts_bayar"
                                    required="true" value="{{ $row->sts_bayar }}">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    </div>
            </form>

        </div>
    </div>
</div>
