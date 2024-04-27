@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    {{ __('Jadwal Matakuliah') }}

                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#modalTambahData">
                        <i class="fa fa-plus"></i> Tambah Data
                    </button>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover" id="data-barang">
                            <thead>
                                <tr class="align-middle text-center">
                                    <th>No</th>
                                    <th>Kode Jadwal</th>
                                    <th>Nama Matakuliah</th>
                                    <th>Ruang Kelas</th>
                                    <th>Dosen Pengampu</th>
                                    <th>Hari</th>
                                    <th>Waktu Mulai</th>
                                    <th>Waktu Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach ($data as $row)
                                <tr>
                                    <td class="text-center">{{ $no }}</td>
                                    <td class="text-center">{{ $row->kd_jadwal }}</td>
                                    <td class="text-center">{{ $row->nama_matkul }}</td>
                                    <td class="text-center">{{ $row->kelas }}</td>
                                    <td class="text-center">{{ $row->nama_dosen}}</td>
                                    <td class="text-center">{{ $row->hari }}</td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($row->waktu_mulai)->format('H:i') }}</td>
                                    <td class="text-center">
                                        {{ \Carbon\Carbon::parse($row->waktu_selesai)->format('H:i') }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalEditData{{ $row->kd_jadwal }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#modalHapusData{{ $row->kd_jadwal }}">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                                @include('jadwal-matakuliah.modals.delete')
                                @include('jadwal-matakuliah.modals.edit')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
new DataTable('#data-barang');
</script>

@endsection