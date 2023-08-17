@extends('master.index')

@section('pengurusEdit')
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
                        <form action="/PengurusUpdate/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        	@csrf
                        	
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{$data->nama}}" id="simpleinput" class="form-control">
                            </div>

                            <div class="mb-3">
							    <label class="form-label">Jabatan</label>
							    <select class="form-select" name="jabatan"  aria-label="Default select example">
							        @foreach ($jabatanOptions as $option)
							            <option value="{{ $option }}" @if ($option === $data->jabatan) selected @endif >{{ $option }}</option>
							        @endforeach
							    </select>
							</div>


                            <div class="mb-3">
                                <label for="example-date" class="form-label">Tanggal lahir</label>
                                <input class="form-control" id="example-date" type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
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
                                <input type="text" id="simpleinput" name="nomer_telepon" class="form-control" value="{{$data->nomer_telepon}}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="example-email" class="form-label">Email</label>
                                <input type="email" id="example-email" name="email"
                                    class="form-control" placeholder="Email" value="{{$data->email}}">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="simpleinput" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" name="pekerjaan" id="simpleinput" value="{{$data->pekerjaan}}">
                            </div>

                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Foto</label>
                                <input type="file" id="example-fileinput" name="foto_profil" class="form-control">
                                <p style="margin-left:12vh;">{{('foto_pengurus / '. $data->foto_profil)}}</p> 
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