@extends('admin.layouts.index')
@section('PriceList')
<style type="text/css">
	table, th, td {
		border: 1px solid black;
  		border-collapse: collapse;
  		text-align: center;
	}
	th {
		padding: 10px;
	}
</style>
<h3 class="sub-tieude" style="color: black;">BẢNG GIÁ</h3>
<div style="margin-left: 250px; margin-top: 20px;">
<table style="width: 80%">
	<tr>
		<th rowspan="2">STT</th>
		<th colspan="5">Giá Phòng</th>
		<th rowspan="2">Giá điện</th>
		<th rowspan="2">Giá nước</th>
	</tr>
	<tr>
		<td style="font-weight: bold;">Tầng 1</td>
		<td style="font-weight: bold;">Tầng 2</td>
		<td style="font-weight: bold;">Tầng 3</td>
		<td style="font-weight: bold;">Tầng 4</td>
		<td style="font-weight: bold;">Tầng 5</td>
	</tr>
	<tr>
		<td>1</td>
		<td>130 000đ/tháng</td>
		<td>120 000đ/tháng</td>
		<td>120 000đ/tháng</td>
		<td>110 000đ/tháng</td>
		<td>110 000đ/tháng</td>
		<td>1200đ/KW</td>
		<td>5000đ/Khối</td>
	</tr>
</table>
</div>
@endsection