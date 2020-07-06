@extends('admin.layouts.index')
@section('DanhSachDienNuoc')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style type="text/css">	

		table, th, td {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		th {
			padding: 10px;
		}

	</style>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<script language="Javascript">
		function changeStatus(btn) {
		btn.style.backgroundColor = "rgb(238, 65, 65)";
		btn.style.borderColor = "rgb(238, 65, 65)";
		}
	</script>
</head>
<body>
		<div class="container-fluid">
		<h3 class="sub-tieude" style="color: black;">DANH SÁCH SỐ ĐIỆN NƯỚC</h3>

		
		<div style="margin-left: 20px;">
		<a href="diennuoc/nhapsodiennuoc"><input class="btn btn-primary" type="button" name="add" value="Nhập số điện nước" style="width: 150px;"></a>
		<br><br>
		@if(session('notification'))
			<div class="alert-success">
				{{ session('notification') }}
			</div>
		@endif
		</div>
	<table width="100%" class="table table-striped table-bordered table-hover">
		<tr>
			<th rowspan="2">Mã hóa đơn</th>
			<th rowspan="2">Phòng</th>
			<th rowspan="2">Tháng/Năm</th>
			<th style="text-align: center;" colspan="5">Điện</th>
			<th style="text-align: center;" colspan="5">Nước</th>
			<th rowspan="2">Tổng tiền</th>
			<th rowspan="2">Trạng thái</th>
			<th rowspan="2">Sửa</th>
			<th rowspan="2">Xóa</th>
		</tr>

		<tr>
			<th>Chỉ số đầu</th>
			<th>Chỉ số cuối</th>
			<th>Tiêu thụ</th>
			<th>Giá</th>
			<th>Thành tiền</th>
			<th>Chỉ số đầu</th>
			<th>Chỉ số cuối</th>
			<th>Tiêu thụ</th>
			<th>Giá</th>
			<th>Thành tiền</th>
		</tr>

		@foreach($diennuoc as $dn)
		<tr>
			<td><a href="diennuoc/hoadondiennuoc/{{ $dn->id }}">{{ $dn->id }}</a></td>
			<td>{{ $dn->id_room }}</td>
			<td>{{ $dn->thoigian }}</td>
			<td>{{ $dn->chi_so_dien_dau }}</td>
			<td>{{ $dn->sodiencuoi }}</td>
			<td>{{ $dn->sodiencuoi - $dn->chi_so_dien_dau }}</td>
			<td>{{ number_format($dn->giadien) }} VNĐ</td>
			<td>{{ number_format($dn->tiendien) }} VNĐ</td>
			<td>{{ $dn->chi_so_nuoc_dau }}</td>
			<td>{{ $dn->sonuoccuoi }}</td>
			<td>{{ $dn->sonuoccuoi - $dn->chi_so_nuoc_dau }}</td>
			<td>{{ number_format($dn->gianuoc) }} VNĐ</td>
			<td>{{ number_format($dn->tiennuoc) }} VNĐ</td>
			<td>{{ number_format($dn->tiendien + $dn->tiennuoc) }} VNĐ</td>
			
			<td><input type="button" onclick="changeStatus(this), this.value='Đã nộp'" class="btn btn-primary"
			 id="status" value="Chưa nộp" name="status"></td>
			 
			<!-- <td></td> -->
			<td><a href="diennuoc/xoathongtindiennuoc/{{ $dn->id }}">Xóa</a></td>
			<td><a href="diennuoc/suathongtindiennuoc/{{ $dn->id }}">Sửa</a></td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>

@endsection