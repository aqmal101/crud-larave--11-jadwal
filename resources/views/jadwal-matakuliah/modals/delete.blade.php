<div class="modal fade" id="modalHapusData{{ $row->kd_jadwal }}" tabindex="-1" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex">
                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data Barang</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="{{ route('delete-jadwal-matakuliah', $row->kd_jadwal) }}">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus data jadwal ini?</p>
                    <p>
                        {{ $row->kd_jadwal }} - {{ $row->nama_matkul }}
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>