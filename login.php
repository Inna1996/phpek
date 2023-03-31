<?php 
require_once('./app/controller/UserController.php');
use App\Controller\UserController;
$email="";
if(isset($_POST['email'])) {
  $controller = new UserController();
  $email = $_POST['email'];
  $password = $_POST['password'];
  $_POST=[];
  header('location:profile.php');
}
include('./template/navbar.php'); 
?>
<div class="m-3">
<h1>Login</h1>
<?=$email?>
<div class="card flex m-5 p-5 bg-secondary bg-opacity-10">
<form method="post" class="">
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>