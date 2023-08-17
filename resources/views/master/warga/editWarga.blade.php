@extends('master.index')

@section('wargaEdit')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Warga</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div>
            <h4 class="page-title">Insert Data Warga</h4>
        </div>
    </div>
</div>     
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Insert Data Warga</h4>

                <div class="row mt-3">
                    <div class="col-lg-12">
                        <form action="{{ route('wargaUpdate', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Nama</label>
                                <input type="text" name="nama" id="simpleinput" value="{{$data->nama}}" class="form-control">
                            </div>

                             <div class="mb-3">
                                <label for="simpleinput" class="form-label">Alamat</label>
                                <input type="text" id="simpleinput" name="alamat" value="{{$data->alamat}}" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="example-date" class="form-label">Tanggal lahir</label>
                                <input class="form-control" id="example-date" type="date" value="{{$data->tanggal_lahir}}" name="tanggal_lahir">
                            </div>

                            <div class="mt-3">
                            	<label for="simpleinput" class="form-label">Jenis Kelamin</label>
                            	<div class="row mt-2">
                            		<div class="col-lg-2">
	                            		<div class="form-check">
			                                <input type="radio" id="laki" name="jenis_kelamin"
			                                    class="form-check-input" value="laki-laki" @if($data->jenis_kelamin == 'Laki-laki') checked @endif>
			                                <label class="form-check-label" for="laki">Laki-laki</label>
			                            </div>
	                            	</div>
	                            	<div class="col-lg-2">
	                            		<div class="form-check">
			                                <input type="radio" id="perempuan" name="jenis_kelamin"
			                                    class="form-check-input" value="perempuan" @if($data->jenis_kelamin == 'Perempuan') checked @endif>
			                                <label class="form-check-label" for="perempuan">Perempuan</label>
			                            </div>
	                            	</div>
                            	</div>  
	                        </div>

							<div class="mb-3 mt-3">
                                <label for="simpleinput" class="form-label">No.Telepon</label>
                                <input type="text" id="simpleinput" name="nomer_telepon" value="{{$data->nomer_telepon}}" class="form-control">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="example-email" name="email"
                                    class="form-control" placeholder="Email" value="{{$data->email}}" >
                            </div>

                            <div class="mt-3">
                            	<label for="simpleinput" class="form-label">Status Kawin</label>
                            	<div class="row mt-2">
                            		<div class="col-lg-2">
	                            		<div class="form-check">
			                                <input type="radio" id="belum_kawin" name="status_kawin"
			                                    class="form-check-input" value="Belum Menikah" @if($data->status_kawin == 'Belum Menikah') checked @endif>
			                                <label class="form-check-label" for="belum_kawin">Belum Menikah</label>
			                            </div>
	                            	</div>
	                            	<div class="col-lg-2">
	                            		<div class="form-check">
			                                <input type="radio" id="kawin" name="status_kawin"
			                                    class="form-check-input" value="Menikah" @if($data->status_kawin == 'Menikah') checked @endif>
			                                <label class="form-check-label" for="kawin">Menikah</label>
			                            </div>
	                            	</div>
	                            	<div class="col-lg-2">
	                            		<div class="form-check">
			                                <input type="radio" id="cerai" name="status_kawin"
			                                    class="form-check-input" value="Cerai" @if($data->status_kawin == 'Cerai') checked @endif>
			                                <label class="form-check-label" for="cerai">Cerai</label>
			                            </div>
	                            	</div>
                            	</div>  
	                        </div>

                            <div class="mb-3 mt-3">
                                <label for="simpleinput" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="simpleinput" value="{{$data->pekerjaan}}" >
                            </div>

                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Foto</label>
                                <input type="file" id="example-fileinput" name="foto_profil" class="form-control">
                                <p style="margin-left:32vh;">{{('foto_warga / '. $data->foto_profil)}}</p> 
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