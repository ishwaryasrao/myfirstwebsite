<!doctype html>
<html>


<head>
</head>
<body>
<h1> hi Ishu</h1>
 <pre>
<?php
print_r($all_Users)
?>
</pre>
{{ Form::open(array('url' => 'Users/auth')) }}
{{ Form::email('email') }}
{{ Form::password('password') }}
{{ Form::password('confirm_password') }}
<input type="submit" name="login" value="Login">
<input type="submit" name="register" value="Register">
{{ Form::close() }}
</body>
</html>