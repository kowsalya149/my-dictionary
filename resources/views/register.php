<!DOCTYPE html>
<html>
<body>

<h2>Register </h2>
	
<!--<form action="/doRegister" method="post">
  First name:<br>
  <input type="text" name="firstname" value="<?= $customer['firstname']?>"/>
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?= $customer['lastname']?>"/>
  <br>
  Password:<br>
  <input type="password" name="password" value="<?= $customer['password']?>"/>
  <br>
  <br>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="<?=csrf_token();?>" />
</form>-->

<form action="/doRegister" method="post">
  First name:<br>
  <input type="text" name="firstname" value="<?= $customer->firstname?>"/>
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="<?= $customer->lastname?>"/>
  <br>
  Password:<br>
  <input type="password" name="password" value="<?= $customer->password?>"/>
  <br>
  <br>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="<?=csrf_token();?>" />
</form>
</body>
</html>