@extends('master.index')

@section('pembayaranTambah')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pembayaran</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
            <h4 class="page-title">Insert Data Pembayaran</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Insert Data Pembayaran</h4>
                @if (count($errors) > 0)
	                <div class="alert alert-danger">
	                    <ul>
	                        @foreach ($errors->all() as $error)
	                            <li>{{ $error }}</li>
	                        @endforeach
	                    </ul>
	                </div>
                @endif
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <form action="/PembayaranUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        	@csrf

                            <div class="mb-3">
							    <label class="form-label">Nama Warga</label>
							    <select class="form-select" name="nama" aria-label="Default select example">
                                    <option value="{{$data->id_warga}}">{{$data->warga->nama}}</option>
                                    @foreach($warga as $row)
							            <option value="{{$row->id}}">{{$row->nama}}</option>
                                    @endforeach
							    </select>
							</div>

                            <div class="mb-3 mt-3">
                                <label for="simpleinput" class="form-label">Jumlah</label>
                                <input type="number" id="simpleinput" name="jumlah" class="form-control" value="{{$data->jumlah}}">
                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Tanggal Pembayaran</label>
                                <input class="form-control" id="example-date" type="date" name="tanggal_pembayaran" value="{{$data->tanggal_pembayaran}}">
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