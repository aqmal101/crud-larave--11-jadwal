@extends('layouts.app')
@section('title', 'Data Pembayaran SPP')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Data Pembayaran Mahasiswa') }}
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahdata">
                            Tambah Data
                        </button>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-responsive table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Bayar</th>
                                        <th class="text-center">NIM</th>
                                        <th class="text-center">Semester</th>
                                        <th class="text-center">Tahun Ajaran</th>
                                        <th class="text-center">Jumlah Pembayaran</th>
                                        <th class="text-center">Tanggal Pembayaran</th>
                                        <th class="text-center">Metode Pembayaran</th>
                                        <th class="text-center">Status Pembayaran</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td>{{ $row->kd_bayar }}</td>
                                            <td>{{ $row->nim }}</td>
                                            <td>{{ $row->semester }}</td>
                                            <td>{{ $row->thn_ajar }}</td>
                                            <td>{{ $row->jml_bayar }}</td>
                                            <td>{{ $row->tgl_bayar }}</td>
                                            <td>{{ $row->mtd_bayar }}</td>
                                            <td>{{ $row->sts_bayar }}</td>
                                            <td class="text-center">

                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editdata{{ $row->kd_bayar }}">
                                                    <i class="fa fa-edit"></i> Edit
                                                </button>

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#hapusdata{{ $row->kd_bayar }}">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>

                                            </td>

                                            @include('pembayaran.hapus')
                                        </tr>

                                        @include('pembayaran.edit')
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
    @include('pembayaran.tambah')
@endsection

<form action="{{ route('pembayaran-import') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="modal-body">
        <p>Masukkan file data spreedsheet berekstensi .csv, .xls, atau .xlsx</p>
        <div class="custom-file">
            <div class="mb-3">
                <input type="file" class="form-control" id="file" name="file" accept=".xls, .xlsx" required>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Unggah file</button>
    </div>
</form>
