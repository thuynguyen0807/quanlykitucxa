@if(count($errors) > 0)
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss = 'alert'>x</button>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>

		@endforeach
	</ul>

</div>
@endif

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss='alert'>x</button>
	<strong>{{ $message }}</strong>
</div>


@endif

<form method="POST" action="{{ url('sendemail/send') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>Họ và tên: </label>
		<input type="text" name="name" class="form-control" placeholder="Vui lòng nhập họ và tên đầy đủ" />
	</div>
	<div class="form-group">
		<label>Email:</label>
		<input type="text" name="email" class="form-control"/ placeholder="Vui lòng nhập email của bạn">
	</div>
	<div class="form-group">
		<label>Thông báo</label>
		<textarea name="message" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="send" value="Send Email" class="btn btn-info"/>
		
	</div>

</form>