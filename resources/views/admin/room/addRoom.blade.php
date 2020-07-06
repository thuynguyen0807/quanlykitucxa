@extends('admin.layouts.index')
@section('AddRoom')

	<style type="text/css">
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #EFEEEE;
			margin-left: 350px;
			margin-right: 350px;
			margin-top: 30px;
			padding: 20px;
		}
	</style>
	<div>
	<h3 class="sub-tieude" style="color: black;">THÊM THÔNG TIN PHÒNG</h3>
	<div class="form">
		<h3><b>Thông tin phòng<span style="color: red;">*</span></b></h3><br>

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

	<form action="addRoom" method="post">
		@csrf
	
		<div class="row">
			<div class="col-md-4">
				<b><p>Mã phòng<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -10px;">Loại phòng</b><span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -4px;">Số lượng sinh viên<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -4px;">Số lượng hiện tại<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Thiết bị</b><span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Giá phòng</b><span style="color: red;">*</span></p></b> <br>
				
				{{-- <b><p style="margin-top: 4px;">Giường</b><span style="color: red;">*</span></p></b> --}}
			</div>
			<div class="col-md-8">
				
				<select name="id">
					<option>---------</option>
					<option name="id">1.201</option>
					<option name="id">1.202</option>
					<option name="id">1.203</option>
					<option name="id">1.204</option>
					<option name="id">1.205</option>
					<option name="id">1.206</option>
					<option name="id">1.207</option>
					<option name="id">1.208</option>
					<option name="id">1.209</option>
					<option name="id">1.210</option>
					<option name="id">1.211</option>
					<option name="id">1.212</option>
					<option name="id">1.301</option>
					<option name="id">1.302</option>
					<option name="id">1.303</option>
					<option name="id">1.304</option>
					<option name="id">1.305</option>
					<option name="id">1.306</option>
					<option name="id">1.307</option>
					<option name="id">1.308</option>
					<option name="id">1.309</option>
					<option name="id">1.310</option>
					<option name="id">1.311</option>
					<option name="id">1.312</option>
					<option name="id">1.401</option>
					<option name="id">1.402</option>
					<option name="id">1.403</option>
					<option name="id">1.404</option>
					<option name="id">1.405</option>
					<option name="id">1.406</option>
					<option name="id">1.407</option>
					<option name="id">1.408</option>
					<option name="id">1.409</option>
					<option name="id">1.410</option>
					<option name="id">1.411</option>
					<option name="id">1.412</option>
					<option name="id">1.501</option>
					<option name="id">1.502</option>
					<option name="id">1.503</option>
					<option name="id">1.504</option>
					<option name="id">1.505</option>
					<option name="id">1.506</option>
					<option name="id">1.507</option>
					<option name="id">1.508</option>
					<option name="id">1.509</option>
					<option name="id">1.510</option>
					<option name="id">1.511</option>
					<option name="id">1.512</option>
					<option name="id">2.201</option>
					<option name="id">2.202</option>
					<option name="id">2.203</option>
					<option name="id">2.204</option>
					<option name="id">2.205</option>
					<option name="id">2.206</option>
					<option name="id">2.207</option>
					<option name="id">2.208</option>
					<option name="id">2.209</option>
					<option name="id">2.210</option>
					<option name="id">2.211</option>
					<option name="id">2.212</option>
					<option name="id">2.301</option>
					<option name="id">2.302</option>
					<option name="id">2.303</option>
					<option name="id">2.304</option>
					<option name="id">2.305</option>
					<option name="id">2.306</option>
					<option name="id">2.307</option>
					<option name="id">2.308</option>
					<option name="id">2.309</option>
					<option name="id">2.310</option>
					<option name="id">2.311</option>
					<option name="id">2.312</option>
					<option name="id">2.401</option>
					<option name="id">2.402</option>
					<option name="id">2.403</option>
					<option name="id">2.404</option>
					<option name="id">2.405</option>
					<option name="id">2.406</option>
					<option name="id">2.407</option>
					<option name="id">2.408</option>
					<option name="id">2.409</option>
					<option name="id">2.410</option>
					<option name="id">2.411</option>
					<option name="id">2.412</option>
					<option name="id">2.501</option>
					<option name="id">2.502</option>
					<option name="id">2.503</option>
					<option name="id">2.504</option>
					<option name="id">2.505</option>
					<option name="id">2.506</option>
					<option name="id">2.507</option>
					<option name="id">2.508</option>
					<option name="id">2.509</option>
					<option name="id">2.510</option>
					<option name="id">2.511</option>
					<option name="id">2.512</option>
				</select>
				<br><br>
				<select name="category_room">
					<option>---------</option>
					<option name="category_room">1.1</option>
					<option name="category_room">1.2</option>
					<option name="category_room">1.3</option>
					<option name="category_room">1.4</option>
					<option name="category_room">1.5</option>
					<option name="category_room">2.1</option>
					<option name="category_room">2.2</option>
					<option name="category_room">2.3</option>
					<option name="category_room">2.4</option>
					<option name="category_room">2.5</option>
				</select>
				<br><br>
				<input class="form-control" type="number" name="number_student" style="width: 300px;" placeholder="Số sinh viên tối đa"><br>
				<input class="form-control" type="number" name="current_student" style="width: 300px;" placeholder="Số sinh viên đang ở">
				<br>
				<input class="form-control" type="text" name="equipment" style="width: 300px;" placeholder="Trạng thái thiết bị trong phòng" style="margin-left: 76px;">
				<br>
				<input class="form-control" type="text" name="room_price" style="width: 300px;" placeholder="Giá phòng" style="margin-left: 57px;">
				<br>
				
				{{-- <input class="form-control" type="text" name="id" style="width: 300px;" placeholder="Nhập mã giường" style="margin-left: 10px;"> --}}
				<br><br>
			</div>

			<div style="margin-left: 200px; margin-bottom: ">
				<input class="btn btn-primary" type="submit" name="them" value="Thêm" style="width: 100px;">
				<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px;">
			</div>
		</div>
	</form>
</div>
</div>
@endsection