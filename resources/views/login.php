<!DOCTYPE html>
<html>
<body>

<h2>Login </h2>
	
<form action="/validateLogin" method="post">
  Username:<br>
  <input type="text" name="firstname" />
  <br>
  Password:<br>
  <input type="password" name="password" />
  <br>
  <br>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="<?=csrf_token();?>" />
</form> 

</body>
</html>