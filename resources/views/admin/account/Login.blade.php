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
	<style type="text/css">
		.form {
			border: 2px solid #999696;
			border-radius: 5px;
			background-color: #EFEEEE;
			margin-left: 430px;
			margin-right: 430px;
			margin-top: 30px;
			padding: 20px;
		}
	</style>
</head>
<body>
	<div>
		<h3 class="sub-tieude" style="color: black;">ĐĂNG NHẬP QUẢN TRỊ VIÊN</h3>
		<div class="form">
			@if(count($errors)>0) 
			<div class="alert alert-danger">
				@foreach($errors->all() as $err)
					{{ $err }} <br>
				@endforeach
			</div>
			@endif

			@if(session('notification'))
				<div class="alert-danger">
					{{ session('notification') }}
				</div>
			@endif


			<form action="{{ url('admin/dangnhap') }}" method="post">
				@csrf
				<div class="row">
					<div class="col-md-4">
						<p style="margin-top: 5px;"><b>Tên đăng nhập<span style="color: red;">*</span></b></p> <br>
						<p style="margin-top: 3px;"><b>Mật khẩu<span style="color: red;">*</span></b></p>
					</div>

					<div class="col-md-5">
						<input class="form-control" type="text" name="login_name" placeholder="Tên đăng nhập" style="width: 200px;"> <br>
						<input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu" style="width: 200px;"> <br>
					</div>
					
				</div>

				<div style="margin-left: 130px; margin-bottom: ">
					<input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng nhập" style="width: 100px;">
					<input class="btn btn-primary" type="reset" name="huy" value="Hủy" style="width: 100px;">
				</div>

			</form>
		</div>
	</div>
	</body>