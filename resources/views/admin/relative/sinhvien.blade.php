@extends('admin.layouts.index')
@section('SinhVien')

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
	<h3 class="sub-tieude" style="color: black;">SINH VIÊN</h3>
	
	<table style="width:100%" class="table table-striped table-bordered table-hover">	
		<tr>
			<th>Mã sinh viên</th>
			<th>Họ và tên</th>
			<th>Giới tính</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Số CMND</th>
			<th>Số điện thoại</th>
			<th>Email</th>
			<th>Phòng</th>
			<th>Người thân</th>
			<th>Ngày vào ở</th>
		</tr>
		
		<tr>
			<td>{{ $student->id }}</td>
			<td>{{ $student->fullname }}</td>
			<td>{{ $student->gender }}</td>
			<td>{{ $student->birthday }}</td>
			<td>{{ $student->address }}</td>
			<td>{{ $student->cmnd}}</td>
			<td>{{ $student->phone }}</td>
			<td>{{ $student->email }}</td>
			<td>{{ $student->id_room }}</td>
			<td><a href="{{ $student->id_relative }}">{{ $student->id_relative }}</a></td>
			<td>{{ $student->start_date }}</td>
		</tr>
	</table>
	</div>

@endsection