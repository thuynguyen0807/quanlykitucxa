@extends('admin.layouts.index')
@section('RoomList')

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
	<h3 class="sub-tieude" style="color: black;">DANH SÁCH PHÒNG</h3>
	
	<div>
		<a href="room/addRoom"><input class="btn btn-primary" type="button" name="add" value="Thêm" style="width: 100px;"></a>
		<br><br>
	</div>
	
	@if(session('notification'))
		<div class="alert-success">
			{{ session('notification') }}
		</div>
	@endif

	<table style="width:100%" class="table table-striped table-bordered table-hover" >
		<thead>
			<tr>
				<th>Mã phòng</th>
				<th>Loại phòng</th>
				<th>SLSV </th>
				<th>SLSV hiện tại</th>			
				<th>Thiết bị</th>
				<th>Giá phòng</th>
				<th>Sửa</th>
				<th>Xóa</th>
				<th>Giường</th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($room as $r)
				<tr>
					<td rowspan="9" id="room">{{ $r->id }}</td>
					<td rowspan="9">{{ $r->category_room }}</td>
					<td rowspan="9">{{ $r->number_student }}</td>
					<td rowspan="9">{{ $r->current_student }}</td>				
					<td rowspan="9">{{ $r->equipment }}</td>
					<td rowspan="9">{{ $r->room_price }}</td>
					<td rowspan="9"><a href="room/editRoom/{{ $r->id }}">Sửa</a></td>
					<td rowspan="9"><a href="room/deleteRoom/{{ $r->id }}">Xóa</a></td>
					@foreach($beds as $bed)
						@if($bed->id_room == $r->id)
						<tr>
							<td id="bed"><a href="room/bed/{{ $bed->id }}">{{ $bed->id }}</a></td>
						</tr>	
						@endif	
					@endforeach 
				</tr>		
			@endforeach
		</tbody>
	</table>
	</div>
</body>
</html>
@endsection
