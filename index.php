<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Registration ::</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">.table td, .table th{ font-size:14px; }</style>
  </head>
  <body class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-4"><h4>Login</h4>
          <form method="POST" class="bg-white border p-4 mt-3" action="login.php">
            <div class="form-group"><label>Username</label><input type="text" name="username" class="form-control"></div>
            <div class="form-group"><label>Password</label><input type="password" name="password" class="form-control"></div>
            <div class="form-group"><label><input type="checkbox" name="remember"> Remember me </label></div>
            <hr>
            <input type="submit" value="Login" name="submit" class="btn btn-success">
          </form>
        </div>
        <div class="col-sm-8" style="padding-left:50px;"><h4>Register</h4>
          <form method="POST" class="bg-white border p-4 mt-3" action="register.php">
            <div class="row">
            <div class="form-group col-sm-6"><label>Full Name</label><input type="text" name="fname" class="form-control"></div>
            <div class="form-group col-sm-6"><label>Email Address</label><input type="text" name="email" class="form-control"></div>
            <div class="form-group col-sm-6"><label>Phone No.</label><input type="number" name="phone" class="form-control"></div>
            <div class="form-group col-sm-6"><label>Address</label><input type="text" name="address" class="form-control"></div>
            </div>
            <h5 class="mt-0">Gender</h5>
            <div class="float-left pr-3"><label for="rdo1"><input type="radio" name="rdo" id="rdo1"> Male</label></div> 
            <div class="float-left pr-3"><label for="rdo2"><input type="radio" name="rdo" id="rdo2"> Female</label></div> 
            <div class="float-left"><label for="rdo3"><input type="radio" name="rdo" id="rdo3"> Other</label></div> 
            <div class="clearfix"></div>
            <div class="form-group"><label>Message</label><textarea name="message" class="form-control" rows="3"></textarea></div>
            <h5 class="mt-0">How you know about us</h5> 
            <div class="float-left pr-3"><label for="check1"><input type="checkbox" name="check1" id="check1"> Web</label></div> 
            <div class="float-left pr-3"><label for="check2"><input type="checkbox" name="check2" id="check2"> Friends</label></div> 
            <div class="float-left pr-3"><label for="check3"><input type="checkbox" name="check3" id="check3"> News</label></div>  
            <div class="float-left pr-3"><label for="check4"><input type="checkbox" name="check4" id="check4"> News</label></div> 
            <div class="clearfix"></div>
            <hr>
            <input type="submit" name="" value="Register" class="btn btn-success">
          </form>
        </div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
