@extends('admin.layouts.index')
@section('EquipmentEdit')

	<style type="text/css">
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #EFEEEE;
			margin-left: 380px;
			margin-right: 380px;
			margin-top: 30px;
			padding: 20px;
		}
	</style>
	<div>
	<h3 class="sub-tieude" style="color: black;">SỬA THÔNG TIN THIẾT BỊ</h3>
	<div class="form">
	<form action="" method="post">
		@csrf
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h3><b>Thông tin thiết bị<span style="color: red;">*</span></b></h3><br>
		<div class="row">
			<div class="col-md-4">
				<b><p style="margin-top: 5px;">Mã thiết bị<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 5px;">Tên thiết bị</b><span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 5px;">Số lượng thiết bị<span style="color: red;">*</span></p></b> <br>
				<b><p style="margin-top: 4px;">Trạng thái</b><span style="color: red;">*</span></p></b> 
				<br>
				<b><p style="margin-top: 0px;">Thuộc phòng</b><span style="color: red;">*</span></p></b> 
				<br>
			</div>
			<div class="col-md-8">
				
				<input class="form-control" type="text" name="id_equipment" value="" style="width: 300px;" placeholder="Mã thiết bị">
				<br>
				<input class="form-control" type="text" name="equipment_name" value="" style="width: 300px;" placeholder="Tên thiết bị" style="margin-left: 76px;">
				<br>
				<input class="form-control" type="number" name="number_equipment" value="" style="width: 300px;" placeholder="Số lượng thiết bị" style="margin-left: 57px;">
				<br>
				<input class="form-control" type="text" name="status_equipment" value="" style="width: 300px;" placeholder="Trạng thái thiết bị" style="margin-left: 37px;">	
				<br>
				<label style="margin-top: 5px;">Khu số 1</label>
				<select>
					<option value="id_room">---------</option>
					<option value="id_room">1.201</option>
					<option value="id_room">1.202</option>
					<option value="id_room">1.203</option>
					<option value="id_room">1.204</option>
					<option value="id_room">1.205</option>
					<option value="id_room">1.206</option>
					<option value="id_room">1.207</option>
					<option value="id_room">1.208</option>
					<option value="id_room">1.209</option>
					<option value="id_room">1.210</option>
					<option value="id_room">1.211</option>
					<option value="id_room">1.212</option>
					<option value="id_room">1.301</option>
					<option value="id_room">1.302</option>
					<option value="id_room">1.303</option>
					<option value="id_room">1.304</option>
					<option value="id_room">1.305</option>
					<option value="id_room">1.306</option>
					<option value="id_room">1.307</option>
					<option value="id_room">1.308</option>
					<option value="id_room">1.309</option>
					<option value="id_room">1.310</option>
					<option value="id_room">1.311</option>
					<option value="id_room">1.312</option>
					<option value="id_room">1.401</option>
					<option value="id_room">1.402</option>
					<option value="id_room">1.403</option>
					<option value="id_room">1.404</option>
					<option value="id_room">1.405</option>
					<option value="id_room">1.406</option>
					<option value="id_room">1.407</option>
					<option value="id_room">1.408</option>
					<option value="id_room">1.409</option>
					<option value="id_room">1.410</option>
					<option value="id_room">1.411</option>
					<option value="id_room">1.412</option>
					<option value="id_room">1.501</option>
					<option value="id_room">1.502</option>
					<option value="id_room">1.503</option>
					<option value="id_room">1.504</option>
					<option value="id_room">1.505</option>
					<option value="id_room">1.506</option>
					<option value="id_room">1.507</option>
					<option value="id_room">1.508</option>
					<option value="id_room">1.509</option>
					<option value="id_room">1.510</option>
					<option value="id_room">1.511</option>
					<option value="id_room">1.512</option>
				</select>

				<label style="margin-left: 40px;">Khu số 2</label>
				
				<select>
					<option>---------</option>
					<option value="id_room">2.201</option>
					<option value="id_room">2.202</option>
					<option value="id_room">2.203</option>
					<option value="id_room">2.204</option>
					<option value="id_room">2.205</option>
					<option value="id_room">2.206</option>
					<option value="id_room">2.207</option>
					<option value="id_room">2.208</option>
					<option value="id_room">2.209</option>
					<option value="id_room">2.210</option>
					<option value="id_room">2.211</option>
					<option value="id_room">2.212</option>
					<option value="id_room">2.301</option>
					<option value="id_room">2.302</option>
					<option value="id_room">2.303</option>
					<option value="id_room">2.304</option>
					<option value="id_room">2.305</option>
					<option value="id_room">2.306</option>
					<option value="id_room">2.307</option>
					<option value="id_room">2.308</option>
					<option value="id_room">2.309</option>
					<option value="id_room">2.310</option>
					<option value="id_room">2.311</option>
					<option value="id_room">2.312</option>
					<option value="id_room">2.401</option>
					<option value="id_room">2.402</option>
					<option value="id_room">2.403</option>
					<option value="id_room">2.404</option>
					<option value="id_room">2.405</option>
					<option value="id_room">2.406</option>
					<option value="id_room">2.407</option>
					<option value="id_room">2.408</option>
					<option value="id_room">2.409</option>
					<option value="id_room">2.410</option>
					<option value="id_room">2.411</option>
					<option value="id_room">2.412</option>
					<option value="id_room">2.501</option>
					<option value="id_room">2.502</option>
					<option value="id_room">2.503</option>
					<option value="id_room">2.504</option>
					<option value="id_room">2.505</option>
					<option value="id_room">2.506</option>
					<option value="id_room">2.507</option>
					<option value="id_room">2.508</option>
					<option value="id_room">2.509</option>
					<option value="id_room">2.510</option>
					<option value="id_room">2.511</option>
					<option value="id_room">2.512</option>
				</select>
				<br><br>
			</div>

			<div style="margin-left: 170px; margin-bottom: ">
				<input type="submit" name="dangki" value="Sửa" style="width: 100px;">
				<input type="submit" name="huy" value="Hủy" style="width: 100px;">
			</div>
		</div>
	</form>
</div>
</div>
@endsection