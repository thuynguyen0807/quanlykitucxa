@extends('admin.layouts.index')
@section('StudentList')

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
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH SINH VIÊN</h3>
	<div>
		<a href="students/addStudent"><input type="button" name="add" value="Thêm" style="width: 100px;" class="btn btn-primary"></a>
		<br><br>
	</div>

	@if(session('notification'))
		<div class="alert-success">
			{{ session('notification') }}
		</div>
	@endif

	<table style="width:100%" class="table table-striped table-bordered table-hover">	
		<tr>
			<th>MSV</th>
			<th>Họ và tên</th>
			<th>Giới tính</th>
			<th>Ngày sinh</th>
			<th>Địa chỉ</th>
			<th>Số CMND</th>
			<th>Số điện thoại</th>
			<th>Email</th>
			<th>Phòng</th>
			<th>Giường</th>
			<th>Người thân</th>
			<th>Ngày vào ở</th>
			<th>Xóa</th>
			<th>Sửa</th>
		</tr>

		@foreach($student as $st)
		<tr>
			<td>{{ $st->id }}</td>
			<td>{{ $st->fullname }}</td>
			<td>{{ $st->gender }}</td>
			<td>{{ $st->birthday }}</td>
			<td>{{ $st->address }}</td>
			<td>{{ $st->cmnd}}</td>
			<td>{{ $st->phone }}</td>
			<td>{{ $st->email }}</td>
			<td><a href="students/phong/{{ $st->id_room }}">{{ $st->id_room }}</a></td>
			<td>{{ $st->id_bed }}</td>
			<td><a href="students/nguoithansinhvien/{{ $st->id_relative }}">{{ $st->id_relative }}</a></td>
			<td>{{ $st->start_date }}</td>
			<td><a href="students/deleteStudent/{{ $st->id }}">Xóa</a> </td>
			<td><a href="students/editStudent/{{ $st->id }}">Sửa</a></td>
		</tr>
		@endforeach
	</table>
	</div>

@endsection

{{-- Khi sinh viên đăng kí thì mình nhận được mail thông báo có sinh viên mới đăng kí
	Rồi nó cũng tự động gửi cho sinh viên một cái mail để xác nhận với sinh viên  --}}