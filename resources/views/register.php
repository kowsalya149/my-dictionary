<!DOCTYPE html>
<html>
<body>

<h2>Register </h2>
	
<form action="/doRegister" method="post">
  First name:<br>
  <input type="text" name="firstname" />
  <br>
  Last name:<br>
  <input type="text" name="lastname" />
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