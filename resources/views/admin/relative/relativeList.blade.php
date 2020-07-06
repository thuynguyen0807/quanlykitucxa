@extends('admin.layouts.index')
@section('RelativeList')
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
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH NGƯỜI THÂN SINH VIÊN</h3>
	<div style="margin-left: 20px;">
		<a href="relative/addRelative"><input class="btn btn-primary" type="button" name="add" value="Thêm" style="width: 100px;"></a>
		<br><br>
	</div>

	@if(session('notification'))
		<div class="alert-success">
			{{ session('notification') }}
		</div>
	@endif

	<table style="width:100%" class="table table-striped table-bordered table-hover">
		<tr>
			<th>Số CMND</th>
			<th>Họ và tên</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Số điện thoại 1</th>
			<th>Số điện thoại 2</th>
			<th>Mối quan hệ</th>
			<th>Của sinh viên</th>
			<th>Xóa</th>
			<th>Sửa</th>
		</tr>
		
		@foreach($relative as $rl)
		<tr>
			<td>{{ $rl->id }}</td>
			<td>{{ $rl->fullname_rl }}</td>
			<td>{{ $rl->birthday }}</td>
			<td>{{ $rl->address }}</td>
			<td>{{ $rl->phone1 }}</td>
			<td>{{ $rl->phone2 }}</td>
			<td>{{ $rl->relationship }}</td>
			<td><a href="relative/sinhvien/{{ $rl->id_student }}">{{ $rl->id_student }}</a></td>
			<td><a href="relative/deleteRelative/{{ $rl->id }}">Xóa</a> </td>
			<td><a href="relative/editRelative/{{ $rl->id }}">Sửa</a></td>
		</tr>
		@endforeach
	</table>
	</div>
</body>
</html>
@endsection