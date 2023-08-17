@extends('master.index')

@section('kegiatanIndex')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">List Data</li>
                </ol>
            </div>
            <h4 class="page-title">Responsive Table</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('kegiatanTambah')}}" class="btn btn-primary mb-4">Tambah data</a>
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th data-priority="1">Nama Kegiatan</th>
                                    <th data-priority="3">Tanggal Kegiatan</th>
                                    <th data-priority="1">Deskripsi</th>
                                    <th data-priority="6">Lokasi</th>
                                    <th data-priority="3">Pengurus</th>
                                    <th data-priority="6">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$row->nama_kegiatan}}</td>
                                    <td>{{$row->tanggal_kegiatan}}</td>
                                    <td>{{$row->deskripsi}}</td>
                                    <td>{{$row->lokasi}}</td>
                                    <td>{{$row->pengurus->nama}}</td>
                                    <td>
                                        <a href="/kegiatanEdit/{{$row->id}}" class="btn btn-info">
                                            <i class="fa-solid fa-pencil" ></i>
                                        </a>
                                        <a href="/kegiatanDelete/{{$row->id}}" class="btn btn-danger" data-confirm-delete="true">
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