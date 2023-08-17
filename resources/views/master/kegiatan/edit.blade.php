@extends('master.index')

@section('kegiatanEdit')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Kegiatan</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
            <h4 class="page-title">Insert Data Kegiatan</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Insert Data Kegiatan</h4>

                <div class="row mt-3">
                    <div class="col-lg-12">
                        <form action="/kegiatanUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        	@csrf
                        	
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" value="{{$data->nama_kegiatan}}" id="simpleinput" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Tanggal Kegiatan</label>
                                <input class="form-control" id="example-date" type="date" name="tanggal_kegiatan" value="{{$data->tanggal_kegiatan}}">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kegiatan</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{$data->deskripsi}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Lokasi</label>
                                <input type="text" name="lokasi" id="simpleinput" class="form-control" value="{{$data->lokasi}}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Pengurus</label>
                                <select class="form-select" name="nama" aria-label="Default select example">
                                    <option value="{{$data->id_pengurus}}">{{$data->pengurus->nama}}</option>
                                    @foreach($peng as $row)
                                    <option value="{{$row->id}}">{{$row->nama}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button  type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<!-- end row -->
@endsection