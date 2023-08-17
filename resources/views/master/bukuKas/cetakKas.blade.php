@extends('master.index')

@section('kasCetak')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pembayaran</a></li>
                    <li class="breadcrumb-item active">Cetak Pembayaran</li>
                </ol>
            </div>
            <h4 class="page-title">Cetak Data Pembayaran</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
	<div class="card">
		<div class="card-body">
			<form action="" method="get">
                @csrf
                <div class="row ">
                    <div class="col-lg-4">
                        <div class="input-group mb-3">
                            <label for="startDate" class="me-2">Tanggal Awal</label>
                            <input type="date" class="form-control" aria-label="Text input with checkbox" id="startDate" name="startDate">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="input-group mb-3">
                            <label for="endDate" class="me-2">Tanggal Akhir</label>
                            <input type="date" class="form-control" aria-label="Text input with checkbox" id="endDate" name="endDate">
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-lg-12">
                        <a href="" onclick="this.href='/CetakKasPertanggal/'+ document.getElementById('startDate').value + '/' + document.getElementById('endDate').value " target="_blank" class="col-md-12 btn btn-primary">Cetak Pertanggal <i class="fa-solid fa-print"></i></a>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>
	
@endsection