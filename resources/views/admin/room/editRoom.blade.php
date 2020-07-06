@extends('admin.layouts.index')
@section('RoomEdit')

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
	<h3 class="sub-tieude" style="color: black;">SỬA THÔNG TIN PHÒNG</h3>
	<div class="form">
	<form action="{{ $room->id }}" method="post">
		@csrf
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
		<div class="row">
			<div class="col-md-4">
				<b><p>Mã phòng<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -5px;">Loại phòng</b><span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -4px;">Số lượng sinh viên<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: -4px;">Số lượng hiện tại<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Thiết bị</b><span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Giá phòng</b><span style="color: red;">*</span></p></b> <br>
				
				<b><p style="margin-top: 4px;">Giường</b><span style="color: red;">*</span></p></b>
			</div>
			<div class="col-md-8">
				
				<select name="id">
					<option>---------</option>
					<option>1.201</option>
					<option>1.202</option>
					<option>1.203</option>
					<option>1.204</option>
					<option>1.205</option>
					<option>1.206</option>
					<option>1.207</option>
					<option>1.208</option>
					<option>1.209</option>
					<option>1.210</option>
					<option>1.211</option>
					<option>1.212</option>
					<option>1.301</option>
					<option>1.302</option>
					<option>1.303</option>
					<option>1.304</option>
					<option>1.305</option>
					<option>1.306</option>
					<option>1.307</option>
					<option>1.308</option>
					<option>1.309</option>
					<option>1.310</option>
					<option>1.311</option>
					<option>1.312</option>
					<option>1.401</option>
					<option>1.402</option>
					<option>1.403</option>
					<option>1.404</option>
					<option>1.405</option>
					<option>1.406</option>
					<option>1.407</option>
					<option>1.408</option>
					<option>1.409</option>
					<option>1.410</option>
					<option>1.411</option>
					<option>1.412</option>
					<option>1.501</option>
					<option>1.502</option>
					<option>1.503</option>
					<option>1.504</option>
					<option>1.505</option>
					<option>1.506</option>
					<option>1.507</option>
					<option>1.508</option>
					<option>1.509</option>
					<option>1.510</option>
					<option>1.511</option>
					<option>1.512</option>
					<option>2.201</option>
					<option>2.202</option>
					<option>2.203</option>
					<option>2.204</option>
					<option>2.205</option>
					<option>2.206</option>
					<option>2.207</option>
					<option>2.208</option>
					<option>2.209</option>
					<option>2.210</option>
					<option>2.211</option>
					<option>2.212</option>
					<option>2.301</option>
					<option>2.302</option>
					<option>2.303</option>
					<option>2.304</option>
					<option>2.305</option>
					<option>2.306</option>
					<option>2.307</option>
					<option>2.308</option>
					<option>2.309</option>
					<option>2.310</option>
					<option>2.311</option>
					<option>2.312</option>
					<option>2.401</option>
					<option>2.402</option>
					<option>2.403</option>
					<option>2.404</option>
					<option>2.405</option>
					<option>2.406</option>
					<option>2.407</option>
					<option>2.408</option>
					<option>2.409</option>
					<option>2.410</option>
					<option>2.411</option>
					<option>2.412</option>
					<option>2.501</option>
					<option>2.502</option>
					<option>2.503</option>
					<option>2.504</option>
					<option>2.505</option>
					<option>2.506</option>
					<option>2.507</option>
					<option>2.508</option>
					<option>2.509</option>
					<option>2.510</option>
					<option>2.511</option>
					<option>2.512</option>

				</select>
				<label>{{ $room->id }}</label>
				
				<br><br>
				<select name="category_room">
					<option>---------</option>
					<option>1.1</option>
					<option>1.2</option>
					<option>1.3</option>
					<option>1.4</option>
					<option>1.5</option>
					<option>2.1</option>
					<option>2.2</option>
					<option>2.3</option>
					<option>2.4</option>
					<option>2.5</option>
				</select>
				<label>{{ $room->category_room }}</label>
				<br><br>
				<input class="form-control" type="number" name="number_student" value="{{ $room->number_student }}" style="width: 300px;" placeholder="Số sinh viên tối đa">
				<br>
				<input class="form-control" type="number" name="current_student" value="{{ $room->number_student }}" style="width: 300px;" placeholder="Số sinh viên đang ở">
				<br>
				<input class="form-control" type="text" name="equipment" value="{{ $room->equipment }}" style="width: 300px;" placeholder="Trạng thái thiết bị trong phòng" style="margin-left: 76px;">
				<br>
				<input class="form-control" type="text" name="room_price" value="{{ $room->room_price }}" style="width: 300px;" placeholder="Giá phòng" style="margin-left: 57px;">
				<br>
				<input class="form-control" type="text" name="id_bed" value="{{ $room->id_bed }}" style="width: 300px;" placeholder="Nhập mã giường" style="margin-left: 10px;">
				<br><br>
			</div>

			<div style="margin-left: 200px; margin-bottom: ">
				<input class="btn btn-primary" type="submit" name="dangki" value="Sửa" style="width: 100px;">
				<input class="btn btn-primary" type="submit" name="huy" value="Hủy" style="width: 100px;">
			</div>
		</div>
	</form>
</div>
</div>
@endsection