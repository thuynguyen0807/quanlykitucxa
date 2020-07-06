@extends('admin.layouts.index')
@section('DonDangKi')
	
	<style type="text/css">	
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #F1F0F0;
			padding: 20px;
		}
	</style>
	<div class="container">
		{{-- <div style="text-align: center; font-size: 80px;" class="alert-info">Cố lên - Cố lên</div> --}}
	<h3 class="sub-tieude" style="color: black;">ĐƠN ĐĂNG KÍ NỘI TRÚ KÍ TÚC XÁ ONLINE</h1><br>
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
	<div class="form">
	<form action="{{ url('dangkinoitru/sendemail') }}" method="POST">
	@csrf
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3><b>Thông tin sinh viên<span style="color: red;">*</span></b></h3><br>
		<div class="row">	
			<div class="col-md-2">
				<b><p style="margin-top: 3px;">Họ và tên <span style="color:red">*</span></p></b> <br>
				<b><p style="margin-top: 3px;">Ngày sinh <span style="color:red">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Mã sinh viên <span style="color: red">*</span></p></b> <br>
				
				<b><p  style="margin-top: 4px;">Email <span style="color: red">*</span></p></b>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="fullname" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="date" name="birthday" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="id" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="email" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br> 
			</div>

			<div class="col-md-2">
				<b><p  style="margin-top: 3px;">Giới tính <span style="color: red">*</span></p></b> <br>
				<b><p  style="margin-top: 3px;">Số CMND <span style="color:red">*</span></p></b> <br>
				<b><p  style="margin-top: 5px;">Số điện thoại <span style="color:red">*</span></p></b><br>
				<b><p  style="margin-top: 3px;">Địa chỉ thường trú <span style="color:red">*</span></p></b> <br>
			</div>

			<div class="col-md-4">
				<input type="radio" name="gender"> Nam
				<input type="radio" name="gender" style="margin-left: 20px;"> Nữ <br><br>
				<input class="form-control" type="text" name="cmnd" style="width: 300px; margin-top: 10px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"><br>
				<input class="form-control" type="text" name="address" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
			</div>
		</div>

		<h3><b>Thông tin người thân sinh viên<span style="color: red;">*</span></b></h3><br>
		<div class="row">
			<div class="col-md-2">
				<b><p style="margin-top: 3px;">Số CMND<span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 3px;">Mối quan hệ<span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Ngày sinh <span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Địa chỉ <span style="color: red">*</span></p></b> <br>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="id_relative" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="relationship" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="date" name="birthday" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="address" style="width: 300px; margin-top: 5px" placeholder="Câu trả lời của bạn">
			</div>
			
			<div class="col-md-2">
				<b><p style="margin-top: 3px;">Họ và tên <span style="color:red">*</span></p></b> <br>
				<b><p style="margin-top: 12px;">Số điện thoại 1 <span style="color: red">*</span></p></b> <br>
				<b><p style="margin-top: 8px;">Số điện thoại 2<span style="color: red">*</span></p></b>
			</div>

			<div class="col-md-4">
				<input class="form-control" type="text" name="fullname_rl" style="width: 300px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone1" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn"> <br>
				<input class="form-control" type="text" name="phone2" style="width: 300px; margin-top: 5px;" placeholder="Câu trả lời của bạn">
			</div>

		</div>
		
		<h3><b>Đăng kí phòng<span style="color: red;">*</span></b></h3> <br>
		
		<div class="row">
			<div class="col-md-2">
				<b><p>Loại phòng <span style="color: red">*</span></p></b>
			</div>

			<div class="col-md-2" style="margin-left: -100px;">
				<select name="category_room" id="CategoryRoom">
					@foreach($category_room as $cr)
						<option value="{{ $cr->id }}">{{ $cr->id }}</option>
					@endforeach
				</select>
			</div>
			

			<div class="col-md-1" style="margin-left: -50px;">
				<b><p>Phòng <span style="color: red">*</span></p></b>
			</div>

			<div class="col-md-1" style="margin-left: -20px;">
				<select name="id_room" id="Room">
					@foreach($rooms as $room) 
						<option value="{{ $room->id }}">{{ $room->id }}</option>
					@endforeach
				</select>
			</div>

			<div class="col-md-1" style="margin-left: 60px;">
				<p><b>Giường<span style="color: red">*</span></b></p>
			</div>
			<div class="col-md-2" style="margin-left: -10px;">
				<select name="id_bed" id="Bed">
					@foreach($beds as $bed)
						<option value="{{ $bed->id }}">{{ $bed->id }}</option>
					@endforeach
				</select>
			</div>

			<div class="col-md-2" style="margin-left: -50px;">
				<b><p>Ngày đăng kí <span style="color: red">*</span></p></b>
			</div>
			<div class="col-md-3" style="margin-left: -50px;">
				<input style="margin-left: -30px; margin-top: -5px; width: 200px;" class="form-control" type="date" name="start_date">
			</div>
			
		</div>

		<div style="margin-left: 430px;">
			<br><br>
			<input class="btn btn-primary" type="submit" name="dangki" value=" Đăng kí" style="width: 100px;">
			<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px; margin-left: 10px;">
		</div>
		
	</form>
</div>
</div>


@endsection

@section('Script1')
	<script>
		$(document).ready(function() {
			$("#CategoryRoom").change(function() {
				var category_room = $(this).val();
				$.get("ajax/room/" + category_room, function(data) {
					  
					$("#Room").html(data);
				});
			});
			
		});
	</script>
@endsection

@section('Script2')
<script>
		$(document).ready(function() {
			$("#Room").change(function() {
				var id_room = $(this).val();
				$.get("ajax/bed/" + id_room, function(data) {
					$("#Bed").html(data);
				});
			});
			
		});
	</script>
@endsection