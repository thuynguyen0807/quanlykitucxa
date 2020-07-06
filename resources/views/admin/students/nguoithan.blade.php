@extends('admin.layouts.index')
@section('NguoiThan')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Documerl</title>
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
	<h3 class="sub-tieude" style="color: black;">NGƯỜI THÂN SINH VIÊN</h3>

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
			
		</tr>
	
		<tr>
			<td>{{ $relative->id }}</td>		
			<td>{{ $relative->fullname_rl }}</td>
			<td>{{ $relative->birthday }}</td>
			<td>{{ $relative->address }}</td>
			<td>{{ $relative->phone1 }}</td>
			<td>{{ $relative->phone2 }}</td>
			<td>{{ $relative->relationship }}</td>
			<td><a href="{{ $relative->id_student }}">{{ $relative->id_student }}</a></td>
		</tr>

	</table>
	</div>
</body>
</html>
@endsection