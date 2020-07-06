@extends('admin.layouts.index')
@section('BedList')
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
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH GIƯỜNG</h3>
	
	@if(session('notification'))
		<div class="alert-success">
			{{ session('notification') }}
		</div>
	@endif
	<div style="margin-left: 420px;">
		<br>
		<a href="bed/addBed"><input class="btn btn-primary" type="button" name="add" value="Thêm" style="width: 100px;"></a>
		<br><br>
	</div>
	<table style="width:40%; margin: 0 auto;" class="table table-striped table-bordered table-hover">
		<tr>
			<th>Mã giường</th>
			<th>Phòng</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
		
		@foreach($beds as $bed)
		<tr>
			<td>{{ $bed->id }}</td>		
			<td>{{ $bed->id_room }}</td>
			<td><a href="bed/editBed/{{ $bed->id }}">Sửa</a></td>
			<td><a href="bed/deleteBed/{{ $bed->id }}">Xóa</a></td>
		</tr>
		@endforeach
	</table>
	</div>
</body>
</html>
@endsection