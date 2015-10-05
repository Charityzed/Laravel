<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/javascript" src="/js/bootstrap.min.js"></style>

	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>

{{ Form::open(array('class' => 'Form', 'url'=>'/submit')) }}
<div class="form-group">
	{{Form::label('text', 'SIGN UP FORM', array('class'=>'form-control'));

	}}
	<br>
    <div class="form-control">
	{{Form::label('fname', 'FIRST NAME:', array('class'=>'form-control'));}}
	{{Form::text('fname', '');}}
</div>

	<br>
    <div class="form-control">
	{{Form::label('lname', 'LAST NAME:', array('class'=>'form-control'));}}
	{{Form::text('lname', '');}}
        </div>
	<br>
    <div class="form-control">
	{{Form::label('email', 'EMAIL ADDRESS', array('class'=>'form-control'));}}
	{{Form::text('email', '', array('class'=>'form-control input-md'));}}
        </div>
    <div class="form-control">
        {{Form::label('password', 'PASSWORD', array('class'=>'form-control'));}}
        {{Form::password('password', '', array('class'=>'form-control input-md'));}}
    </div>
	<br>
    <div class="form-control">
	{{ Form::submit('SUBMIT');}}
        </div>
        <div class="form-control">
	{{ Form::submit('CANCEL');}}
        </div>

</div>
{{ Form::close() }}
</body>
</html>
