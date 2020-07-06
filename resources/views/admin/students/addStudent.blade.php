@extends('admin.layouts.index')
@section('AddStudent')
	<style type="text/css">	
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #F1F0F0;
			margin-top: 0px;
			padding: 20px;
		}
		p {
			font-weight: bold;
		}
	</style>

	<div class="container">
	<h3 class="sub-tieude" style="color: black;">THÊM THÔNG TIN SINH VIÊN</h3> <br>	
	<div class="form">
	<h3><b>Thông tin sinh viên<span style="color: red;">*</span></b></h3><br>

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

	<form action="addStudent" method="post">
	@csrf
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
		<div class="row">
			
			<div class="col-md-2">
				<p style="margin-top: 3px;">Họ và tên <span style="color:red">*</span></p> <br>
				<p style="margin-top: 3px;">Ngày sinh <span style="color:red">*</span></p> <br>
				<p style="margin-top: 3px;">Mã sinh viên <span style="color: red">*</span></p> <br>
				<p style="margin-top: 3px;">Địa chỉ thường trú <span style="color:red">*</span></p> <br>
				<p style="margin-top: 3px;">Phòng<span style="color: red">*</span></p> <br>
				<p style="margin-top: 3px;">Ngày đăng kí<span style="color: red">*</span></p>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="fullname" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="birthday" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="id" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="address" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="id_room" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="date" name="start_date" style="width: 300px;" placeholder="Câu trả lời của bạn">
				
			</div>

			<div class="col-md-2">
				<p>Giới tính <span style="color: red; margin-top: 15px;">*</span></p> <br>		
				<p style="margin-top: 8px;">Số CMND <span style="color:red">*</span></p> <br>
				<p style="margin-top: 8px;">Số điện thoại <span style="color:red">*</span></p> <br>
				<p style="margin-top: 3px;">Email <span style="color: red">*</span></p> <br>
				<p style="margin-top: 3px;">Giường <span style="color: red">*</span></p> <br>
				<p style="margin-top: 3px;">Người thân <span style="color: red">*</span></p>
			</div>

			<div class="col-md-4">
				<input type="radio" name="gender" value="Nam"> Nam
				<input type="radio" name="gender" value="Nữ" style="margin-left: 20px;"> Nữ <br><br>
				<input class="form-control" type="text" name="cmnd" style="width: 300px; margin-top: 8px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="email" style="width: 300px;" placeholder="Câu trả lời của bạn"><br>
				<input class="form-control" type="text" name="id_bed" style="width: 300px;" placeholder="Câu trả lời của bạn"><br>
				<input class="form-control" type="text" name="id_relative" style="width: 300px;" placeholder="Nhập số CMND của người thân">
			</div>
		</div>
		<div style="margin-left: 430px;">
			<br><br>
			<input type="submit" name="edit" value="Thêm" class="btn btn-primary" style="width: 100px;">
			<input type="reset" name="reset" value="Hủy" class="btn btn-primary" style="width: 100px;">
		</div>
		<br>
	</form>
</div>
</div>
@endsection