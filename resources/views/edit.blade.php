<div class="modal fade" id="modalEditData{{ $row->nim }}" tabindex="-1" aria-labelledby="modalEditData"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditData">Edit Data Jadwal Matakuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('edit-data-mahasiswa', $row->kd_jadwal) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-4">
                                <label for="kd_jadwal" class="form-label">Kode Jadwal</label>
                                <input type="number" class="form-control" id="kd_jadwal" name="kd_jadwal"
                                    value="{{ $row->kd_jadwal }}">
                            </div>
                            <div class="col-8">
                                <label for="nama_matkul" class="form-label">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul"
                                    value="{{ $row->nama_matkul }}">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="kelas" class="form-label">Ruang Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $row->kelas }}">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama_dosen" class="form-label">Dosen Pengampu</label>
                        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen"
                            value="{{ $row->nama_dosen }}">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-select" id="hari" name="hari">
                            <option value="{{ $row->hari }}">{{ $row->hari }}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <div class="row">
                            <div class="col-6"><label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_mulai" name="waktu_mulai"
                                    value="{{ $row->waktu_mulai }}">
                            </div>
                            <div class="col-6">
                                <label for="waktu_selesai" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai"
                                    value="{{ $row->waktu_selesai }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
                    </div>
            </form>
        </div>
        </form>
    </div>
</div>
</div>