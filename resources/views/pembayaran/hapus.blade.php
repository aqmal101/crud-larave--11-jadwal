<div class="modal fade" id="hapusdata{{ $row->nis }}">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Hapus Data Pembayaran</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="{{ route('pembayaran-hapus', $row->nis) }}">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Apakah Anda yakin menghapus data pembayaran dengan keterangan : </p>
                    <p>NIS : {{ $row->nis }}</p>
                    <p>Nama : {{ $row->nama }}</p>
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
