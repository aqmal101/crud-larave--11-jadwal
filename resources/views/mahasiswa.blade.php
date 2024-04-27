@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Mahasiswa') }}</div>

                <div class="card-body">
                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modalTambahData"><i class="fa fa-plus"></i></button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#modalTambahData">Tambah Data</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-stripped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                    <th>Prodi</th>
                                    <th>Fakultas</th>
                                    <th>aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $row->nim }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->angkatan }}</td>
                                    <td>{{ $row->prodi }}</td>
                                    <td>{{ $row->fakultas }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalEditData{{ $row->nim }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusData{{ $row->nim }}">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @include('edit')
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- modal tambah data -->
<div class="modal fade" id="modalTambahData" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel1">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('data-mahasiswa-simpan')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM </label>
                        <input type="number" class="form-control" id="nim" name="nim"
                            placeholder="Masukkan NIM Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama </label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            placeholder="Masukkan Nama Mahasiswa">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Angkatan </label>
                        <select type="number" class="form-control" id="angkatan" name="angkatan"
                            placeholder="Masukkan Angkatan">
                            <option>Masukkan tahun angkatan</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2021">2020</option>
                            <option value="2021">2019</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Program Studi</label>
                        <select type="text" class="form-control" id="prodi" name="prodi"
                            placeholder="Masukan Prodi anda">
                            <option>Masukkan Program Studi</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Informatika">Informatika</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Fakultas</label>
                        <select type="text" class="form-control" id="fakultas" name="fakultas"
                            placeholder="Masukan Fakultas anda">
                            <option>Masukkan Fakultas</option>
                            <option value="Fakultas Sains dan Teknologi">Fakultas Sains dan Teknologi</option>
                            <option value="Fakultas Sosial">Fakultas Sosial</option>
                            <option value="Fakultas Kesehatan">Fakultas Kesehatan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection