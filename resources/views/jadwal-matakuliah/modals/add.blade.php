<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="modalTambahData" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahData">Tambah Data Jadwal Matakuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('jadwal-matakuliah') }}" id="formTambahData">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-4">
                                <label for="kd_jadwal" class="form-label">Kode Jadwal</label>
                                <input type="number" class="form-control" id="kd_jadwal" name="kd_jadwal"
                                    required="true">
                            </div>
                            <div class="col-8">
                                <label for="nama_matkul" class="form-label">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul"
                                    required="true">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mb-3 mt-3"></div> -->
                    <div class="mb-3 mt-3">
                        <label for="kelas" class="form-label">Ruang Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required="true">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="nama_dosen" class="form-label">Dosen Pengampu</label>
                        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required="true">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-select" id="hari" name="hari">
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
                                    required="true">
                            </div>
                            <div class="col-6">
                                <label for="waktu_selesai" class="form-label">Waktu Mulai</label>
                                <input type="time" class="form-control" id="waktu_selesai" name="waktu_selesai"
                                    required="true">
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
        </form>
    </div>
</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('btnSimpan').addEventListener('click', function() {
        var form = document.getElementById('formTambahData');
        var inputs = form.querySelectorAll('input, select');
        var isFormValid = true;
        inputs.forEach(function(input) {
            if (!input.value) {
                isFormValid = false;
            }
        });
        if (isFormValid) {
            form.submit();
        } else {
            alert('Harap isi semua kolom sebelum mengirimkan formulir.');
        }
    });
});
</script>
<!-- Modal Tambah -->