<div class="modal fade" id="editdata{{ $row->kode_prodi }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form action="{{route('prodi-edit', $row->kode_prodi)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class=" mb-3 mt-3">
                        <label for="kode_prodi" class="form-label">Kode
                            Prodi</label>
                        <input type="kode_prodi" class="form-control" id="kode_prodi" name="kode_prodi"
                            value="{{$row->kode_prodi}}" disabled>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama_prodi" class="form-label">Nama
                            Prodi</label>
                        <input type="nama_prodi" class="form-control" id="nama_prodi" name="nama_prodi"
                            value="{{$row->nama_prodi}}">
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </form>

        </div>
    </div>
</div>