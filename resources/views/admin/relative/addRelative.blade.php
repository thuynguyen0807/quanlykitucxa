@extends('admin.layouts.index')
@section('AddRelative')
	<style type="text/css">	
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #F1F0F0;
			margin-top: 0px;
			padding: 20px;
		}
	</style>
	<div class="container">
	<h3 class="sub-tieude" style="color: black;">THÊM THÔNG TIN NGƯỜI THÂN SINH VIÊN</h3><br>
	<div class="form">
		<h3><b>Thông tin người thân sinh viên<span style="color: red;">*</span></b></h3><br>

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
		
	<form action="addRelative" method="post">
		@csrf
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-md-2">
				<p style="margin-top: 3px;"><b>Số CMND<span style="color: red;">*</span></b></p><br>
				<b><p style="margin-top: 5px;">Mối quan hệ <span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 5px;">Ngày sinh <span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Địa chỉ <span style="color: red">*</span></p></b> <br>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="id" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="relationship" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="birthday" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="address" style="width: 300px; margin-top: 5px" placeholder="Câu trả lời của bạn">
			</div>
			
			<div class="col-md-2">
				<b><p style="margin-top: 3px;">Họ và tên <span style="color:red">*</span></p></b> <br>
				<b><p style="margin-top: 3px;">Của sinh viên <span style="color:red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Số điện thoại 1 <span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Số điện thoại 2<span style="color: red">*</span></p></b>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="fullname_rl" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="id_student" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone1" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone2" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn">
			</div>
		</div>
		<div style="margin-left: 430px;">
			<br><br>
			<input class="btn btn-primary" type="submit" name="dangki" value="Thêm" style="width: 100px;">
			<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px;">
		</div>
		</div>

	</form></div></div>
@endsection