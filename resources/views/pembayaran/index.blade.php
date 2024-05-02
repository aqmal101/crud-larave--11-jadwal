@extends('layouts.app')
@section('title', 'Data Pembayaran SPP')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Data Pembayaran SPP Siswa') }}
                        <div>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahdata">
                                <i class="fa-regular fa-plus"></i> Tambah Data
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive table-hover table-striped table-bordered">
                                <thead>
                                    <tr class="text-center align-items-center"
                                        style="border: 2px solid rgb(194, 194, 194); background-color: #0077b6; color: white;">
                                        <th rowspan=" 2" class="align-middle">No</th>
                                        <th rowspan=" 2" class="align-middle">NIS</th>
                                        <th rowspan="2" class="align-middle">Nama</th>
                                        <th rowspan="2" class="align-middle">Kelas</th>
                                        <th colspan="6" class="align-middle">Bulan</th>
                                        <th rowspan="2" class="align-middle">Total</th>
                                        <th rowspan="2" class="align-middle">Aksi</th>
                                    </tr>
                                    <tr class="text-center align-items-center"
                                        style="border: 2px solid rgb(194, 194, 194); background-color: #00b4b8; color: white;">
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>Mei</th>
                                        <th>Jun</th>
                                    </tr>
                                </thead>
                                <tbody style="border: 2px solid rgb(194, 194, 194)">
                                    <?php $no = 1; ?>
                                    @php
                                        $total_jan = 0;
                                        $total_feb = 0;
                                        $total_mar = 0;
                                        $total_apr = 0;
                                        $total_mei = 0;
                                        $total_jun = 0;
                                        $total_all = 0;
                                    @endphp
                                    @foreach ($data as $row)
                                        <tr>
                                            <td class="text-center">{{ $no }}</td>
                                            <td>{{ $row->nis }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->kelas }}</td>
                                            <td>{{ number_format($row->bayar_jan, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->bayar_feb, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->bayar_mar, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->bayar_apr, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->bayar_mei, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->bayar_jun, 0, ',', '.') }}</td>
                                            <td>{{ number_format($row->total, 0, ',', '.') }}</td>

                                            <td class="text-center">

                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#hapusdata{{ $row->nis }}">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>

                                            </td>
                                            @include('pembayaran.hapus')
                                        </tr>
                                        @include('pembayaran.edit')
                                        <?php
                                        $total_jan += $row->bayar_jan;
                                        $total_feb += $row->bayar_feb;
                                        $total_mar += $row->bayar_mar;
                                        $total_apr += $row->bayar_apr;
                                        $total_mei += $row->bayar_mei;
                                        $total_jun += $row->bayar_jun;
                                        $total_all += $row->total;
                                        $no++;
                                        ?>
                                    @endforeach

                                </tbody>
                                <tfoot class="fw-bold" style="border: 2px solid rgb(194, 194, 194);">
                                    <tr style="background-color: transparent">
                                        <td colspan="4" class="text-center" style="background-color: transparent">
                                            Total
                                        </td>
                                        <td>{{ number_format($total_jan, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_feb, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_mar, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_apr, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_mei, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_jun, 0, ',', '.') }}</td>
                                        <td>{{ number_format($total_all, 0, ',', '.') }}</td>
                                        <td class="bg-light">
                                        </td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('pembayaran.tambah')
@endsection
