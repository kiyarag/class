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
        <div class="col-sm-12"><h4>Login Info</h4>
          <?php
          $username = $_POST["username"];
          $password = $_POST["password"];
          $term = "";
            if (isset($_POST["remember"])) {
              $term = $_POST["remember"];
            }
          ?>
          <div class="table-responsive">
            <table class="table table-dark table-bordered" style="width:100%;">
              <thead><tr><th>Username</th><th>Password</th><th>Remember me</th></tr></thead>
              <tbody>
                <tr><td><?php echo $username ?></td><td><?php echo $password ?></td><td><?php echo $term ?></td></tr>                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
