@extends('admin.layouts.index')
@section('addBed')
	<style type="text/css">
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #EFEEEE;
			margin-left: 430px;
			margin-right: 430px;
			margin-top: 30px;
			padding: 20px;
		}
	</style>
	<div>
		<h3 class="sub-tieude" style="color: black;">GIƯỜNG</h3>
		<div class="form">
			@if(count($errors)>0) 
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{ $err }} <br>
				@endforeach
			</div>
			@endif

			@if(session('notification'))
				<div class="alert-success">
					{{ session('notification') }}
				</div>
			@endif


			<form action="addBed" method="post">
				@csrf
				<div class="row">
					<div class="col-md-4">
						<p style="margin-top: 5px;"><b>Mã giường<span style="color: red;">*</span></b></p> <br>
					
						<p style="margin-top: 3px;"><b>Mã phòng<span style="color: red;">*</span></b></p>
					</div>

					<div class="col-md-5">
						<input class="form-control" type="text" name="id" placeholder="Nhập mã giường" style="width: 200px;"> <br>
						
						<input class="form-control" type="text" name="id_room" placeholder="Nhập mã phòng" style="width: 200px;"> <br><br>
					</div>
					
				</div>

				<div style="margin-left: 130px; margin-bottom: ">
					<input class="btn btn-primary" type="submit" name="them" value="Thêm" style="width: 100px;">
					<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px;">
				</div>

			</form>
		</div>
	</div>
@endsection