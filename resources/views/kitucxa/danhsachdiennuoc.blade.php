<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ban quan ly ki tuc xa SICT - UDN</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/trangchu.css') }}">


	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

		<div>
	<div id="wrapper">
		<div class="header">
			<img src="img/logo.jpg" alt="logo" style="width: 10%">
			<h3 class="ten">BAN QUẢN LÝ KÍ TÚC XÁ<br>SICT - UDN</h3>
			<p class="diachi">Địa chỉ: Nam Kỳ Khởi Nghĩa - Ngũ Hành Sơn - Đà Nẵng<br> Liên hệ: 0231234567 - 0231234567</p>
			<!-- <a href=""><input class="button" type="button" name="dangnhap" value="Đăng nhập" ></a> -->
		</div>
		<div id="menu">
			<ul>
				<li><a href="" class="active">TRANG CHỦ</a></li>
				<li><a href="dangkinoitru">ĐĂNG KÍ NỘI TRÚ</a></li>
				<li><a href="danhsachdiennuoc">TIỀN ĐIỆN NƯỚC</a></li>
				<li><a href="#home">CĂN TIN</a></li>
				<li><a href="#">SINH VIÊN</a></li>
				<li><a href="admin/dangnhap">ADMIN</a></li>
				<!-- <li><a href="#home">THƯ VIỆN</a></li> -->
				<!-- <li><a href="#home">ĐĂNG NHẬP</a></li>
				<li><a href="#home">ĐĂNG KÍ</a></li> -->
			</ul>
		</div>
	</div>
</div>
	<style type="text/css">	

		table, th, td {
			border: 1px solid black;
  			border-collapse: collapse;
		}
		th {
			padding: 10px;
		}

	</style>
	<div class="container-fluid">
		<h3 class="sub-tieude" style="color: black;">DANH SÁCH SỐ ĐIỆN NƯỚC</h3>

		@if(session('notification'))
			<div class="alert-success">
				{{ session('notification') }}
			</div>
		@endif

	<table width="100%" class="table table-striped table-bordered table-hover">
		<tr>
			<th rowspan="2">Mã số</th>
			<th rowspan="2">Phòng</th>
			<th rowspan="2">Tháng/Năm</th>
			<th style="text-align: center;" colspan="5">Điện</th>
			<th style="text-align: center;" colspan="5">Nước</th>
			<th rowspan="2">Tổng tiền</th>
			{{-- <th rowspan="2">Trạng thái</th> --}}
			{{-- <th rowspan="2">Sửa</th>
			<th rowspan="2">Xóa</th> --}}
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
			<td>{{ $dn->id }}</td>
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
			{{-- <td></td> --}}
{{-- 			<td><a href="xoathongtindiennuoc/{{ $dn->id }}">Xóa</a></td>
			<td><a href="suathongtindiennuoc/{{ $dn->id }}">Sửa</a></td> --}}
		</tr>
		@endforeach
	</table>
</div>
<style type="text/css">
	td{
		text-align: center;
	}
</style>

<br>
		<div class="copyright">
			<div class="row">
				<div class="col-md-4">
					<h4 style="color: #1976E9;">KÍ TÚC XÁ SINH VIÊN SICT</h4>
					<p>Địa chỉ: Đường Nam Kỳ Khởi Nghĩa, phường Hòa Quý, Quận Ngũ Hành Sơn, Thành phố Đà Nẵng 
					<br>Liên hệ: 0326 464 305 - Email: nttthuy08072000@gmail.com 
					<br></p>
				</div>
				<div class="col-md-4">
					<br><br>
					<p>Thời gian làm việc
						<br>Thứ hai - thứ sáu: 7h30-11h30, 13h30-16h30
					</p>
				</div>
				<div class="col-md-4">
					
				</div>
			</div>
		</div>