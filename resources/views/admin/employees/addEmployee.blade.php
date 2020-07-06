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
	</style>
	<div class="container">
	<h3 class="sub-tieude" style="color: black;">THÊM THÔNG TIN NHÂN VIÊN</h3> <br>	
	<div class="form">
	<h3><b>Thông tin nhân viên<span style="color: red;">*</span></b></h3>
	<form action="{{ route('dangkinoitru') }}" method="post">
	@csrf
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
		<div class="row">
			<div class="col-md-2">
				<p>Họ và tên <span style="color:red">*</span></p> <br>
				<p>Ngày sinh <span style="color:red">*</span></p> <br>
				<p>Mã nhân viên<span style="color: red">*</span></p> <br>
				
				<p>Email <span style="color: red">*</span></p>
			</div>
			
			<div class="col-md-4">
				<input class="form-control" type="text" name="hoten" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="ngaysinh" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="masv" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="diachi" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="email" style="width: 300px;" placeholder="Câu trả lời của bạn">
			</div>

			<div class="col-md-2">
				<p>Giới tính <span style="color: red">*</span></p> <br>
				<p>Địa chỉ thường trú <span style="color:red">*</span></p> <br>
				<p>Số CMND <span style="color:red">*</span></p> <br>
				<p>Số điện thoại <span style="color:red">*</span></p> <br>
			</div>

			<div class="col-md-4">
				<input type="radio" name="gioitinh"> Nam
				<input type="radio" name="gioitinh" style="margin-left: 20px;"> Nữ <br><br>
				<input type="text" name="lop" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br><br>
				<input type="text" name="socmnd" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br><br>
				<input type="text" name="sdt" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> 
			</div>
		</div>
		<div style="margin-left: 430px;">
			<br><br>
			<input type="submit" name="dangki" value="Thêm" style="width: 100px;">
			<input type="submit" name="huy" value="Hủy" style="width: 100px;">
		</div>
		<br>	
	</form>
</div></div>
@endsection
