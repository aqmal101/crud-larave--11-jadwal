<div class="modal fade" id="hapusdata{{ $row->kd_bayar }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data Pembayaran</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="{{ route('pembayaran-hapus', $row->kd_bayar) }}">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data pembayaran dengan kode {{ $row->kd_bayar }}</p>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
