@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Data Prodi</h5>
                        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal" data-bs-target="#tambahdata">
                            Tambah Data
                        </button>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Prodi</th>
                                        <th class="text-center">Nama Prodi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td>{{ $row->kode_prodi }}</td>
                                            <td>{{ $row->nama_prodi }}</td>
                                            <td class="text-center">

                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editdata{{ $row->kode_prodi }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#hapusdata{{ $row->kode_prodi }}">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>

                                            </td>
                                        </tr>

                                        @include('prodi.edit')
                                        @include('prodi.hapus')

                                        <?php $no++; ?>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('prodi.tambah')
@endsection
