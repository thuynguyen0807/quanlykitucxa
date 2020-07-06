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
	
		@include('user.layouts.header')
        @yield('TrangChu')
		@yield('ThongTin')
        @yield('NguoiThan')
		@yield('SuaNguoiThan')
		@yield('SuaThongTin')
		@include('user.layouts.footer')
</body>
</html>