@extends('master.index')

@section('BukuKasTambah')
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
                        <form action="{{route('AddKas')}}" method="POST" enctype="multipart/form-data">
                        	@csrf

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Saldo Masuk</label>
                                <input class="form-control" id="example-date" type="number" name="masuk">
                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Saldo Keluar</label>
                                <input class="form-control" id="example-date" type="number" name="keluar">
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Keterangan</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="tanggalkas" class="form-label">Tanggal</label>
                                <input class="form-control" id="tanggalkas" type="date" name="tanggal">
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