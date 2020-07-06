<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ban quan ly ki tuc xa SICT - UDN</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/trangchu.css') }}">


	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	
		@include('admin.layouts.header')
		@yield('TrangChu')
		@yield('DonDangKi')
		@yield('HoaDon')
		@yield('AddStudent')
		@yield('StudentList')
		@yield('StudentEdit')
		@yield('AddRoom')
		@yield('RoomEdit')
		@yield('RoomList')
		@yield('AddRelative')
		@yield('RelativeEdit')
		@yield('RelativeList')
		@yield('AddEquipment')
		@yield('EquipmentEdit')
		@yield('EquipmentList')
		@yield('AddEmployment')
		@yield('EmploymentEdit')
		@yield('EmploymentList')
		@yield('PriceList')
		@yield('NguoiThan')
		@yield('SinhVien')
		@yield('DanhSachDienNuoc')
		@yield('NhapSoDienNuoc')
		@yield('addBed')
		@yield('BedList')
		@yield('Bed')
		@yield('Script1')
		@yield('Script2')
		@include('admin.layouts.footer')
</body>
</html>