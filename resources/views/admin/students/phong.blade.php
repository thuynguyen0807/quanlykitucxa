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
	<h3 class="sub-tieude" style="color: black;">PHÒNG</h3>

	<table style="width:100%" class="table table-striped table-bordered table-hover">
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
	

		
		<tr>
			<td rowspan="9">{{ $room->id }}</td>
			<td rowspan="9">{{ $room->category_room }}</td>
			<td rowspan="9">{{ $room->number_student }}</td>
			<td rowspan="9">{{ $room->current_student }}</td>
			<td rowspan="9">{{ $room->equipment }}</td>
			<td rowspan="9">{{ $room->room_price }}</td>
			<td rowspan="9"><a href="editRoom/{{ $room->id }}">Sửa</a></td>
			<td rowspan="9"><a href="deleteRoom/{{ $room->id }}">Xóa</a></td>
		</tr>

		@foreach($beds as $bed)
		@if($bed->id_room == $room->id)
		<tr>
			<td id="bed"><a href="giuong/{{ $bed->id }}">{{ $bed->id }}</a></td>
		</tr>	
		@endif	
		@endforeach		
		
	</table>
	</div>
</body>
</html>
@endsection