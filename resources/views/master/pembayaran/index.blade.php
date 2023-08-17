@extends('master.index')

@section('pembayaranIndex')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pembayaran</a></li>
                        <li class="breadcrumb-item active">List Data</li>
                    </ol>
                </div>
                <h4 class="page-title">Pembayaran Kas RT</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="col-md-6 col-xl-3">
        <div class="widget-rounded-circle card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                            <i class="fe-dollar-sign font-22 avatar-title text-primary"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <h3 class="text-dark mt-1">Rp. <span data-plugin="counterup">{{ $totalPembayaran }}</span></h3>
                            <p class="text-muted mb-1 text-truncate">Total Pemasukan</p>
                        </div>
                    </div>
                </div> <!-- end row-->
            </div>
        </div> <!-- end widget-rounded-circle-->
    </div> <!-- end col-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('pembayaranTambah') }}" class="btn btn-primary mb-4">Tambah data</a>
                    <form action="{{ route('PembayaranFilter') }}" method="get">
                        @csrf
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="input-group mb-3">
                                    <label for="startDate" class="me-2">Tanggal Awal</label>
                                    <input type="date" class="form-control" aria-label="Text input with checkbox"
                                        name="startDate">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group mb-3">
                                    <label for="endDate" class="me-2">Tanggal Akhir</label>
                                    <input type="date" class="form-control" aria-label="Text input with checkbox"
                                        name="endDate">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary mb-3" type="submit">Cari</button>
                            </div>
                        </div>
                    </form>

                    <div class="responsive-table-plugin">

                        <div class="mt-4">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th data-priority="1">Nama</th>
                                            <th data-priority="3">Jumlah</th>
                                            <th data-priority="1">Tanggal Pembayaran</th>
                                            <th data-priority="6">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $row)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    @if (isset($row['warga']['nama']))
                                                        {{ $row['warga']['nama'] }}
                                                    @endif
                                                </td>

                                                <td>Rp. {{ number_format($row->jumlah) }}</td>
                                                <td>{{ $row->tanggal_pembayaran }}</td>
                                                <td>
                                                    <a href="/PembayaranEdit/{{ $row->id }}" class="btn btn-info">
                                                        <i class="fa-solid fa-pencil"></i>
                                                    </a>
                                                    <a href="/PembayaranDelete/{{ $row->id }}" class="btn btn-danger"
                                                        data-confirm-delete="true">
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
