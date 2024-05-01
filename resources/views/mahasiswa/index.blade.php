@extends('layouts.app')
@section('title', 'Data Mahasiswa')


@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Jadwal Matakuliah') }}

                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahData">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive table-bordered table-striped table-hover">
                                <thead>
                                    <tr class="align-middle text-center">
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Angkatan</th>
                                        <th>Prodi</th>
                                        <th>Fakultas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
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
                                        @include('mahasiswa.edit')
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('mahasiswa.tambah')
@endsection
