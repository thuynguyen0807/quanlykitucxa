@extends('admin.layouts.index')
@section('StudentList')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
</head>
<body>
	
	<div class="container-fluid">
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH NHÂN VIÊN</h3>
	<div>
		<input type="button" name="add" value="Thêm" style="width: 100px;">
		<input type="button" name="edit" value="Sửa" style="width: 100px;">
		<input type="button" name="delete" value="Xóa" style="width: 100px;">
		<br><br>
	</div>

	<table style="width:100%">
		<tr>
			<th>STT</th>
			<th>Mã nhân viên</th>
			<th>Họ và tên</th>
			<th>Giới tính</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Số CMND</th>
			<th>Số điện thoại</th>
			<th>Email</th>
			<th>Ghi chú</th>
		</tr>

		<tr>
			<td>1</td>
			<td>18IT351</td>
			<td>Nguyễn Thị Thanh Thúy</td>
			<td>Nữ</td>
			<td>08/07/2000</td>
			<td>Iale - Chư Pưh - Gia Lai</td>
			<td>231245602</td>
			<td>0326464305</td>
			<td>nttthuy08072000@gmail.com</td>
			<td></td>
		</tr>
	</table>
	</div>
</body>
</html>
@endsection