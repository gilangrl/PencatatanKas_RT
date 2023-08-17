@extends('master.index')

@section('wargaTampil')
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
            <h4 class="page-title">DATA WARGA RT.04</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{route('wargaTambah')}}" class="btn btn-primary mb-4">Tambah data</a>
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="demo-foo-pagination" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th data-priority="1">Nama</th>
                                    <th data-priority="3">Alamat</th>
                                    <th data-priority="1">Tanggal Lahir</th>
                                    <th data-priority="6">Jenis Kelamin</th>
                                    <th data-priority="3">No.Telepon</th>
                                    <th data-priority="6">Email</th>
                                    <th data-priority="6">Status Kawin</th>
                                    <th data-priority="6">Pekerjaan</th>
                                    <th data-priority="6">Foto</th>
                                    <th data-priority="6">Aksi</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>{{$row->tanggal_lahir}}</td>
                                    <td>{{$row->jenis_kelamin}}</td>
                                    <td>{{$row->nomer_telepon}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->status_kawin}}</td>
                                    <td>{{$row->pekerjaan}}</td>
                                    <td>
                                        <img src="{{asset('foto_warga/'. $row->foto_profil)}}" alt="Gambar" width="45">
                                    </td>
                                    <td>
                                        <a href="/wargaEdit/{{$row->id}}" class="btn btn-info">
                                            <i class="fa-solid fa-pencil" ></i>
                                        </a>
                                        <a href="{{route('wargaDelete', ['id' => $row->id])}}" class="btn btn-danger" data-confirm-delete="true">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive -->
                    </div>
                </div> <!-- end .responsive-table-plugin-->

            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
<!-- end row -->
@include('sweetalert::alert')

@endsection