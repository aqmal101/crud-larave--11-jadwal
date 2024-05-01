<div class="modal fade" id="modalEditData{{ $row->nim }}" tabindex="-1" aria-labelledby="modalEditData"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditData">Edit Data Jadwal Matakuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="{{ route('data-mahasiswa-edit', $row->nim) }}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM </label>
                        <input type="number" class="form-control" id="nim" name="nim"
                            value="{{ $row->nim }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $row->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Angkatan </label>
                        <select type="number" class="form-control" id="angkatan" name="angkatan">
                            <option value="{{ $row->angkatan }}">{{ $row->angkatan }}</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2021">2020</option>
                            <option value="2021">2019</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Program Studi</label>
                        <select type="text" class="form-control" id="prodi" name="prodi">
                            <option value="{{ $row->prodi }}">{{ $row->prodi }}</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Fakultas</label>
                        <select type="text" class="form-control" id="fakultas" name="fakultas">
                            <option value="{{ $row->fakultas }}">{{ $row->fakultas }}</option>
                            <option value="Fakultas Sains dan Teknologi">Fakultas Sains dan Teknologi</option>
                            <option value="Fakultas Sosial">Fakultas Sosial</option>
                            <option value="Fakultas Kesehatan">Fakultas Kesehatan</option>
                        </select>
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
