<div class="modal fade" id="importdata" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importdata">Import Data Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pembayaran-import') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <p>Masukkan file data spreedsheet berekstensi .csv, .xls, atau .xlsx</p>
                    <div class="custom-file">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="file" name="file"
                                accept=".xls, .xlsx" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Unggah file</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div>
<!-- Modal Tambah -->
