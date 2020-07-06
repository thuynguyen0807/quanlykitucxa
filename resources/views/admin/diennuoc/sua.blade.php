@extends('admin.layouts.index')
@section('NhapSoDienNuoc')
	<style type="text/css">
		.form {
			border: 1px solid #999696;
			border-radius: 5px;
			background-color: #F5F3F3;
			margin-left: 300px;
			margin-right: 300px;
			margin-top: 30px;
			padding: 20px;
		}
	</style>

	<h3 class="sub-tieude" style="color: black;">NHẬP SỐ ĐIỆN NƯỚC</h3>
	<div class="container">
		
	<div class="form">
		@if(session('notification'))
			<div class="alert-success">
				{{ session('notification') }}
			</div>
		@endif
		<form action="" method="post">
			@csrf
			<div class="row">
				<br>
				<div class="col-md-4">
					<p style="font-weight: bold;">Mã số<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold; margin-top: 5px;">Phòng<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold; margin-top: 5px;">Tháng/năm<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold;">Số điện cuối<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold; margin-top: 5px;">Giá điện<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold; margin-top: 5px;">Số nước cuối<span style="color: red;">*</span></p><br>
					<p style="font-weight: bold;">Giá nước<span style="color: red;">*</span></p>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="id" style="width: 300px;" placeholder="Mã hóa đơn" value="{{ $dn->id }}"><br>
					<input class="form-control" type="text" name="id_room" style="width: 300px;" placeholder="Nhập mã phòng" value="{{ $dn->id_room }}"><br>
					<input class="form-control" type="date" name="thoigian" style="width: 300px;" placeholder="Tiền điện nước tháng / năm" value="{{ $dn->thoigian }}"><br>
					<input class="form-control" type="text" name="sodiencuoi" style="width: 300px;" placeholder="Chỉ số điện cuối của tháng" value="{{ $dn->sodiencuoi }}"><br>
					<input class="form-control" type="text" name="giadien" style="width: 300px;" placeholder="Nhập vào giá điện" value="{{ $dn->giadien }}"><br>
					<input class="form-control" type="text" name="sonuoccuoi" style="width: 300px;" placeholder="Chỉ số nước cuối của tháng" value="{{ $dn->sonuoccuoi }}"><br>
					<input class="form-control" type="text" name="gianuoc" style="width: 300px;" placeholder="Nhập vào giá nước" value="{{ $dn->gianuoc }}"><br><br>
				</div>

				<div style="margin-left: 170px;">
				<input class="btn btn-primary" type="submit" name="sua" value="Sửa" style="width: 100px;">
				<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px; margin-left: 10px;">
			</div>
				
			</div>
		</form>
		
	</div>
</div>
@endsection