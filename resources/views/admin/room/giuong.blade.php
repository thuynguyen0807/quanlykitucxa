@extends('admin.layouts.index')
@section('Bed')
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
	<h3 class="sub-tieude" style="color: black;">GIƯỜNG</h3>

	<table style="width:40%; margin: 0 auto;" class="table table-striped table-bordered table-hover">
		<tr>
			<th>Mã giường</th>
			<th>Phòng</th>
		</tr>
		
		<tr>
			<td>{{ $bed->id }}</td>		
			<td>{{ $bed->id_room }}</td>
		</tr>

	</table>
	</div>
</body>
</html>
@endsection
