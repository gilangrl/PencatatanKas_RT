@extends('master.index')

@section('BukuKasIndex')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Buku Kas</a></li>
                    <li class="breadcrumb-item active">Data Buku Kas</li>
                </ol>
            </div>
            <h4 class="page-title">Kelola Buku Kas</h4>
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                            <i class="fe-log-in font-22 avatar-title text-primary"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1">Rp. <span data-plugin="counterup">{{$totalAmountKas}}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Saldo Hari Ini</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->

    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                            <i class="fe-log-out font-22 avatar-title text-success"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1">Rp. <span data-plugin="counterup">{{$totalKeluaran}}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Total Pengeluaran</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('TambahKas')}}" class="btn btn-primary mb-4">Tambah data</a>
                <form action="{{ route('KasFilter') }}" method="get">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <label for="tanggalAwal" class="me-2">Tanggal Awal</label>
                                <input type="date" class="form-control" aria-label="Text input with checkbox" name="tanggalAwal">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="input-group mb-3">
                                <label for="tanggalAkhir" class="me-2">Tanggal Akhir</label>
                                <input type="date" class="form-control" aria-label="Text input with checkbox" name="tanggalAkhir">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary mb-3" type="submit">Cari</button>
                        </div>
                    </div>
                </form> 

                <div class="responsive-table-plugin">

                    <div class="mt-3">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th data-priority="3">Saldo Masuk</th>
                                    <th data-priority="1">Saldo Keluar</th>
                                    <th data-priority="6">Keterangan</th>
                                    <th data-priority="6">Tanggal</th>
                                    <th data-priority="6">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>Rp. {{number_format($row->masuk)}}</td>
                                    <td>Rp. {{number_format($row->keluar)}}</td>
                                    <td>{{$row->keterangan}}</td>
                                    <td>{{$row->tanggal}}</td>
                                    <td>
                                        <a href="/EditKas/{{$row->id}}" class="btn btn-info">
                                            <i class="fa-solid fa-pencil" ></i>
                                        </a>
                                        <a href="/DeleteKas/{{$row->id}}" class="btn btn-danger" data-confirm-delete="true">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive -->

                    </div> <!-- end .table-rep-plugin-->
                </div> <!-- end .responsive-table-plugin-->
            </div>
        </div> <!-- end card -->
    </div> <!-- end col -->
</div>
<!-- end row -->
@include('sweetalert::alert')
@endsection