@extends('admin.layouts.index')
@section('EquipmentList')
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
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH THIẾT BỊ</h3>
	<div>
		<input type="button" name="add" value="Thêm" style="width: 100px;">
		<input type="button" name="edit" value="Sửa" style="width: 100px;">
		<input type="button" name="delete" value="Xóa" style="width: 100px;">
		<br><br>
	</div>

	<table style="width:100%">
		<tr>
			<th>STT</th>
			<th>Mã thiết bị</th>
			<th>Tên thiết bị</th>
			<th>SL thiết bị</th>
			<th>Trạng thái</th>
			<th>Thuộc phòng</th>
			<th>Ghi chú</th>
		</tr>

		<tr>
			<td>1</td>
			<td>Q.1</td>
			<td>Quạt trần</td>
			<td>1</td>
			<td>Tốt</td>
			<td>2.301</td>
			<td></td>
		</tr>
	</table>
	</div>
</body>
</html>
@endsection