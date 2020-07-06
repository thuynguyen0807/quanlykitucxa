		
	 <!DOCTYPE html>
	 <html lang="en">
	 <head>
	 	<meta charset="UTF-8">
	 	<title>Hóa đơn điện nước - Kí túc xá trường Cao đẳng Công nghệ thông tin-ĐHĐN</title>
	 	 <style type="text/css">

			/*table, th, td {
				border: 1px solid black;
	  			border-collapse: collapse;
			}
			th {
				padding: 10px;
			}*/
			body {
    			font-family: DejaVu Sans;
			}

		</style> 
	 	
	 </head>
	 <body>
	 	<div class="form" style="width: 100%; margin-left: 200px;">
		<h3 style="color: blue; margin-left: 80px;">Hóa đơn điện nước</h3>
		<div class="container" style="margin-top: 20px;">
			<p>Phòng: {{ $diennuoc->id_room }}<br>Mã hóa đơn: {{ $diennuoc->id }}</p>
			<p></p>
			<table width="70%">
			<tr style="text-align: left;">
				<th>Tên mục</th>
				<th>Điện</th>
				<th>Nước</th>
			</tr>
			
			<tr>
				<td><b>Chỉ số đầu</b></td>
				<td>{{ $diennuoc->chi_so_dien_dau }}</td>
				<td>{{ $diennuoc->chi_so_nuoc_dau }}</td>
			</tr>
			<tr>
				<td><b>Chỉ số cuối</b></td>
				<td>{{ $diennuoc->sodiencuoi }}</td>
				<td>{{ $diennuoc->sonuoccuoi }}</td>
			</tr>
			<tr>
				<td><b>Tiêu thụ</b></td>
				<td>{{ $diennuoc->sodiencuoi - $diennuoc->chi_so_dien_dau }}</td>
				<td>{{ $diennuoc->sonuoccuoi - $diennuoc->chi_so_nuoc_dau }}</td>
			</tr>
			<tr>
				<td><b>Giá</b></td>
				<td>{{ $diennuoc->giadien }}/kW</td>
				<td>{{ $diennuoc->gianuoc }}/khối</td>
			</tr>
			<tr>
				<td><b>Thành tiền</b></td>
				<td>{{ $diennuoc->tiendien }}VNĐ</td>
				<td>{{ $diennuoc->tiennuoc }}VNĐ</td>
			</tr>
			<tr>
				<td><b>Tổng tiền</b></td>
				<td colspan="2">{{ $diennuoc->tiendien + $diennuoc->tiennuoc }}VNĐ</td>
			</tr>
			</table> <br>
			<p style="margin-left: 120px;">Đà Nẵng, {{ $ngaynop }} </p>
			<div class="row">
				<div class="col-md-3">
					<p><b>Người nộp tiền</b><br><i style="font-size: 11">(Kí và ghi rõ họ tên)</i></p>
				</div>

				<div class="col-md-3" style="margin-left: 200px; margin-top: -80px;">
					<p><b>Thủ quỹ</b><br><i style="font-size: 11">(Kí và ghi rõ họ tên)</i></p>
				</div>
			</div>
			<br><br><br>
			<p style="font-style: italic; font-size: 13px;">Kí túc xá Trường Cao đẳng Công nghệ thông tin - ĐHĐN<br>Đ. Nam Kì Khởi Nghĩa - Q. Ngũ Hành Sơn - TP. Đà Nẵng</p>
			
	</div>
</div>


	 	
	 </body>
	 </html>
	